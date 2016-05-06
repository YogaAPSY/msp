<div class="col-lg-2">
      <ul class="navbar-default nav" style="height:1500px">
        <li><a href="admin.php"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
        <li><a href="#new-items" data-toggle="collapse"><i class="glyphicon glyphicon-plus"></i> New Items</a>
          <ul class="nav collapse" id="new-items">
            <li><a href="new_post.php"><div class="col-sm-1"></div><i class="glyphicon glyphicon-pencil"></i> New Post</a></li>
            <li><a href="new_category.php"><div class="col-sm-1"></div><i class="glyphicon glyphicon-edit"></i> New Category</a></li>
          </ul>
        </li>
        <li><a href="post_list.php"><i class="glyphicon glyphicon-list"></i> Posts</a></li>
        <li><a href="category_list.php"><i class="glyphicon glyphicon-tasks"></i> Categories</a></li>
        <?php
        if(isset($_SESSION['nim']))
        echo'
        <li><a href="profile_list.php?profile='.$_SESSION['nim'].'"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
        ';
        ?>
        <?php
        if(isset($_SESSION['role'])){
           if($_SESSION['role'] == 'Admin' ){
          echo '<li><a href="member.php"><i class="glyphicon glyphicon-user"></i> Member Point</a></li>';
        }
        }
        ?>
      </ul>
	</div>