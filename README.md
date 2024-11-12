# 🚀 Projeto de Consulta de CEP

Este é um sistema de consulta de CEP desenvolvido com um backend em Laravel e um frontend em Vue.js. 
O projeto utiliza **Docker Compose** para facilitar a configuração e execução dos serviços. 
O backend segue o padrão **Clean Code** para uma estrutura modular, 
enquanto o frontend utiliza **Vuex** para gerenciamento de estado na busca de CEPs.

## 🛠 Pré-requisitos

- **Docker**: [Instalação do Docker](https://docs.docker.com/get-docker/)
- **Docker Compose**: [Instalação do Docker Compose](https://docs.docker.com/compose/install/)

---

## 🚀 Como rodar o projeto

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/jonathanestefani/Stefanini.git
   cd seu-repositorio

2. **Suba os containers com Docker Compose**:

   ```bash
   docker-compose up -d
    ```
- Frontend (Vue.js): http://localhost:8080
- Backend (Laravel): http://localhost:8000

## Estrutura do Projeto
```
📦 Stefanini
├── backend/       # Projeto backend em Laravel
├── frontend/      # Projeto frontend em Vue.js
├── docker-compose.yml
└── README.md
```
## Tecnologias Utilizadas

- Backend: Laravel
- Frontend: Vue.js + Vuex
- Docker
- Docker Compose

## Sobre o projeto

### Backend (Laravel)

O backend foi desenvolvido com Laravel, utilizando o padrão Clean Code para uma estrutura modular. 

- Contrato
- Serviço
- DTOs
- Adapter
- Resource
- Provider
- Teste de integração

### Frontend (Vue.js)

O frontend foi desenvolvido em Vue.js com Vuex para gerenciamento de estado. Ele oferece uma interface para o usuário consultar o CEP.

- Vuex
- Máscara de CEP
- Vuetify
