<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<link href="/fonts/FONT/css/all.css" rel="stylesheet">
<!-- <script src="js/jquery-3.4.1.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="Semantic-UI-CSS-master/semantic.min.js"></script>


<style type="text/css">
    body {
      /*background-color: #DADADA;*/
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <!-- <img src="assets/images/logo.png" class="image"> -->
      <div class="content">
        <img src="img/logo transp grd.png" height="auto" width="200">
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="Login" autofocus>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Senha">
          </div>
        </div>
        <div class="ui fluid large Yellow submit button">Entrar</div>
      </div>

      <div class="ui error message"></div>

    </form>

  </div>
</div>

</body>