<template>
<div>
<b-container style="max-width: 350px;">	
<br>
<b-form v-if="show">

	<b-form-group class="text-center">
		<h1>Вход в <br>Love in travels</h1>
    </b-form-group>
	
    <b-form-group id="emailGroup"
                  label="Email адрес:"
                  label-for="emailInput">
      <b-form-input id="emailInput"
                  type="email"
                  v-model="form.email"
                  required
                  placeholder="Введи email">
      </b-form-input>	  
    </b-form-group>
	
	<b-form-group id="passwordGroup"
                  label="Пароль:"
                  label-for="passwordInput">
      <b-form-input id="passwordInput"
                  type="password"
                  v-model="form.password"
                  required
                  placeholder="Введи пароль">
      </b-form-input>	  
    </b-form-group>
	
	<b-form-group class="text-center">
		<b-button variant="success" @click="">Войти</b-button>
    </b-form-group>
	
</b-form>
</b-container>
</div>
</template>
<script>
export default {
	data () {	
    return 	{
				form: {
					email: '',
					password: ''					
				},
				show: true
			}			
	},
  methods: {   
  }
}
</script>