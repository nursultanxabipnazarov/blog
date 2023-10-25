<!--HEADER-->
<?php
session_start()
?>
<div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Ba<span class="logo-dec">ker</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#feature">About</a></li>
                  <li class=""><a href="#service">Services</a></li>
                  <li class=""><a href="#portfolio">Portfolio</a></li>


                  <?php if(isset($_SESSION['id'])):?>
                  <li class=""><a href="#blog"><?=$_SESSION['fname']?></a></li>

                  <li class=""><a href="logout.php">logout</a></li>
                  <?php else:?>
                    <li class=""><a href="log.php">signin</a></li>
                    <li class=""><a href="reg.php">signup</a></li>

                    <?php endif;?>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        