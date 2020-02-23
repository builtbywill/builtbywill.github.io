import React from 'react'
import Helmet from 'react-helmet'
import { Redirect } from 'react-router'
import { Project as ProjectType } from '../types/Project'
import { BackLink } from './Shared/BackLink'
import { FadeInImage } from './Shared/FadeInImage'

export interface ProjectProps {
	project?: ProjectType
}

export const Project = (props: ProjectProps) => {
	const { project } = props
	if (!project) {
		return <Redirect to="/not-found" />
	}
	return (
		<>
			<Helmet title={project.title} />
			<div className={`pv1 bg-color-${project.title.toLowerCase()}`}>
				<div className="mw7 center pv3 lato tc f5 dark-gray">
					<img className="logo-small" src={require('../images/logo.png')} alt="Built by Will" />
					<h1 className="white f1 fw3 mv3">{project.title}</h1>
					{!!project.url && (
						<a
							className="dib white no-underline bg-black-60 br3 f6 pa2 grow"
							href={project.url}
							target="_blank"
							rel="noopener noreferrer">
							Visit Website &raquo;
						</a>
					)}
				</div>
				<BackLink />
			</div>
			<div className="content ovo">
				<div className="white bg-darker-gray white pv4 bt b--white-10 bg-animate">
					<div className="mw8 center cf">
						<div className="fl w-100 w-60-l ph3">
							<h2 className="f2 mt0 mb3">About</h2>
							{project.summary}
							{project.description}
						</div>
						<div className="fl w-100 w-40-l ph3">
							<h2 className="mt0 mb2">Roles</h2>
							{project.roles}
							{project.areas.map((area, i) => (
								<div key={i}>
									<h3>{area.name} Technologies</h3>
									<h4 className="mv3">
										{area.tech.map((tech, j) => (
											<span
												key={j}
												className={`br3 dib pa2 mr2 mb2 ${area.name.toLowerCase()}-tech`}>
												{tech}
											</span>
										))}
									</h4>
								</div>
							))}
							<div className="cf">
								<div className="fl w-100 w-50-ns pa0">
									<h2 className="mt0 mb2">For</h2>
									<p>{project.for}</p>
								</div>
								<div className="fl w-100 w-50-ns pa0">
									<h2 className="mt0 mb2">Dates</h2>
									<p>{project.dates}</p>
								</div>
							</div>
						</div>
					</div>
					{project.images.map((image, key) => (
						<div className="mw8 center" key={key}>
							<h2 className="tc mt5 mb4">{image.description}</h2>
							<FadeInImage src={image.src} alt={image.description} />
						</div>
					))}
				</div>
			</div>
		</>
	)
}
