<div id="MenuRight">
			<h3>Наш Ассортимент</h3>
				
					<?php require 'db.php'?>
								
				<?php $categ=Get_Categories();
				foreach ($categ as $categories): ?>
			
			 <!--боковое меню -->
			 <style>
			 	a{
			 		text-decoration: none;
					color: black;
			 	}
			 </style>
    			<button><a href="productpage.php?id=<?php echo $categories["CategoryID"];?>"><?php echo $categories["NameCategory"];?></a></button><br>
			
			
			<?php endforeach;?>
			



			<!--<form action="productpage.php">
    			<button type="submit">Стелажи торговые</button><br>
			</form>
			<form action="productpage.php">
    			<button type="submit">Стелажи для магазинов<br>cерия &quot Настроение &quot</button><br>
			</form>
			<form action="productpage.php">
    			<button type="submit">Торговое оборудование<br>стелажи в стиле ЛОФТ</button><br>
			</form>
			<form action="productpage.php">
    			<button type="submit">Перворированные панели<br>торговое оборудование <br>из перфпонелей</button><br>
			</form>
			<form action="productpage.php">
    			<button type="submit">Эконом панели и навесные элементы</button><br>
			</form>
			<form action="productpage.php">
			<button>Эконом панели и навесные элементы</button><br>
			</form>
			<form action="productpage.php">
			<button>Стенды и стойки для торговли</button><br>
			</form>
			<form action="productpage.php">
			<button>Изготовление торгового оборудования под заказ</button><br>
			</form>
			<form action="productpage.php">
			<button>Крючки торговые</button><br>
			</form>
			<form action="productpage.php">
			<button>Сетки торговые</button><br>
			</form>
			<form action="productpage.php">
			<button>Столы торговые демонстрационные</button><br>
			</form>
			<form action="productpage.php">
			<button>Ценникодержатели. Ограничители, разделители полок. Аксессуары.</button><br>
			</form>
			<form action="productpage.php">
			<button>Тележки и корзины</button><br>
			</form>
			<form action="productpage.php">
			<button>Стеллажи складские</button><br>
			</form>
			<form action="productpage.php">
			<button>Распродажа торгового оборудования</button><br>
			</form>
			<form action="productpage.php">
			<button>Стеллажи с ящиками</button><br>
			</form>-->
		</div>	