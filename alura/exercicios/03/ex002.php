<?php 

// Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;

enum TipoConta {
    case Corrente;
    case Investimento;
    case Poupanca;
    case Universitaria;
    
    public function possuiTaxas(): bool
    {
        return match($this){
            TipoConta::Corrente, TipoConta::Investimento => true,
            TipoConta::Poupanca, TipoConta::Universitaria => false
        };
    }
}

?>