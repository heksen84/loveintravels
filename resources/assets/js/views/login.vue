<template>
  <v-layout row justify-center>
   <v-dialog v-model="dialog" max-width="290">
	<v-card>
		<v-card-title class="headline">Авторизация</v-card-title>
		<v-card-text>какой-то текст</v-card-text>
		<v-card-actions>
		  <v-spacer></v-spacer>
		  <v-btn color="green darken-1" flat="flat" @click.native="dialog = false">Войти</v-btn>          
		</v-card-actions>
	  </v-card>
	</v-dialog>
  </v-layout>
</template>
<script type="text/javascript">
 export default {
    data () {
      return {
        dialog: true
      }
    },
	 methods: { 
				auth_hello() {				
				this.dialog=true;
				alert(this.dialog);
			}
    }
  }
</script>