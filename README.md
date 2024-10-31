
# Documentação do Projeto Signos Zodiacais

## Pré-requisitos

Antes de executar o projeto, certifique-se de que você tenha o seguinte instalado em seu sistema:

- **Docker**: [Instruções de instalação do Docker](https://docs.docker.com/get-docker/)
- **Docker Compose**: [Instruções de instalação do Docker Compose](https://docs.docker.com/compose/install/)

## Executando o Projeto

1. **Clone o Repositório**

   Se você ainda não tiver o repositório clonado, faça isso usando o seguinte comando:

   ```bash
   git clone https://github.com/evertonccarvalho/Relatorio-de-Aula-Pratica--Programacao-Web-Signos.git
   cd Relatorio-de-Aula-Pratica--Programacao-Web-Signos
   ```

2. **Navegue até a Pasta do Projeto**

   Acesse a pasta onde o `docker-compose.yml` está localizado:

   ```bash
   cd Project
   ```

3. **Suba os Contêineres Docker**

   Execute o seguinte comando para iniciar os contêineres:

   ```bash
   docker-compose up -d
   ```

   - Este comando irá criar e iniciar os contêineres em segundo plano (`-d`).

4. **Acessando a Aplicação**

   Após os contêineres estarem em execução, abra o seu navegador e acesse:

   ```
   http://localhost:8080
   ```

   - Você deverá ver a página inicial da aplicação, onde pode inserir sua data de nascimento para descobrir seu signo zodiacal.

5. **Parar os Contêineres**

   Para parar os contêineres, execute:

   ```bash
   docker-compose down
   ```

## Estrutura do Projeto

A estrutura do projeto é a seguinte:

```
── assets/
   ├── css/
   │   └── style.css
   ├── imgs/
   └── js/
── layouts/
   ├── header.php
── docker-compose.yml
── Dockerfile
── signos.xml
── index.php
── show_zodiac_sign.php
```

## Contribuições

Contribuições são bem-vindas! Se você quiser contribuir, por favor, crie um fork do repositório e envie um pull request.
