<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Prova php</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Processamento de vendas com php</h1> 
    <?php
    $valorcompra = $_POST["txtvalorcompra"];

    $idade = $_POST["idade"];

    $cartao = 0;
    
    if (isset($_POST["checkbox"])){
      $cartao = $_POST["checkbox"];
      $descontocompra3 = $valorcompra * 10/100; 
      $valorcompra - $descontocompra3;
    }
    else{
      $descontocompra3 = 0;
    }

    if ($idade == 1 ){
      $descontocompra = $valorcompra * 5/100; //calculo 5% da compra
    $valorcompra - $descontocompra;
    }
    else{
      $descontocompra = 0;
    }


    if ($idade == 2 ){
        $descontocompra2 = $valorcompra * 7/100; //calculo 5% da compra
      $valorcompra - $descontocompra2;
      }
      else{
        $descontocompra2 = 0;
      }

    $descontoidade = $descontocompra2 + $descontocompra;
    $descontofinal = $descontocompra + $descontocompra2 + $descontocompra3;
    $valorfinal = $valorcompra - $descontofinal;

    echo "total da compra R$ $valorcompra <br>
            Desconto por idade R$ $descontoidade <br> 
            Desconto total R$ $descontofinal <br>
            Desconto por usar cartão fidelidade R$ $descontocompra3 <br>
          <br>
          Valor total a pagar R$ $valorfinal <br>";

    ?>
  <a href="./index.html">VOLTAR</a>
        </div>
</body>
</html>