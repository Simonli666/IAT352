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

    <link rel="stylesheet" href="./css/style.css">
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

    <section>
      <div class="topCol">
        <a href="">  <h2>Top Rate Collection</h2><img src="./img/ph.jpg" ></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
      </div>
    </section>


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
