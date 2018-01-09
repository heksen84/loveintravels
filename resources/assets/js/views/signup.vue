<template>
<div>
<b-container style="max-width: 350px;">	
<br>
<b-form v-if="show">

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
		<b-button variant="success" @click="">Создать новый аккаунт</b-button>
    </b-form-group>	
	
</b-form>
</b-container>
</div>
</template>
<script type="text/javascript">
export default {
	data () {	
    return 	{
				form: {
					name: "",
					email: "",
					password: ""					
				},
				show: true
			}			
	},
  methods: {   
  }
}
</script>