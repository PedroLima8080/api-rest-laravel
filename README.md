Para começar a usar o projeto, clone o repositório onde está sendo executado seu compilador php.
1 - git clone https://github.com/PedroLima8080/api-rest-laravel.git
2 - cd api-rest-laravel/
3 - composer install
4 - npm install
5 - faça uma cópia do arquivo .env.example e renomeie para .env
6 - crie o banco de dados onde a api vai rodar
7 - no .env, coloque:
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=seuBancoDeDados
    DB_USERNAME=seuUserName
    DB_PASSWORD=suaSenha
8 - crie as tabelas rodando: php artisan migrate
9 - php artisan serve

rotas:
GET: http://127.0.0.1:8000/api/persons
retorna todas as pessoas

GET: http://127.0.0.1:8000/api/persons/id
retorna a pessoa com este id

POST: http://127.0.0.1:8000/api/persons
cria uma pessoa

PUT: http://127.0.0.1:8000/api/persons/id
edita uma pessoa com este id

DELETE: http://127.0.0.1:8000/api/persons/id
deleta uma pessoa com este id

