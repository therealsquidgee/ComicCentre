<?php include("header.php"); ?>
<form id="comicform" class="form-inline center">
	<div class="form-group">
    	<label for="url">URL</label>
    	<input type="text" class="form-control" id="url"/>
  	</div>
	<button type="submit" class="btn btn-default">Get Comic!</button>
	<p class="warning" id="warning">URL can't be blank.</p>
</form>
<div class="panel panel-default center comic">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="discussion.php">Comic #1</a></h3><p class="usertag"><a href="users/1">User #1</a></p>
  </div>
  <div class="panel-body">
    <div id="myCarousel">
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
      <div class="item"><img src="http://placehold.it/600x300" alt="placeholder"/></div>
    </div>
  </div>
<?php include("footer.php"); ?>