<?php

include 'conexao.php';

$buscar_cadastros = "SELECT * FROM produtos";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>descricao</th>
                    <th>marca</th>
                    <th>estoque</th>
                    <th>preco</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($receber_cadastros = mysqli_fetch_array($query_cadastros)){
                    $id = $receber_cadastros['id'];
                    $descricao = $receber_cadastros['descricao'];
                    $marca = $receber_cadastros['marca'];
                    $estoque = $receber_cadastros['estoque'];
                    $preco = $receber_cadastros['preco'];
                    	
                ?>

                <tr>
                    <td scope="row"><?php echo $id; ?></td>
                    <td><input type="text" name="descricao" value="<?php echo $descricao; ?>"> </td>
                    <td><input type="text" name="marca" value="<?php echo $marca; ?>"> </td>
                    <td><input type="text" name="estoque" value="<?php echo $estoque; ?>"> </td>
                    <td><input type="text" name="preco" value="<?php echo $preco; ?>"> </td>
                    <td> 

                        <form action="excluir.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>

                <?php }; ?>

                <tr>
                    <form action="cadastro.php" method="post">
                        
                        <td></td>
                        <td><input type="text" name="descricao"></td>
                        <td><input type="text" name="marca"></td>
                        <td><input type="text" name="estoque"></td>
                        <td><input type="text" name="preco"></td>
                        <td><input type="submit" value="Cadastro"></td>

                    </form>

                </tr>

            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>