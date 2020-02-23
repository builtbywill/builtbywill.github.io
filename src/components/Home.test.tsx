import { shallow } from 'enzyme'
import React from 'react'
import { RouteComponentProps } from 'react-router'
import { Home } from './Home'

describe('Home', () => {
	it('renders', () => {
		const props = {
			location: {
				pathname: '/'
			}
		} as RouteComponentProps
		const wrapper = shallow(<Home {...props} />)
		expect(wrapper).toBeTruthy()
	})
})
