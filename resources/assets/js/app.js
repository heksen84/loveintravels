import Vue from 'vue'
import Vuetify from 'vuetify'
import App from './app.vue'
import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify)

const app = new Vue({
	el: '#root',
	template: `<app></app>`,
	components: { App },
})