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
      <form name="formulario" action="#">
        <div class="input-field">
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Insira Seu Nome"
          />
          <div class="underline"></div>
        </div>

        <div class="input-field">
          <input
            type="text"
            name="email"
            id="email"
            placeholder="Insira Seu Email"
          />
          <div class="underline"></div>
        </div>

        <div class="input-field">
          <input
            type="date"
            name="birthDate"
            id="birthDate"
            placeholder="Data de Nascimento"
          />
          <div class="underline"></div>
        </div>

        <div class="input-field">
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Insira Sua Senha"
          />
          <div class="underline"></div>
        </div>
        <div class="input-field">
          <input
            type="password"
            name="confirm-password"
            id="confirm-password"
            placeholder="Comfirme Sua Senha"
          />
          <div class="underline"></div>
        </div>
		<div class="input-field">
			<input
			  type="text"
			  name="cell"
			  id="cell"
			  placeholder="Insira Seu Telefone"
			/>
			<div class="underline"></div>
		</div>
		<div class="input-field">
			<input
			  type="text"
			  name="login"
			  id="login"
			  placeholder="Insira Seu Login"
			/>
			<div class="underline"></div>
		</div>
		<div class="input-field">
			<input
			  type="text"
			  name="cep"
			  id="cep"
			  placeholder="Insira Seu CEP"
			/>
			<div class="underline"></div>
		</div>
		<div class="input-field">
			<input
			  type="text"
			  name="cpf"
			  id="cpf"
			  placeholder="Insira Seu CPF"
			/>
			<div class="underline"></div>
		</div>
      </form>
    </main>
  </body>
</html>
