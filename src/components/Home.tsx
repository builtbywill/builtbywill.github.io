import React from 'react'
import { Col, Grid, Row } from 'react-bootstrap'
import { Link, RouteComponentProps } from 'react-router-dom'
import Projects from '../data/Projects'
import FadeInImage from './Shared/FadeInImage'
import Header from './Shared/Header'

export default (props: RouteComponentProps) => (
	<>
		<Header />
		<div className="content project-list">
			{Object.values(Projects).map((project, i) => (
				<div
					key={i}
					style={{ backgroundColor: project.color }}
					onClick={() => props.history.push(`/projects/${project.title.toLowerCase()}`)}>
					<Row>
						<Grid>
							<Col md={5}>
								<h2 className="type-largest">{project.title}</h2>
								<div>{project.summary}</div>
								<Link
									className="btn btn-default"
									to={`/projects/${project.title.toLowerCase()}`}
									aria-label={`See more about ${project.title}`}>
									See More <span className="glyphicon glyphicon-chevron-right" />
								</Link>
							</Col>
							<Col md={7}>
								<FadeInImage
									src={project.cover}
									alt={`${project.title} screenshot`}
								/>
							</Col>
						</Grid>
					</Row>
				</div>
			))}
		</div>
	</>
)
