<?php 
class Biblioteca
{
    private array $catalogo = [];
    private array $usuarios = [];
    private array $emprestimos = [];


// FUNCOES LIVROS
public function registrarLivro(Livro $livro): void
{
    $this->catalogo[$livro->getId()] = $livro;
}
public function removerLivro(string $livroId): void
{
    unset($this->catalogo[$livroId]);
}
public function getCatalogo(): array
{
    return $this->catalogo;
}

// FUNCOES USUARIOS

public function registrarUsuario(Usuario $usuario): void
{
    $this->usuarios[$usuario->getId()] = $usuario;
}
public function removerUsuario(string $usuario): void
{
    unset($this->catalogo[$usuario]);
}
public function getUsuarios(): array
{
    return $this->usuarios;
}

// FUNCOES EMPRESTIMOS

public function emprestar(string $livroId, string $userId): void
{
    if(!isset($this->catalogo[$livroId])) {
        throw new \RuntimeException("Livro $livroId nao encontrado!");
    }
    if(!isset($this->usuarios[$userId])) {
        throw new \RuntimeException("Usuario $userId nao encontrado!");
    }

    $livro = $this->catalogo[$livroId];
    $usuario = $this->usuarios[$userId];

    if (!$livro->isDisponivel()){
        throw new \RuntimeException("Livro {$livro->getId()} ja emprestado!");
    }

    if(!$usuario->podeEmprestar()){
        throw new \RuntimeException("Usuario {$usuario->getId()} atingiu o limite de emprestimos!");
    }

    $livro->emprestar();
    $usuario->registrarEmprestimo($livroId);

}
}

?>