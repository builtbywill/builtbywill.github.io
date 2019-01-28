import React, { Component } from 'react'

interface IState {
	component: any
}

const initialState: IState = {
	component: null,
}

export default (importComponent: () => any) => {
	return class AsyncComponent extends Component<any, Readonly<IState>> {
		public readonly state: Readonly<IState> = initialState

		private isMounted = false

		constructor(props: any) {
			super(props)
			this.state = {
				component: null,
			}
			this.isMounted = false
		}

		public async componentDidMount() {
			this.isMounted = true
			const { default: component } = await importComponent()
			// component may have unmounted while awaiting importComponent()
			if (!this.isMounted) {
				return
			}
			this.setState({
				component,
			})
		}

		public componentWillUnmount() {
			this.isMounted = false
		}

		public render() {
			const ImportedComponent = this.state.component
			return ImportedComponent ? <ImportedComponent {...this.props} /> : <div />
		}
	}
}
