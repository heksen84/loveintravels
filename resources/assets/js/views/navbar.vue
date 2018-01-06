<template>
<div>
<b-navbar toggleable="md" type="dark" variant="danger">
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
<!--  <b-navbar-brand href="/"><span class="carefree-font"><b-img width="25" height="25" src="public/favicon.ico" fluid alt="Responsive image"/>&nbsp;love in travels</span></b-navbar-brand>-->
  <b-navbar-brand href="/"><span class="carefree-font">&nbsp;love in travels</span></b-navbar-brand>
  <b-collapse is-nav id="nav_collapse">
    <b-navbar-nav class="ml-auto">
      <b-nav-form>				
	<b-container>
	<b-row class="text-center">
	<b-col cols="12" md="auto">
	    <b-form-input size="sm" class="my-1 mr-sm-1" type="email" placeholder="Email"/>				
	    <b-form-input size="sm" class="my-1 mr-sm-1" type="password" placeholder="Пароль"/>
	    <b-button size="sm" class="my-1 mr-sm-1" @click="showModalAuth">Вход</b-button>
	    <b-button size="sm" class="my-1 mr-sm-1" variant="success" @click="showModalReg">Регистрация</b-button>
	</b-col>
	</b-row>
	</b-container>
      </b-nav-form>	
    </b-navbar-nav>
  </b-collapse>
</b-navbar>
</div>
</template>
<script type="text/javascript">
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
export default {
		data() {			
		},
		created() {
		},
		methods: {
		showModalAuth () {
			alert("auth1");
		},
		hideModalAuth () {
			alert("auth2");
		},
		showModalReg () {
			alert("auth3");
		},
		hideModalReg () {
			alert("auth4");
		}
  }
}
</script>