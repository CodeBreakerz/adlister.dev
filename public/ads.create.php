<?php 
require_once 'index.php';

?>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-3 well">
		<form method="POST" action="auction_house_db.php">
		  <h2>Add Item</h2>
			<div class="form-group">

				<label for="item_name">Item Name</label>
				<input class="form-control" id="item_name" name="item_name" type="text" value="<? ; ?>" placeholder="ITEM NAME" min="1" max="200">

				<label for="item_type">Item Type</label>
				<input class="form-control" id="item_type" name="item_type" type="text" value="<? ; ?>" placeholder="ITEM TYPE" min="1" max="200">

				<label for="date_listed">Date Listed</label>
				<input class="form-control" id="date_listed" name="date_listed" type="date" value="<? ; ?>"placeholder="DATE LISTED" min="1" max="200">

				<label for="price">Price</label>
				<input class="form-control" id="price" name="price" value="<? ; ?>" type="number" placeholder="PRICE" min="1" max="20">

				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" value="<? ; ?>" placeholder="DESCRIPTION"min="1" max="2000"></textarea>


				<label for="price"></label>
				<div class="form-group">
				    <label for="exampleInputFile">File input</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Example block-level help text here.</p>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div>

				  <button type="submit" class="btn btn-default">Submit</button><!-- concatinate filename of image into src -->

			</div>
		
		</form>
	</div>
</body>
</html>
