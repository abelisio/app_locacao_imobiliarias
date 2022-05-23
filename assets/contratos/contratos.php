<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
    <style>
            @media (max-width: 769px) {
                .cvmobile-bt-big > span {
                    font-size: 12px !important;
                }
            }
            .cvmobile-topo-plus {
                background-color: transparent !important;
            }
            .logoIncial {
                text-align: center;
                margin: 80px 10px;
            }
            @media (max-width: 769px) {
                .logoIncial {
                    margin: 50px 25px 25px 25px;
                }
                .logoIncial img {
                    width:80%;
                }
            }
        </style>
</head>
<body>
    <header class="cabecalho_contratos">
        <h1>Módulo Contratos</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo vermelho">
                    <h3>Cadastro de Contratos</h3>
                    <ul>
                        <li><a href="cadastroContratos.php">Cadastro de Contratos</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Listar Contratos</h3>
                    <ul>
                        <li><a href="listarContratos.php">Listar Contratos</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Listar Mensalidades</h3>
                    <ul>
                        <li><a href="listarMensalidades.php">Listar Mensalidades</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Extrato Adminitração</h3>
                    <ul>
                        <li><a href="ExtratoContratos.php">Extrato Adminitração</a></li>
                    </ul>
                </div>
            </nav>
            
            <div class="col-lg-12" style="text-align: right;">
          <a href="../index.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
    </div>
        </div>
        
    </main>
    
    <footer class="rodape">
        Adriano S. Belísio © <?= date('Y'); ?>
    </footer>
</body>
</html>