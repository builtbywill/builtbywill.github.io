import React from 'react'
import { Grid } from 'react-bootstrap'
import { Link } from 'react-router-dom'

export default () => (
	<div className="carousel">
		<Grid className="layout-single-column">
			<div className="carousel-caption">
				<h1 className="ma0">
					<img className="logo" src={require('images/logo.png')} alt="Built by Will" />
				</h1>
				<p>
					<Link to="/about">Will Grauvogel</Link>
					<br /> Development + Design
				</p>
			</div>
		</Grid>
	</div>
)
