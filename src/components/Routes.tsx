import React from 'react'
import { Route, Switch } from 'react-router-dom'
import Projects from '../data/Projects'
import About from './About'
import Home from './Home'
import NotFound from './NotFound'
import Project from './Project'

export default () => (
	<Switch>
		<Route exact path="/" component={Home} />
		<Route exact path="/about" component={About} />
		<Route
			exact
			path="/projects/:title"
			render={props => {
				return <Project project={Projects[props.match.params.title]} {...props} />
			}}
		/>
		<Route exact path="/not-found" component={NotFound} />
		<Route component={NotFound} />
	</Switch>
)
