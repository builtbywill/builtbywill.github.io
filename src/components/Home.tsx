import React from 'react'
import { Link, RouteComponentProps } from 'react-router-dom'
import Projects from '../data/Projects'
import { FadeInImage } from './Shared/FadeInImage'
import { Header } from './Shared/Header'

const lightBgProjects = ['skyepack', 'hotseat', 'convoy', 'booklet']

export const Home = (props: RouteComponentProps) => (
	<>
		<Header />
		<Link to="/about" className="absolute top-1 right-1 white no-underline bg-black-60 br3 f6 pa2 grow">
			About &raquo;
		</Link>
		<div className="content ovo project-list">
			{Object.values(Projects).map((project, i) => {
				const title = project.title.toLowerCase()
				const pathname = `/projects/${title}`
				return (
					<div
						key={title}
						id={`project-${title}`}
						className={`bg-color-${title}`}
						onClick={
							/* istanbul ignore next */ () => {
								props.history.push(pathname)
							}
						}>
						<div className="project white pt4 bt b--white-10 bg-animate overflow-hidden">
							<div className="mw6p5-nl mw8-l center ph3 cf">
								<div className="fl w-100 w-40-l ph3 pt4-l">
									<h2 className="f2 fw3 mv3">{project.title}</h2>
									<div className={`${lightBgProjects.includes(title) ? 'black' : ''}`}>
										{project.summary}
									</div>
									<Link
										className="dib white no-underline bg-black-60 br3 lato f6 pa2 grow"
										to={pathname}
										aria-label={`See more about ${project.title}`}>
										See More &raquo;
									</Link>
								</div>
								<div className="fl w-100 w-60-l ph3 pt3 pt0-l">
									<FadeInImage
										src={project.cover}
										alt={`${project.title} screenshot`}
										className="v-btm"
									/>
								</div>
							</div>
						</div>
					</div>
				)
			})}
		</div>
	</>
)
