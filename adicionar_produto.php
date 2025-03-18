<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $stmt = $conn->prepare("INSERT INTO produtos (nome, preco, descricao) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $preco, $descricao]);

    echo "Produto adicionado com sucesso!";
}
?>

<form method="POST">
    <label>Nome do Produto:</label>
    <input type="text" name="nome" required><br>
    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" required><br>
    <label>Descrição:</label>
    <textarea name="descricao"></textarea><br>
    <button type="submit">Adicionar Produto</button>
</form>