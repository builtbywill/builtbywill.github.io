import React from 'react'
import Helmet from 'react-helmet'
import BackLink from './Shared/BackLink'
import Header from './Shared/Header'

export default () => (
	<>
		<Helmet title="Page Not Found :(" />
		<BackLink />
		<Header />
		<div className="ovo bg-darker-gray white pv3 pv4-ns">
			<div className="mw7 center ph3">
				<h1>
					Not Found{' '}
					<a
						href="http://www.myinstants.com/instant/the-price-is-right-losing-horn/"
						target="_blank"
						rel="noopener noreferrer"
						style={{ border: 'none', fontWeight: 'bold' }}>
						:(
					</a>
				</h1>
				<p>It looks like the page you were trying to access does not exist. Check the URL and try again!</p>
			</div>
		</div>
	</>
)
