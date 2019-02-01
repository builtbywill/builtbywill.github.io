import React from 'react'
import { Link, RouteComponentProps } from 'react-router-dom'
import Projects from '../data/Projects'
import FadeInImage from './Shared/FadeInImage'
import Header from './Shared/Header'

const lightBgProjects = ['skyepack', 'hotseat', 'convoy', 'booklet']

export default (props: RouteComponentProps) => (
	<>
		<Header />
		<div className="content ovo project-list">
			{Object.values(Projects).map((project, i) => (
				<div
					key={i}
					className={`bg-color-${project.title.toLowerCase()}`}
					onClick={() => props.history.push(`/projects/${project.title.toLowerCase()}`)}>
					<div className="project white pt-5 bt b--white-10 bg-animate overflow-hidden">
						<div className="mw8 center ph3 cf">
							<div className="fl w-100 w-40-m w-40-l ph3">
								<h2 className="f1 fw3 mb3">{project.title}</h2>
								<div
									className={`${
										lightBgProjects.indexOf(project.title.toLowerCase()) > -1
											? ' black-80'
											: ''
									}`}>
									{project.summary}
								</div>
								<Link
									className="dib white no-underline bg-black-60 br3 lato f6 pa2 grow"
									to={`/projects/${project.title.toLowerCase()}`}
									aria-label={`See more about ${project.title}`}>
									See More &raquo;
								</Link>
							</div>
							<div className="fl w-100 w-60-m w-60-l ph3">
								<FadeInImage
									src={project.cover}
									alt={`${project.title} screenshot`}
									className="v-btm"
								/>
							</div>
						</div>
					</div>
				</div>
			))}
		</div>
	</>
)
