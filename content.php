
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Content Page</title>
    <!-- import bootstrap library -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

<!-- main body -->
  <body>

    <!-- add the navgtion bar into the content page-->
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

    <div class="container-fluid ">

      <div class = "col-md-3">

      </div>

   <div class =" col-md-6" >

              <div class= "row title">

                <div class = "col-md-12">
                  <h1> TITLE: Movie Name

                  </h1> <br>

              </div>

                  <!-- <div class = "col-md-4" style="  position:relative; bottom:0; right:0;">
                  <p> rating: 9/10 </p>

                  </div> -->
              </div>

              <div class= "row dis">

                 <div class = "col-md-8">    <p> <a href=""> Genre </a>  | Duration:3h   | Year:  1999  </p> </div>

                  <div class = "col-md-4" align="right">    <p> rating: 9/10 </p> </div>

              </div>



                <div class = "row images">
                      <div class="col-md-12">
                       <img class ="img-responsive" style="width:100%; height:auto;" src="filter/img/ph.jpg" >

                      </div>

                    <!--   <div class="col-md-4" >
                       <img class ="img-responsive" style="width:100%; height:auto;"src="./img/ph.jpg" >
                        <img class ="img-responsive" style="width:100%; height:auto;" src="./img/ph.jpg" >

                      </div> -->

                </div>


               <div class = "row discription">

                 <div class="col-md-9">


                   <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Satis est ad hoc Lorem ipsum dolor sit amet, consectetur adipiscing elit. Satis est ad hoc </p>

                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Satis est ad hoc Lorem ipsum dolor sit amet, consectetur adipiscing elit. Satis est ad hoc </p>

                </div>

                <div class="col-md-3">


                </div>

              </div>

               <div class = "row buttons">



                    <div class= "col-md-6">
                      <button type="button" class="btn btn-primary">Add to WishList</button>

                    </div>
               </div>


                <div class = "row storyline">

                    <div class="col-md-12">
                      <h2> Storyline: </h2>
                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Satis est ad hoc Lorem ipsum dolor sit amet, consectetur adipiscing elit. Satis est ad hoc omnibus fidibus, ut incontentae sint. Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet. Apud imperitos tum illa dicta sunt, aliquid etiam coronae datum; </p>

                    </div>



                </div>


                  <div class="row rating">

                    <div class="col-md-12">
                    <h2>  Rating:</h2>
                    <div class="rate">
                      <input type="radio" id="star5" name="rate" value="5" />
                      <label for="star5" title="text">5 stars</label>
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4" title="text">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" title="text">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" title="text">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" title="text">1 star</label>
                    </div>

                  </div>


                </div>


                <div class = "row comment">

                    <div class ="col-md-12">
                      <h4> 12 Comments </h4>



                    </div>




                    <div class ="col-md-12">
                      <textarea rows="4" cols="93">


                      </textarea>


                    </div>
                      <div class ="col-md-12" align ="right">
                      <button type="button" class="btn btn-default">Post a Comment</button>


                    </div>






                </div>









   </div>

       <div class = "col-md-3">

      </div>

 </div>





  </body>


  </html>



<style type="text/css">

    *{
    margin: 0;
    padding: 0;
    position: relative;
}
.rate {
    position: relative;
    text-align: center;
    margin: 0 auto;
/*    left: 0;*/
  /*  float: left;*/
   /* height: 46px;*/
    /*padding: 0 10px;*/
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:45px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

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


  </style>
