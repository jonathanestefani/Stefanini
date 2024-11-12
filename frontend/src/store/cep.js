import axios from 'axios';

const state = {
  cepData: null,
  error: null,
  loading: false,
};

const getters = {
  getCepData: (state) => state.cepData,
  getError: (state) => state.error,
  isLoading: (state) => state.loading,
};

const mutations = {
  SET_CEP_DATA(state, data) {
    state.cepData = data;
  },
  SET_ERROR(state, error) {
    state.error = error;
  },
  SET_LOADING(state, loading) {
    state.loading = loading;
  },
};

const actions = {
  async fetchCepData({ commit }, cep) {
    commit('SET_LOADING', true);
    commit('SET_ERROR', null);
    commit('SET_CEP_DATA', null);

    try {
      const response = await axios.get(`${process.env.VUE_APP_BASE_API}/consulta-cep/${cep}`);
      commit('SET_CEP_DATA', response.data.data);
    } catch (error) {
      commit('SET_ERROR', 'CEP não encontrado ou erro na consulta.');
    } finally {
      commit('SET_LOADING', false);
    }
  },
};

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
};
