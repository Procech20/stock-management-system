<?php

	include_once('./templates/header.php');
	include_once('./templates/nav.php');

?>

	<div class="container-fluid container-body">
		<div class="row">
			<div class="col-md-12" >
				<center> <h1>Stock</h1></center><br>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="product-form stock-in ">
					<form class="" action="index.php" methode="POST">
						<center><h3>Stock In</h3></center><br>
						<div class="form-group">
						<label for="exampleInputEmail1">Product</label>
						<select name="product" id="type" class="form-control">
							<option value="medium">Musanze Rice</option>
							<option value="long">Huye Rice</option>
						</select></div>
						<div class="form-group">
						<label for="exampleInputPassword1">Product Type</label>
						<select name="type" id="type" class="form-control">
							<option value="medium">Medium</option>
							<option value="long">Long</option>
							<option value="short">Short</option>
						</select>
						</div>
						<div class="form-group">
						<label for="exampleInputPassword1">Quantity</label>
						<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity in Kgs...">
						</div>
						<button type="submit" class="btn btn-primary">Add in Stock</button>

					</form>

				</div>
				<div class="product-form stock-out ">
					<form class="" action="index.php" methode="POST">
						<center><h3>Stock Out</h3></center><br>
						<div class="form-group">
						<label for="exampleInputEmail1">Product</label>
						<select name="product" id="type" class="form-control">
							<option value="medium">Musanze Rice</option>
							<option value="long">Huye Rice</option>
						</select></div>
						<div class="form-group">
						<label for="exampleInputPassword1">Product Type</label>
						<select name="type" id="type" class="form-control">
							<option value="medium">Medium</option>
							<option value="long">Long</option>
							<option value="short">Short</option>
						</select>
						</div>
						<div class="form-group">
						<label for="exampleInputPassword1">Quantity</label>
						<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantity in Kgs...">
						</div>
						<button type="submit" class="btn btn-primary">Remove from Stock</button>

					</form>

				</div><br><br>
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
