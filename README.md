1- git clone https://github.com/brunorocha7/SS.git

2- Subir o container do docker (clicando com o botão direito do mouse no arquivo docker-compose e clicar em docker compose up).

3- Executar no terminal na pasta laravel, o comando abaixo para subir o servidor.
> php artisan serve

4- Acessar http://127.0.0.1:8000/ para visualizar o CRUD.

Obs: pasta mysql com os creates das tabelas Products e Categories.

link gravação tela CRUD funcionando: https://loom.com/share/34de86833f004e98ad873d495b47081b

lista endpoints Categories
- GET http://localhost:8000/api/categories
- POST http://localhost:8000/api/categories
- PUT http://localhost:8000/api/categories/{id}
- DELETE http://localhost:8000/api/categories/{id}

lista endpoints Products
- GET http://localhost:8000/api/products
- POST http://localhost:8000/api/products
- PUT http://localhost:8000/api/products/{id}
- DELETE http://localhost:8000/api/products/{id}
