import { shallow } from 'enzyme'
import React from 'react'
import { About } from './About'

describe('About', () => {
	it('renders', () => {
		const wrapper = shallow(<About />)
		expect(wrapper).toBeTruthy()
	})
})
