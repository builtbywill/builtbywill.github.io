import React from 'react'
import Helmet from 'react-helmet'
import { IProject } from '../types/IProject'
import BackLink from './Shared/BackLink'
import FadeInImage from './Shared/FadeInImage'

interface IProps {
	project: IProject
}

export default (props: IProps) => {
	const { project } = props
	return (
		<>
			<Helmet title={project.title} />
			<div className={`carousel carousel-project bg-color-${project.title.toLowerCase()}`}>
				<div className="mw7 center ph3">
					<div className="carousel-caption">
						<img
							className="logo-small"
							src={require('images/logo.png')}
							alt="Built by Will"
						/>
						<h1 className="f1">{project.title}</h1>
						<a className="btn btn-default" href={project.url} target="_blank">
							Visit Website <span className="glyphicon glyphicon-chevron-right" />
						</a>
					</div>
				</div>
				<BackLink />
			</div>
			<div className="content">
				<div className="row">
					<div>
						<div className="col-md-7">
							<h2 className="f2">About</h2>
							{project.summary}
							{project.description}
						</div>
						<div className="col-md-5">
							<h2>Roles</h2>
							{project.roles}
							{project.areas.map((area, i) => (
								<div key={i}>
									<h3>{area.name} Technologies</h3>
									<h4>
										{area.tech.map((tech, j) => (
											<span
												key={j}
												className={`label ${area.name.toLowerCase()}-tech`}>
												{tech}
											</span>
										))}
									</h4>
								</div>
							))}
							<div>
								<div className="col-md-6 pa0">
									<h2>For</h2>
									<p>{project.for}</p>
								</div>
								<div className="col-md-6 pa0">
									<h2>Dates</h2>
									<p>{project.dates}</p>
								</div>
							</div>
						</div>
					</div>
					{project.images.map((image, key) => (
						<div className="container container-image" key={key}>
							<h2 className="text-center">{image.description}</h2>
							<FadeInImage src={image.src} alt={image.description} />
						</div>
					))}
				</div>
			</div>
		</>
	)
}
