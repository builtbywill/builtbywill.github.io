import React from 'react'
import { Grid, Row } from 'react-bootstrap'
import Helmet from 'react-helmet'
import { Link } from 'react-router-dom'
import Header from './Header'

export default () => (
	<>
		<Helmet title="Page Not Found :(" />
		<Link to="/" className="btn btn-default link-back link-back-dark">
			<span className="glyphicon glyphicon-chevron-left" /> Home
		</Link>
		<Header />
		<div className="content">
			<Row>
				<Grid className="layout-single-column">
					<h1>
						Not Found{' '}
						<a
							href="http://www.myinstants.com/instant/the-price-is-right-losing-horn/"
							target="_blank"
							style={{ border: 'none', fontWeight: 'bold' }}>
							:(
						</a>
					</h1>
					<p>
						It looks like the page you were trying to access does not exist. Check the
						URL and try again!
					</p>
				</Grid>
			</Row>
		</div>
	</>
)
