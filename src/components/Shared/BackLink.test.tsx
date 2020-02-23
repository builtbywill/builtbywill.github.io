import { shallow } from 'enzyme'
import React from 'react'
import { BackLink } from './BackLink'

describe('BackLink', () => {
	it('renders', () => {
		const wrapper = shallow(<BackLink />)
		expect(wrapper).toBeTruthy()
	})
})
