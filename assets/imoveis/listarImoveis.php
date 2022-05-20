 <?php
  require_once '../classes/imoveis.class.php';

 $objImov = new imoveis();
  if (isset($_POST['deletar'])) {
    if ($objImov->queryDelete($_GET) == 'ok') {
      header('location: cadastroProprietarios.php ');
    } else {
      echo '<script type="text/javascript">alert("Erro: Dados Não cadastrados");</script>';
    }
  }


  ?>

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

   <header class="cabecalho_imoveis">
     <h1>Módulo Imóveis</h1>
   </header>
   <main class="principal">
     <div class="conteudo">

       <main class="content">
         <h2 class="title new-item">Imóveis</h2>
         <div class="col-lg-12" style="text-align: right;">
           <a href="imoveis.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
         </div>
         <div class=" container">
           <div class="row">
             <div class="col">
               <table class="table table-striped" with=300px>
                 <thead class="shadow-sm p-3 mb-5 bg-white rounded">
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">Cód</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">Endereço</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">Proprietário</span>
                   </th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php foreach ($objImov->querySelect() as $dado) {?>
                     <tr class="data-row">
                     <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="codimovel" name="codimovel"><?= $dado['codimovel'] ?></span>
                       </td>
                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="endereco" name="endereco"><?= $dado['endereco'] ?></span>
                       </td>

                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="locador" name="locador"><?= $dado['locador'] ?></span>
                       </td>
                       <td class="data-grid-td">
                         <a href="editImoveis.php?idimovel=<?= $dado['idimovel'] ?>" </a>
                           <button type="button" class="btn btn-primary" name="btAtualiza" id="idimovel">Editar</button>
                       </td>

                       <td class="data-grid-td">
                         <a href="deleteImoveis.php?idimovel=<?= $dado['idimovel'] ?>" </a>
                           <button type="submit" value="deletar" class="btn btn-danger" name="deletar" >Deletar</button>
                       </td>

                     <?php }  ?>
                     </tr>
                 </tbody>

               </table>
             </div>
           </div>
         </div>
         <div class="col-lg-12" style="text-align: right;">
           <a href="imoveis.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
         </div>
       </main>
     </div>
   </main>


 </body>

 </html>
