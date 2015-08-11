
<?php  
require_once '../bootstrap.php';
// require_once '../views/partials/footer.php';
// require_once '../views/partials/header.php';
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

		<div class="col-md-12">
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
	
	<? include '../views/partials/footer.php'; ?>
</body>
</html>

