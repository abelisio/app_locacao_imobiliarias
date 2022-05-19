<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
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
                <div class="modulo roxo">
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
            
            <div class="col-lg-12" style="text-align: right;">
          <a href="index.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
    </div>
        </div>
        
    </main>
    
    <footer class="rodape">
        Adriano S. Belísio © <?= date('Y'); ?>
    </footer>
</body>
</html>