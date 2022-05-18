<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <title></title>
</head>
<body>
    <header class="cabecalho_clientes">
        <h1>Módulo Clientes</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Cadastro de  Clientes</h3>
                    <ul>
                        <li><a href="cadastro_clientes.php">Cadastro de Clientes</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Listar Clientes</h3>
                    <ul>
                        <li><a href="novo_cliente.php">Listar de Proprietários</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>Módulo Imóveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo Contratos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    
    <footer class="rodape">
        Adriano S. Belísio © <?= date('Y'); ?>
    </footer>
</body>
</html>