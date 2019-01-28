import { IArea } from './IArea'
import { IImage } from './IImage'

export interface IProject {
	title: string
	for: string
	summary: any
	description: any
	dates: string
	url: string
	roles: any
	color: string
	loader: string
	cover: string
	areas: IArea[]
	images: IImage[]
}
