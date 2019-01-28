import React from 'react'
import { Grid, Row } from 'react-bootstrap'
import { Link } from 'react-router-dom'

export default () => (
	<>
		<div className="carousel">
			<Grid>
				<div className="carousel-caption layout-single-column">
					<img
						className="profile-picture"
						src={require('images/profile-picture.png')}
						alt="Profile Picture"
					/>
					<h1>Will Grauvogel</h1>
					<p>About Me</p>
				</div>
			</Grid>
			<Link to="/" className="btn btn-default link-back link-back-dark">
				<span className="glyphicon glyphicon-chevron-left" /> Back
			</Link>
		</div>
		<div className="content">
			<Row>
				<Grid className="layout-single-column">
					<h2>Hi, I'm Will!</h2>
					<p>
						I work as a developer and designer for{' '}
						<a href="https://purdue.edu/studio" target="_blank">
							Purdue University
						</a>
						, as an independent contractor for{' '}
						<a href="http://skyepack.com" target="_blank">
							Skyepack, LLC
						</a>
						, and also do freelance work.
					</p>
					<p>
						Across all my projects, I touch the full stack of application development
						from architecture and design all the way to front-end interfaces. I am
						passionate about making things that work and doing it the right way.
					</p>
					<p>
						Professionally, I am interested in Design Patterns, DRY and SOLID code,
						Scrum and agile software development, and Minimum Viable/Delightful Product
						(MVP/MDP) driven development. Plus making really cool looking apps.
					</p>
					<p>
						Unprofessionally, I enjoy cooking (LCHF), fitness and lifting, reading,
						board games, video games, and cats.
					</p>
					<h2>Hello, World!</h2>
					<ul className="links">
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
				</Grid>
			</Row>
		</div>
	</>
)
