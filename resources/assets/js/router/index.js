import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from '../views/index.vue'
import NotFound from '../views/notfound.vue'
import Trips from '../views/trips.vue'
import Login from '../views/login.vue'
import Signup from '../views/signup.vue'
import Forgot from '../views/forgot.vue'
import Welcome from '../views/welcome.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: Index },
		{ path: '/not-found', component: NotFound },
		{ path: '/login', component: Login },
		{ path: '/signup', component: Signup },
		{ path: '/forgot', component: Forgot },
		{ path: '/trips', component: Trips },
		{ path: '/welcome', component: Welcome },
		{ path: '*', component: NotFound }
	]
})

export default router
