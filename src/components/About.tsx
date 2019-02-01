import React from 'react'
import BackLink from './Shared/BackLink'

export default () => (
	<>
		<div className="h5 pt4">
			<div className="mw7 center pv3 lato tc f5 dark-gray">
				<img
					width={97}
					height={97}
					src={require('images/profile-picture.png')}
					alt="Profile Picture"
				/>
				<h1 className="ma0 mt3 f3">Will Grauvogel</h1>
				<p className="mt2">About Me</p>
			</div>
			<BackLink />
		</div>
		<div className="ovo bg-darker-gray white pv3 pv4-ns">
			<div className="mw7 center ph3">
				<h2>Hi, I'm Will!</h2>
				<p>
					I am a Lead Application Developer at{' '}
					<a href="https://purdue.edu/studio" target="_blank">
						Purdue University
					</a>
					, an an Independent Contractor for{' '}
					<a href="http://skyepack.com" target="_blank">
						Skyepack, LLC
					</a>
					, and also sometimes do freelance work.
				</p>
				<p>
					I work the full stack of application development from ideation, architecture and
					design, all the way to front-end interfaces. I am passionate about making things
					that work and doing it the right way.
				</p>
				<p>
					Professionally, I am interested in all things code (design patterns, unit
					testing, DRY, SOLID), Scrum and agile software development, and delivering
					Minimum Viable/Delightful Products (MVP/MDP). Plus making really cool looking
					apps. There’s always more to learn!
				</p>
				<p>
					Unprofessionally, I enjoy cooking (and eating), fitness and lifting, reading,
					board games, video games, cats, and communicating exclusively by GIF.
				</p>
				<h2>Hello, World!</h2>
				<ul className="list pa0 lh-copy">
					<li>
						<span className="icon-mail" />
						builtbywill [at] gmail.com
					</li>
					<li>
						<span className="icon-twitter" />
						<a href="http://twitter.com/builtbywill" target="_blank">
							@builtbywill
						</a>
					</li>
					<li>
						<span className="icon-linkedin2" />
						<a href="https://www.linkedin.com/in/willgrauvogel" target="_blank">
							linkedIn
						</a>
					</li>
					<li>
						<span className="icon-link" />
						<a href="https://github.com/builtbywill" target="_blank">
							github
						</a>
					</li>
					<li>
						<span className="icon-link" />
						<a href="http://stackoverflow.com/users/374489/will" target="_blank">
							stackoverflow
						</a>
					</li>
				</ul>
			</div>
		</div>
	</>
)
