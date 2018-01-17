<template>
<div>
<b-container style="max-width: 350px;">
<br>
<br>
<b-form v-if="show">
	<form v-on:submit.prevent="Auth">
	<b-form-group class="text-center">
		<h1>Вход в <br>Love in travels</h1>
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
    </b-form-group>

	<b-form-group class="text-center">
		<h5>Забыли пароль? <b-link href="/forgot">Сбросить</b-link></h5>
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
import { post, interceptors } from './../helpers/api'
//import cfg from '../cfg.js'

export default {
	components: { router },
	data () {
    return 	{
				form: {
					email: "",
					password: ""
				},
				show: true
			}
	},
  methods: {
		Auth() {
			/*cfg.name = "Привет, Илья!";*/
			post('/api/login', this.form).then((res) => {
				if(res.data.done) {
					console.log(res.statusText);
			//		this.$router.push('/welcome');
				}
		}).catch(function (error) {
    	//this.$router.push('/error');
  	});

		}
  }
}
</script>
