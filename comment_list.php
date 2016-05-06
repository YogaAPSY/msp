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
      <a href="article.php" class="navbar-brand">Ilkom Developer</a>
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
          Logout
        </a>
      </li>
    </ul>
  </div>
</div>
</header>
<div style="width:50px; height:50px;"></div>
<?php include"admin_panel.php" ?>
  <div class="col-lg-10">
<div class="panel panel-default">
  <div class="panel-heading"><h3>Latest Comments</h3></div>
  <div class="panel-body">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>S.No</th>
          <th>Date</th>
          <th>Title</th>
          <th>Description</th>
          <th>Category</th>
          <th>Author</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2016-06-06</td>
          <td>First Post</td>
          <td>Lorem Ipsum ............</td>
          <td>Technology</td>
          <td>Yoga</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2016-06-06</td>
          <td>First Post</td>
          <td>Lorem Ipsum ............</td>
          <td>Technology</td>
          <td>Yoga</td>
        </tr>
      </tbody>

    </table>
  </div>
</div>

</div>
<footer></footer>
</body>