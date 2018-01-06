<template>
<div>
    <b-container>
    <b-row class="text-center">	
		<b-col cols="12"><h1>Вход</h1></b-col>
		<b-col cols="12">					
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