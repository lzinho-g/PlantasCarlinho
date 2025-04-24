<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantas Carlinhos - Admin Login</title>
    <link rel="stylesheet" href="css/admin.css">
  </head>
 
  <body>
    <header class="header">
      <!-- LOGO -->
      <div class="logo">
        <div class="logo-bg">
          <img src="assets/logoplanta.svg">
        </div>
        <h1>Plantas Carlinhos</h1>
      </div>

      <!-- NAVEGAÇÃO -->
      <nav>
        <a href="index.php">Loja</a>
        <a href="contato.php">Contato</a>
        <a href="sobre.php">Sobre</a>
      </nav>
    </header>

    <!-- CARTÃO CENTRAL -->
    <div class="container">
      <div class="hero-section">
        <div class="login-card">
          <h2 class="login-title">Olá!</h2>
          <p class="login-subtitle">Entre com suas credenciais</p>

          <!-- <div class="input-field">
            <img src="assets/email.svg" class="input-icon email-icon">
            <input
              type="email"
              placeholder="Endereço de email"
              class="input-text">
          </div>

          <div class="input-field">
            <img src="assets/cadeado.svg" class="input-icon password-icon">
            <input type="password" placeholder="Senha" class="input-text">
          </div> -->

          <!-- <a href="gerenciamento.html">
            <button class="login-button">Login</button>
          </a> -->
          <form action="login.php" method="POST">
            <div class="input-field">
              <img src="assets/email.svg" class="input-icon email-icon">
              <input type="email" name="email" placeholder="Endereço de email" class="input-text" required>
            </div>

            <div class="input-field">
              <img src="assets/cadeado.svg" class="input-icon password-icon">
              <input type="password" name="senha" placeholder="Senha" class="input-text" required>
            </div>

            <button type="submit" class="login-button">Login</button>
          </form>
          <a href="#" class="forgot-password">Esqueci a senha</a>
        </div>
      </div>
    </div>

  </body>


</html>

