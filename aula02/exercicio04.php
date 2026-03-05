<?php
$opcao = 2; 

switch ($opcao) {
    case 1:
        echo "Opção 1: Abrir conta";
        break;
    case 2:
        echo "Opção 2: Extrato bancário";
        break;
    case 3:
        echo "Opção 3: Sair do sistema";
        break;
    default:
        echo "Erro: Opção inválida!";
}
?>