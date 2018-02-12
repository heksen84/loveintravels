<template>
	<b-container>
    <b-row class="text-center">
        <b-col>
					<b-button>Загрузить фото
					<input type="file" accept=".png, .jpg, .jpeg" multiple style="width:100%;position:absolute;top:0;left:0;height:100%;opacity:0">
					</b-button>
				</b-col>
    </b-row>
</b-container>
</template>
<script type="text/javascript">
	import Vue from 'vue'
	import BootstrapVue from 'bootstrap-vue'
	/*import ImagePreview from './ImagePreview.vue'*/
	export default {
		name: "UploadImages",
		components: {
		},
		props: {
		},
		methods: {
		}
	}
</script>
