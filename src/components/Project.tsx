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
			<div className={`pv1 bg-color-${project.title.toLowerCase()}`}>
				<div className="mw7 center pv3 lato tc f5 dark-gray">
					<img
						width={50}
						height={33}
						src={require('images/logo.png')}
						alt="Built by Will"
					/>
					<h1 className="white f1 fw3 mv3">{project.title}</h1>
					<a
						className="dib white no-underline bg-black-60 br3 f6 pa2 grow"
						href={project.url}
						target="_blank">
						Visit Website &raquo;
					</a>
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
