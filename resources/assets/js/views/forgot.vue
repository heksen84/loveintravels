<template>
<div>
<NavBar></NavBar>
<b-container style="max-width: 350px;">
<br>
<br>
<b-form @submit.prevent="passwordReset">
	<b-form-group class="text-center">
		<h1>Сброс пароля</h1>
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
			error: {}
		}
	},
	created() {
		store.commit('setAuth', true);
	},
  methods: {
		passwordReset() {
			this.error = {}
			post('/password/email', {email: this.email}).then((res) => {
				alert("res");
				//if(res.data.authenticated) {
				//	store.commit('setUserName', res.data.name );
				//	this.$router.push('/details/'+res.data.user_id);
				//}
		}).catch((err) => {
			console.log(err)
			/*console.log(err.response.data);
			if(err.response.status === 422) {
	         this.error = err.response.data
			}*/
  	});




		}
  }
}
</script>
