<template>
<div>
    <b-container>
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
			<b-form-input class="mr-sm-2" type="text" placeholder="Имя"/>		
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input class="mr-sm-2" type="text" placeholder="Дата рождения"/>		
			</b-col>
		</b-row>
		
		<b-row class="mb-1 text-center">
		<b-col>					
			<b-button @click="showModalAuth">Войти</b-button>
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

<!-- modal-methods-1.vue -->