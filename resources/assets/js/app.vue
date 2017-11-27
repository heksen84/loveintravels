<template>
    <v-app light id="inspire">    
	<v-container grid-list-md text-xs-center>	
      <v-layout row wrap>       	  
		<v-flex xs12>		
		<v-toolbar>    
		<v-toolbar-title class="white--text"></v-toolbar-title>						
		<!--<v-flex xs3 sm2 md2>
        <v-text-field label="Логин"></v-text-field>
        </v-flex>		
		<v-flex xs3 sm2 md2>
        <v-text-field label="Пароль" type="password"></v-text-field>
        </v-flex>							-->
		<v-flex xs12 sm12 md12>
		<v-btn color="blue darken-1" flat small v-on:click="m_auth">@{{ str_auth }}</v-btn>		
		</v-flex>			
		<v-flex xs12 sm12 md12>		
		<v-btn color="blue darken-1" flat small v-on:click="m_reg">@{{ str_reg }}</v-btn>								 				
		</v-flex>			
		</v-toolbar>								
          <v-card  dark color="white">            
			<v-card-media src="" class="white--text">
			<v-flex xs12 align-end flexbox>			
			<br>
			<br>
            <span class="black_shadow_text" id="title"></span><span id="reg" class="grey_shadow_text">&reg</span>
			<div class="grey_shadow_text text_space_3" style="font-size:22px;" id="description"></div>
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
		   <v-btn color="success" v-on:click="m_reg">Регистрация</v-btn>
		   <br><v-btn color="success" v-on:click="m_auth" flat></v-btn>		   		   
		   <br><br>
		  </v-card>		  
		  <v-card color="blue lighten-1" dark>
		  <v-card-text><h2>Love In Travels - люби и путешествуй!</h2></v-card-text>				  
		  </v-card>
		<v-footer class="pa-2">
		<v-spacer></v-spacer>   
		</v-footer>
        </v-flex>        
      </v-layout>
    </v-container>
  </v-app>  
</template>

<script>
export default {
  data () {
    return {
      message: 'Hello Fucking World!'
    };
  }
};
</script>