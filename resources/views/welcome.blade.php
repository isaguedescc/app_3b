<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Login e Recuperação</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #ff69b4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .page {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.51);
      width: 300px;
      text-align: center;
      display: none;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #c71585;
    }

    .input-group {
      margin-bottom: 15px;
      text-align: left;
    }

    .input-group label {
      font-size: 14px;
      color: #c71585;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .actions .btn {
      width: 100%;
      padding: 10px;
      background-color: #ff69b4;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .actions .btn:hover {
      background-color: #c71585;
    }

    .actions .link {
      display: block;
      margin-top: 10px;
      text-decoration: none;
      color: #c71585;
      font-size: 14px;
    }

    .actions .link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div id="login-page" class="page">
    <h2>Login</h2>
    <form>
      <div class="input-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" required>
      </div>
      <div class="input-group">
        <label for="password">Senha</label>
        <input type="password" id="password" required>
      </div>
      <div class="actions">
        <button type="submit" class="btn">Entrar</button>
        <a href="javascript:void(0)" onclick="showPage('recovery-page')" class="link">Esqueci minha senha</a>
        <a href="javascript:void(0)" onclick="showPage('create-account-page')" class="link">Criar conta</a>
      </div>
    </form>
  </div>

  <div id="recovery-page" class="page">
    <h2>Recuperação de Senha</h2>
    <form>
      <div class="input-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" placeholder="Digite seu CPF" required>
      </div>
      <div class="actions">
        <button type="button" onclick="showPage('reset-password-page')" class="btn">Enviar</button>
        <a href="javascript:void(0)" onclick="showPage('login-page')" class="link">Voltar para o Login</a>
      </div>
    </form>
  </div>

  <div id="reset-password-page" class="page">
    <h2>Redefinir Senha</h2>
    <form>
      <div class="input-group">
        <label for="new-password">Nova Senha</label>
        <input type="password" id="new-password" required>
      </div>
      <div class="input-group">
        <label for="confirm-password">Confirmar Senha</label>
        <input type="password" id="confirm-password" required>
      </div>
      <div class="actions">
        <button type="submit" class="btn">Redefinir Senha</button>
        <a href="javascript:void(0)" onclick="showPage('login-page')" class="link">Voltar para o Login</a>
      </div>
    </form>
  </div>

  <div id="create-account-page" class="page">
    <h2>Criar Conta</h2>
    <form>
      <div class="input-group">
        <label for="cpf-create">CPF</label>
        <input type="text" id="cpf-create" placeholder="Digite seu CPF" required>
      </div>
      <div class="input-group">
        <label for="email-create">E-mail</label>
        <input type="email" id="email-create" required>
      </div>
      <div class="input-group">
        <label for="password-create">Senha</label>
        <input type="password" id="password-create" required>
      </div>
      <div class="input-group">
        <label for="name-create">Nome</label>
        <input type="text" id="name-create" required>
      </div>
      <div class="input-group">
        <label for="phone-create">Telefone</label>
        <input type="text" id="phone-create" required>
      </div>
      <div class="actions">
        <button type="submit" class="btn">Cadastrar</button>
        <a href="javascript:void(0)" onclick="showPage('login-page')" class="link">Voltar para o Login</a>
      </div>
    </form>
  </div>

  <script>
    function showPage(pageId) {
      document.querySelectorAll('.page').forEach(page => page.style.display = 'none');
      document.getElementById(pageId).style.display = 'block';
    }

    window.onload = () => showPage('login-page');
  </script>
</body>

</html>
