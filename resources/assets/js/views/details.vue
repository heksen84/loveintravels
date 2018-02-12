<template>
<div>
<NavBar></NavBar>
<b-container style="max-width: 300px;">
<br>
<b-form v-if="show">
<form @submit.prevent="next">
	<b-form-group class="text-center">
		<h1>моя анкета</h1>
  </b-form-group>

	<b-form-group id="sexGroup"
									label="Ваш пол"
									label-for="sexInput">
	<b-form-select v-model="form.sex">
				<option value=0>Мужской</option>
				<option value=1>Женский</option>
	</b-form-select>
	<small class="error_control" v-if="error.sex">{{ error.sex[0] }}</small>
	</b-form-group>

	<b-form-group id="userAgeGroup"
									label="Возраст"
									label-for="userAgeInput"
									class="text-center">
			<b-form-input id="userAgeInput"
									type="text"
									v-model="form.age"
									required
									style="max-width: 80px; margin:auto"
									class="text-center">
			</b-form-input>
			<small class="error_control" v-if="error.age">{{ error.age[0] }}</small>
		</b-form-group>

		<UploadImages></UploadImages>

	<br>
	<b-form-group class="text-center">
		<b-button variant="success" type="submit">Сохранить</b-button>
  </b-form-group>
	<br>
</form>
</b-form>

</b-container>
</div>
</template>
<script type="text/javascript">

import router from './../router'
import NavBar from './navbar.vue'
import store from './../store'
import UploadImages from './../components/uploadimages.vue'
import { post, interceptors } from './../helpers/api'

export default {
	components: { router, store, NavBar, UploadImages },
	data () {
    return 	{
				form: {
					sex:0,
					age:0,
					file: null
				},
				error: {},
				show: true,
				selected:0
			}
	},
	created() {
		store.commit('setAuth', true);
	},
	methods: {
		next() {
			this.error = {}
			post('/api/signup', this.form).then((res) => {
				if(res.data.registered) {
						console.log(res.data);
					this.$router.push('/details');
				}
		}).catch((err) => {
			console.log(err.response.data);
			if(err.response.status === 422) {
	         this.error = err.response.data
			}
  	});
		}
  },
	watch: {
	'form.name': function () {
		console.log(this.form.name);
	},
	'form.age': function (val) {
	}
}
}
</script>
