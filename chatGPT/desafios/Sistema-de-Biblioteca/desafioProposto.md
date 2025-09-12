# Sistema de Biblioteca

### Modelar uma biblioteca onde usuários podem emprestar e devolver livros, aplicando bem os conceitos de classes, herança, encapsulamento e polimorfismo.

1. Classes principais
    - Livro -> titulo, autor, ano de pub, status(true -> disponivel // false -> emprestado).
    - Usuario -> nome, email, lista de livros emprestados.
    - Biblioteca -> catalogo de livros, cadastro de usuarios, operacoes de emprestimo e devolucao.

2. Regras de negocio
    - Um livro so pode ser emprestado para um usuario de cada vez.
    - Um usuario pode ter no maximo 3 livros emprestados ao mesmo tempo.
    - Se tentar violar uma regra, lance uma excecao (Exception).

4. Extra
    - Criar uma subclass revista que herda de Livro, mas tenha edicao e mes como atributos extra.
    - Criar metodo exibirInformacoes() que use polimorfismo para mostrar detalhes diferentes para Livro e Revista.
