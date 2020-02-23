import { shallow } from 'enzyme'
import React from 'react'
import { RouteComponentProps } from 'react-router'
import { scrollToTop } from '../utils/window'
import { App } from './App'

jest.mock('../utils/window', () => {
	return {
		scrollToTop: jest.fn()
	}
})

const props = {
	location: {
		pathname: '/'
	}
} as RouteComponentProps

describe('App', () => {
	it('renders', () => {
		const wrapper = shallow(<App {...props} />)
		expect(wrapper).toBeTruthy()
	})
	it('calls scrollToTop when pathname changes', () => {
		const wrapper = shallow(<App {...props} />)
		expect(scrollToTop).toHaveBeenCalledTimes(0)
		wrapper.setProps({
			location: {
				pathname: '/about'
			}
		})
		expect(scrollToTop).toHaveBeenCalledTimes(1)
	})
	it('does not call scrollToTop when other props change', () => {
		expect(scrollToTop).toHaveBeenCalledTimes(1)
		const wrapper = shallow(<App {...props} />)
		wrapper.setProps({
			location: {
				pathname: '/',
				search: 'test'
			}
		})
		expect(scrollToTop).toHaveBeenCalledTimes(1)
	})
})
