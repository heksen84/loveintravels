<template>
<div>
    <b-container class="text-center" style="max-width: 400px;">	
		<b-row class="text-center">	
			<b-col><h3>Вход в Love in travels</h3></b-col>
		</b-row>	
		<b-row class="mb-1 text-center">
			<b-col>		
				<b-form-input class="mr-sm-2" type="email" placeholder="Email"/>				
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
				<b-form-input class="mr-sm-2" type="password" placeholder="Пароль"/>
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>				
				<b-button variant="success" @click="">Войти</b-button>
			</b-col>
		</b-row>	
    </b-container>
    </b-modal>
</div>
</template>
<script>
export default {
	data () {	
    return 	{										
			}
	},
  methods: {
    showModalAuth () {      
    }
  }
}
</script>