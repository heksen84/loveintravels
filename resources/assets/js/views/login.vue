<template>
<div>
 <b-card bg-variant="danger" text-variant="white" class="text-center">
    <div id="title">{{ str_title }}</div>
    <div id="desc">{{ str_desc }}</div>
 </b-card>
<br>
	<!-- контент -->
    <b-container id="index_content">
    <b-row class="text-center">
	<b-col cols="12">
		<h4>Любишь путешествия?</h4>
		<b-img src="public/images/travels.jpg" fluid alt="Responsive image" />
		<br>
		<br>
		<h4>Хочешь познакомиться с новым интересным тебе человеком?</h4>
		<b-img src="public/images/date2.jpg" fluid alt="Responsive image" />		
		<br>
		<br>
		<h4>Мечтаешь сходить на свидание находясь в путешествии?</h4>		
		<b-img src="public/images/acquaintance.jpg" fluid alt="Responsive image" />
		<br>
		<br>
		<h3>Добро пожаловать в <div style="margin-top:5px;font-size:22px"><b>LOVE IN TRAVELS!</b></div></h3>
		<br>    
		<b-button variant="success" @click="showModalReg">{{ str_reg }}</b-button>
		<b-button @click="showModalAuth">{{ str_auth }}</b-button>
		<br>
		<br>
		Love in travels - люби и путешествуй!
		<!--<h4>Как пользоваться:</h4>-->
	</b-col>
	</b-row>	
    </b-container>
	<!-- форма регистрации -->
	<b-modal ref="ModalReg" hide-footer title="Регистрация" size="sm">     	
		<b-container fluid>
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
		<b-form-select v-model="selected" class="mr-sm-2">
		      <option :value="null">Выберите пол</option>
		      <option value="a">Мужской</option>
		      <option value="b">Женский</option>
		    </b-form-select>
		</b-col>
		</b-row>
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input class="mr-sm-2" type="password" placeholder="Пароль"/>		
			</b-col>
		</b-row>		
		<b-row class="mb-1 text-center">
			<b-col>
			<b-form-input class="mr-sm-2" type="password" placeholder="Подтвердить пароль"/>		
			</b-col>
		</b-row>		
		<b-row class="mb-1 text-center">
			<b-col>
			<b-btn class="mt-1" variant="outline-success" block @click="hideModalReg">Продолжить</b-btn>
			</b-col>
		</b-row>
		</b-container>            
    </b-modal>
	<!-- форма авторизации -->
	<b-modal ref="ModalAuth" hide-footer title="Вход" size="sm">
        <b-container fluid>
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
			<b-btn class="mt-3" variant="outline-success" block @click="hideModalAuth">Войти</b-btn>
		</b-col>
		</b-row>
        </b-container>
    </b-modal>
<br>
<b-card class="text-center" bg-variant="danger" text-variant="white">
	<span>{{ str_footer_text }} &copy;</span>
	<b-row class="mb-1 text-center">
	</b-row>
</b-card>
</div>
</template>
<script>
export default {
	data () {	
    return 	{				
				selected: null,
				str_title: "Love in travels",
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
      this.$refs.ModalReg.show()
    },
    hideModalReg () {
      this.$refs.ModalReg.hide()
    }
  }
}
</script>

<!-- modal-methods-1.vue -->