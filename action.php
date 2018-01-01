<?php
session_start();
include "db.php";


	
	if (isset($_POST["category"])){
		$category_query = "SELECT * FROM categories";
		$run_query = mysqli_query($con,$category_query);
		
		echo "
			<div class ='nav nav-pills nav-stacked'>


			<li class ='active'><a href = '#'><h4>Categories</h4></a></li>";
			
			
		
		if (mysqli_num_rows($run_query) > 0){
			
			while ($row = mysqli_fetch_array($run_query)){
				
				$cat_id = $row['cat_id'];
				$cat_title = $row['cat_title'];
				
				echo " <li><a href = '#' class ='category' cid='$cat_id'>$cat_title</a></li>";
			}
			echo "</div>";
		}
		
	}

		if (isset($_POST["menu"])){
		$menu_query = "SELECT * FROM menu";
		$run_query = mysqli_query($con,$menu_query);
		
		echo "
			<div class ='nav nav-pills nav-stacked'>


			<li class ='active'><a href = '#'><h4>Menu</h4></a></li>";
			
			
		
		if (mysqli_num_rows($run_query) > 0){
			
			while ($row = mysqli_fetch_array($run_query)){
				
				$menu_id = $row['menu_id'];
				$menu_title = $row['menu_title'];
				
				echo " <li><a href = '#' class = 'menu' mid = '$menu_id'>$menu_title</a></li>";
			}
			echo "</div>";
		}
	}
		
		if (isset($_POST["getProducts"])){
		$product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,8";
		$run_query = mysqli_query($con,$product_query);
		
		if (mysqli_num_rows($run_query) > 0){
			
			while ($row = mysqli_fetch_array($run_query)){
				
				$product_id = $row['product_id'];
				$product_title = $row['product_title'];
				$product_cat = $row['product_cat'];
				$product_menu = $row['product_menu'];
				$product_price = $row['product_price'];
				$product_desc = $row['product_desc'];
				$product_image = $row['product_image'];
				$product_keywords = $row['product_keywords'];
				
				echo " 
				
						<div class = 'col-md-4'>
							<div class= 'panel panel-info'>
								<div class ='panel-heading'>$product_title</div>
									<div class ='panel-body'>
										<img src = '$product_image'class = 'foodimages'/>
									</div>
										<div class ='panel-heading'> Price:$$product_price
											<button pid = '$product_id' style = 'float:right' id = 'products' class = 'btn btn-danger btn-xs'>Add to Cart</button>
										</div>
							</div>
						</div>
						";
			}
			
		}
		
		}
		
		if (isset($_POST['select_category'])){
			$cid = $_POST['getCaId'];
			$db = "SELECT * FROM products WHERE product_cat = '$cid'";
			$run_query = mysqli_query($con,$db);
			while ($row = mysqli_fetch_array($run_query)){
								
				$product_id = $row['product_id'];
				$product_title = $row['product_title'];
				$product_cat = $row['product_cat'];
				$product_menu = $row['product_menu'];
				$product_price = $row['product_price'];
				$product_desc = $row['product_desc'];
				$product_image = $row['product_image'];
				$product_keywords = $row['product_keywords'];
				
				echo " 
				
						<div class = 'col-md-4'>
							<div class= 'panel panel-info'>
								<div class ='panel-heading'>$product_title</div>
									<div class ='panel-body'>
										<img src = '$product_image'class = 'foodimages'/>
									</div>
										<div class ='panel-heading'> Price:$$product_price
											<button pid = '$product_id' style = 'float:right' id = 'products' class = 'btn btn-danger btn-xs'>Add to Cart</button>
										</div>
							</div>
						</div>
						";
				
			}
			
		}
		
		if (isset($_POST['select_menu'])){
			$mid = $_POST['getMenId'];
			$db = "SELECT * FROM products WHERE product_menu = '$mid'";
			$run_query = mysqli_query($con,$db);
			while ($row = mysqli_fetch_array($run_query)){
								
				$product_id = $row['product_id'];
				$product_title = $row['product_title'];
				$product_cat = $row['product_cat'];
				$product_menu = $row['product_menu'];
				$product_price = $row['product_price'];
				$product_desc = $row['product_desc'];
				$product_image = $row['product_image'];
				$product_keywords = $row['product_keywords'];
				
				echo " 
				
						<div class = 'col-md-4'>
							<div class= 'panel panel-info'>
								<div class ='panel-heading'>$product_title</div>
									<div class ='panel-body'>
										<img src = '$product_image'class = 'foodimages'/>
									</div>
										<div class ='panel-heading'> Price:$$product_price
											<button pid = '$product_id' style = 'float:right'id = 'products' class = 'btn btn-danger btn-xs'>Add to Cart</button>
										</div>
							</div>
						</div>
						";
				
			}
			
		}
		
			if (isset($_POST['search'])){
			$userquery = $_POST['keywords'];
			$db = "SELECT * FROM products WHERE product_keywords LIKE '%$userquery%'";
			$run_query = mysqli_query($con,$db);
			$count = mysqli_num_rows($run_query);
			if ($count == 0){
				echo "Please refine your search";
			}
			while ($row = mysqli_fetch_array($run_query)){
								
				$product_id = $row['product_id'];
				$product_title = $row['product_title'];
				$product_cat = $row['product_cat'];
				$product_menu = $row['product_menu'];
				$product_price = $row['product_price'];
				$product_desc = $row['product_desc'];
				$product_image = $row['product_image'];
				$product_keywords = $row['product_keywords'];
				
				echo " 
				
						<div class = 'col-md-4'>
							<div class= 'panel panel-info'>
								<div class ='panel-heading'>$product_title</div>
									<div class ='panel-body'>
										<img src = '$product_image'class = 'foodimages'/>
									</div>
										<div class ='panel-heading'> Price:$$product_price
											<button pid = '$product_id' style = 'float:right' id = 'products' class = 'btn btn-danger btn-xs'>Add to Cart</button>
										</div>
							</div>
						</div>
						";
				
			}
			
		}
		
		if (isset($_POST['addToCart'])){
			
			$p_id = $_POST['proId'];
			$user_id = $_SESSION['uid'];
			$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id' ";
			$run_query = mysqli_query ($con,$sql);
			$count = mysqli_num_rows($run_query);
			
			if ($count > 0){
				
				echo "
							<div class = 'alert alert-danger'>
								<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a>
								<b>Product is already added to cart...!</b>
							</div>
				";
			}
			
			else{
				
				$sql = "SELECT * FROM products WHERE product_id = '$p_id' ";
				$run_query = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($run_query);
					$id = $row['product_id'];
					$productName = $row['product_title'];
					$productImage = $row['product_image'];
					$productPrice =$row['product_price'];
				
				$sql = 	"INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, 
						`product_image`, `qty`, `price`, `total_amount`) 
						VALUES (NULL, '$p_id', '0', '$user_id', '$productName', '$productImage', 
						'2', '$productPrice', '$productPrice')";
						
						if (mysqli_query($con,$sql)){
							echo "
							<div class = 'alert alert-success'>
								<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a>
								<b>Product added to cart successfully...!</b>
							</div>
							";
						}
				
			}
				
		}
		
		
		if (isset($_POST['getCart']) || isset($_POST['cart_checkout'])){
			
			$uid = $_SESSION['uid'];
			$sql = "SELECT * FROM cart WHERE user_id = '$uid' ";
			$run_query = mysqli_query($con,$sql);
			$count = mysqli_fetch_array($run_query); 
			
			if ($count > 0){
				$no = 1;
				$total_final = 0;
				while ( $row = mysqli_fetch_array($run_query)){
					$id = $row ['id'];
					$pro_id = $row['p_id'];
					$pro_name = $row ['product_title'];
					$pro_image = $row ['product_image'];
					$qty = $row['qty'];
					$pro_price = $row ['price'];
					$total_amt = $row['total_amount'];
					$priceArray = array($total_amt);
					$total_sum = array_sum($priceArray);
					$total_final = $total_final + $total_sum;
					
					if (isset($_POST['getCart'])){
						
						echo "
					
						<div class = 'row'>
							
							<div class = 'col-md-3'>$no</div>
							<div class = 'col-md-3'><img src = '$pro_image' width = '50px' height ='50px'></div>
							<div class = 'col-md-3'>$pro_name</div>
							<div class = 'col-md-3'>$$pro_price</div> 

						</div>
					
					";
					$no = $no + 1;
					
					}
					
					else{
						
						echo "
							
							<div class = 'row'>
						
								<div class = 'col-md-2'>
									<div class = 'btn-group'>
										<a href ='#' delete = '$pro_id' class = 'btn btn-danger delete'><span class = 'glyphicon glyphicon-trash'></span></a>
										<a href = '#' update = '$pro_id' class = 'btn btn-primary update'><span class = 'glyphicon glyphicon-ok-sign'></span></a>
									</div>
								
								</div>
									<div class = 'col-md-2'><img src = '$pro_image' height = '60px' width = '60px' /></div>
									<div class = 'col-md-2'>$pro_name</div>
									<div class = 'col-md-2'><input type = 'text' class = 'form-control qty' pid = '$pro_id' id = 'qty-$pro_id' value = '1' ></div>
									<div class = 'col-md-2'><input type = 'text' class = 'form-control price' pid = '$pro_id' id = 'price-$pro_id' value = '$pro_price' disabled /></div>
									<div class = 'col-md-2'><input type = 'text' class = 'form-control total' pid = '$pro_id' id = 'total-$pro_id' value = '$$pro_price' disabled /></div>
					
								</div>
								
						";
					}
					
					
				}
			
				
				if (isset($_POST['cart_checkout'])){
					
					echo "
					<div class = 'row'>
					
						<div class = 'col-md-8'></div>
					
						<div class = 'col-md-4'>
							<b><h2>Total $$total_final</h2></b>
						</div>
					
					</div>
					
					";
				
			}
			echo "
			
				<form action='/serversideproject/payment_success.php' method='post'>
					<input type='hidden' name='cmd' value='_cart'>
					<input type='hidden' name='business' value='business@serversideproject.msc'>
					<input type = 'hidden' name = 'upload' value = '1'> ";
					
					$x = 0;
					$uid = $_SESSION['uid'];
					$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
					$run_query = mysqli_query ($con,$sql);
					while ($row = mysqli_fetch_array($run_query)){
						$x++;
						echo "
					
							<input type='hidden' name='item_name_".$x."' value='".$row['product_title']."'>
							<input type='hidden' name='item_number_".$x."' value='".$x."'>
							<input type='hidden' name='amount' value='".$row['price']."'>
							<input type='hidden' name='quantity_".$x."' value='".$row['qty']."'>
							";
					}
					
					echo "
							<input style = 'float:right;' type='image' name='submit'
							src='https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png' alt='Credit Card Badges'>
</form> ";
			}
		}
		if (isset($_POST['removeProduct'])){
			$uid = $_SESSION['uid'];
			$pid = $_POST['remove'];
			$sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id = '$pid'";
			$run_query = mysqli_query($con,$sql);
			if ($run_query){
				echo "
					<div class = 'alert alert-danger'>
						<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a>
						<b>Product removed from cart successfully...!</b>
					</div>
				";
				
			}
		}
		
		if (isset ($_POST['updateProduct'])){
			$uid = $_SESSION['uid'];
			$pid = $_POST['update'];
			$qty = $_POST['qty'];
			$price = $_POST['price'];
			$total = $_POST['total'];
			
			$sql = "UPDATE cart SET qty = '$qty', price = '$price',total_amount = '$total'
				   WHERE user_id ='$uid' AND p_id = '$pid'";
			$run_query = mysqli_query($con,$sql);
				
		if ($run_query){
			
			echo "
				<div class = 'alert alert-success'>
					<a href = '#' class = 'close' data-dismiss ='alert' aria-label ='close'>&times;</a>
					<b>Product update successfull...!</b>
				</div>
			";
			
		}
				   
		}

		if (isset($_POST['cart_count'])){
		
			$uid = $_SESSION['uid'];
			$sql = "SELECT * FROM cart WHERE user_id = '$uid' ";		
			$run_query = mysqli_query($con,$sql);
			$count = mysqli_num_rows($run_query);
			echo $count;
			
		}
		
?>

