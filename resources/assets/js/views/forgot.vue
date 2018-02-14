<template>
<div>
<NavBar></NavBar>
<b-container style="max-width: 350px;">
<br>
<br>
<b-form @submit.prevent="passwordReset" v-if="show">
	<b-form-group class="text-center">
		<h1>Сброс пароля</h1>
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

export default {
	components: { NavBar, store },
	data () {
    return 	{
				form: {
					email: '',
					password: ''
				},
				show: true
			}
	},
	created() {
		store.commit('setAuth', true);
	},
  methods: {
		passwordReset() {
			alert("hi!");
		}
  }
}
</script>
