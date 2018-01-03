import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from '../views/index.vue'
import NotFound from '../views/404.vue'
import Feed from '../views/feed.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: Index },
		{ path: '/not-found', component: NotFound },
		{ path: '/feed', component: Feed },
		{ path: '*', component: NotFound }
	]
})

export default router
