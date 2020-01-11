<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "lavira");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="bags.php"</script>';
			}
		}
	}
}
?>

<!DOCTYPE HTML>
<php>
<head>
<title>Shoplist A Ecommerce Category Flat Bootstrap Responsive  Website Template | Product :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php
; charset=utf-8" />
<meta name="keywords" content="Shoplist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="top-nav">
				<div class="content white">
	              <nav class="navbar navbar-default" role="navigation">
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					        </button>
					        <div class="navbar-brand logo">
								<a href="index.php
								"><img src="images/logo1.png" alt=""></a>
							</div>
					    </div>
					    <!--/.navbar-header-->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
								   <li><a href="index.php
								   ">Home</a></li>
						             <li class="dropdown">
						        	
						            <li class="dropdown">
						        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
						            <ul class="dropdown-menu multi-column columns-3">
							            <div class="row">
								            <div class="col-sm-4">
									            <ul class="multi-column-dropdown">
													<li><a href="bags.php
													">Bags</a></li>
									            </ul>
								            </div>
								            <div class="col-sm-4">
									            <ul class="multi-column-dropdown">
										           
									            </ul>
								            </div>
								            <div class="col-sm-4">
									            <ul class="multi-column-dropdown">
													
													
									            </ul>
								            </div>
							            </div>
						            </ul>
						        </li>
						        
								<li><a href="contact.php
								">Contact</a></li>
					        </ul>
					    </div>
					    <!--/.navbar-collapse-->
					</nav>
					<!--/.navbar-->
				</div>
			</div>
			<div class="header-right">
				<div class="search">
					<div class="search-text">
					    <input class="serch" type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
					</div>
					<div class="cart box_1">
						<a href="checkout.php
						">
						<h3>
							<img src="images/cart.png" alt=""/>
							<div class="total">
							<span class="simpleCart_total"></span></div>
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					</div>    
					<div class="head-signin">
						<h5><a href="login.php
						"><i class="hd-dign"></i>Sign in</a></h5>
					</div>              
                     <div class="clearfix"> </div>					
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--product start here-->
<div class="product">
	<div class="container">
		<div class="product-main">
			  <div class=" product-menu-bar">
			    	<div class="col-md-3 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h1>Categories</h1>
							<div class="row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
								</div>
								<div class="col col-4">								
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>handbags</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bracelets</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Watches</label>			
								</div>
							</div>
						</section>
						<section  class="sky-form">
							<h2>Brand</h2>
							<div class="row1 row2 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Brands</label>
								</div>
								<div class="col col-4">
								    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kurtas</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Puma</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Chanel</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fendi</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hilde Palladino</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lana Marks</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Prada</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>flipkart</label>									
								</div>
							</div>
						</section>
						<section class="sky-form">
							<h4>discount</h4>
								<div class="row1 row2 scroll-pane">
									<div class="col col-4">
										<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
										<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
										<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
									</div>
									<div class="col col-4">
										<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
										<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
										<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
									</div>
								</div>						
						</section>
						<section class="sky-form">
							<h4>Colour</h4>
								<ul class="w_nav2">
									<li><a class="color1" href="#"></a></li>
									<li><a class="color2" href="#"></a></li>
									<li><a class="color3" href="#"></a></li>
									<li><a class="color4" href="#"></a></li>
									<li><a class="color5" href="#"></a></li>
									<li><a class="color6" href="#"></a></li>
									<li><a class="color7" href="#"></a></li>
									<li><a class="color8" href="#"></a></li>
									<li><a class="color9" href="#"></a></li>
									<li><a class="color10" href="#"></a></li>
									<li><a class="color12" href="#"></a></li>
									<li><a class="color13" href="#"></a></li>
									<li><a class="color14" href="#"></a></li>
									<li><a class="color15" href="#"></a></li>
									<li><a class="color5" href="#"></a></li>
									<li><a class="color6" href="#"></a></li>
									<li><a class="color7" href="#"></a></li>
									<li><a class="color8" href="#"></a></li>
									<li><a class="color9" href="#"></a></li>
									<li><a class="color10" href="#"></a></li>
								</ul>
						</section>
					</div>
				</div>
			  </div>	
			  <div class="col-md-9 product-block">
			  <?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="bags.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">Rp. <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>

			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rp. <?php echo $values["item_price"]; ?></td>
						<td>Rp. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="bags.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rp. <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />

				      
			      <div class="clearfix"> </div>
			  </div>
		</div>
	</div>
</div>
<!--product end here-->
<!--footer strat here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="ftr-grids-block">
				<div class="col-md-3 footer-grid">
					<ul>
					
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="terms.php
						">Website Terms</a></li>
						<li><select class="country">
										<option value="select your location">Select Country</option>
										<option value="saab">Australia</option>
										<option value="fiat">Singapore</option>
										<option value="audi">London</option>
									</select>
							
						</li>
						<li><a href="shortcodes.php
						">Short Codes</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid-icon">
					<ul>
						<li><a href="https://www.instagram.com/lavira_co/"><span class="instro"> </span></a></li>
					</ul>
					<form>
					<input class="email-ftr" type="text" value="Newsletter" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Newsletter';}">
					<input type="submit" value="Submit"> 
					</form>
				</div>
		    <div class="clearfix"> </div>
		  </div>
		  <div class="copy-rights">
		     <p>© 2016 Shoplist. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		   </div>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</php
>