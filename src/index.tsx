import * as history from 'history'
import React from 'react'
import ReactDOM from 'react-dom'
import ga from 'react-ga4'
import { Router } from 'react-router-dom'
import '../node_modules/tachyons/css/tachyons.min.css'
import App from './components/App'
import './css/fonts.css'
import './css/index.css'
import * as serviceWorker from './utils/serviceWorker'

// pollyfills
import 'core-js'

// Google Analytics
const GOOGLE_ANALYTICS_TRACKING_ID = 'G-74F1W3WHLB'
ga.initialize(GOOGLE_ANALYTICS_TRACKING_ID)

// track initial page
ga.send({ hitType: 'pageview', page: window.location.pathname })

const browserHistory = history.createBrowserHistory()
browserHistory.listen(location => {
	// send pageview to Google Analytics
	ga.send({ hitType: 'pageview', page: window.location.pathname })
})

ReactDOM.render(
	<Router history={browserHistory}>
		<App />
	</Router>,
	document.getElementById('root')
)

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.unregister()
