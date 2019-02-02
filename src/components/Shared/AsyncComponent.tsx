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

		private hasMounted = false

		constructor(props: any) {
			super(props)
			this.state = {
				component: null,
			}
			this.hasMounted = false
		}

		public async componentDidMount() {
			this.hasMounted = true
			const { default: component } = await importComponent()
			// component may have unmounted while awaiting importComponent()
			if (!this.hasMounted) {
				return
			}
			this.setState({
				component,
			})
		}

		public componentWillUnmount() {
			this.hasMounted = false
		}

		public render() {
			const ImportedComponent = this.state.component
			return ImportedComponent ? <ImportedComponent {...this.props} /> : <div />
		}
	}
}
