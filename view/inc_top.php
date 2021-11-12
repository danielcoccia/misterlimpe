<?php
include_once '../service/ServiceMenu.php';
$service = new ServiceMenu();
$menu = $service->getMenu();
?>
 <div style="height: 2px; width: 100% ;  background-color:red">  </div>
  <div class="row border border-danger" style="text-align: center; margin: 0">
    <div class="col-md-3" style="margin: 10px">
      <a  href="home.php"><img src="../images/logo.png" width="200px"></a>
    </div>

    <div class="col-md-5" style="margin-top:40px" >
      <form action="produtosPequisar.php" method="post">
        <div class="input-group mr-5">
          <div class="input-group-append ">
            <button type="submit" class="btn btn-primary"  style="vertical-align: middle">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
            </button>
          </div>
          <input name="pesquisa" type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="button-addon2">              
        </div>
      </form>
    </div>

    <div class="col-md-3" style="margin-top:40px">
      <span>
         <img alt="" src="../images/ico_zap.png" width="50px">(61) 99944 - 7111
      </span>
    </div>
  </div>

<nav class="navbar navbar-expand-md navbar-dark" style="padding: 10; background-color:#2255D6;">   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0;">      
      <ul class="navbar-nav ml-auto" >
        <li class="">
          <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="empresa.php">EMPRESA </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
            PRODUTOS 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php             
            while ($dados = $menu->fetch_array()) {
              echo '<a class="dropdown-item" href="produtos.php?cat='.$dados['id'].'">'. $dados['categoria'] .'</a>';
              echo '<div class="dropdown-divider"></div>';
            }
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">  CONTATO </a>
        </li>

      </ul>
       


      <!--
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>-->
    </div>
  </nav>  
  <div style="height: 3px; width: 100% ;  background-color:red">  </div>

