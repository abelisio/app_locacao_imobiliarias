<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
    <style>
         .cabecalho {
    grid-area: cabecalho;
    background-color: rgb(88, 12, 150);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-bottom: 5px;
    height: 80px;
    box-shadow: 0px 4px 9px -2px rgba(0, 0, 0, 0.75);
}
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
    <header class="cabecalho_imoveis">
        <h1>Módulo Imóveis</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo vermelho">
                    <h3>Cadastro de Imóveis</h3>
                    <ul>
                        <li><a href="cadastroImoveis.php">Cadastro de Imóveis</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Listar Imóveis</h3>
                    <ul>
                        <li><a href="listarImoveis.php">Listar Imóveis</a></li>
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