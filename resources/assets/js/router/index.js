import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from '../views/index.vue'
import NotFound from '../views/notfound.vue'
import Trips from '../views/trips.vue'
import Login from '../views/login.vue'
import Signup from '../views/signup.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: Index },
		{ path: '/not-found', component: NotFound },
		{ path: '/login', component: Login },
		{ path: '/signup', component: Signup },
		{ path: '/trips', component: Trips },
		{ path: '*', component: NotFound }
	]
})

export default router
