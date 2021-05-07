Para começar a usar o projeto, clone o repositório onde está sendo executado seu compilador php. <br>
1 - git clone https://github.com/PedroLima8080/api-rest-laravel.git <br>
2 - cd api-rest-laravel/ <br>
3 - composer install <br>
4 - npm install <br>
5 - faça uma cópia do arquivo .env.example e renomeie para .env <br>
6 - crie o banco de dados onde a api vai rodar <br>
7 - no .env, coloque: <br>
    DB_CONNECTION=pgsql <br>
    DB_HOST=127.0.0.1 <br>
    DB_PORT=5432 <br>
    DB_DATABASE=seuBancoDeDados <br>
    DB_USERNAME=seuUserName <br>
    DB_PASSWORD=suaSenha <br>
8 - crie as tabelas rodando: php artisan migrate <br>
9 - php artisan serve <br>

rotas: <br>
GET: http://127.0.0.1:8000/api/persons <br>
retorna todas as pessoas <br>

GET: http://127.0.0.1:8000/api/persons/id <br>
retorna a pessoa com este id <br>

POST: http://127.0.0.1:8000/api/persons <br>
cria uma pessoa <br>

PUT: http://127.0.0.1:8000/api/persons/id <br>
edita uma pessoa com este id <br>

DELETE: http://127.0.0.1:8000/api/persons/id <br>
deleta uma pessoa com este id <br>

