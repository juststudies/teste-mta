# Meta

## Como utilizar esse projeto:

Basta utilizar o comando: 

 ```
 git clone https://github.com/juststudies/teste-mta
 ```

 E então instalar o composer.json com o comando:

 ```
 composer install
 ```

Adicionar e configurar o arquivo `.env` e adicionar as suas configurações de banco de dados, como especificado no arquivo `.env.example`

```
DB_CONNECTION=mysql
DB_HOST=seuhostaqui
DB_PORT=portadoseuhostaqui
DB_DATABASE=nomedobanco
DB_USERNAME=usuariodobanco
DB_PASSWORD=senhadobanco
```

Caso deseje, há um arquivo `docker-compose.yml` possuindo as principais configurações do banco MySQL, bastando apenas alterar a configurações do `.env` para as configurações que estão no `docker-compose.yml`

Se optou por utilizar o [docker-compose.yml](https://docs.docker.com/compose/install/), precisará rodar o seguinte comando:

```
docker-compose up
```
E por ultimo, rode as Migrations:

```
php artisan migrate
```
## Rotas:
___

A aplicação possui as seguintes rotas:
- users: Rota principal, é aqui que o `DataTables` faz sua mágica.[GET]
- users/create: Formulário para criar um novo usuário.[GET]
- users/edit/{id}: Formulário com os dados que se deseja atualizar.[GET]
- users/store: Ação para guardar o novo dado, digitado, da rota users/create.[POST]
- users/edit/{id}: Ação para atualizar dados, digitados, da rota users/edit/{id}.[PUT]
- users/delete/{id}: Ação para deletar um determinado arquivo.[DELETE]

## Para saber mais: 
___

O presente projeto possui seeders, caso queira populá-los (configurado para gerar 100 registros), basta utilizar o comando:

```
php artisan db:seed
```

O presente projeto possui a biblioteca 
[yajra/laravel-datatables-oracle](https://github.com/yajra/laravel-datatables).