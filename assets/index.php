<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <title></title>
</head>
<body>
    <header class="cabecalho">
        <h1>Sistema de Gestão de Locação para Imobiliárias</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo vermelho">
                    <h3>Módulo Clientes</h3> 
                    <ul>
                        <li><a href="clientes.php?dir=teste&file=teste">Exercício A</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo Proprietários</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
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