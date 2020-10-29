<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Стандес</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<? require 'db.php' ?>
</head>
<body>
	<div class="wapper">
	<header>
	
		<div id="Hed2"> <!--Первый блок шапки -->
    
			<h5>ДОСТАВКА ПО ВСЕМ РЕГИОНАМ РОССИИ</h5>
			<input placeholder size="10px"> <button>Поиск</button>
		</div>
		<div id="Hed1"> <!--ыторой блок шапки -->
			<h1 id="Logoname" align="center">СТАНДЕС</h1> 
			<h3 align="center" id="Logoname">ФАБРИКА ТОРГОВОГО ОБОРУДОВАНИЯ</h3>
		</div>
		<div id="Hed3"> <!--третий блок шапки -->
			<h5>ВЫСТАВОЧНЫЙ ЗАЛ И СКЛАД</h5>
			<a id="Coul" href="#">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a>
			<h5>+7(495) 229 0480 / 644 3660</h5>
		</div>
	
	</header>
	<nav align="center">
		<button><a href="index.php">Главная</a></button><button><a href="Onas.php">О компании</a></button> <button><a href="#">Условия оплаты и поставки</a></button> <button> <a href="#">Блог/Новости</a> </button>				
	</nav>
	<div id="Contentpage">
		<div id="MenuRight">
			<form action="Tov1.php"> <!--боковое меню -->
    			<button type="submit">Витрины, прилавки,<br> повильоны</button><br>
			</form>
			<form action="Tov2.php">
    			<button type="submit">Стелажи торговые</button><br>
			</form>
			<form action="Tov3.php">
    			<button type="submit">Стелажи для магазинов<br>cерия &quot Настроение &quot</button><br>
			</form>
			<form action="Tov4.php">
    			<button type="submit">Торговое оборудование<br>стелажи в стиле ЛОФТ</button><br>
			</form>
			<form action="Tov5.php">
    			<button type="submit">Перворированные панели<br>торговое оборудование <br>из перфпонелей</button><br>
			</form>
			<form action="Tov6.php">
    			<button type="submit">Эконом панели и навесные элементы</button><br>
			</form>
			<form action="Tov7.php">
			<button>Стенды и стойки для торговли</button><br>
			</form>
			<form action="Tov8.php">
			<button>Стенды и стойки для торговли</button><br>
			</form>
			<form action="Tov1.php">
			<button>Изготовление торгового оборудования под заказ</button><br>
			</form>
			<form action="Tov9.php">
			<button>Крючки торговые</button><br>
			</form>
			<form action="Tov10.php">
			<button>Сетки торговые</button><br>
			</form>
			<form action="Tov11.php">
			<button>Столы торговые демонстрационные</button><br>
			</form>
			<form action="Tov12.php">
			<button>Ценникодержатели. Ограничители, разделители полок. Аксессуары.</button><br>
			</form>
			<form action="Tov13.php">
			<button>Тележки и корзины</button><br>
			</form>
			<form action="Tov14.php">
			<button>Стеллажи складские</button><br>
			</form>
			<form action="Tov15.php">
			<button>Распродажа торгового оборудования</button><br>
			</form>
			<form action="Tov16.php">
			<button>Стеллажи с ящиками</button><br>
			</form>
		</div>	
		<div id="centrepage">
			<div id="protab" align="center">
				<div class="Silv">
					<? $cat=Get_Categories7();
						foreach ($cat as $categories):?> 						
				<h5 align="center"><? echo $categories["NameCategory"];?></h5>
			<? endforeach;?>
				</div>	
			</div>
		</div>
			<div id="Tab1">
					<ul class="products clearfix">
						<?php $prod=Get_Product7();
						foreach ($prod as $products): ?>
						 <li class="product-wrapper">
							<a href="#" class="product"> <img src=<?echo $products["image"];?>><?php echo $products["Name"]?><button class="btn-ens-action" data-rel="a327f282205681">Купить</button></a>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>

			
		</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--Готовый скрипт корзины-->
<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-a327f282.js"></script>

<!--Стили элементов для корзины-->
<link href="https://lk.easynetshop.ru/frontend/v5/ens-a327f282.css" rel="stylesheet">
			<div id="partners">
				
			</div>
			<footer>
				<div class="Silv">
				© 2004-2020 Стандес <a href="#"> РЕШЕНИЯ ДЛЯ МАГАЗИНОВ</a><a href="#"> ПОЛЕЗНЫЕ СТАТЬИ</a><a href="#"> ОПТОВЫЙ ПРАЙС-ЛИСТ</a><a href="#"> РОЗНИЧНЫЙ ПРАЙС-ЛИСТ</a><a href="#"> КАРТА САЙТА</a>
				</div>
			</footer>
	</div>
</body>
</html>