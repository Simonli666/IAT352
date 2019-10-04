<!DOCTYPE html>
<html>
<!-- style/design part -->
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color: #fff;
}

div.title{


}

</style>

<body>
  <!-- add the title for the fiction movie page -->
  <div class="title">
    <h2>Fiction Movie</h2>
  </div>
  <!-- show all fiction movies -->
  <div class="gallery">
    <!-- allow user click each movie to see a specific information -->
    <a target="_blank" href="content.php">
      <img src="filter/img/fiction1.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


  <!-- same as the above part -->
  <div class="gallery">
    <a target="_blank" href="content.php">
      <img src="filter/img/fiction2.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


  <div class="gallery">
    <a target="_blank" href="content.php">
      <img src="filter/img/fiction3.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


  <div class="gallery">
    <a target="_blank" href="content.php">
      <img src="filter/img/fiction4.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


  <div class="gallery">
    <a target="_blank" href="content.php">
      <img src="filter/img/fiction5.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


</body>
</html>
