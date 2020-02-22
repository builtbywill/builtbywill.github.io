import React, { Component } from 'react'
import LazyLoad from 'react-lazyload'
import Loader from 'react-loader-spinner'
import { Dictionary } from '../../types/Dictionary'

interface FadeInImageProps extends React.ImgHTMLAttributes<HTMLImageElement> {
	alt: string
	src: string
}

interface FadeInImageState {
	isLoaded: boolean
}

const loadedImages: Dictionary<boolean> = {}

export default class FadeInImage extends Component<FadeInImageProps, Readonly<FadeInImageState>> {
	public state = {
		isLoaded: loadedImages[this.props.src]
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
				<LazyLoad offset={250}>
					<img
						{...props}
						className={`image ${isLoaded ? 'image-loaded' : 'image-loading'}${
							className ? ` ${className}` : ''
						}`}
						onLoad={this.onLoad}
						alt=""
					/>
				</LazyLoad>
			</>
		)
	}
}
