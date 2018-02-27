<template>
<div>
<NavBar></NavBar>
<b-container style="max-width: 350px;">
<br>
<br>
<b-form @submit.prevent="passwordReset">
	<b-form-group class="text-center">
		<h1>сброс пароля</h1>
    </b-form-group>

		<b-form-input id="tokenInput"
								type="text"
								v-model="token"
								required
								v-show="false">
		</b-form-input>

    <b-form-group id="emailGroup"
                  label="Электронная почта"
                  label-for="emailInput">
      <b-form-input id="emailInput"
                  type="email"
                  v-model="email"
                  placeholder="Введи email"
									required>
      </b-form-input>
    </b-form-group>

		<b-form-group id="passwordGroup"
                  label="Новый пароль"
                  label-for="passwordInput">
      <b-form-input id="passwordInput"
                  type="password"
                  v-model="password"
                  placeholder="Введи новый пароль"
									required>
      </b-form-input>
    </b-form-group>

		<b-form-group id="passwordConfirmGroup"
                  label="Подтверждение пароля"
                  label-for="passwordConfirmInput">
      <b-form-input id="passwordConfirmInput"
                  type="password"
                  v-model="password_confirmation"
                  placeholder="Повтори новый пароль"
									required>
      </b-form-input>
    </b-form-group>
	<br>
	<b-form-group class="text-center">
		<b-button variant="success" type="submit">Отправить</b-button>
  </b-form-group>

</b-form>
</b-container>
</div>
</template>
<script type="text/javascript">
import NavBar from './navbar.vue'
import store from './../store'
import { post, interceptors } from './../helpers/api'

export default {
	components: { NavBar, store },
	data () {
    return 	{
			token:  "",
			email: "",
			password: "",
			password_confirmation: "",
			error: {}
		}
	},
	created() {
	store.commit('setAuth', true);
	var url=window.location.href;
	var tag="pass/";
	if (url.indexOf(tag) == -1) alert("Плохая ссылка для сброса пароля!");
	else {
    	var tagpos=url.indexOf(tag)+tag.length;
    	var token=url.substr(tagpos, url.length-tagpos).split(' ').join('');
			this.token=token;
		}
	},
  methods: {
		passwordReset() {
			alert(this.token);
			this.error = {}
			post('/password/reset', {
				token: this.token,
				email: this.email,
				password: this.password,
				password_confirmation: this.password_confirmation
			}).then((res) => {
				alert("Пароль сброшен");
		}).catch((err) => {
			alert(err.response.data);
			if(err.response.status === 422) {
	         this.error = err.response.data
			}
  	});
		}
  }
}
</script>
