<?php include('heade.php') ?>

  <style>
    body {
      font-family: Tomorrow, sans-serif;
    }

    h1 {
      display: flex;
      justify-content: center;
      background: #E427DD;
      width: 40%;
      padding: 15px;
      margin-top: 25px;
    }

    .forum-list {
      display: flex;
      flex-direction: column;
      margin-top: 25px;
    }

    .lista {
      list-style-type: none;
    }

    .comentario {
      font-weight: bold;
    }

    .botao {
      padding: 10px;
      background: #B5AFAF;
      border: none;
      color: #E427DD;
      cursor: pointer;
    }

    .comentario-input {
      display: flex;
      justify-content: center;
    }

    .comentario-input textarea {
      background: #C4C4C4;
      width: 85%;
      padding: 5px;
    }

</style>
</head>

<body>
  </br>
<h1>CUIDADO PRA NÃO TILTAR</h1>

  <!-- Lista de Fóruns -->
  <ul class="forum-list">
    <!-- Fórum "Vamos Jogar?" -->
    <div class="forum-item">
      <h2>Vamos jogar?</h2>
      <p>Discussão sobre jogos em equipe. Encontre jogadores para se divertir e vencer!</p>
  </br>
      <!-- Abas para os comentários -->
      <div class="tabs">
        <p class="comentario">Comentários</p></br>
        <div class="comentario-input"><textarea placeholder="Digite seu comentário"></textarea>
        <button class="botao">enviar</button> </div>
  </br>
        <ul class="lista">
        <li><p>Ótimo tópico!</p></li><br>
        <li><p>Vamos sim, meu nick no lol é Rosbson.</p></li><br>
        </ul>
      </div>
  </div>

    <!-- Fórum "Qual Seu Discord?" -->
    <div class="forum-item">
      <h2>Qual seu Discord?</h2>
      <p>Compartilhe o seu Discord para conectar com outros jogadores e formar grupos.</p>
  </br>
      <!-- Abas para os comentários -->
      <div class="tabs">
        <p class="comentario">Comentários</p></br>
        <div class="comentario-input"><textarea placeholder="Digite seu comentário"></textarea>
        <button class="botao">enviar</button> </div>
  </br>
        <ul class="lista">
        <li><p>Ótimo tópico!</p></li><br>
        <li><p>Dou nada, meu discord é privado kkkkkkkk</p></li><br>
        </ul>
      </div>
  </div>
  </ul>

</body>

</html>

