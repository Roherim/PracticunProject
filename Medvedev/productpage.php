
<?php $categories=Get_Category_Id($_GET['id']);?>
<?php
require 'Header.php'
 ?>
	<div id="Contentpage">
		<?php
			require 'Menuright.php'
 		?>

<div id="centrepage">
			<div id="protab" align="center">
				<div class="Silv">
				<h5 align="center"><? echo $categories["NameCategory"];?></h5>
				</div>	
			</div>	
		</div>
			<div id="Tab1">
					<ul class="products clearfix">
						<?php $prod=Get_Product();
						foreach ($prod as $products):?>
							
						<li class="product-wrapper">
							<a href="#" class="product"> <img src=<?echo $products["image"];?>><?echo $products["Name"]?><button class="btn-ens-action" data-rel="a327f282205681">Купить</button></a>	
						</li>
					<?php  endforeach;?>
					</ul>
				</div>

</div>
<?php
require 'Footer.php'
?>