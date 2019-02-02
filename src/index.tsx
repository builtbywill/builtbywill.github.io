import createHistory from 'history/createBrowserHistory'
import React from 'react'
import ReactDOM from 'react-dom'
import ga from 'react-ga'
import { Router } from 'react-router-dom'
import '../node_modules/tachyons/css/tachyons.min.css'
import App from './components/App'
import './css/fonts.css'
import './css/index.css'
import * as serviceWorker from './utils/serviceWorker'

// pollyfills
import 'core-js/es6/promise'
import 'core-js/fn/object/values'
import 'core-js/fn/promise'

// Google Analytics
const GOOGLE_ANALYTICS_TRACKING_ID = 'UA-5500036-2'
ga.initialize(GOOGLE_ANALYTICS_TRACKING_ID)

// track initial page
ga.pageview(window.location.pathname)

const history = createHistory()
history.listen(location => {
	// send pageview to Google Analytics
	ga.pageview(location.pathname)
})

ReactDOM.render(
	<Router history={history}>
		<App />
	</Router>,
	document.getElementById('root')
)

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.unregister()
