<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Movie Web</title>
 <!--    <script src="https://code.jquery.com/jquery-3.4.1.js">
  </script -->


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--   <script type= "text/javascript">
      $(document).ready(function(){
        $('.sidebarBtn').click(function(){
          $('.sidebar').toggleClass('active');
          $('.sidebarBtn').toggleClass('toggle');


        })

      })
    </script> -->

  <!--   <link rel="stylesheet" href="filter/css/style.css"> -->
  </head>

  <body>

     <div class="container-fluid">

      <div class="row">

          <!-- <div class="col-md-12"> -->
              <div>
            <nav>
              <div class = "brand">

                  <h2>Movie</span> Web</h2>

                   </div>

                <ul>
                  <li class="current"> <a href="landingPage.php">Home</a> </li>
                  <li><a href="signUp.php">Sign Up</a></li>
                  <li><form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button>Search</button>
                  </form>
                  </li>
                </ul>


            </nav>
          </div>
      </div>





    <div class="row">

        <!-- <div class="col-md-12" align="center"> -->
        <div>

     <?php include('top.php'); ?>
       </div>


   </div>

    <div class="row">

        <div class="sidebar col-md-3">
          <ul>
            <li><a href="?page=comedy">Comedy</a></li>
            <li><a href="?page=horror ">horror</a></li>
            <li><a href="?page=romance">romance</a></li>
            <li><a href="?page=drama">drama</a></li>
            <li><a href="?page=fiction">fiction</a></li>
            <li><a href="?page=action">action</a></li>
            <li><a href="?page=documentary">documentary</a></li>
            <li><a href="?page=advanture">advanture</a></li>
          </ul>

         <!--  <button class="sidebarBtn">
            <span></span>
          </button> -->


        </div>






      <div class = "col-md-9">


        <?php

         // include('top.php');

        if(isset($_GET['page'])){
          $page = $_GET['page'];
          $display = $page.'.php';
          include('filter/'.$display);

        }
       ?>

     </div>
   </div>



 </div>


</body>




</html>



<style type ="text/css">

body
{
  margin: 0;
  padding: 0;
  font-family: verdana;
  background: #ffffff;
  /*overflow: hidden;*/
}

.sidebar
{

  background: #696969;
  width: 250px;
  height: 100%;
  transition: .3s;
}

.active
{
  left: 0px;
}

.sidebar ul
{
  margin: 0;
  padding: 20px 0;
}

.sidebar ul li
{
  list-style: none;
}

.sidebar ul li a
{
  padding: 10px 20px;
  color: #fff;
  display: block;
  text-decoration: none;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}



.sidebar ul li a:hover{
  color:#8890C6;
  font-weight:bold;
}



/*.sidebarBtn
{
  position: absolute;
  top: 0;
  right: -50px;
  width: 50px;
  height: 50px;
  box-sizing: border-box;
  cursor: pointer;
  background: #f5f5f5;
  border: none;
  outline: none;
}
*/
/*.sidebarBtn span
{
  display: block;
  width: 35px;
  height: 3px;
  background: #262626;
  position: absolute;
  top: 24px;
  transition: .3s;

}*/

/*
.sidebarBtn span::before
{
  content: '';
  position: absolute;
  top: -10px;
  left: 0;
  width: 100%;
  height: 3px;
  background: #262626;
  transition: .3s;

}
*/
/*.sidebarBtn span:after
{
  content: '';
  position: absolute;
  top: 10px;
  left: 0;
  width: 100%;
  height: 3px;
  background: #262626;
  transition: .3s;

}

.sidebarBtn.toggle span{
  background: transparent;
}



.sidebarBtn.toggle span:before{
  top: 0;
  transform: rotate(45deg);
}

.sidebarBtn.toggle span:after{
  top: 0;
  transform: rotate(-45deg);
}*/

  /* header */
 nav
{
  position:relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  background: black;
  padding: 0 100px;
  box-sizing: border-box;
}

 nav .brand{
  float: left;
  height: 100%;
  line-height: 70px;
}

nav .brand h2
{
  margin-top: 20px;
  padding: 0;
  color: #fff;
}

nav  ul{
  float: right;
  display: flex;
  margin: 0;
  padding: 0;
}


nav  li{
  list-style: none;
}

nav ul li a
{
  position: relative;
  display:block;
  height: 70px;
  line-height: 70px;
  padding: 0 20px;
  box-sizing: border-box;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  transition: .5s;
}

nav ul li a:hover{
  color: #262626;
}

nav form{
  margin-top: 20px;
  height: 20px;
  line-height: 20px;
}

/* nav ul li a:before
{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  transform-origin: right;
  z-index: -1;
  transform: scaleX(0);
  transition: transform .5s;
}

nav ul li a:hover::before{
  transform-origin: left;
  transform: scaleX(1);

}

nav form{
  margin-left: 10px;
  height: 70px;
  line-height: 70px;
}

nav form:hover{
  color: #262626;
} */

  </style>
