import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import App from './app.vue'
import router from './router'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue);

const app = new Vue({
	el: '#root',
	template: `<app></app>`,
	components: { App }, router
})