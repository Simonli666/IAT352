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

    <link rel="stylesheet" href="style.css">
  </head>

<body>

  <!-- hearder -->
  <header>
    <div class="container">
    <div id="branding">
      <div>
        <img src="./img/logo.jpg">
        <!-- title and logo -->
        <h1><span class="highlight">Movie</span> Web</h1>
      </div>
      <nav>
        <ul>
          <li class="current"><a href="home_page.php">Home</a></li>
          <li><a href="">Genre</a></li>
          <li><a href="signUp.php">Sign Up</a></li>
          <li><form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </li>
        </ul>



      </nav>
    </div>
    </div>
  </header>












  <div class="sidebar">
    <ul>
      <li><a href="#">Comedy</a></li>
      <li><a href="#">Horror</a></li>
      <li><a href="#">Romance</a></li>
      <li><a href="#">Drama</a></li>
      <li><a href="#">Fiction</a></li>
      <li><a href="#">Action</a></li>
      <li><a href="#">Documentary</a></li>
      <li><a href="#">Advanture</a></li>
    </ul>

    <button class="sidebarBtn">
      <span></span>
    </button>


  </div>

</body>






</html>
