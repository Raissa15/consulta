<?php
require_once("controller/ControllerCadastro.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sistema Web 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>



</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                        <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-dark">
                    <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="consulta.php">Consulta</a>
                </li>
</ul>
</div>
</div>
</nav>
</div>
</div>





<div claas="row">
    <div class = "card mb-3 col">
        <div class="card-body">
            <h5 class="card-title">Editar - Agendamento e Potenciais Clientes</h5>
            <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
            <p>
                <?php
                    $controller = new ControllerCadastro();
                    $resultado = $controller->listar($_GET['id']);
                ?>
               <form method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
                    <div class="form-group">
                        <label for = "exampleFormControlInput1">Email:</label>
                        <input type ="text" class="form-control" name="txtEmail" requered id="txtEmail" avalue="<?php echo $resultado[0]['email']; ?>"> 
                    </div>

                    <div class="form-group">
                        <label for = "exampleFormControlInput1">Senha:</label>
                        <input type ="text" class="form-control" name="txtSenha" requered id="txtSenha" avalue="<?php echo $resultado[0]['senha']; ?>"> 
                    </div>

                    <div class="form-group">
                        <label for = "exampleFormControlInput1">Endereço:</label>
                        <input type ="text" class="form-control" name="txtEndereco" requered id="txtEndereco" avalue="<?php echo $resultado[0]['endereco']; ?>"> 
                    </div>

                    <div class="form-group">
                        <label for = "exampleFormControlInput1">Bairro:</label>
                        <input type ="text" class="form-control" name="txtBairro" requered id="txtBairro" avalue="<?php echo $resultado[0]['bairro']; ?>"> 
                    </div>

                    <div class="form-group">
                        <label for = "exampleFormControlInput1">CEP:</label>
                        <input type ="text" class="form-control" name="txtCep" requered id="txtCep" avalue="<?php echo $resultado[0]['cep']; ?>"> 
                    </div>

                    <div class="form-group">
                        <label for = "exampleFormControlInput1">Cidade:</label>
                        <input type ="text" class="form-control" name="txtCidade" requered id="txtCidade" avalue="<?php echo $resultado[0]['cidade']; ?>"> 
                    </div>
                    
                    <div class="form-group">
                        <label for = "exampleFormControlInput1">Estado:</label>
                        <select class="form-control" requered name="cboEstado" id="cboEstado">
                            <option <?php if($resultado[0]['estado'] == "AC"){echo "selected"; } ?>> AC </option>
                            <option <?php if($resultado[0]['estado'] == "AL"){echo "selected"; } ?>> AL </option> 
                            <option <?php if($resultado[0]['estado'] == "AP"){echo "selected"; } ?>> AP </option>
                            <option <?php if($resultado[0]['estado'] == "AM"){echo "selected"; } ?>> AM </option>
                            <option <?php if($resultado[0]['estado'] == "BA"){echo "selected"; } ?>> BA </option>
                            <option <?php if($resultado[0]['estado'] == "CE"){echo "selected"; } ?>> CE </option>
                            <option <?php if($resultado[0]['estado'] == "ES"){echo "selected"; } ?>> ES </option>
                            <option <?php if($resultado[0]['estado'] == "GO"){echo "selected"; } ?>> GO </option>
                            <option <?php if($resultado[0]['estado'] == "MA"){echo "selected"; } ?>> MA </option>
                            <option <?php if($resultado[0]['estado'] == "MT"){echo "selected"; } ?>> MT </option>
                            <option <?php if($resultado[0]['estado'] == "MS"){echo "selected"; } ?>> MS </option>
                            <option <?php if($resultado[0]['estado'] == "MG"){echo "selected"; } ?>> MG </option>
                            <option <?php if($resultado[0]['estado'] == "PA"){echo "selected"; } ?>> PA </option>
                            <option <?php if($resultado[0]['estado'] == "PB"){echo "selected"; } ?>> PB </option>
                            <option <?php if($resultado[0]['estado'] == "PR"){echo "selected"; } ?>> PR </option>
                            <option <?php if($resultado[0]['estado'] == "PE"){echo "selected"; } ?>> PE </option>
                            <option <?php if($resultado[0]['estado'] == "PI"){echo "selected"; } ?>> PI </option>
                            <option <?php if($resultado[0]['estado'] == "RJ"){echo "selected"; } ?>> RJ </option>
                            <option <?php if($resultado[0]['estado'] == "MT"){echo "selected"; } ?>> RN </option>
                            <option <?php if($resultado[0]['estado'] == "MS"){echo "selected"; } ?>> RS </option>
                            <option <?php if($resultado[0]['estado'] == "MG"){echo "selected"; } ?>> RO </option>
                            <option <?php if($resultado[0]['estado'] == "PA"){echo "selected"; } ?>> RR </option>
                            <option <?php if($resultado[0]['estado'] == "PB"){echo "selected"; } ?>> SC </option>
                            <option <?php if($resultado[0]['estado'] == "PR"){echo "selected"; } ?>> SP </option>
                            <option <?php if($resultado[0]['estado'] == "PE"){echo "selected"; } ?>> SE </option>
                            <option <?php if($resultado[0]['estado'] == "PI"){echo "selected"; } ?>> TO </option>
                            <option <?php if($resultado[0]['estado'] == "RJ"){echo "selected"; } ?>> DF </option>
                        </select>
                    </div>
                    <button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
                </form>
            </p>
</div>
</div>
</div>
                </div>
