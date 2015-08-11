
<?php  
require_once '../bootstrap.php';
require_once '../views/partials/header.php';
require_once '../database/seeder.php';
// require_once 'ads.index.php';

$limit = 4;
$count = $dbc->query('SELECT count(*) FROM items')->fetchColumn();
$numPages = ceil($count / $limit);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * 4;
$nextPage = $page + 1;
$prevPage = $page - 1;
$stmt = $dbc->prepare("SELECT * FROM items LIMIT :limit OFFSET :offset ");


$stmt->bindvalue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindvalue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
$errors = [];



?>
<html>
<head>
	<title>WoW Lister</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/main.css">

	<style>

.img {
 
    width: 70px; 
    height: 70px;
}

	 </style>
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
					<td><img class="img" src="<?= $item['item_img']; ?>"></td>
				</tr>	
			<? endforeach; ?>
		</table>
	</div>

		<ul class="pager">
	  
	  <?if ($page != 1) : ?>
	    <li><a href="http://adlister.dev?page=<?= $prevPage; ?>">Previous</a></li>
	  <? endif; ?>	
	  <? if ($page < $numPages) : ?>
	    <li><a href="http://adlister.dev?page=<?= $nextPage; ?>">Next</a></li>
	  <?endif; ?>
  	</ul>
	
	<? include '../views/partials/footer.php'; ?>

</body>
</html>

