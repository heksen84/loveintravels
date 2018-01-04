<template>
<div>
	<center>
	<h2>лента</h2>
	Сергей  - летит в Тайланд!
	Наталья - летит в Тайланд!
	Машка   - летит в Турцию!
	</center>
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