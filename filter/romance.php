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
  <!-- add the title for the romance movie page -->
  <div class="title">
    <h2>Romance Movie</h2>
  </div>
  <!-- show all romance movies -->
  <div class="gallery">
    <!-- allow user click each movie to see a specific information -->
    <a target="_blank" href="content.php">
      <img src="filter/img/romance1.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


  <!-- same as the above part -->
  <div class="gallery">
    <a target="_blank" href="content.php">
      <img src="filter/img/romance2.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>


  <div class="gallery">
    <a target="_blank" href="content.php">
      <img src="filter/img/romance3.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">Add a description of the movie in the future</div>
  </div>



</body>
</html>
