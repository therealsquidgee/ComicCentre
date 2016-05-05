<?php include("header.php"); ?>
<div class="panel panel-default center comic" id="comic-1">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="discussion.php">Comic #1</a></h3>
  </div>
  <div class="panel-body">
    <div id="myCarousel-1" class="carousel">
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
    </div>
  </div>
</div>
  
<form id="comicform" class="form-inline center">
	<div class="form-group">
    	<label for="url">URL</label>
    	<input type="text" class="form-control" id="url"/>
  	</div>
	<button type="submit" id="submit-btn" class="btn btn-default">Get Comic!</button>
	<p class="warning" id="warning">URL can't be blank.</p>
</form>
<?php include("footer.php"); ?>