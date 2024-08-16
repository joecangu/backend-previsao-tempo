# Backend - Previsão do Tempo - Amplimed

API responsável por fazer as consultas e salvar o histórico da previsão do tempo no Banco de Dados.


## Tecnologias Utilizadas
    - **PHP**: v8.2.12
    - **Laravel**: v11.9

## Estrutura de Pastas

Dentro da pasta `Controllers` foi criado uma subpasta chamada `Api` onde fica o arquivo `HistoricoController`, onde gerencia todas as ações responsáveis do histórico.
Também foi criado dentro da pasta `Model`o arquivo `Historico`, que é responsável por representar e interagir com as tabelas do banco de dados.
E foi criado a migration para criação da tabela de histórico.

No Laravel 11, dentro da pasta `routes` não vem mais por padrão o arquivo `api.php`. Será necessário rodar o seguinte comando:
    ```bash
    php artisan install:api


## Instalação

1. Clone o repositório:
    ```bash
   git clone https://github.com/joecangu/backend-previsao-tempo.git

2. Navegue até o diretório do projeto:
    ```bash
    cd backend-previsao-tempo

3. Instale as dependências:
    ```bash
    composer install

4. Configurar o Banco de Dados
    Atualiza o arquivo `.env` com as configurações corretas do banco de dados e outras variáveis de ambientes necessárias.

4. Caso necessário, pode rodar as Migrations
    ```bash
    php artisan migrate

## Como Usar
1. Para rodar o projeto em modo de desenvolvimento:
    ```bash
    php artisan serve

2. Abra http://localhost:8000 para ver se o projeto está rodando no navegador.

