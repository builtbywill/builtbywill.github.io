import React from 'react'
import { Link } from 'react-router-dom'

export default () => (
	<div className="bg-lightish-gray shadow-inset-light-gray">
		<div className="mw7 center ph3 pt4 pb5">
			<p className="lato tc b f6 tracked-tight mid-gray">
				&copy; 2010 - {new Date().getFullYear()}
				<br />
				<Link to="/" className="dib bn grow">
					<img className="logo mt2" src={require('../../images/logo-footer.png')} alt="Built by Will" />
				</Link>
			</p>
		</div>
	</div>
)
