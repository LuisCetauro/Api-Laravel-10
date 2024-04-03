## Documentação da API

## Descrição Geral

Essa API permite explorar a maravilhosa carreira da dupla caipira Tião Carreiro e Pardinho. Você pode explorar qualquer um dos álbuns lançados pela dupla, bem como músicas individuais. Além disso, é possível adicionar músicas a álbuns existentes e criar novos álbuns.

Também é possível deletar álbuns inteiros ou músicas separadas, fornecendo assim um controle completo sobre a biblioteca musical da dupla.

Api feita em PHP:(versao que usei), com o framework Laravel 10

## Requisitos de Autenticação

Para acessar os endpoints da API, não é necessário autenticação no momento.

## Endpoints

### Álbuns

GET /albums  
Retorna todos os álbuns disponíveis.

GET /albums/{nome}  
Retorna detalhes de um álbum específico pelo nome.

POST /albums  
Adiciona um novo álbum.

DELETE /albums/{nome}  
Deleta um álbum pelo nome.

#### Exemplo de solicitação GET para listar todos os álbuns:

-   Crie uma nova requisição do tipo GET.
-   Insira a URL: `http://127.0.0.1:8000/albums`.
-   Envie a solicitação.

#### Exemplo de solicitação GET para obter detalhes de um álbum específico:

-   Crie uma nova requisição do tipo GET.
-   Insira a URL com o nome do álbum desejado, por exemplo: `http://127.0.0.1:8000/albums/nome-do-album`.
-   Envie a solicitação.

#### Exemplo de solicitação POST para adicionar um novo álbum:

-   Crie uma nova requisição do tipo POST.
-   Insira a URL: `http://127.0.0.1:8000/albums`.
-   Adicione os dados do novo álbum no corpo da requisição (por exemplo, em JSON).
-   Envie a solicitação.

#### Exemplo de solicitação DELETE para excluir um álbum:

-   Crie uma nova requisição do tipo DELETE.
-   Insira a URL com o nome do álbum que deseja excluir, por exemplo: `http://127.0.0.1:8000/albums/nome-do-album`.
-   Envie a solicitação.

### Músicas

GET /songs  
Retorna todas as músicas disponíveis.

GET /songs/{nome}  
Retorna detalhes de uma música específica pelo nome.

POST /albums/{nomeDoAlbum}/songs  
Adiciona uma nova música a um álbum existente.

DELETE /albums/{nomeDoAlbum}/songs/{nomeDaMusica}  
Deleta uma música de um álbum pelo nome da música e do álbum.

#### Exemplo de solicitação GET para listar todas as músicas:

-   Crie uma nova requisição do tipo GET.
-   Insira a URL: `http://127.0.0.1:8000/songs`.
-   Envie a solicitação.

#### Exemplo de solicitação GET para obter detalhes de uma música específica:

-   Crie uma nova requisição do tipo GET.
-   Insira a URL com o nome da música desejada, por exemplo: `http://127.0.0.1:8000/songs/nome-da-musica`.
-   Envie a solicitação.

#### Exemplo de solicitação POST para adicionar uma nova música a um álbum:

-   Crie uma nova requisição do tipo POST.
-   Insira a URL com o nome do álbum desejado, por exemplo: `http://127.0.0.1:8000/albums/nome-do-album/songs`.
-   Adicione os dados da nova música no corpo da requisição (por exemplo, em JSON).
-   Envie a solicitação.

#### Exemplo de solicitação DELETE para excluir uma música de um álbum:

-   Crie uma nova requisição do tipo DELETE.
-   Insira a URL com o nome do álbum e o nome da música que deseja excluir, por exemplo: `http://127.0.0.1:8000/albums/nome-do-album/songs/nome-da-musica`.
-   Envie a solicitação.

## Exemplos

Get Albums:
const response = await axios.get("http://127.0.0.1:8000/albums");
// Resposta esperada:
// {data: [{"nome": "Nome Do Album", "ano": "Ano de lançamento", "album_id": , "musicas": []}]}

Get UmAlbum :
const response = await axios.get("http://127.0.0.1:8000/albums/Nome-Do-Album")  
// Resposta esperada:  
// {data: {nome: 'Nome Do Album', ano: 'Ano de lançamento', album_id: 1, musicas: Array(número de músicas no album)}}

Post Album :
const

## Retornos HTTP

200 OK: Solicitação bem-sucedida.  
201 Created: Recurso criado com sucesso.  
204 No Content: Ação realizada com sucesso, sem conteúdo para retornar.  
400 Bad Request: A solicitação possui parâmetros inválidos.  
404 Not Found: O recurso solicitado não foi encontrado.  
500 Internal Server Error: Ocorreu um erro no servidor.

## Integração

Para integrar esta API em sua aplicação, você pode utilizar bibliotecas como Axios para fazer solicitações HTTP aos endpoints da API.

## FAQ
