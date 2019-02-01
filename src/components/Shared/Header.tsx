import React from 'react'
import { Link } from 'react-router-dom'

export default () => (
	<div className="h5 pt5">
		<div className="mw7 center pv3 lato tc f5 dark-gray">
			<h1 className="ma0">
				<img
					width={100}
					height={66}
					className="mb3"
					src={require('images/logo.png')}
					alt="Built by Will"
				/>
			</h1>
			<p className="lh-copy">
				<Link to="/about">Will Grauvogel</Link>
				<br /> Development + Design
			</p>
		</div>
	</div>
)
