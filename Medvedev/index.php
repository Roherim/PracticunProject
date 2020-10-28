	
<?php
require 'Header.php'
 ?>
 	<div id="Contentpage">
		<?php
			require 'Menuright.php'
 		?>
		<div id="centrepage">
			<div id="News"><!--новостное слайд шоу -->
				<div class="Silv">
				<h5 align="center">ИНТЕРНЕТ-МАГАЗИН ТОРГОВОГО ОБОРУДОВАНИЯ <button>&lt;</button><button>&gt;</button></h5><!-- заголовок и кнопки вперед/назад-->
			</div>
				<img src="Sours/New1.png" width="900px"><!--новостное изображение -->
			</div>
			</div>
				
			<div id="Tab1"><!--блок с товарами -->
					<ul class="products clearfix">
						<?php $categ=Get_Categories();
				foreach ($categ as $categories):?>
						<li class="product-wrapper">
							<a href="productpage.php?id=<?php echo $categories["CategoryID"];?>" class="product"><img src=<?php echo $categories["image"]?>></a>
						</li>
						<?php endforeach;?>
						</ul>
				</div>
			</div>

			<div id="partners">
				
			</div>
			<?php
			require 'Footer.php'
			?>
	</div>
	<!--Библиотека jQuery-->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--Готовый скрипт корзины-->
<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-a327f282.js"></script>

<!--Стили элементов для корзины-->
<link href="https://lk.easynetshop.ru/frontend/v5/ens-a327f282.css" rel="stylesheet">

</html>