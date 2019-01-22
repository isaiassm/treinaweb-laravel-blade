#### Comando ultilizado para busca do banco de dados.

php artisan tinker
- para entrar no shell e ultilizar classes e metodos do php

\App\Post::find(1)
- busca por id

\App\Post::where('create_at, "2018-07-19 19:59:34")->first()
- busca por pela data de criacao algum post que tenha sido criado naquele momento

\App\Post::findOrFail(1)
- busca um arquivo existente porem se buscar por um inexistente sera lançado um erro

\App\Post::get()
- busca todos os dados da tabela

#### Trabalhando com connections

Entramos no shell com php artisan tinker, e exeutamos alguns comandos para trabalhar com connections.

- Criamos algumas sequencias passando a seguinta linha:  
$seq = new Illuminate\Database\Eloquent\Collection([5,4,3,2,1])
 - ultilizamos alguns metodos de collections do laravel para fazer algumas pesquisas

 $seq->sort()
- Retorma o array em ordem.

 $seq2 = collect ([6,3,5,2])
- Cria uma collection
 
$seq->search(5)
- Busca a posicao do array.

 $prods = collect([['name' => 'Desk', 'price' => 200],['name' => 'Chair', 'price' => 10
0]])
 - Cria uma collection com nomes.

 $prods->reject(function($item){return $item['price'] > 100;})
- Rejeita um valor de acordo com a condicao passada.

- Existem varios metodos para trabalhar com os dados devem ser encontrados aqui:
(https://laravel.com/docs/5.7/eloquent-collections)