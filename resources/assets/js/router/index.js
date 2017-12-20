import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from '../views/Index.vue'
import NotFound from '../views/NotFound.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
/*		{ path: '/', component: RecipeIndex },*/
		{ path: '/not-found', component: NotFound }/*,
		{ path: '*', component: NotFound }*/
	]
})

export default router
