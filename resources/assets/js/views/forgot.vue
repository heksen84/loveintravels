<template>
<div>
<b-container style="max-width: 350px;">
<br>
<b-form v-if="show">
	<b-form-group class="text-center">
		<h1>Сброс пароля</h1>
    </b-form-group>

    <b-form-group id="emailGroup"
                  label="Электронная почта"
                  label-for="emailInput">
      <b-form-input id="emailInput"
                  type="email"
                  v-model="form.email"
                  required
                  placeholder="Введи email">
      </b-form-input>
    </b-form-group>

	<b-form-group class="text-center">
		<b-button variant="success" @click="">Отправить</b-button>
    </b-form-group>

</b-form>
</b-container>
</div>
</template>
<script type="text/javascript">
export default {
	data () {
    return 	{
				form: {
					email: '',
					password: ''
				},
				show: true
			}
	},
  methods: {
  }
}
</script>
