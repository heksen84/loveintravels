﻿<template>
	<router-view></router-view>
</template>
<script>

import Auth from './store'
import Flash from './helpers/flash'
import { post, interceptors } from './helpers/api'

export default {
	created() {
		interceptors((err) => {
			if(err.response.status === 401) {
			//Auth.remove()
			this.$router.push('/login')
		}

		if(err.response.status === 500) {
			//Flash.setError(err.response.statusText)
		}

		if(err.response.status === 404) {
			//this.$router.push('/notfound')
		}
	})
		//Auth.initialize()
		//alert("ready!");
		//this.$router.push('/login')
},
  data () {
    return 	{
			}
	}
}
</script>
