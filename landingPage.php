<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Movie Web</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js">
  </script>
    <script type= "text/javascript">
      $(document).ready(function(){
        $('.sidebarBtn').click(function(){
          $('.sidebar').toggleClass('active');
          $('.sidebarBtn').toggleClass('toggle');


        })

      })
    </script>

    <link rel="stylesheet" href="./css/style_test.css">
  </head>

  <body>
    <nav>
      <div class="brand">

          <h2>Movie</span> Web</h2>
      </div>
        <ul>
          <li class="current"><a href="landingPage.php">Home</a></li>
          <li><a href="signUp.php">Sign Up</a></li>
          <li><form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button>Search</button>
          </form>
          </li>
      </ul>
    </nav>

    <!-- <section>
      <div class="topCol">
        <a href="">  <h2>Top Rate Collection</h2><img src="./img/ph.jpg" ></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
      </div>
    </section> -->


  <div class="sidebar">
    <ul>
      <li><a href="./filter/comedy.php?page = drama">Comedy</a></li>
      <li><a href="./filter/horror.php?page =horror ">Horror</a></li>
      <li><a href="./filter/romance.php?page = drama">Romance</a></li>
      <li><a href="./filter/drama.php?page = drama">Drama</a></li>
      <li><a href="./filter/fiction.php?page = drama">Fiction</a></li>
      <li><a href="./filter/action.php?page = drama">Action</a></li>
      <li><a href="./filter/documentary.php?page = drama">Documentary</a></li>
      <li><a href="./filter/advanture.php?page = advanture">Advanture</a></li>
    </ul>

    <button class="sidebarBtn">
      <span></span>
    </button>


  </div>

</body>

<?php

  if(isset($_GET['page'])){
    $page = $_POST['page'];
    $display = $page.'.php';
    include($display);
    // code...
  }
 ?>

 <?php
  include('Top.php');
  ?>






</html>
