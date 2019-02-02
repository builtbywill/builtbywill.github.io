import React from 'react'
import { IDictionary } from '../types/IDictionary'
import { IProject } from '../types/IProject'

const Projects: IDictionary<IProject> = {
	pattern: {
		title: 'Pattern',
		for: 'Purdue University',
		summary: (
			<p>
				Pattern is a simple way for learners to measure their study habits and for
				instructors to gain high-level insights about their students.
			</p>
		),
		description: (
			<>
				<h3>Learners</h3>
				<p>
					Using an interactive study log and timer, learners can track how they're
					spending their time, both in and out of the classroom.
				</p>
				<p>
					From Pattern's dashboards, learners can view personalized visualizations of
					their own data across all of their courses. Learners can also see how their
					habits compare with peers in the same courses.
				</p>
				<h3>Instructors</h3>
				<p>
					Instructors and course coordinators have access to broader analytics on academic
					behavior and study trends for a specific course, or an entire organization.
				</p>
				<h3>iOS</h3>
				<p>
					I designed the iOS client for Pattern to be simple, clean, and have life with
					transitions and animations.
				</p>
				<p>
					I completed the initial development in Fall 2014 and have since been making
					continuous improvements, including an Apple Watch Extension, and guiding other
					developers.
				</p>
				<h3>Web</h3>
				<p>
					The Pattern Web Client uses Angular JS, runs on the cloud using Windows Azure,
					and uses Entity Framework and OData on the server side to be lightweight and
					fast.
				</p>
				<p>
					In Fall 2015 I was the lead developer on our effort to make Pattern follow SaaS
					architecture patterns in order to bring the product to more outside license
					partners.
				</p>
			</>
		),
		dates: '2014 - present',
		url: 'https://studypattern.org',
		roles: (
			<p>
				Project Lead (Fall 2015 - present)
				<br />
				Lead Developer (Summer 2015 - present)
				<br />
				Team Developer (Fall 2014 - Summer 2015)
			</p>
		),
		areas: [
			{
				name: 'iOS',
				tech: ['Objective-C', 'WatchKit', 'CoreData', 'AFNetwork', 'RestKit', 'POP'],
			},
			{
				name: 'Web',
				tech: [
					'C#',
					'Windows Azure',
					'Entity Framework',
					'OData',
					'SQL',
					'LINQ',
					'Angular JS',
					'Grunt',
					'Bootstrap',
					'd3',
				],
			},
		],
		cover: require('images/pattern/pattern-cover.png'),
		images: [
			{
				description: 'iOS App',
				src: require('images/pattern/pattern-ios.png'),
			},
			{
				description: 'Apple Watch App',
				src: require('images/pattern/pattern-apple-watch.png'),
			},
			{
				description: 'Learner Dashboard',
				src: require('images/pattern/pattern-learner.png'),
			},
			{
				description: 'Instructor Dashboard with Charts',
				src: require('images/pattern/pattern-instructor-charts.png'),
			},
		],
	},
	skyepack: {
		title: 'Skyepack',
		for: 'Skyepack, LLC',
		summary: (
			<p>
				Skyepack is a solution for textbook replacement and platform for delivering a wide
				range of content.
			</p>
		),
		description: (
			<>
				<p>
					Skyepack delivers a variety of rich-media including self assessments, graded
					quizzes, discussion boards, videos, images, documents, audio, and even
					customized HTML to the Web, iOS, and Android.
				</p>
				<p>
					Users can access their content anywhere offline using the mobile iOS and Android
					applications. Packs of content are downloaded to the device and are then
					available anywhere.
				</p>
				<p>I am primarily responsible for developing the iOS and Android applications.</p>
				<p>
					In addition, I have been a part of improving and implementing new functionality
					across all platforms including
				</p>
				<ul>
					<li>Custom touch drawing boards which convert to SVG</li>
					<li>Bookmarks and notes</li>
					<li>Inline highlights and annotations</li>
					<li>Mockups, design and logo updates</li>
				</ul>
			</>
		),
		dates: '2013 - present',
		roles: (
			<p>
				(Independant Contractor)
				<br />
				Lead iOS Developer
				<br />
				Lead Android Developer
				<br />
				Web Developer
			</p>
		),
		url: 'http://skyepack.com',
		areas: [
			{
				name: 'iOS',
				tech: ['Objective-C', 'CoreData', 'RestKit'],
			},
			{
				name: 'Android',
				tech: ['Android SDK', 'Java', 'Gradle', 'SQLite'],
			},
			{
				name: 'Web',
				tech: ['C#', '.NET MVC', 'Windows Azure', 'SQL', 'LINQ'],
			},
		],
		cover: require('images/skyepack/skyepack-cover.png'),
		images: [
			{
				src: require('images/skyepack/skyepack-ios.png'),
				description: 'iOS App',
			},
			{
				src: require('images/skyepack/skyepack-android.png'),
				description: 'Android App',
			},
			{
				src: require('images/skyepack/skyepack-web-reader.png'),
				description: 'Web Reader',
			},
			{
				src: require('images/skyepack/skyepack-authoring.png'),
				description: 'Pack Creation and Authoring',
			},
		],
	},
	passport: {
		title: 'Passport',
		for: 'Purdue University',
		summary: (
			<p>
				Passport is a learning and e-portfolio system that uses digital badges to
				demonstrate learners' competencies and achievements.
			</p>
		),
		description: (
			<>
				<p>
					Passport makes it easy to create interactive course content and assignments.
					Upload files, share links, and even write your own custom HTML. Deliver quizzes,
					video assignments, and file upload assignments using Passport’s feature-rich
					authoring tools.
				</p>
				<h3>iOS</h3>
				<p>
					I developed the iOS app for Passport in an effort to allow learners to more
					easily access and compelete their badges and assignments. It fully utilizes the
					RESTful APIs provided by the website to allow full access to all features for
					learners. I developed custom interface controllers for iPhone, with a root slide
					over menu, and iPad, with a stacked view controller layout allowing for a unique
					user experience.
				</p>
				<h3>Web</h3>
				<p>
					In order to provide better reliability at larger scale, we moved Passport to the
					cloud in Spring 2015 using Windows Azure. I helped make all necessary
					architecture changes and plan and exexute the migration.
				</p>
				<p>
					I developed Passport's flexible badge builder for easy creation of great-looking
					badges. Users are guided step-by-step through the creation process and can
					select different styles, colors, icons, and text for each badge image. Once
					complete, the site will combines all selected options into a new badge image.
				</p>
			</>
		),
		dates: '2013 - present',
		roles: (
			<p>
				iOS Developer
				<br />
				Web Developer
			</p>
		),
		url: 'http://www.itap.purdue.edu/studio/passport/',
		areas: [
			{
				name: 'iOS',
				tech: ['Objective-C', 'CoreData', 'RestKit', 'Dropbox SDK', 'Google Drive SDK'],
			},
			{
				name: 'Web',
				tech: ['C#', '.NET MVC', 'Windows Azure', 'SQL', 'LINQ'],
			},
		],
		cover: require('images/passport/passport-cover.png'),
		images: [
			{
				src: require('images/passport/passport-iphone.png'),
				description: 'iPhone App',
			},
			{
				src: require('images/passport/passport-ipad-1.png'),
				description: 'iPad App - Home & Groups',
			},
			{
				src: require('images/passport/passport-ipad-2.png'),
				description: 'iPad App - Challenge Instructions',
			},
			{
				src: require('images/passport/passport-ipad-3.png'),
				description: 'iPad App - Submission',
			},
			{
				src: require('images/passport/passport-learner-dashboard.png'),
				description: 'Learner Dashboard',
			},
			{
				src: require('images/passport/passport-challenge.png'),
				description: 'Challenge Instructions',
			},
			{
				src: require('images/passport/passport-badge-creator.png'),
				description: 'Badge Creator',
			},
		],
	},
	hotseat: {
		title: 'Hotseat',
		for: 'Purdue University',
		summary: (
			<p>
				Hotseat provides real-time polling and a place to quickly and easily participate in
				a productive backchannel discussion during class.
			</p>
		),
		description: (
			<>
				<p>
					Hotseat gives learners the opportunity to ask questions or voice their opinion
					in class. With the option to post "anonymously," Hotseat allows everyone to
					speak up, especially useful for large courses or sensitive topics.
				</p>
				<p>
					With polls, questions can be set up ahead of time or on the fly, and launching a
					poll makes it immediately visible on the mobile app or website.
				</p>
				<h3>iOS</h3>
				<p>
					I originally developed the iOS app using Titanium, but later re-created it in
					Objective-C to provide better native functionality and reduce complexity.
				</p>
				<p>
					In order to make the app more responsive and give users immediate feedback I
					implemented websockets and SignalR for instantaneous posts, votes and poll
					notifications.
				</p>
				<h3>Web</h3>
				<p>
					As a joint effort with the iOS app, we implemented SignalR and websockets to
					increase responsiveness and improve user experience.
				</p>
				<p>
					I helped develop automatic course roster sync functionality to let instructors
					directly link their course sections to Hotseat. This feature automatically
					handles student adds, drops and enrollment changes and greatly improved the
					instructors\' experience in the application.
				</p>
			</>
		),
		dates: '2011 - present',
		roles: (
			<p>
				Lead iOS Developer
				<br />
				Web Developer
			</p>
		),
		url: 'http://www.itap.purdue.edu/studio/passport/',
		areas: [
			{
				name: 'iOS',
				tech: ['Objective-C', 'RestKit', 'SignalR', 'Websockets'],
			},
			{
				name: 'Web',
				tech: ['C#', '.NET MVC', 'Windows Azure', 'SignalR', 'Websockets'],
			},
		],
		cover: require('images/hotseat/hotseat-cover.png'),
		images: [
			{
				src: require('images/hotseat/hotseat-ios.png'),
				description: 'iOS App',
			},
			{
				src: require('images/hotseat/hotseat-feed.png'),
				description: 'Topic Discussion Feed',
			},
			{
				src: require('images/hotseat/hotseat-poll.png'),
				description: 'Real-time Poll',
			},
			{
				src: require('images/hotseat/hotseat-roster-sync.png'),
				description: 'Automatic Course Roster Syncing',
			},
		],
	},
	convoy: {
		title: 'Convoy',
		for: 'Purdue University',
		summary: (
			<p>
				Convoy delivers interactive presentations, supplemental materials, and lecture notes
				together in a single package.
			</p>
		),
		description: (
			<>
				<p>
					Convoy was designed out of a need to simplify how materials are consumed in
					large lectures. In the past, instructors would provide PowerPoint slides online
					and external links to supplemental materials in the syllabus. Learners would
					then need to access both of these items separately while also taking notes in
					another program on their computer.
				</p>
				<p>
					Convoy combines all of these items into a single package, where students can
					view the PowerPoint presentation along with relevant materials at the same time,
					and take notes while both are visible in a single application.
				</p>
				<p>
					Building on the concept of the "second screen", Convoy is available on Web, iOS,
					and Android.
				</p>
				<h3>iOS</h3>
				<p>
					The iOS App was developed to specifically target the iPad. I designed and
					developed a custom interface using UICollectionViews to display presentation
					slides and supplmental websites in a user friendly fashion.
				</p>
				<h3>Web</h3>
				<p>
					Built using C# and .NET MVC, the website for Convoy provides APIs for the mobile
					applciations to access, as well as a web interface for instructors to build
					their slide collections and for learners to view content.
				</p>
				<p>
					The web utilizes the Aspose for .NET library in order to convert uploaded
					PowerPoint and PDF files into HTML for accurate cross-device consumption and
					display on Web, iOS, and Android.
				</p>
			</>
		),
		dates: '2014',
		roles: (
			<p>
				Project Lead
				<br />
				Lead Web Developer
				<br />
				Lead iOS Developer
			</p>
		),
		url: 'http://www.itap.purdue.edu/studio/convoy/',
		areas: [
			{
				name: 'iOS',
				tech: ['Objective-C', 'CoreData', 'RestKit'],
			},
			{
				name: 'Web',
				tech: ['C#', '.NET MVC', 'Aspose for .NET', 'SQL', 'LINQ'],
			},
		],
		cover: require('images/convoy/convoy-cover.png'),
		images: [
			{
				src: require('images/convoy/convoy-ipad-slide.png'),
				description: 'Presentation Slide',
			},
			{
				src: require('images/convoy/convoy-ipad-child-slide.png'),
				description: 'Supplemental Content Slide',
			},
			{
				src: require('images/convoy/convoy-ipad-notes.png'),
				description: 'Side-by-Side Presentation and Notes',
			},
			{
				src: require('images/convoy/convoy-ipad-grid.png'),
				description: 'Presentation Overview',
			},
			{
				src: require('images/convoy/convoy-ipad-print.png'),
				description: 'Printable Presentation Overview with Notes',
			},
			{
				src: require('images/convoy/convoy-home.png'),
				description: 'Web Home',
			},
			{
				src: require('images/convoy/convoy-edit-collection.png'),
				description: 'Edit Collection Slides',
			},
		],
	},
	booklet: {
		title: 'Booklet',
		for: 'Purdue University, Open Source',
		summary: (
			<p>Booklet is a jQuery tool for displaying content on the web in a flipbook layout.</p>
		),
		description: (
			<>
				<p>
					I originally started development on the Booklet plugin while supporting
					Discovery Park at Purdue developing their{' '}
					<a href="http://www.purdue.edu/discoverypark/viewbook/overview/">
						Visions of Discovery
					</a>{' '}
					viewbook.
				</p>
				<p>
					I continued to make additional development improvements and was able to
					transform the code into a jQuery Plugin and release it as open source software.
				</p>
				<h3>Inspiration</h3>
				<p>
					The Booklet Plugin was originally based on the work of{' '}
					<a href="http://clickheredammit.com/pageflip/">
						Charles Mangin (http://clickheredammit.com/pageflip/)
					</a>
				</p>
			</>
		),
		dates: '2012 - 2014',
		roles: <p>>Developer</p>,
		url: 'https://builtbywill.com/booklet',
		areas: [
			{
				name: 'Web',
				tech: ['Javascript', 'jQuery', 'CSS', 'Open Source'],
			},
		],
		cover: require('images/booklet/booklet-cover.png'),
		images: [],
	},
}

export default Projects
