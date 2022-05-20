<form action="" method="get">
    <p>Digite <img src="images/1.png" alt="Número 1" width="32px"> : Celsius para Farenheit</p>
    <p>Digite <img src="images/2.png" alt="Número 2" width="32px"> : Farenheit para Celsius</p>
    <label for="opt">Digite a opção desejada:</label>
    <input class="form-control mb-3" type="text" name="opt" id="opt" maxlength="1" value="<?= (!empty($_GET['opt'])) ? $_GET['opt'] : '' ?>" />
    <label for="number">Temperatura:</label>
    <input class="form-control" type="text" name="number" id="number" maxlength="3" value="<?= (!empty($_GET['number'])) ? $_GET['number'] : '' ?>" />
    <input class="btn btn-success mt-3" type="submit" name="submit" value="Calcular" />
</form> 
<?php

  @$op = $_GET['opt'];
  @$temp = $_GET['number'];
  
  if($op == 1){
   echo "<div class='alert alert-primary mt-3' role='alert'>Temperatura em Farenheit: ".CparaF($temp)."</div>";
  }else if($op == 2){
   echo "<div class='alert alert-success mt-3' role='alert'>Temperatura em Celsius: ".FparaC($temp)."</div>";
   echo "<div class='alert alert-info mt-3' role='alert'>Temperatura em Kelvin: ".CparaK($temp)."</div>";
  }else if(!empty($op)){
   echo "<div class='alert alert-danger mt-3' role='alert'>Opção inválida</div>";
  }
  
  function CparaF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FparaC($temperatura){
   return ($temperatura-32)*5/9;
  }
  function CparaK($temperatura){
    return (FtoC($temperatura) + 273);
   }
