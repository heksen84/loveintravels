import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import App from './app.vue'
import User from './user.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue);
Vue.use(VueRouter);

/*const router = new VueRouter({
	mode: 'history',
	routes: [
		{ path: '/', component: RecipeIndex },
		{ path: '/user/create', component: RecipeForm, meta: { mode: 'create' }},
		{ path: '/user/:id/edit', component: RecipeForm, meta: { mode: 'edit' }},
		{ path: '/user/:id', component: RecipeShow },
		{ path: '/register', component: Register },
		{ path: '/login', component: Login },
		{ path: '/not-found', component: NotFound },
		{ path: '*', component: NotFound }
	]
})

export default router
*/

const router = new VueRouter({
	mode: 'history',
		routes: [ { path: '/user', component: User }	]
})

export default router

const app = new Vue({
	el: '#root',
	template: `<app></app>`,
	components: { App }, router
})