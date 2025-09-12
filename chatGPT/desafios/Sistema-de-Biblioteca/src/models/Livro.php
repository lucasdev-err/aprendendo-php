<?php 

class Livro 
{
    private static int $contador = 1;
    private string $id;
    private bool $disponivel;

    public function __construct(
        public readonly string $titulo,
        public readonly string $autor,
        public readonly int $anoLancamento,
    )
    {
        $this->id = "L" . self::$contador++;
        $this->disponivel = true;
    }

    public function getId(): string {
        return $this->id;
    }

    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function emprestar(): void {
        if (!$this->disponivel){
            throw new \Exception("Livro ja esta emprestado!");
        }
        $this->disponivel = false;
    }

    public function devolver():void {
        if ($this->disponivel){
            throw new \Exception("Livro ja esta disponivel!");
        }
        $this->disponivel = true;
    }
}

?>