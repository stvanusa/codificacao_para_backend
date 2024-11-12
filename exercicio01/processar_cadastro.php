<?php
// Verificar se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receber os dados do formulário
    $livro_id = $_POST['livro_id'];
    $membro_id = $_POST['membro_id'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    // Aqui você pode criar os objetos e processar os dados conforme sua lógica
    
    // Exemplo de exibição dos dados recebidos
    echo "<h2>Dados do Empréstimo</h2>";
    echo "ID do Livro: " . $livro_id . "<br>";
    echo "ID do Membro: " . $membro_id . "<br>";
    echo "Data de Empréstimo: " . $data_emprestimo . "<br>";
    echo "Data de Devolução: " . $data_devolucao . "<br>";
    
    // Aqui, você pode instanciar um objeto da classe 'Emprestimo' e salvar as informações, ou armazenar os dados no banco de dados.
}
?>
