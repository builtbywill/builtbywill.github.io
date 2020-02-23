import { shallow } from 'enzyme'
import React from 'react'
import { NotFound } from './NotFound'

describe('NotFound', () => {
	it('renders', () => {
		const wrapper = shallow(<NotFound />)
		expect(wrapper).toBeTruthy()
	})
})
