 <?php
  require_once '../classes/cliente.class.php';

  $objCliente = new cliente();

  if (isset($_POST['deletar'])) {
    if ($objCliente->queryDelete($_GET) == 'ok') {
      header('location: novo_cliente.php');
    } else {
      echo '<script type="text/javascript">alert("Erro em Apagar");</script>';
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

   <header class="cabecalho_clientes">
     <h1>Módulo Clientes</h1>
   </header>
   <main class="principal">
     <div class="conteudo">

       <main class="content">
         <h2 class="title new-item">Editar clientes</h2>
         <div class="col-lg-12" style="text-align: right;">
           <a href="clientes.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
         </div>
         <div class=" container">
           <div class="row">
             <div class="col">
               <table class="table table-striped" with=300px>
                 <thead class="shadow-sm p-3 mb-5 bg-white rounded">
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">ID</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">Name</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">E-mail</span>
                   </th>
                   <th class="data-grid-th">
                     <span class="data-grid-cell-content">Telefone</span>
                   </th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php foreach ($objCliente->querySelect() as $dado) { ?>
                     <tr class="data-row">
                     <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="idlocatario" name="idlocatario"><?= $dado['idlocatario'] ?></span>
                       </td>
                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="nome_locatario" name="nome_locatario"><?= $dado['nome_locatario'] ?></span>
                       </td>

                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="email_locatario" name="email_locatario"><?= $dado['email_locatario'] ?></span>
                       </td>

                       <td class="data-grid-td">
                         <span class="data-grid-cell-content" id="telefone_locatario" name="telefone_locatario"><?= $dado['telefone_locatario'] ?></span>
                       </td>

                       <td class="data-grid-td">
                         <a href="editCliente.php?idlocatario=<?= $dado['idlocatario'] ?>" </a>
                           <button type="button" class="btn btn-primary" name="btAtualiza" id="idlocatario">Editar</button>
                       </td>

                       <td class="data-grid-td">
                         <a href="deleteCliente.php?idlocatario=<?= $dado['idlocatario'] ?>" </a>
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
           <a href="clientes.php" class="action back"> <button type="button" class="btn btn-secondary">Voltar</button> </a>
         </div>
       </main>
     </div>
   </main>

   <footer class=" rodape">
     Adriano S. Belísio © <?= date('Y'); ?>
   </footer>
 </body>

 </html>
