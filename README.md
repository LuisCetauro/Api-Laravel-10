## Documentação da API

## Descrição Geral

Essa Api permite explorar a maravilhosa carreira da dupla caipira Tião Carreiro e Pardinho.
Pode procurar qualquer um dos seus albums lançados, bem como músicas separadas.
Podemos Adicionar Músicas à albuns existentes, bem como criar novos albums.

## Requisitos de Autenticação

Para acessar os endpoints da API, não é necessário autenticação no momento.

## EndPoints

Álbuns:
GET /albums

Retorna todos os álbuns disponíveis.
////////////////////////////////
GET /albums/{nome}

Retorna detalhes de um álbum específico pelo nome.
////////////////////////////////
POST /albums

Adiciona um novo álbum.
/////////////////////////
DELETE /albums/{nome}

Deleta um álbum pelo nome.

Músicas:
GET /songs

Retorna todas as músicas disponíveis.
///////////////////////////////
GET /songs/{nome}

Retorna detalhes de uma música específica pelo nome.
//////////////////////////////////
POST /albums/{nomeDoAlbum}/songs

Adiciona uma nova música a um álbum existente.
//////////////////////////////
DELETE /albums/{nomeDoAlbum}/songs/{nomeDaMusica}

Deleta uma música de um álbum pelo nome da música e do álbum.

## Exemplos

## Retornos HTTP

200 OK: Solicitação bem-sucedida.
201 Created: Recurso criado com sucesso.
204 No Content: Ação realizada com sucesso, sem conteúdo para retornar.
400 Bad Request: A solicitação possui parâmetros inválidos.
404 Not Found: O recurso solicitado não foi encontrado.
500 Internal Server Error: Ocorreu um erro no servidor.

## FAQ

## Integração
