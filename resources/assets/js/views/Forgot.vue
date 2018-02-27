<template>
<div>
<NavBar></NavBar>

<b-modal size="sm" v-model="modalShow" title="ПРОВЕРЬТЕ ПОЧТУ" hide-footer>
<div class="d-block text-center">
Инструкция по сбросу пароля отправлена на указанный email
</div>
<b-btn class="mt-3" type="dark" variant="primary" block @click="hideModal">Перейти на главную страницу</b-btn>
</b-modal>

<b-container style="max-width: 350px;">
<br>
<br>
<b-form @submit.prevent="passwordReset">
	<b-form-group class="text-center">
		<h1>сброс пароля</h1>
    </b-form-group>

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

	</b-form-input>
		<small class="error_control" v-if="error.email">{{ error.email[0] }}</small>
	</b-form-group>

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
			email: "",
			modalShow: false,
			error: {}
		}
	},
	created() {
		store.commit('setAuth', true);
	},
  methods: {
		hideModal() {
			store.commit('setAuth', false);
			this.$router.push("/");
		},
		passwordReset() {
			this.error = {}
			post('/password/email', {email: this.email}).then((res) => {
				this.modalShow=true;
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
