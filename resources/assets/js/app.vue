﻿<template>
<div>
<!--<b-navbar toggleable="md" type="dark" variant="danger">
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
  <b-navbar-brand href="/"><b-img width="25" height="25" src="public/favicon.ico" fluid alt="Responsive image" />&nbsp;love in travels</b-navbar-brand>
  <b-collapse is-nav id="nav_collapse">
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
</b-navbar>-->
<router-view></router-view>
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