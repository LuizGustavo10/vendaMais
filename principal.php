<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema Venda+ </title>
    <link rel="stylesheet" href="./recursos/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
  </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark barra">
        <a class="navbar-brand" href="#"> <i class="fa-brands fa-opencart"></i> Venda+ </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Ação</a>
                <a class="dropdown-item" href="#">Outra ação</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais aqui</a>
              </div>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="menu">
                    <li> <a href="./principal.html" class="menu-item"> <i class="fa-solid fa-user"></i>  Usuário </a> </li>
                    <li> <a href="./cidade.html" class="menu-item"> <i class="fa-solid fa-city"></i>  Cidade </a> </li>
                    <li> <a href="./cliente.html" class="menu-item"> <i class="fa-solid fa-users"></i>  Cliente </a> </li>
                    <li> <a href="./funcionario.html" class="menu-item"> <i class="fa-solid fa-briefcase"></i>  Funcionario </a> </li>
                    <li> <a href="./produto.html" class="menu-item"> <i class="fa-solid fa-box-open"></i>  Produto </a> </li>
                    <li> <a href="./venda.html" class="menu-item">  <i class="fa-solid fa-cart-shopping"></i>  Venda </a> </li>
                </ul>    
            </div>
            <div class="col-md-9"> 
                <div class="row">
                    <div class="col-md card">
                        <h3> Cadastro </h3>
                        <form>
                            <div class="form-group">
                              <label>Endereço de email</label>
                              <input type="email" class="form-control" placeholder="Seu email">
                            </div>

                            <div class="form-group">
                              <label>Senha</label>
                              <input type="password" class="form-control" placeholder="Senha">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                          </form>
                    </div>    
                    <div class="col-md card">
                        <h3> Listagem </h3>
                        
                        <table class="table" id="tabela">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Primeiro</th>
                                <th scope="col">Último</th>
                                <th scope="col">Nickname</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
    <script src="./recursos/script.js"></script>
</body>
</html>