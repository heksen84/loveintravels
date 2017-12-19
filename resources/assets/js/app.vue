<template>
<div>
<b-navbar toggleable="md" type="dark" variant="danger">
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
  <b-navbar-brand href="#"><b-img width="25" height="25" src="public/favicon.ico" fluid alt="Responsive image" /> love in travels</b-navbar-brand>
  <b-collapse is-nav id="nav_collapse">
    <!-- Right aligned nav items -->
    <b-navbar-nav class="ml-auto">
      <b-nav-form>				
	<b-container>
	<b-row class="text-center">
	<b-col cols="12" md="auto">
	        <b-form-input size="sm" class="my-1 mr-sm-1" type="email" placeholder="Email"/>				
	        <b-form-input size="sm" class="my-1 mr-sm-1" type="password" placeholder="Пароль"/>
	       	<b-button size="sm" class="my-1 mr-sm-1">Вход</b-button>
	       	<b-button size="sm" class="my-1 mr-sm-1" variant="success" @click="showModalReg">Регистрация</b-button>
	</b-col>
	</b-row>
	</b-container>
      </b-nav-form>	
    </b-navbar-nav>
  </b-collapse>
</b-navbar>
 <b-card bg-variant="danger" text-variant="white" class="text-center">
    <div style="font-size:64px;margin-top:-25px">{{ str_title }}</div>
    <div style="font-size:22px">{{ str_desc }}</div>
 </b-card>
<br>
	<!-- контент -->
	<b-container>
    <b-row class="text-center">
	<b-col cols="12">
		<h5>Любишь путешествия?</h5>
		<b-img src="public/images/travels.jpg" fluid alt="Responsive image" />
		<br>
		<br>
		<h5>Хочешь познакомиться с новым интересным тебе человеком?</h5>
		<b-img src="public/images/date.jpg" fluid alt="Responsive image" />		
		<br>
		<br>
		<h5>Мечтаешь сходить на свидание в путешествии?</h5>		
		<b-img src="public/images/acquaintance.jpg" fluid alt="Responsive image" />		
		<br>
		<br>
		<h5>Добро пожаловать в <div style="margin-top:5px"><b>LOVE IN TRAVELS!</b></div></h5>
		<br>    
		<b-button variant="success" @click="showModalReg">{{ str_reg }}</b-button>
		<b-button @click="showModalAuth">{{ str_auth }}</b-button>		
	</b-col>
	</b-row>	
    </b-container>
	<!-- форма регистрации -->
	<b-modal ref="myModalRef" hide-footer title="Регистрация" size="sm">     	
		<b-container fluid>
		<b-row class="mb-1 text-center">
			<b-col>		
			<b-form-input size="sm" class="mr-sm-2" type="email" placeholder="Email"/>				
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Имя"/>		
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input size="sm" class="mr-sm-2" type="password" placeholder="Пароль"/>		
			</b-col>
		</b-row>		
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Дата рождения"/>		
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Пол"/>		
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-btn class="mt-1" variant="outline-danger" block @click="hideModalReg">Закрыть</b-btn>
			</b-col>
		</b-row>		
		</b-container>            
    </b-modal>
	<!-- форма авторизации -->
	<b-modal ref="ModalAuth" hide-footer title="Вход" size="sm">
        <b-container fluid>
		<b-row class="mb-1 text-center">
			<b-col>		
			<b-form-input size="sm" class="mr-sm-2" type="email" placeholder="Email"/>				
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input size="sm" class="mr-sm-2" type="password" placeholder="Пароль"/>
			</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
		<b-col>
			<b-btn class="mt-3" variant="outline-danger" block @click="hideModalAuth">Войти</b-btn>
		</b-col>
		</b-row>
        </b-container>
    </b-modal>
<br>
<b-card class="text-center" bg-variant="danger" text-variant="white"><span>{{ str_footer_text }}&copy;</span></b-card>
</div>
</template>
<script>
export default {
	data () {	
    return 	{				
				str_title: "love in travels",
				str_desc: "это отличный способ найти партнёра для совместного отдыха и путешествий.",
				str_footer_text: "LOVE IN TRAVELS "+new Date().getFullYear(),
				str_auth: "Вход",
				str_reg: "Регистрация"		
			}
	},
  methods: {
    showModalAuth () {
      this.$refs.ModalAuth.show()
    },
    hideModalAuth () {
      this.$refs.ModalAuth.hide()
    },
	showModalReg () {
      this.$refs.myModalRef.show()
    },
    hideModalReg () {
      this.$refs.myModalRef.hide()
    }
  }
}
</script>

<!-- modal-methods-1.vue -->