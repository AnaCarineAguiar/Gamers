<?php include('heade.php') ?>
<style>
body {
  font-family: Tomorrow, sans-serif;
}


.game-card {
  display: flex;
  flex-direction: column;
  margin-top: 25px;
}

h1 {
  display: flex;
  justify-content: center;
  background: #E427DD;
  width: 20%;
  padding: 15px;
  margin-top: 25px;
}

</style>
</head>

<body>

</br>
<h1>MEUS GAMES</h1>
<!-- Card para o jogo "The Sims" -->
</br>

  <div class="game-card">
    <h2>The Sims</h2><br>
    <img src="imagem\the sims.jpg" alt="The Sims" width="200px">
    <p>
    The Sims é um jogo de simulação de vida onde você <br>pode criar e controlar pessoas virtuais e suas casas.
    </p>
    <!-- Botões para curtir e comentar -->
    <a href="#"><img src="public/images/like.svg" alt="like" class="like"/></a>
    <a href="#" class="comments">Comentários</a>
  </div>
</br>
  <!-- Card para o jogo "League of Legends" -->
  <div class="game-card">
    <h2>League of Legends</h2><br>
    <img src="imagem\lol.webp" alt="League of Legends" width="200px">
    <p>
    League of Legends é um jogo de estratégia e batalha <br>online com uma grande comunidade de jogadores.
    </p>
    <!-- Botões para curtir e comentar -->
    <a href="#"><img src="public/images/like.svg" alt="like" class="like"/></a>
    <a href="#" class="comments">Comentários</a>
  </div>
  </br>
  <!-- Card para o jogo "Candy Crush" -->
  <div class="game-card">
    <h2>Candy Crush</h2><br>
    <img src="imagem\candy crush.jpg" alt="Candy Crush"width="200px">
    <p>
      Candy Crush é um jogo de quebra-cabeças viciante <br>onde você combina doces para marcar pontos.
    </p>
    <!-- Botões para curtir e comentar -->
    <a href="#"><img src="public/images/like.svg" alt="like" class="like"/></a>
    <a href="#" class="comments">Comentários</a>
  </div>
</body>

</html>
