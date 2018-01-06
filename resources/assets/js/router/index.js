import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from '../views/index.vue'
import NotFound from '../views/notfound.vue'
import Trips from '../views/trips.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: Index },
		{ path: '/not-found', component: NotFound },
		{ path: '/trips', component: Trips },
		{ path: '*', component: NotFound }
	]
})

export default router
