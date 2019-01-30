import React from 'react'
import { Route, Switch } from 'react-router-dom'
import Projects from '../data/Projects'
import About from './About'
import Home from './Home'
import NotFound from './NotFound'
import Project from './Project'

// import AsyncComponent from './Shared/AsyncComponent'
// const Home = AsyncComponent(() => import('./Home'))
// const About = AsyncComponent(() => import('./About'))
// const Project = AsyncComponent(() => import('./Project'))
// const NotFound = AsyncComponent(() => import('./NotFound'))

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
		<Route component={NotFound} />
	</Switch>
)
