import React, { Component } from 'react'
import Helmet from 'react-helmet'
import { RouteComponentProps } from 'react-router'
import { withRouter } from 'react-router-dom'
import { scrollToTop } from '../utils/window'
import { Routes } from './Routes'
import { Footer } from './Shared/Footer'

export class App extends Component<RouteComponentProps> {
	componentDidUpdate(prevProps: RouteComponentProps) {
		const { location: prevLocation } = prevProps
		const { location } = this.props
		if (location.pathname !== prevLocation.pathname) {
			scrollToTop()
		}
	}

	render() {
		return (
			<>
				<Helmet titleTemplate="Built by Will - %s" defaultTitle="Built by Will - Development + Design" />
				<Routes />
				<Footer />
			</>
		)
	}
}

export default withRouter(App)
