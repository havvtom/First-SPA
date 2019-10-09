import Home from './components/Home.vue';
import About from './components/About.vue';
import ContactUs from './components/ContactUs.vue';

export default {
	mode:'history',
	routes: [

		{	path:'/',
			component: Home
		},

		{	path:'/about',
			component: About
		},

		{	path:'/contactUs',
			component: ContactUs
		},
	]
	
}