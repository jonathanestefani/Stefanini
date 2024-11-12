import Vue from 'vue';
import Vuex from 'vuex';
import cep from './cep';

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    cep
  },
});
