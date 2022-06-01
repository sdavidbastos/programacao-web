<?php

function menssage_error(){
  echo "<span>Campo inválid</span>";
}

function isEmpty($value){
  return !strlen($value);
}

function validate_fields($fields)
{
  $errors = array(); 
  foreach($fields as $key => $value){
    if(isEmpty($value)){
      $errors[] = $key;
    }
  }
  return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fields = array(
    'name' => $_POST["name"],
    'email' => $_POST["email"],
    'birth_date' => $_POST["birth-date"],
    'password' => $_POST["password"],
    'confirm_password' => $_POST["confirm-password"],
    'cell' => $_POST["cell"],
    'login' => $_POST["login"],
    'cep' => $_POST["cep"],
    'cpf' => $_POST["cpf"],
  );

  $errors = validate_fields($fields);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro David</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <main class="container">
    <h2>Formulário</h2>
    <form name="formulario" action="" method="POST">
      <div class="input-field">
        <input type="text" name="name" id="name" placeholder="Insira Seu Nome" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("name", $errors)){
              menssage_error();
            }
          }
        ?>
      </div>

      <div class="input-field">
        <input type="text" name="email" id="email" placeholder="Insira Seu Email" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("email", $errors)){
              menssage_error();
            }
          }
        ?>
      </div>

      <div class="input-field">
        <input type="date" name="birth-date" id="birth-date" placeholder="Data de Nascimento" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("birth_date", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>

      <div class="input-field">
        <input type="password" name="password" id="password" placeholder="Insira Sua Senha" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("password", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>
      <div class="input-field">
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Comfirme Sua Senha" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("confirm_password", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>
      <div class="input-field">
        <input type="text" name="cell" id="cell" placeholder="Insira Seu Telefone" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("cell", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>
      <div class="input-field">
        <input type="text" name="login" id="login" placeholder="Insira Seu Login" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("login", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>
      <div class="input-field">
        <input type="text" name="cep" id="cep" placeholder="Insira Seu CEP" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("cep", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>
      <div class="input-field">
        <input type="text" name="cpf" id="cpf" placeholder="Insira Seu CPF" />
        <div class="underline"></div>
        <?php 
          if($errors){
            if(array_search("cpf", $errors) >= 0){
              menssage_error();
            }
          }
        ?>
      </div>
      <input type="submit" value="continue" />
    </form>
  </main>
</body>

</html>