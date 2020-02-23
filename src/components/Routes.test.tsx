import { mount } from 'enzyme'
import React from 'react'
import { MemoryRouter } from 'react-router'
import { Routes } from './Routes'

describe('Routes', () => {
	it('renders Home at /', () => {
		const wrapper = mount(
			<MemoryRouter initialEntries={['/']}>
				<Routes />
			</MemoryRouter>
		)
		expect(wrapper.find('Home').length).toEqual(1)
	})
	it('renders About at /about', () => {
		const wrapper = mount(
			<MemoryRouter initialEntries={['/about']}>
				<Routes />
			</MemoryRouter>
		)
		expect(wrapper.find('About').length).toEqual(1)
	})
	it('renders Project at /projects/:title', () => {
		const wrapper = mount(
			<MemoryRouter initialEntries={['/projects/pattern']}>
				<Routes />
			</MemoryRouter>
		)
		expect(wrapper.find('Project').length).toEqual(1)
	})
	it('renders NotFound at /not-found', () => {
		const wrapper = mount(
			<MemoryRouter initialEntries={['/not-found']}>
				<Routes />
			</MemoryRouter>
		)
		expect(wrapper.find('NotFound').length).toEqual(1)
	})
	it('renders NotFound at unknown path', () => {
		const wrapper = mount(
			<MemoryRouter initialEntries={['/unknown']}>
				<Routes />
			</MemoryRouter>
		)
		expect(wrapper.find('NotFound').length).toEqual(1)
	})
})
