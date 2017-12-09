<template>
    <v-app light id="inspire">    
	<v-container grid-list-md text-xs-center>	
    <v-layout row wrap>
		
		<login></login>
	
		<v-flex xs12>			
          <v-card  dark color="white">            
			<v-card-media src="public/images/logo.jpg" class="white--text">
			<v-flex xs12 align-end flexbox>						
			<br>
            <span class="black_shadow_text" id="title">{{ str_title }}</span><span id="reg" class="grey_shadow_text">&reg</span>
			<div class="grey_shadow_text text_space_3" style="font-size:22px;" id="description">{{ str_desc }}</div>
			<br>			
            </v-flex>
			</v-card-media>			
          </v-card>		  
		  <v-card>
		  <v-card-text>
		  <div class="mt-4 title">Любишь знакомиться в путешествиях?</div>
		  <div class="mt-4 title">Тогда этот сервис для тебя!</div>
		  </v-card-text >				  
		  <!-- <v-btn color="success" @click.native.stop="login = true">{{ str_auth }}</v-btn>-->
		  <v-btn color="success" @click="show_auth()">{{ str_auth }}</v-btn>		  
		   <br><br>
		  </v-card>		  
		  <v-card color="blue lighten-1" dark>
		  <v-card-text><h2>Love In Travels - люби и путешествуй!</h2></v-card-text>				  
		  </v-card>
		<v-footer class="pa-2">
		<v-spacer>{{ str_footer_text }}</v-spacer> 		
		</v-footer>
        </v-flex>        
      </v-layout>
    </v-container>
  </v-app>  
</template>
<script type="text/javascript">
import Login from './views/login.vue'
export default { 
	components: { login: Login }, 
	data () {	
    return 	{				
				loginData: 	Login.data,
				loginMethods: Login.methods,
				str_title: "Love In Travels",
				str_desc: "Это лёгкий способ найти партнёра для совместного отдыха и путешествия.",
				str_footer_text: "LoveInTravels (c) "+new Date().getFullYear(),
				str_auth: "Вход",
				str_reg: "Регистрация"		
			}
	},
	methods: { 
	        show_auth() {
				this.loginMethods.auth_hello();				
			}
	}
};
</script>