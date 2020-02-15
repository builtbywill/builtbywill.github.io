import { Area } from './Area'
import { Image } from './Image'

export interface Project {
	title: string
	for: string
	summary: any
	description: any
	dates: string
	url: string | undefined
	roles: any
	cover: any
	areas: Area[]
	images: Image[]
}
