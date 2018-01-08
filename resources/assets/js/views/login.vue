<template>
<!--<div>
    <b-container class="text-center" style="max-width: 400px;">	
		<b-row class="text-center">	
			<b-col><h2>Вход в Love in travels</h2></b-col>
		</b-row>	
		<b-row class="mb-2 text-center">
			<b-col>		
				<b-form-input type="email" placeholder="Email"/>				
			</b-col>
		</b-row>
		<b-row class="mb-2 text-center">
			<b-col>
				<b-form-input type="password" placeholder="Пароль"/>
			</b-col>
		</b-row>
		
		<b-form-checkbox id="checkbox1"
                     v-model="status"
                     value="accepted"
                     unchecked-value="not_accepted">
		Запомнить меня
		</b-form-checkbox>
		
		<b-row class="mb-1 text-center">
			<b-col>				
				<b-button variant="success" @click="">Войти</b-button>
			</b-col>
		</b-row>
	
    </b-container>
    </b-modal>
</div>-->

<div>
<b-container style="max-width: 400px;">	
<b-form v-if="show">
    <b-form-group id="exampleInputGroup1"
                  label="Email address:"
                  label-for="exampleInput1">
      <b-form-input id="exampleInput1"
                  type="email"
                  v-model="form.email"
                  required
                  placeholder="Введи email">
      </b-form-input>
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
					email: ''					
				},
				show: true
			}			
	},
  methods: {   
  }
}
</script>