import React from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter } from 'react-router-dom'
import '../node_modules/tachyons/css/tachyons.min.css'
import App from './components/App'
import './css/fonts.css'
import './css/index.css'
import * as serviceWorker from './utils/serviceWorker'

// pollyfills
import 'core-js/es6/promise'
import 'core-js/fn/object/values'
import 'core-js/fn/promise'

ReactDOM.render(
	<BrowserRouter>
		<App />
	</BrowserRouter>,
	document.getElementById('root')
)

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.unregister()
