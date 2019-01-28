import React from 'react'
import { Col, Grid, Row } from 'react-bootstrap'
import Helmet from 'react-helmet'
import { Link } from 'react-router-dom'
import { IProject } from '../types/IProject'
import FadeInImage from './FadeInImage'

interface IProps {
	project: IProject
}

export default (props: IProps) => {
	const { project } = props
	return (
		<>
			<Helmet title={project.title} />
			<div className="carousel carousel-project" style={{ backgroundColor: project.color }}>
				<Grid className="layout-single-column">
					<div className="carousel-caption">
						<img
							className="logo-small"
							src={require('images/logo.png')}
							alt="Built by Will"
						/>
						<h1 className="type-jumbo">{project.title}</h1>
						<a className="btn btn-default" href={project.url} target="_blank">
							Visit Website <span className="glyphicon glyphicon-chevron-right" />
						</a>
					</div>
				</Grid>
				<Link to="/" className="btn btn-default link-back">
					<span className="glyphicon glyphicon-chevron-left" /> Back
				</Link>
			</div>
			<div className="content">
				<Row>
					<Grid>
						<Col md={7}>
							<h2 className="type-larger">About</h2>
							{project.summary}
							{project.description}
						</Col>
						<Col md={5}>
							<h2>Roles</h2>
							{project.roles}
							{project.areas.map((area, i) => (
								<div key={i}>
									<h3>{area.name} Technologies</h3>
									<p>{area.text}</p>
									<h4>
										{area.tech.map((tech, j) => (
											<span key={j} className={`label label-${area.label}`}>
												{tech}
											</span>
										))}
									</h4>
								</div>
							))}
							<div>
								<Col md={6} className="no-pad">
									<h2>For</h2>
									<p>{project.for}</p>
								</Col>
								<Col md={6} className="no-pad">
									<h2>Dates</h2>
									<p>{project.dates}</p>
								</Col>
							</div>
						</Col>
					</Grid>
					{project.images.map((image, key) => (
						<Grid className="container-image" key={key}>
							<h2 className="text-center">{image.description}</h2>
							<FadeInImage src={image.src} alt={image.description} />
						</Grid>
					))}
				</Row>
			</div>
		</>
	)
}
