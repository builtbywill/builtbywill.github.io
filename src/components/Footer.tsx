import React from 'react'
import { Grid } from 'react-bootstrap'
import { Link } from 'react-router-dom'

export default () => (
	<div className="footer">
		<Grid>
			<p>
				&copy; 2010 - {new Date().getFullYear()}
				<br />
				<Link to="/">
					<img
						className="logo-footer"
						src={require('images/logo-footer.png')}
						alt="Built by Will"
					/>
				</Link>
			</p>
		</Grid>
	</div>
)
