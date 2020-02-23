import { shallow } from 'enzyme'
import React from 'react'
import { Header } from './Header'

describe('Header', () => {
	it('renders', () => {
		const wrapper = shallow(<Header />)
		expect(wrapper).toBeTruthy()
	})
})
