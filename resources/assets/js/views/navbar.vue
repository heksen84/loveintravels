<template>
<div>
<b-navbar toggleable="md" type="dark" variant="danger">
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
  <b-navbar-brand style="cursor:default"><span class="carefree-font" v-on:click="GoHome">&nbsp;love in travels</span></b-navbar-brand>
  <b-collapse is-nav id="nav_collapse">
    <b-navbar-nav class="ml-auto">
      <b-nav-form>
	<b-container>
	<b-row class="text-center">
	<b-col cols="12" md="auto" v-if="IsAuth">
	    <b-button size="sm" class="my-1 mr-sm-1" href="/login">Вход</b-button>
	    <b-button size="sm" class="my-1 mr-sm-1" variant="success" href="/signup">Регистрация</b-button>
	</b-col>
  <b-col cols="12" md="auto" v-if="show_user_info">
    <h4 style="color:white">{{ user.name }}</h4>
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
import cfg from '..//cfg.js'
import router from './../router'
import store from './../store'

export default {
  components: { router, store },
  data () {
    return 	{
        user: {
          name: cfg.name
        }
			}
	},
	created() {
	},
  methods: {
		GoHome() {
      store.commit('SetAuth', false);
			this.$router.push('/');
		}
  },
  computed: {
    IsAuth()  {
      // кнопки авторизации в панели отображаются только через v-if = true,
      // поэтому переворачиваем значение auth
      return !store.state.auth_mode;
     }
}
}
</script>
