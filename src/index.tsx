import React from 'react'
import ReactDOM from 'react-dom'
import '../node_modules/tachyons/css/tachyons.min.css'
import App from './components/App'
import './css/index.css'
import * as serviceWorker from './utils/serviceWorker'

// pollyfills
// import 'core-js/fn/array/entries'
// import 'core-js/fn/array/find-index'
// import 'core-js/fn/array/includes'
// import 'core-js/fn/string/pad-end'
// import 'core-js/fn/string/pad-start'

ReactDOM.render(<App />, document.getElementById('root'))

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.unregister()
