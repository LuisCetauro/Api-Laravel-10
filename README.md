## Documentação da API

## Descrição Geral

Essa Api permite explorar a maravilhosa carreira da dupla caipira Tião Carreiro e Pardinho.
Pode procurar qualquer um dos seus albums lançados, bem como músicas separadas.
Podemos Adicionar Músicas à albuns existentes, bem como criar novos albums.

## Requisitos de Autenticação

Para acessar os endpoints da API, não é necessário autenticação no momento.

## EndPoints

Álbuns
GET /albums

Retorna todos os álbuns disponíveis.
GET /albums/{nome}

Retorna detalhes de um álbum específico pelo nome.
POST /albums

Adiciona um novo álbum.
DELETE /albums/{nome}

Deleta um álbum pelo nome.
Músicas
GET /songs

Retorna todas as músicas disponíveis.
GET /songs/{nome}

Retorna detalhes de uma música específica pelo nome.
POST /albums/{nomeDoAlbum}/songs

Adiciona uma nova música a um álbum existente.
DELETE /albums/{nomeDoAlbum}/songs/{nomeDaMusica}

Deleta uma música de um álbum pelo nome da música e do álbum.

## Exemplos

## Retornos HTTP

## FAQ

## Integração
