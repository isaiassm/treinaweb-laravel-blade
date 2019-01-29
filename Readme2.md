#### Comando ultilizado para busca do banco de dados.

php artisan tinker
- para entrar no shell e ultilizar classes e metodos do php

\App\Post::find(1)
- O post é referente a model
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

## Trabalhando com Metodos de inserção no banco de dados

example:

- Instancia a model 
<p> $meuPost = new \App\Post

- Cria um titulo com o metodo passado
 $meuPost->title = 'meu post de teste'
<p> => "meu post de teste"

- Cria um conteudo com o metodo passado
<p> >>> $meuPost->content = 'Meu conteudo de teste'
<p> => "Meu conteudo de teste"

- Mostra o que tem armazenado na variavel
<p> >>> $meuPost
<p> => App\Post {#774
<p>     title: "meu post de teste",
<p>     content: "Meu conteudo de teste",
   }

- Salva no banco de dados   
<p> >>> $meuPost->**save**() 
<p> => true

- Modo de inserção com array, desvantagem dele é que não salva com os campos de data 
>>> \App\Post::**insert**(['title' => 'meu post de test 2', 'content' => 'meu conteu
do de teste 2'])
<p> => true

## Trabalhando com Metodos de Criação

- fillable 
<p> Lista branca que insere apenas os campos que serão utilizados.

- guarded
<p> Faz o contrario do fillable se insere os campos que não serão utilizados, sendo que o que sobrar é ignorado e ultilizavel.

-  \App\Post::**create**(['title' => 'Meu post de test 3', 'content' => 'Meu conteu
do de teste 3'])
<p> Cria o registro no banco de dados.

-  \App\Post::**firstOrCreate**(['title' => 'Meu post de test 3', 'content' => 'me
post 4'])
<p> Procura se tem algum registro com o titulo passado, se tiver ele retorna o registro, se não ele cria no banco um novo registro.

- $meuPostTest = \App\Post::**firstOrNew**(['title' => 'Meu post de test 3', 'content' => 'me
post 4'])

<p> Salvar em uma variavel
<p> Diferente do firstorcreate ele procura no banco o registro caso não tiver ele salva apenas como um instancia.
<p> Logo deve-se inserir o metodo para salvar no banco.
<p> $meuPostTest->save()

## Trabalhando com Metodos de Atualização

- Criamos uma variavel passando nossa model para procurar o registro de numero 2
<p> $post = \App\Post::find(2)

<p> - apos obter o resultado alteramos o titulo da seguinte forma
<p> - $post->title = 'Linguagens para desenvolver no mundo'
<p> Salvamos no banco com o metodo save
<p> $post->save()

- Atualizando o campo passando algumas condiçoes
<p>  \App\Post::where('id', 2)->update(['title' => 'Mercado de linguas'])
<P> - Passamos o where para alterar o id 2 e o campo de title para inserir o que sera mudado.

<p>  \App\Post::where('id','>=', 5)->update(['title' => 'Mercado de linguas'])
<p> - Colocamos a condição de >= onde ele atualizara os campos que forem encontrados pela condição.


## Trabalhando com Metodos de Exclusão de dados

<p> - Colocamos nossa model + metodo armazenada em uma variavel
<p> $post = \App\Post::find(6)

<p> Para deletar ultilizamos 2 metodos diferentes

<p> - Deleta o que esta armazenado na variavel
<p> $post->delete()

<p> - Deleta de acordo com o id colocado, pode ser em conjuntos e tambem em array
<p> \App\Post::destroy(4)

<p> Deleta de acordo com a condição passada, Tambem suporta conjuntos.
<p> \App\Post::where('id', 7)->delete()

## Trabalhando com Relacionamento de Tabelas
 <p> Primeiro adicionamos na tabela de details alguns campos relacionados com a tabela de post
 
 <p> - Busca a tabela post e o que tem armazenado nela 
 <p>$post = \App\Post::find(1)
 
 <p> - exibe o que a tabala de detalhes tem de relação com a tabela de posts
 <p>$post->details

 <p> Procedimento reverso
 
 <p> - Busca a tabela post e o que tem armazenado nela 
 <p>  $detalhes = \App\Details::find(2)

 <p> - exibe o que a tabala de posts tem de relação com a tabela de detalhes
 <p>  $detalhes->post