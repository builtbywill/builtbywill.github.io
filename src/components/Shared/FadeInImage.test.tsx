import { shallow } from 'enzyme'
import React from 'react'
import { FadeInImage, setImageLoaded } from './FadeInImage'

describe('FadeInImage', () => {
	it('renders', () => {
		const wrapper = shallow(<FadeInImage alt="" src="foo.png" />)
		expect(wrapper).toBeTruthy()
	})
	it('passes through props', () => {
		const wrapper = shallow(<FadeInImage alt="" src="foo.png" className="custom-class" />)
		expect(wrapper.find('.custom-class').length).toEqual(1)
	})
	it('adds .image-loading before loaded', () => {
		const wrapper = shallow(<FadeInImage alt="" src="foo.png" />)
		expect(wrapper.find('.image-loading').length).toEqual(1)
	})
	it('adds .image-loaded after loaded', () => {
		setImageLoaded('foo.png')
		const wrapper = shallow(<FadeInImage alt="" src="foo.png" />)
		expect(wrapper.find('.image-loaded').length).toEqual(1)
	})
})
