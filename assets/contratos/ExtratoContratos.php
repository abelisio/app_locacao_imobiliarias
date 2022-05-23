 <?php
  require_once '../classes/contratos.class.php';

 $objCont = new contratos();

  if (isset($_POST['deletar'])) {
    if ($objCont->queryDelete($_GET) == 'ok') {
      header('location: cadastroContratos.php ');
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

   <header class="cabecalho_contratos">
     <h1>Módulo Contratos</h1>
   </header>
   <main class="principal">
     <div class="conteudo">

       <main class="content">
         <h2 class="title new-item">Extratos do Contratos</h2>
         <div class="col-lg-12" style="text-align: right;">
           <a href="contratos.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
         </div>
         <div class=" container">
             <div class="text-center">
           <div class="row">
             <div class="col">
               <table class="table table-striped" with=300px>
                 <thead class="shadow-sm p-3 mb-5 bg-white rounded">
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content"  >Cód. Imóvel</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content" >Proprietário</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">Tx de Adiminitração (%)</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Cliente</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Data Início</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Data Fim</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Valor do aluguel</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Valor do condomínio</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Valor do IPTU</span>
                   </th>
                   <th class="data-grid-th">
                       <span class="data-grid-cell-content">Contrato Ativo</span>
                   </th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php foreach ($objCont->querySelect() as $dado) {?>
                     <tr class="data-row">
                     <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="codimovel" name="codimovel"><?= $dado['codimovel'] ?></span>
                       </td>
                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="proprietario" name="proprietario"><?= $dado['proprietario'] ?></span>
                       </td>

                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="taxa_adm" name="taxa_adm"><?= $dado['taxa_adm'] ?></span>
                       </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="cliente" name="cliente"><?= $dado['cliente'] ?></span>
                         </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="dataini" name="dataini"><?= $dado['dataini'] ?></span>
                         </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="datafim" name="datafim"><?= $dado['datafim'] ?></span>
                         </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="valor_aluguel" name="valor_aluguel"><?= $dado['valor_aluguel'] ?></span>
                         </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="valor_cond" name="valor_cond"><?= $dado['valor_cond'] ?></span>
                         </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="valor_iptu" name="valor_iptu"><?= $dado['valor_iptu'] ?></span>
                         </td>
                         <td class="data-grid-td">
                             <span class="data-grid-cell-content" id="estado_contrato" name="estado_contrato"><?= $dado['estado_contrato'] ?></span>
                         </td>
                       <td class="data-grid-td">
                         <a href="editContratos.php?idcontrato=<?= $dado['idcontrato'] ?>" </a>
                           <button type="button" class="btn btn-primary" name="btAtualiza" id="idcontrato">Editar</button>
                       </td>
                       <td class="data-grid-td">
                         <a href="deleteContratos.php?idcontrato=<?= $dado['idcontrato'] ?>" </a>
                           <button type="submit" value="deletar" class="btn btn-danger" name="deletar" >Deletar</button>
                       </td>

                     <?php }  ?>
                     </tr>
                 </tbody>

               </table>
             </div>
           </div>
             </div>
         </div>
         <div class="col-lg-12" style="text-align: right;">
           <a href="contratos.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
         </div>
       </main>
     </div>
   </main>


 </body>

 </html>
