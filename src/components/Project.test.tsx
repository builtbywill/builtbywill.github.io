import { shallow } from 'enzyme'
import React from 'react'
import Projects from '../data/Projects'
import { Project, ProjectProps } from './Project'

describe('Project', () => {
	it('renders with a project', () => {
		const props: ProjectProps = {
			project: Projects.pattern
		}
		const wrapper = shallow(<Project {...props} />)
		expect(wrapper).toBeTruthy()
	})
	it('renders <Redirect /> with no project', () => {
		const wrapper = shallow(<Project />)
		expect(wrapper.find('Redirect').length).toEqual(1)
	})
})
