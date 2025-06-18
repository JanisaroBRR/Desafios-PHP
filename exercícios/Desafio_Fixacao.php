<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(isset($_POST["ProdName"]) && isset($_POST["ProdCategory"]) && isset($_POST["ProdPrice"]) && isset($_POST["ProdQuant"])) {
        $prodName = $_POST["ProdName"];
        $prodCategory = $_POST["ProdCategory"];
        $prodPrice = $_POST["ProdPrice"];
        $prodQuant = $_POST["ProdQuant"];

        // Aqui você pode adicionar a lógica para salvar os dados do produto
        echo "Produto cadastrado: $prodName <br>" . "Categoria: $prodCategory <br>" . "Preço: $prodPrice <br>" . "Quantidade: $prodQuant <br>";
    }
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <form method="POST">
        <label for="Name" > <input type="text" id="ProdName" name="ProdName" placeholder="Digite o nome do produto" required></label>
        <label for="Categoria" > <input type="text" id="ProdCategory" name="ProdCategory" placeholder="Digite a categoria" required></label>
        <label for="Preco" > <input type="number" id="ProdPrice" name="ProdPrice" placeholder="Digites o preço" required></label>
        <label for="Quantidade" > <input type="number" id="ProdQuant" name="ProdQuant" placeholder="Digite a quantidade disponível" required></label>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>