<template>
    <v-app light id="inspire">    
	<v-container grid-list-md text-xs-center>	
      <v-layout row wrap>       	  
		<v-flex xs12>		
		<v-toolbar>    
		<v-toolbar-title class="white--text"></v-toolbar-title>								
		<v-flex xs12 sm12 md12>
		<v-btn color="blue darken-1" flat small @click.native="dialog = true">{{ str_auth }}</v-btn>		
		</v-flex>			
		<v-flex xs12 sm12 md12>		
		<v-btn color="blue darken-1" flat small v-on:click="reg">{{ str_reg }}</v-btn>								 				
		</v-flex>			
		</v-toolbar>								
          <v-card  dark color="white">            
			<v-card-media src="public/images/logo.jpg" class="white--text">
			<v-flex xs12 align-end flexbox>			
			<br>
			<br>
            <span class="black_shadow_text" id="title">{{ str_title }}</span><span id="reg" class="grey_shadow_text">&reg</span>
			<div class="grey_shadow_text text_space_3" style="font-size:22px;" id="description">{{ str_desc }}</div>
			<br>
			<br>						
            </v-flex>
			</v-card-media>			
          </v-card>		  
		  <v-card>
		  <v-card-text>
		  <div class="mt-4 title">Мечтаешь найти свою вторую половинку находясь в путешествии?</div>
		  <div class="mt-4 title">Тогда этот сервис для тебя!</div>
		  </v-card-text >				  
		   <v-btn color="success" v-on:click="reg">{{ str_reg }}</v-btn>
		   <br><v-btn color="success" v-on:click="auth" flat>{{ str_auth }}</v-btn>		   		   
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
import login from './views/login.vue'
export default {  
  data () {
    return {
			str_title: "Love In Travels",
			str_desc: "Это лёгкий способ найти партнёра для совместного отдыха и путешествия.",
			str_footer_text: "LoveInTravels (c) "+new Date().getFullYear(),
			str_auth: "Вход",
			str_reg: "Регистрация"		
		}
	},
	methods: {
		auth(){
			alert("auth");
		},
		reg(){
			alert("reg");
		}
	}
};
</script>