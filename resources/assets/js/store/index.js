import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    user: {
      name: "",
      auth: false
    }
  },
  mutations: {
		setAuth (state, value) {
			state.user.auth=value;
		},
    setUserName (state, name) {
      state.user.name=name
		}
  }
})

export default store
