<?php
  include("header.php");
  include("conect.php");
?>
</head>
<body>
 <header class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header"> 
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="admin.php" class="navbar-brand">Ilkom Developer</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
      <li role="presentation">
        <a href="#">
          Home
        </a>
      </li>
      <li>
        <a href="logout_admin.php">
          Sign Out
        </a>
      </li>
    </ul>
  </div>
</div>
</header>
</body>