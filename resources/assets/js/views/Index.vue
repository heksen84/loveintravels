<template>
<div>
 <NavBar></NavBar>
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
			<h4>Хочешь найти себе половинку?</h4>
			<b-img src="public/images/date2.jpg" fluid alt="Responsive image" />
		<br>
		<br>
			<h4>Мечтаешь сходить на свидание находясь в путешествии?</h4>
			<b-img src="public/images/acquaintance.jpg" fluid alt="Responsive image" />
		<br>
		<br>
		<h3>Добро пожаловать в <div style="margin-top:5px;font-size:22px"><b>LOVE IN TRAVELS!</b></div></h3>
		<br>
			<b-button href="/login">{{ str_auth }}</b-button>
			<b-button variant="success" href="/signup">{{ str_reg }}</b-button>
		<br>
		<br>
		<!--Love in travels - люби и путешествуй!-->
	</b-col>
	</b-row>
    </b-container>
<br>
<b-card class="text-center" bg-variant="danger" text-variant="white">
	<span>{{ str_footer_text }} &copy;</span>
	<b-row class="mb-1 text-center">
	</b-row>
</b-card>
</div>
</template>
<script type="text/javascript">

import Vue from 'vue'
import NavBar from './navbar.vue'

export default {
	data () {
    return 	{
				selected: null,
				str_title: "Love in travels",
				//str_desc: "это отличный способ найти партнёра для совместного отдыха и путешествия.",
        str_desc: "это отличный способ найти себе половинку или завязать близкие отношения находясь в путешествии.",
				str_footer_text: "LOVE IN TRAVELS "+new Date().getFullYear(),
				str_auth: "Вход",
				str_reg: "Регистрация"
			}
	},
	components: { NavBar }
}
</script>
