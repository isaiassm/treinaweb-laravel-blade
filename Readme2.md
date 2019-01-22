#### Comando ultilizado para busca do banco de dados.

php artisan tinker
#para entrar no shell e ultilizar classes e metodos do php

\App\Post::find(1)
#busca por id

\App\Post::where('create_at, "2018-07-19 19:59:34")->first()
#busca por pela data de criacao algum post que tenha sido criado naquele momento

\App\Post::findOrFail(1)
#busca um arquivo existente porem se buscar por um inexistente sera lançado um erro

\App\Post::get()
#busca todos os dados da tabela

