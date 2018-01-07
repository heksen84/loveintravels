<template>
<div>
    <b-container class="text-center" style="max-width: 400px;">
		<b-row class="mb-2 text-center">	
			<b-col><h2>Создать аккаунт <br>Love in travels</h2></b-col>
		</b-row>	
		<b-row class="mb-2 text-center">
			<b-col>		
			<b-form-input type="email" placeholder="Email"/>				
			</b-col>
		</b-row>
		<b-row class="mb-2 text-center">
			<b-col>
			<b-form-input type="text" placeholder="Имя"/>		
			</b-col>
		</b-row>
		<b-row class="mb-2 text-center">
			<b-col>
			<b-form-input type="text" placeholder="Дата рождения"/>		
			</b-col>
		</b-row>		
		<b-row class="mb-2 text-center">
		<b-col>					
			<b-button variant="success" @click="">Регистрация</b-button>
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
      //this.$refs.ModalAuth.show()
    }
  }
}
</script>