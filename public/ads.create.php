<?php 
require_once '../bootstrap.php';
// $character = Character::where("name", "Ryno");

// var_dump($character);

if(!Auth::checkUser()){
    header("Location: auth.login.php");
    exit();
}

if(!empty($_POST)) {


$create_Ad = new Ad();
$create_Ad->item_name = Input::get('item_name');
$create_Ad->item_type = Input::get('item_type');
$create_Ad->date_listed = Input::get('date_listed');
$create_Ad->price = Input::get('price');
$create_Ad->description = Input::get('description');
$create_Ad->item_number = Input::get('item_number');
$create_Ad->save();

}

?>
<html>
<head>
	<title>WoW Header</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style>

		.well {
			
			margin-top: 100px;
			opacity: .8;
		}

		body {
			background-image: url("/img/create_auction.jpg");
			background-size: 100%;
		    background-repeat: no-repeat;
		}

	</style>
</head>

<body>
	<? require_once '../views/partials/navbar.php'; ?>
<!-- <div id="character_image">
	<img src="<? $character->character_img; ?>">
</div> -->

<div class="col-sm-offset-4 col-sm-4 well" >
		<form method="POST" action="ads.create.php">
		  <h2>Add Item</h2>
			<div class="form-group">

				<label for="item_name">Item Name</label>
				<!-- below is a test to see if the form will use the input class ternary for sticky form -->
				<input class="form-control" id="item_name" name="item_name" type="text" value="<? Input::has('item_name') ? Input::get('item_name') : ''; ?>" placeholder="ITEM NAME" min="1" max="200">

				<label for="item_type">Item Type</label>

				<!-- alternative syntax for sticky form -->
				<input class="form-control" id="item_type" name="item_type" type="text" value="<? isset($_POST['item_type']) ? Input::get('item_type') : ''; ?>" placeholder="ITEM TYPE" min="1" max="200">

				<label for="date_listed">Date Listed</label>
				<input class="form-control" id="date_listed" name="date_listed" type="date" value="<? ; ?>"placeholder="DATE LISTED" min="1" max="200">

				<label for="price">Price</label>
				<input class="form-control" id="price" name="price" value="<? ; ?>" type="number" placeholder="PRICE">

				<label for="description">Description</label>
				<textarea class="form-control" id="description" name="description" value="<? ; ?>" placeholder="DESCRIPTION"min="1" max="2000"></textarea>

				<label for="item_number">Item Number</label>
				<textarea class="form-control" id="item_number" name="item_number" value="<? ; ?>" placeholder="item_number"min="1" max="2000"></textarea>
				  
			  </div>

				  <button type="submit" class="btn btn-default">Submit</button>

			</div>
		
		</form>
	</div>
</body>
</html>
