import React, { useState } from 'react'
import LazyLoad from 'react-lazyload'
import Loader from 'react-loader-spinner'
import { Dictionary } from '../../types/Dictionary'

interface FadeInImageProps extends React.ImgHTMLAttributes<HTMLImageElement> {
	alt: string
	src: string
}

// persist whether or not an image has been loaded
const loadedImages: Dictionary<boolean> = {}

export function setImageLoaded(src: string) {
	loadedImages[src] = true
}

export const FadeInImage = (props: FadeInImageProps) => {
	const { className, ...otherProps } = props
	const [isLoaded, setIsLoaded] = useState(loadedImages[props.src])

	// istanbul ignore next: setImageLoaded tested separately
	const onLoad = () => {
		setImageLoaded(props.src)
		setIsLoaded(true)
	}

	return (
		<>
			{!isLoaded && (
				<div className="image image-placeholder">
					<Loader type="Oval" color="#fff" height={32} width={32} />
				</div>
			)}
			<LazyLoad offset={250}>
				<img
					{...otherProps}
					className={`image ${isLoaded ? 'image-loaded' : 'image-loading'}${
						className ? ` ${className}` : ''
					}`}
					onLoad={onLoad}
					alt=""
				/>
			</LazyLoad>
		</>
	)
}
