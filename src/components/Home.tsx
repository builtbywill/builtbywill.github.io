import React from 'react'
import { Link, RouteComponentProps } from 'react-router-dom'
import Projects from '../data/Projects'
import FadeInImage from './Shared/FadeInImage'
import Header from './Shared/Header'

const lightBgProjects = ['skyepack', 'hotseat']

export default (props: RouteComponentProps) => (
	<>
		<Header />
		<div className="content project-list">
			{Object.values(Projects).map((project, i) => (
				<div
					key={i}
					className={`bg-color-${project.title.toLowerCase()}`}
					onClick={() => props.history.push(`/projects/${project.title.toLowerCase()}`)}>
					<div className="row">
						<div className="container">
							<div className="col-md-5">
								<h2 className="type-largest">{project.title}</h2>
								<div
									className={`${
										lightBgProjects.indexOf(project.title.toLowerCase()) > -1
											? ' color-light-bg'
											: ''
									}`}>
									{project.summary}
								</div>
								<Link
									className="btn btn-default"
									to={`/projects/${project.title.toLowerCase()}`}
									aria-label={`See more about ${project.title}`}>
									See More <span className="glyphicon glyphicon-chevron-right" />
								</Link>
							</div>
							<div className="col-md-7">
								<FadeInImage
									src={project.cover}
									alt={`${project.title} screenshot`}
								/>
							</div>
						</div>
					</div>
				</div>
			))}
		</div>
	</>
)
