# API PHP COM SERVIDOR JSON

### Testes de uma API, em PHP e utilizando um arquivos JSON como base de dados.

Um estudo sobre criação de API, utilizando php como linguagem de back-end, e manipulando um arquivo JSON, que contém um objeto JSON.

Eu, há muito tempo, queria criar uma aplicação de pequeno porte, somente para fazer coisas básicas e simples, tipo, um cadastro de musicas de um determinado artista, e outras informações dele. E que pudesse disponibilizar atrasvés de uma api, e que esta api não tivesse dependencias, como frameworks, tudo na unha mesmo. E que também não utilizasse nenhum banco de dados que tivesse que instalar, ou que não fosse generico o suficiente.
E até que encontrei um tuto no youtube, no canal ![#DEV PLENO](https://www.youtube.com/watch?v=7s5_TmBqZR8), que me retratou toda essa funcionalidade. Existem outras formas de se fazer isso, porém, por mais simples que elas sejam, sempre tinha uma dependencia acoplada (no caso o node.js).
Vou seguir o exemplo desta aplicação até o final e depois será feita uma transformação e tanto para se adequar a tudo que está nos meus planos. Tenho muitas idéias a seguir com este começo de aplicação que servirá como a lapidação de uma roda.

A inteção é criar essa api para ser hospedada em algum servidor php gratuito para ficar disponibilizando estas informações que serão gravadas neste arquivo JSON, através de uma aplicação que estará rodando no pages do github, tudo nativamente e sem custos (financeiros).

## Iniciando o Desenvlvimento:

### Passo #02 - Desenvolvimento do index.php


### Passo #1 - Construir o Exemplo que está no canal:
- Iniciando a video-aula "https://www.youtube.com/watch?v=7s5_TmBqZR8"
- Dois arquivos serão criados: db.json e index.php;
- O arquivos db.json, será nosso banco de dados e terá um ojeto json de séries e generos;
- O arquivos index.php será desenvolvido o codigo da api;
