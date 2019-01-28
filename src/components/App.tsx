import React from 'react'
import Helmet from 'react-helmet'
import Footer from './Footer'
import Routes from './Routes'

export default () => (
	<>
		<Helmet
			titleTemplate="Built by Will - %s"
			defaultTitle="Built by Will - Development + Design"
		/>
		<Routes />
		<Footer />
	</>
)
