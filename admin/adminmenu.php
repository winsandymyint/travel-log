<!--header-->
<div class="header">
  <div class="container">
    <div class="header-grids">
      <div class="logo">
        <h1><a  href="index.html"><span>Kate's </span>Travel Records</a></h1>
      </div>
      <!--navbar-header-->
      <div class="header-dropdown">
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
        <div class="nav-top">
          <div class="top-nav">
            <span class="menu"><img src="image/menu.png" alt="" /></span>
            <ul class="nav1">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="index.php?id=insert">Insert</a></li>
              <li><a href="index.php?id=newsletter">NewsLetter</a></li>
              <li><a href="index.php?id=edit">Edit Visit</a></li>
              <li><a href="index.php?id=delete">Delete Visit</a></li>
            </ul>
            <div class="clearfix"> </div>
            <!-- script-for-menu -->
                 <script> 
                   $( "span.menu" ).click(function() {
                   $( "ul.nav1" ).slideToggle( 300, function() {
                   // Animation complete.
                    });
                   });
                
                </script>
              <!-- /script-for-menu -->
          </div>
          <?php
            if(isset($_SESSION["userid"]))
            {
              echo '<div class="dropdown-grids"><div id="loginContainer"><a href="logout.php"><span>Logout</span></a></div>';
            }else{
                //Non-login 
              // include('../login.php');
            }
          ?>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>