<template>
<div>
<NavBar></NavBar>
<b-container style="max-width: 350px;">
<br>
<br>
<b-form v-if="show">
	<form v-on:submit.prevent="login">
	<b-form-group class="text-center">
		<h1>вход в <br>Love in travels</h1>
    </b-form-group>

    <b-form-group id="emailGroup"
                  label="Электронная почта"
                  label-for="emailInput">
      <b-form-input id="emailInput"
                  type="email"
                  v-model="form.email"
                  required
                  placeholder="Введи email">
      </b-form-input>
				<small class="error_control" v-if="error.email">{{ error.email[0] }}</small>
    	</b-form-group>

	<b-form-group id="passwordGroup"
                  label="Пароль"
                  label-for="passwordInput">
      <b-form-input id="passwordInput"
                  type="password"
                  v-model="form.password"
                  required
                  placeholder="Введи пароль">
      </b-form-input>
				<small class="error_control" v-if="error.password">{{ error.password[0] }}</small>
    </b-form-group>

	<b-form-group class="text-center">
		<h6>Забыли пароль? <b-link href="/forgot">сбросить</b-link></h6>
	</b-form-group>

	<b-form-group class="text-center">
		<b-button variant="success" type="submit">Войти</b-button>
    </b-form-group>
</form>
</b-form>
</b-container>
</div>
</template>
<script type="text/javascript">

import router from './../router'
import store from './../store'
import NavBar from './navbar.vue'
import { post, interceptors } from './../helpers/api'

export default {
	components: { router, store, NavBar },
	data () {
    return 	{
				form: {
					email: "",
					password: ""
				},
				error: {},
				show: true
			}
	},
	created() {
		store.commit('setAuth', true);
	},
  methods: {
		login() {
			this.error = {}
			post('/api/login', this.form).then((res) => {
				if(res.data.authenticated) {
					store.commit('setUserName', res.data.name);
					store.commit('setToken', res.data.api_token);
					this.$router.push('/details/'+res.data.user_id);
				}
		}).catch((err) => {
			console.log(err.response.data);
			if(err.response.status === 422) {
	         this.error = err.response.data
			}
  	});
		}
  }
}
</script>
