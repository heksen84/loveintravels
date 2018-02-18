import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import App from './app.vue'
import router from './router'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import axios from 'axios'
import VueAxios from 'vue-axios'

//Vue.use(Vue);
//Vue.use(BootstrapVue);
Vue.use(VueAxios, axios)
Vue.use(BootstrapVue);
Vue.use(router);

const app = new Vue({
	el: '#root',
	template: `<app></app>`,
	components: { App }, router,
	data: {
	}
})
