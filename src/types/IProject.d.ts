import { IArea } from './IArea'
import { IImage } from './IImage'

export interface IProject {
	title: string
	for: string
	summary: any
	description: any
	dates: string
	url: string | undefined
	roles: any
	cover: any
	areas: IArea[]
	images: IImage[]
}
