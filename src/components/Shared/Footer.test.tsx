import { shallow } from 'enzyme'
import React from 'react'
import { Footer } from './Footer'

describe('Footer', () => {
	it('renders', () => {
		const wrapper = shallow(<Footer />)
		expect(wrapper).toBeTruthy()
	})
})
