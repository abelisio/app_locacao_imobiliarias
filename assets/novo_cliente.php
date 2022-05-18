<?php
require_once 'classes/cliente.class.php';

$objCliente = new cliente();
?>

<!doctype html>
<html ⚡>
<head>
  <title>Gestão de Locação</title>
  <meta charset="utf-8">

<link  rel="stylesheet" type="text/css"  media="all" href="css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script></head>
  <!-- Header -->
<amp-sidebar id="sidebar" class="sample-sidebar" layout="nodisplay" side="left">
  <div class="close-menu"php>
    <a on="tap:sidebar.toggle">
      <img src="images/bt-close.png" alt="Close Menu" width="24" height="24" />
    </a>
  </div>
  <a href="dashboard.php"><img src="images/menu-go-jumpers.png" alt="Welcome" width="200" height="43" /></a>
  <div>
    <ul>
      <li><a href="novo_cliente.php" class="link-menu">Clientes</a></li>
      <li><a href="categories.php" class="link-menu">Proprietários</a></li>
    </ul>
  </div>
</amp-sidebar>
<header>
  <div class="go-menu">
    <a on="tap:sidebar.toggle">☰</a>
    <a href="dashboard.php" class="link-logo"><img src="images/go-logo.png" alt="Welcome" width="69" height="430" /></a>
  </div>
  <div class="right-box">
    <span class="go-title">Administration Panel</span>
  </div>    
</header>  
<!-- Header --><body>
  <!-- Main Content -->
  <main class="content">
    <div class="header-list-page">
      <h1 class="title">Products</h1>
      <a href="cadastro_clientes.php" class="btn-action">Novo Cliente</a>
    </div>
    <table class="data-grid">
      <tr class="data-row">
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
        <?php foreach($objCliente->querySelect() as $rst){ ?>
      <tr class="data-row">
        <td class="data-grid-td">
           <span class="data-grid-cell-content"><?= $rst['nome_locatario'] ?></span>
        </td>
      
        <td class="data-grid-td">
        <span class="data-grid-cell-content"><?= $rst['email_locatario'] ?></span>
        </td>

        <td class="data-grid-td">
        <span class="data-grid-cell-content"><?= $rst['telefone_locatario'] ?></span>
        </td>
        <td class="data-grid-td">
          <div class="actions">
          <a  href="editProduct.php?id=<?= $rst['idlocatario'] ?>" </a> </div>
            <span>Edit</span>
            <div class="action delete"></div>
            <a href="deleteProduct.php?dir=db&amp;file=excluir_2&amp;excluir=<?= $rst['idlocatario'] ?>" </a>
            <span>Delete</span>
            </div>
          </div>
          </div>
        </td>
      </tr>
        </td>
        <?php }  ?>
      </tr>
    </table>
  </main>
  <!-- Main Content -->

  <!-- Footer -->
<footer>
	<div class="footer-image">
	  <img src="images/go-jumpers.png" width="119" height="26" alt="Go Jumpers" />
	</div>
	<div class="email-content">
	  <span>go@jumpers.com.br</span>
	</div>
</footer>
 <!-- Footer --></body>
</html>
