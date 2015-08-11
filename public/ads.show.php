<?php 
require_once 'index.php';
?>

<html>
<head>
	<title></title>
</head>
<body>

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

</body>
</html>