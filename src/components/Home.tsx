import React from 'react'
import { Link, RouteComponentProps } from 'react-router-dom'
import Projects from '../data/Projects'
import FadeInImage from './Shared/FadeInImage'
import Header from './Shared/Header'

const lightBgProjects = ['skyepack', 'hotseat', 'convoy', 'booklet']

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
						<div className="mw7 center ph3">
							<div className="cf">
								<div className="fl w-100 w-40-m">
									<h2 className="f2">{project.title}</h2>
									<div
										className={`${
											lightBgProjects.indexOf(project.title.toLowerCase()) >
											-1
												? ' black-80'
												: ''
										}`}>
										{project.summary}
									</div>
									<Link
										className="white no-underline bg-black-60 br3 f6 pa2 grow"
										to={`/projects/${project.title.toLowerCase()}`}
										aria-label={`See more about ${project.title}`}>
										See More &raquo;
									</Link>
								</div>
								<div className="fl w-100 w-60-m">
									<FadeInImage
										src={project.cover}
										alt={`${project.title} screenshot`}
									/>
								</div>
							</div>
						</div>
					</div>
				</div>
			))}
		</div>
	</>
)
