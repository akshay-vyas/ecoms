<?php
include('dbconnect.php');
error_reporting(0);
session_start();

$email=$_SESSION['email'];
$buyer = mysqli_query($conn,"select * from buyer_registration where buyer_email = '$email'");
$buyer_id = '';
//echo "select * from buyer_registration where buyer_email = '$email'";
while($buyers = mysqli_fetch_assoc($buyer))
{
	$buyer_id = $buyers['buyer_id'];
	# code...
}

?>

<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<?php 
					$view_cart = "select * from cart c, product_details p where p.product_id = c.product_id and buyer_id = '$buyer_id'";
					$view_carts = mysqli_query($conn,$view_cart);
					foreach ($view_carts as $view)
					{
						$sel1 = $view['product_id'];
					?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<?php 
							$img1=mysqli_query($conn,"select * from images where product_id = '$sel1' LIMIT 1");
							foreach ($img1 as $img2)
							{
								?>
							<img src="<?php echo "opts/catalog/uploads/".$img2['image_name'];?>" alt="IMG">
							<?php 
						}
						?>
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								<?php echo $view['cart_id'];?>
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>
					<?php 
				}
				?>

					

					
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>