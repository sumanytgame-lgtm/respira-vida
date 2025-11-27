<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Respira Vida — Login</title>

  <style>
    :root{
      --accent:#14c8b6;
      --bg:#0f1720;
      --bg2:#06383a;
      --text:#0d1a1d;
      --light:#ffffff;
    }

    *{
      box-sizing: border-box;
      font-family: "Inter", Arial, sans-serif;
    }

    body{
      margin:0;
      background: linear-gradient(180deg, var(--bg), var(--bg2));
      padding:40px 10px;
      display:flex;
      justify-content:center;
      min-height:100vh;
    }

    header{
      width:100%;
      max-width:680px;
      background:rgba(255,255,255,0.08);
      backdrop-filter: blur(6px);
      color:#fff;
      padding:20px 0;
      text-align:center;
      border-radius:14px;
      border:1px solid rgba(255,255,255,0.1);
      margin-bottom:25px;
      box-shadow:0 8px 25px rgba(0,0,0,0.4);
    }

    .btn-voltar-top{
      position:absolute;
      top:22px;
      right:22px;
      background:var(--accent);
      padding:8px 18px;
      color:#022524;
      text-decoration:none;
      border-radius:6px;
      font-weight:600;
      border:none;
    }

    .card{
      width:100%;
      max-width:500px;
      background:#ffffff;
      padding:30px 25px;
      border-radius:14px;
      box-shadow:0 8px 24px rgba(0,0,0,0.25);
    }

    /* abas */
    .tabs{
      display:flex;
      justify-content:center;
      margin-bottom:20px;
    }
    .tab{
      padding:10px 40px;
      cursor:pointer;
      background:#e8f8f6;
      color:#0d3837;
      border-radius:6px 6px 0 0;
      border:1px solid transparent;
      margin-right:4px;
      font-weight:700;
      transition:.2s;
    }
    .tab.active{
      background:#ffffff;
      border:1px solid var(--accent);
      border-bottom:2px solid #fff;
      color:var(--accent);
    }

    /* formulário */
    h2{
      text-align:center;
      color:var(--accent);
      margin-bottom:18px;
      font-size:24px;
    }

    label{
      font-size:14px;
      font-weight:600;
      color:#0d1a1d;
    }

    input{
      width:100%;
      padding:12px;
      border:2px solid #c6ece9;
      border-radius:6px;
      margin-top:6px;
      margin-bottom:14px;
      font-size:15px;
      transition:.2s;
    }

    input:focus{
      border-color:var(--accent);
      outline:none;
    }

    button{
      width:100%;
      padding:12px;
      margin-top:10px;
      background:var(--accent);
      color:#022524;
      font-size:16px;
      border:none;
      border-radius:6px;
      font-weight:700;
      cursor:pointer;
      transition:.2s;
    }

    button:hover{
      background:#10b1a3;
    }

    .btn-link{
      margin-top:15px;
      background:#0f1720;
      color:#fff;
      font-size:13px;
      padding:10px;
      border-radius:6px;
    }

    .form-section{
      display:none;
    }
    .form-section.active{
      display:block;
    }

  </style>
</head>

<body>

<header>
  <h1>Respira Vida</h1>
  <a href="index.html" class="btn-voltar-top">Voltar</a>
</header>

<div class="card">

  <!-- abas -->
  <div class="tabs">
    <button class="tab active" onclick="showSection('login')">Login</button>
    <button class="tab" onclick="showSection('cadastro')">Cadastro</button>
  </div>

  <!-- LOGIN -->
  <div id="login" class="form-section active">
    <h2>Entrar</h2>

    <form action="verificar_usuario.php" method="post">
      <label>E-mail</label>
      <input type="email" name="email" required>

      <label>Senha</label>
      <input type="password" name="senha" required>

      <button type="submit">Entrar</button>
    </form>

    <button class="btn-link" onclick="showSection('cadastro')">
      Não tem cadastro? Criar conta
    </button>
  </div>

  <!-- CADASTRO -->
  <div id="cadastro" class="form-section">
    <h2>Criar Conta</h2>

    <form action="cadastrar_usuario.php" method="post">

      <label>Nome completo</label>
      <input type="text" name="nome" required>

      <label>E-mail</label>
      <input type="email" name="email" required>

      <label>Telefone</label>
      <input type="text" name="telefone" required>

      <label>Senha</label>
      <input type="password" name="senha" required>

      <label>Confirmar senha</label>
      <input type="password" name="confirmar_senha" required>

      <button type="submit">Cadastrar</button>
    </form>

    <button class="btn-link" onclick="showSection('login')">
      Já tem conta? Fazer login
    </button>
  </div>

</div>

<script>
  function showSection(sec){
    document.querySelectorAll('.form-section').forEach(s => s.classList.remove('active'));
    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));

    document.getElementById(sec).classList.add('active');

    if(sec === 'login') document.querySelectorAll('.tab')[0].classList.add('active');
    else document.querySelectorAll('.tab')[1].classList.add('active');
  }
</script>

</body>
</html>
