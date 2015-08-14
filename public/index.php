
<?php  
require_once '../bootstrap.php';
require_once '../views/partials/header.php';

if(!Auth::checkUser()){
    header("Location: /auth.login.php");
    exit();
}

$limit = 4;
$count = Ad::count();
$numPages = ceil($count / $limit);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * 4;
$nextPage = $page + 1;
$prevPage = $page - 1;
$errors = [];

$items = Ad::paginate($limit, $offset);



?>
<html>
<head>
	<title>WoW Lister</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
<link rel="stylesheet" href="/css/main.css">

	<style>

.img {
 
    width: 70px; 
    height: 70px;
}

	 </style>

	 <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
	 <script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
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

				<? foreach ($items->attributes as $item): ?>
				<tr>
					<td><?= $item['item_name']; ?></td>
					<td><?= $item['item_type']; ?></td>
					<td><?= date_format(date_create($item['date_listed']),'l, F j, Y'); ?></td>
					<td><?= number_format($item['price'], 2); ?></td>
					<td><?= $item['description']; ?></td>
					<td><a href="http://www.wowhead.com/item=<?= $item['item_number']; ?>"></a></td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

