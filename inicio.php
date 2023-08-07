<?php include('heade.php') ?>

<style>
body {
  font-family: Tomorrow, sans-serif;
}

#post-bar {
  width: 100%;
  background-color: #3F3C3C;
  display: flex;
  padding: 15px;
}

.user {
  display: flex;
  margin-right: 2px;
}

.comentario-input textarea {
  background: #C4C4C4;
  width: 80%;
  padding: 5px;
}

#nickname1 {
  color: #E427DD;
  position: absolute;
  margin-top: 75px;
}

.comentario {
  color: #FFFFFF;
  display: row;
  width: 55%;
  margin-left: 15px;
  
}

.timeline {
  display: flex;
  margin-top: 25px;
  text-align: center;
  position: relative;
}

.timeline-post {
  background: #E427DD;
  padding: 20px;
  width: 60%;
  display: flex;
  align-items: center;
  
}

.botao {
  position: absolute;
  padding: 7px;
  background: #B5AFAF;
  color: #E427DD;
  cursor: pointer;
  margin-top: 5px;
  margin-left: 15px;
}

.comentario-like {
  align: center;
  margin-left: 1px;
  width: 10%;
}

.nick-post {
  align: center;
  margin-right: 1px;
  width: 10%;
}


</style>
</head>

<body>
    <div id="post-bar">
      <div class="user">
      <img src="public/images/image.svg" alt="profileImage1" id="image1" width="60px"/>
      <a href="#" id="nickname1">Catloka</a>
      </div>
      <div class="comentario">
      <p class="comentario">Escreva seu momento do dia!</p></br>
        <div class="comentario-input"><textarea placeholder="O que aconteceu no jogo hoje?"></textarea>
        <button class="botao">Postar</button> </div>
      </div>
    </div>
    </br>

    <div class="timeline">
      <div class="nick-post">
        <img src="public/images/image.svg" alt="profileImage" class="image2"/><br>
        <a href="#" class="nickname2">Mini Sombra</a><br>
      </div>
      <p class="timeline-post">Perdi uma rank hoje, baixou meu pdl... aaahhh</p><br>
      <div class="comentario-like">
        <a href="#"><img src="public/images/like.svg" alt="like" class="like"/></a>
        <a href="#" class="comments">Comentários</a>
        <p class="date-post">Janeiro 21, 2021</p>
      </div>
    </div>
</br>
    <div class="timeline">
      <div class="nick-post">
        <img src="public/images/image.svg" alt="profileImage" class="image2"/> <br>
        <a href="#" class="nickname3">Noob Poderoso</a><br>
      </div>
      <p class="timeline-post">Oi galera, bora jogar?</p><br>
      <div class="comentario-like">
        <a href="#"><img src="public/images/like.svg" alt="like" class="like"/></a>
        <a href="#" class="comments">Comentários</a>
        <p class="date-post">Janeiro 21, 2021</p>
      </div>
  </body>
</html>
