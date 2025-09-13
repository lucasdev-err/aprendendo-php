<?php 

class Usuario
{
    private static int $contador = 1;
    private string $id;
    private array $livrosEmprestados = [];
    private int $limite = 3;

    public function __construct(
        public readonly string $nome,
        public readonly string $email,
    ) 
    {
        $this->id = "U" . self::$contador++;
    }

    public function getId(): string 
    {
        return $this->id;
    }
    
    public function podeEmprestar():bool 
    {
        return count($this->livrosEmprestados) < $this->limite;
    }

    public function registrarEmprestimo(string $livroId):void
    {
        if(!$this->podeEmprestar()){
            throw new \RuntimeException("Limite atingido!");
        }
        $this->livrosEmprestados[] = $livroId;
    }

    public function registrarDevolucao(string $livroId):void
    {
        unset($this->livrosEmprestados[$livroId]);
    }
}

?>