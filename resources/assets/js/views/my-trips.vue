<template>
<div>
	<NavBar></NavBar>
    <b-container>
	<b-row class="text-center">
		<b-col>
			<h3 style="margin-top:20px;text-decoration:underline">Поездки на август</h3>
			<h5>Сергей едет в тайланд</h5>
			<h5>Наталья летит в турцию</h5>
			<h5>Михаил летит в турцию</h5>
			<b-button variant="primary">Добавить себя</b-button>
		</b-col>
    </b-row>
    </b-container>
</div>
</template>

<script type="text/javascript">
import NavBar from './navbar.vue'

export default {	
	components: { NavBar }
}
</script>