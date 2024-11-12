<template>
    <div class="home">
      <h1>Bem-vindo ao Consulta de CEP</h1>
      <p>Este é um sistema simples para consultar endereços por CEP.</p>
      <img src="@/assets/cep.jpg" alt="Imagem de CEP" />
      <p>
        <v-btn color="primary" @click="navigateToCep">Consultar CEP</v-btn>
      </p>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      navigateToCep() {
        this.$router.push('/consulta-cep');
      },
    },
  };
  </script>
  
  <style scoped>
  .home {
    text-align: center;
  }
  img {
    width: 200px;
    margin-top: 20px;
  }
  </style>
  