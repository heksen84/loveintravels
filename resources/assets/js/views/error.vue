<template>
<div>
<NavBar></NavBar>
<br>
<b-alert show variant="error"><h5>Ошибка!</h5></b-alert>
</div>
</template>
<script type="text/javascript">

import Vue from 'vue'
import NavBar from './navbar.vue'

export default {
	data () {
    return 	{
			}
	},
	components: { NavBar }
}
</script>
