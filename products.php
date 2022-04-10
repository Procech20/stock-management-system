<?php

	include_once('./templates/header.php');
	include_once('./templates/nav.php');

?>

	<div class="container-fluid container-body">
		<div class="row">
			<div class="col-md-12" >
				<center> <h1>Products</h1></center><br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="product-form">
				<form class="" action="index.php" methode="POST">
					<center><h3>Add Product</h3></center><br>
					<div class="form-group">
					<label for="exampleInputEmail1">Product name</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name of product...">
					</div>
					<!-- <div class="form-group">
					<label for="exampleInputPassword1">Product Type</label>
					<select name="type" id="type" class="form-control">
						<option value="medium">Medium</option>
						<option value="long">Long</option>
						<option value="short">Short</option>
					</select>
					</div> -->
					<div class="form-group">
					<label for="exampleInputPassword1">Product Price</label>
					<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price in RWF...">
					</div>
					<div class="form-group">
						<label for="Product descriptiom"></label>
						<textarea class="form-control" name="description" id="" rows="5" placeholder="Description of product"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Add Product</button>

				</form>

</div>
			</div>
			<div class="col-lg-8">
				<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Product</th>
							<th>Price</th>
							<th>Description</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product) { ?>
							<tr>
								<td><?php echo $product['name']; ?></td>
								<td><?php echo $product['price']; ?></td>
								<td><?php echo $product['description']; ?></td>
								<td><img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-responsive"></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
			</div>
		</div>


	</div>

<?php

	include_once('./templates/footer.php');

?>
