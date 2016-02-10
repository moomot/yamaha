<?
header('Content-Type: text/html; charset= utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Texnosport</title>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="author" content="">

        <!-- Include styles -->
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="css/hover.css" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <!-- Include scripts -->
		<script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery.hyphen.ru.min.js"></script>
        <script src="js/ui.js"></script>
	</head>
	<body>
        <div class="top-line">
            <div class="wrapper">
                <div class="your_city">Ваш город:</div>
                <a class="city_chooser" href="#"><span>Славянск-на-Кубани</span></a>
                <nav class="left_nav">
                    <ul>
                        <li><a href="#"><span>Адреса салонов</span></a></li>
                    </ul>
                </nav>

                <nav class="center_nav">
                    <ul>
                        <li><a href="#">Компания</a></li>
                        <li><a href="#">Покупателям</a></li>
                    </ul>
                </nav>
                <a class="search_form_btn" href="#"></a>
            </div>
        </div>
        <header>
            <div class="wrapper">
                <a class="hlogo" href="/"></a>
                <a class="hlogo2" href="/"></a>
                <div class="call_form">
                    <span>8 800 770 05 51</span> <br/>
                    <a href="#">Обратный звонок</a>
                </div>
                <ul class="cart_form">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><span>0</span></li>
                </ul>
            </div>
        </header>
        <nav class="main_nav">
            <div class="wrapper">
                <ul>
                    <li><a href="#"><span>Продукция Yamaha</span></a></li>
                    <li><a href="#"><span>Подводные буксировщики Seabob</span></a></li>
                    <li><a href="#"><span>Производство катеров и яхт</span></a></li>
                    <li><a href="#"><span>Сервис Yamaha</span></a></li>
                    <li><a href="#"><span>Техника Б/У</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="cont_main cart">
            <div class="wrapper">
                <div class="speednav">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li class="devider">»</li>
                        <li>Корзина</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <h1>Корзина</h1>
                <div class="cart_content">
                    <div class="cart_left">
                        <ul>
                            <li>
                                <div class="cart_img"><img src="images/cart.png" alt=""/></div>
                                <div class="cart_title"><a href="#">Моторное масло Shell Helix Ultra ECT 5W/30, 4 л,
                                        синтетическое</a></div>
                                <div class="cart_price">1 790 руб.</div>
                                <div class="cart_num_items">
                                    <div class="cart_minus"></div>
                                    <div class="cart_plus"></div>
                                    <div class="cart_holder">
                                        <input type="text" value="1"/>
                                    </div>
                                </div>
                                <div class="cart_sumprice">3 580 руб.</div>
                                <a class="del_item" href="#"></a>
                            </li>
                            <li>
                                <div class="cart_img"><img src="images/cart.png" alt=""/></div>
                                <div class="cart_title"><a href="#">Моторное масло Shell Helix Ultra ECT 5W/30, 4 л,
                                        синтетическое</a></div>
                                <div class="cart_price">1 790 руб.</div>
                                <div class="cart_num_items">
                                    <div class="cart_minus"></div>
                                    <div class="cart_plus"></div>
                                    <div class="cart_holder">
                                        <input type="text" value="1"/>
                                    </div>
                                </div>
                                <div class="cart_sumprice">3 580 руб.</div>
                                <a class="del_item" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="cart_right">
                        <div class="cartblock">
                            <div class="cart_b_title">Всего товаров: 3</div>
                            <div class="cart_b_content">
                                Сумма заказа:
                                <div class="cart_b_content_price">
                                    4 570 руб.
                                </div>
                                <a class="order_it_now" href="#">Оформить заказ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer_hr"></div>
    <footer>
        <div class="wrapper">
            <div class="foot_descr">
                © www.tehno-sport.ru <br/> <br/>
                Производитель оставляет за собой право <br/>
                вносить незначительные изменения в <br/>
                конструкцию печей, не ухудшающие их <br/>
                потребительские свойства.
            </div>
            <ul class="foot_cities">
                <li>
                    <div class="city_title">Краснодар</div>
                    <div class="city_cont">
                        ул. Дальняя 4/6 <br/>
                        +7 (861) 215-97-9
                    </div>
                </li>
                <li>
                    <div class="city_title">Сочи</div>
                    <div class="city_cont">
                        ул. 20 Горно-Стрелковой <br/>
                        Дивизии <br/>
                        +7(928) 203-777-0
                    </div>
                </li>
                <li>
                    <div class="city_title">Славянск-на-Кубани</div>
                    <div class="city_cont">
                        хутор Трудобеликовский, <br/>
                        ул. Ленина, 67 Г <br/>
                        7 (938) 426-24-00
                    </div>
                </li>
            </ul>
            <a class="go_top" href="#"></a>
        </div>
    </footer>
	</body>
</html>
