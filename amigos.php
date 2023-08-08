<?php include('heade.php') ?>

<style>
    body {
      font-family: Tomorrow, sans-serif;
    }

    .search-container1 {
      padding: 15px;
      border: none;
      display: flex;
      justify-content: center;
      cursor: pointer;
      width: 15%;
    }

    h1 {
      text-align: center;
      margin-top: 15px;
    }

    .timeline {
      display: flex;
      margin-top: 40px;
      width: 40%;
    }

    .amigos{
      background: #E427DD;
      width: 20%;
      padding: 15px;
    }

</style>
</head>

<body>

<h1>Encontre seu amigo(a)</h1>
</br>
<div class="search-container1">
          <input type="text" class="input-search" placeholder="Procurar"/>
          <button type="submit"><img src="public/images/search.svg"/></button>
</div>

<div class="timeline">
     <li> <img src="public/images/image.svg" alt="profileImage" class="image2"/> <br>
      <a href="#" class="nickname">@Rosbson</a>
      <a href="#"><p><b>Seguir</b></p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/></svg></a>
  </li>

    <li><img src="public/images/image.svg" alt="profileImage" class="image2"/> <br>
      <a href="#" class="nickname">@V_Souza</a>
      <a href="#"><p><b>Seguir</b></p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/></svg>
</a>
  </li>
</div>
  </br>

<h1 class="amigos">MEUS AMIGOS</h1>
  </br>
<div class="timeline">
<li> <img src="public/images/image.svg" alt="profileImage" class="image2"/> <br>
      <a href="#" class="nickname">@bondydosbons</a>
      <a href="#"><p><b>Seguindo</b></p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-heart" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12ZM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Z"/>
  <path d="M8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/></svg></a>
  </li>

    <li><img src="public/images/image.svg" alt="profileImage" class="image2"/> <br>
      <a href="#" class="nickname">@miniLady</a>
      <a href="#"><p><b>Seguindo</b></p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-heart" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12ZM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Z"/>
  <path d="M8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/></svg></a>
  </li>
</div>

  </body>
</html>
