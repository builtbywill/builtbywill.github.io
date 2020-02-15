import React, { Component } from 'react'
import LazyLoad from 'react-lazy-load'
import Loader from 'react-loader-spinner'
import { IDictionary } from '../../types/IDictionary'

interface IState {
	isLoaded: boolean
}

interface IProps extends React.ImgHTMLAttributes<HTMLImageElement> {
	alt: string
	src: string
}

const loadedImages: IDictionary<boolean> = {}

export default class FadeInImage extends Component<IProps, Readonly<IState>> {
	public state = {
		isLoaded: loadedImages[this.props.src],
	}

	public onLoad = () => {
		loadedImages[this.props.src] = true
		this.setState(() => ({ isLoaded: true }))
	}

	public render() {
		const { className, ...props } = this.props
		const { isLoaded } = this.state
		return (
			<>
				{!isLoaded && (
					<div className="image image-placeholder">
						<Loader type="Oval" color="#fff" height={32} width={32} />
					</div>
				)}
				<LazyLoad debounce={false} offsetVertical={250}>
					<img
						{...props}
						className={`image ${isLoaded ? 'image-loaded' : 'image-loading'}${
							!!className ? ` ${className}` : ''
						}`}
						onLoad={this.onLoad}
						alt=""
					/>
				</LazyLoad>
			</>
		)
	}
}
