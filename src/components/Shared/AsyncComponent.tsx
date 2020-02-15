import React, { Component, ComponentType } from 'react'

interface AsyncComponentState<TOwnProps extends {}> {
	component: ComponentType<TOwnProps> | undefined
}

export type AsyncWrappedComponent<TOwnProps extends {}> = () => Promise<{
	default: ComponentType<TOwnProps>
}>

export default function asyncComponent<TOwnProps extends {}>(
	importComponent: AsyncWrappedComponent<TOwnProps>
) {
	return class AsyncComponent extends Component<TOwnProps, AsyncComponentState<TOwnProps>> {
		_isMounted: boolean = false
		constructor(props: TOwnProps) {
			super(props)
			this.state = {
				component: undefined,
			}
		}

		async componentDidMount() {
			this._isMounted = true
			const { default: component } = await importComponent()
			// component may have unmounted while awaiting importComponent()
			if (this._isMounted) {
				this.setState({ component })
			}
		}

		componentWillUnmount() {
			this._isMounted = false
		}

		render() {
			const { component: ImportedComponent } = this.state
			if (!ImportedComponent) {
				return null
			}
			return <ImportedComponent {...this.props} />
		}
	}
}
