<template>
  <v-container class="cep-result">
    <h2>Consulta de CEP</h2>

    <v-text-field
      v-model="cepInput"
      label="Digite o CEP"
      outlined
      maxlength="9"
      v-mask="'#####-###'"
      :error-messages="error"
    ></v-text-field>

    <v-btn color="primary" @click="consultarCep" :loading="loading" class="mr-2">
      Consultar
    </v-btn>

    <v-btn color="secondary" @click="goBack">Voltar</v-btn>

    <v-card v-if="getCepData" class="mt-5" outlined>
      <v-card-title>Endereço</v-card-title>
      <v-card-text>
        <v-list dense>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title><strong>CEP:</strong> {{ getCepData.cep }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title><strong>Logradouro:</strong> {{ getCepData.logradouro }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title><strong>Bairro:</strong> {{ getCepData.bairro }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title><strong>Cidade:</strong> {{ getCepData.cidade }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title><strong>Estado:</strong> {{ getCepData.estado }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-card-text>
    </v-card>
    <v-alert v-if="error" type="error" class="mt-3">
      {{ error }}
    </v-alert>
  </v-container>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  data() {
    return {
      cepInput: '',
    };
  },
  computed: {
    ...mapGetters('cep', ['getCepData', 'getError', 'isLoading']),

    error() {
      return this.getError;
    },
    loading() {
      return this.isLoading;
    },
  },
  methods: {
    consultarCep() {
      const sanitizedCep = this.cepInput.replace(/\D/g, '');
      if (sanitizedCep) {
        this.$store.dispatch('cep/fetchCepData', sanitizedCep);
      }
    },
    goBack() {
      this.$router.push('/');
    },
  },
};
</script>

<style scoped>
.cep-result {
  max-width: 600px;
  margin: 0 auto;
}
</style>
