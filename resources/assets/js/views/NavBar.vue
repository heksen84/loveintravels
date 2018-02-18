<template>
<div>
<!--<b-navbar toggleable="md" type="dark" variant="danger">
  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>-->
  <b-navbar type="dark" variant="danger" toggleable>
    <b-navbar-toggle target="nav_dropdown_collapse"></b-navbar-toggle>
  <b-navbar-brand style="cursor:default"><span class="carefree-font" v-on:click="goHome">&nbsp;love in travels</span></b-navbar-brand>
  <!--<b-collapse is-nav id="nav_collapse">-->
    <b-collapse is-nav id="nav_dropdown_collapse">
    <b-navbar-nav class="ml-auto">
      <b-nav-form>
	<b-container>
	<b-row class="text-center">
	<b-col cols="12" md="auto" v-if="isAuth">
	    <b-button size="sm" class="my-1 mr-sm-1" href="/login">Вход</b-button>
	    <b-button size="sm" class="my-1 mr-sm-1" variant="success" href="/signup">Регистрация</b-button>
	</b-col>
	</b-row>

<b-nav-item-dropdown right v-if="user.name">
  <template slot="button-content">
      <span style="color:white;">{{ user.name }}</span>
    </template>
  <b-dropdown-item v-on:click="logout">Выйти</b-dropdown-item>
</b-nav-item-dropdown>

	</b-container>
      </b-nav-form>
    </b-navbar-nav>
  </b-collapse>
</b-navbar>
</div>
</template>
<script type="text/javascript">

import router from './../router'
import store from './../store'
import { post, interceptors } from './../helpers/api'

export default {
  components: { router, store },
  data () {
    return 	{
        user: {
          name: store.state.user.name
        }
			}
	},
  methods: {
    logout() {
      post('/api/logout').then((res) => {
        if(res.data.done) {
          store.commit('setAuth', false);
          store.commit('setUserName', "");
          this.$router.push('/');
        }
		}).catch((err) => {
			console.log(err.response.data);
      store.commit('setAuth', false);
      this.$router.push('/');
  	});
		},
		goHome() {
      this.logout();
		}
  },
  computed: {
    isAuth()  {
      /* кнопки авторизации в панели отображаются только через v-if = true,
       поэтому переворачиваем значение auth */
      return !store.state.user.auth;
    }
}
}
</script>
