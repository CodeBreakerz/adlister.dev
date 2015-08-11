
<?php  
require_once '../bootstrap.php';
require_once '../views/partials/footer.php';
require_once '../views/partials/header.php';
require_once '../views/partials/navbar.php';
require_once 'ads.index.php';

// $limit = 4;
// $page = isset($_GET['page']) ? $_GET['page'] : 1;
// $offset = ($page - 1) * $limit;
// $count = $dbc->query('SELECT COUNT(*) FROM ???')->fetchColumn();
// $numberOfPages = ceil($count / $limit);

// $items = $dbc->prepare("SELECT * FROM ??? LIMIT :limit OFFSET :offset");

//bind
// $items->bindValue(':limit', $limit, PDO::PARAM_INT);
// $items->bindValue(':offset', $offset, PDO::PARAM_INT);


//execute
// $items->execute();
// $items = $items->fetchAll(PDO::FETCH_ASSOC);

//errors array to store caught execeptions
$errors = [];



?>
<html>
<head>
	<title>WoW Lister</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>

	<div class="container">
		<h1>WoW Lister</h1>

		<? if(isset($errors)) : ?>
			<ul>
			<? foreach ($errors as $error) : ?>
				<li><? $error; ?></li>
			<? endforeach; ?>
			</ul>
		<? endif; ?>

		<div class="col-md-9">
			<table class="table table-striped table-bordered">
				<tr>
					<th>Item Name</th>
					<th>Item Type</th>
					<th>Date Listed</th>
					<th>Price</th>
					<th>Description</th>
					<th>Image</th>
				</tr>

				<? foreach ($items as $item): ?>
				<tr>
					<td><?= $item['item_name']; ?></td>
					<td><?= $item['item_type']; ?></td>
					<td><?= date_format(date_create($item['date_listed']),'l, F j, Y'); ?></td>
					<td><?= number_format($item['price'], 2); ?></td>
					<td><?= $item['description']; ?></td>
					<td><?= $item['image_url']; ?></td>
				</tr>	
			<? endforeach; ?>
		</table>
	</div>
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

