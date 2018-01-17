<template>
<div>
<b-container style="max-width: 350px;">
<br>
<b-form v-if="show">
<form v-on:submit.prevent="CreateAccount">
	<b-form-group class="text-center">
		<h1>Создать аккаунт <br>Love in travels</h1>
    </b-form-group>

    <b-form-group id="nameGroup"
                  label="Имя"
                  label-for="nameInput">
      <b-form-input id="nameInput"
                  type="text"
                  v-model="form.name"
                  required
                  placeholder="Например, Татьяна">
      </b-form-input>
    </b-form-group>

		<b-form-group id="sexGroup"
	                  label="Ваш пол"
	                  label-for="sexInput">
		<b-form-select v-model="selected">
	      	<option value="man">Мужской</option>
	      	<option value="woman">Женский</option>
	  </b-form-select>
	  </b-form-group>

		<b-form-group id="userAgeGroup"
	                  label="Ваш возраст"
	                  label-for="userAgeInput"
										class="text-center">
	      <b-form-input id="userAgeInput"
	                  type="text"
	                  v-model="form.age"
	                  required
										style="max-width: 80px; margin:auto"
										class="text-center">
	      </b-form-input>
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
		<b-button variant="success" type="submit">Создать новый аккаунт</b-button>
    </b-form-group>
	<br>
	<b-form-group class="text-center">
		<h5>У вас уже есть аккаунт? <b-link href="/login">Войти</b-link></h5>
	</b-form-group>
</form>
</b-form>
</b-container>
</div>
</template>
<script type="text/javascript">

import router from './../router'
import { post, interceptors } from './../helpers/api'

export default {
	components: { router },
	data () {
    return 	{
				form: {
					name:"",
					sex:"",
					age:"",
					email:"",
					password:""
				},
				show: true,
				selected: "man"
			}
	},
  methods: {
		CreateAccount () {
			post('/api/signup', this.form).then((res) => {
				if(res.data.registered) {
					console.log(res.statusText);
					this.$router.push('/welcome');
				}
		}).catch(function (error) {
    	this.$router.push('/error');
  	});
		}
  },
	watch: {
	// эта функция запускается при любом изменении вопроса
	'form.name': function () {
		console.log(this.form.name);
		//this.answer = 'Ожидаю, когда вы закончите печатать...'
		//this.getAnswer()
	},
	'form.age': function (val) {
		if (val => 80) this.form.age=80;
		if (val <= 18) this.form.age=18;
		console.log(this.form.age);
	}
}
}
</script>
