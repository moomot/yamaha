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
        <div class="cont_main contacts">
            <div class="wrapper">
                <div class="speednav">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li class="devider">»</li>
                        <li>Контакты</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <h1>Адреса и контакты салонов</h1>
            </div>
        </div>
        <div class="map_content">
            <div class="wrapper">
                <div class="current_city">Ваш город: Славянск-на-Кубани</div>
                <div class="views">
                    <a class="on_map" href="#">На карте</a>
                    <a class="on_list" href="#">Списком</a>
                </div>
                <div class="map_descr">
                    Аксессуары и расходные материалы Вы можете заказать <br/>
                    через интернет-магазин в любой город России
                </div>
            </div>
        </div>
        <div class="on_map_cont">
            <img src="images/bigmap.png" width="100%" alt=""/>
        </div>
        <div class="on_list_cont">
           <div class="wrapper">
               <table cellpadding="0" cellspacing="0" width="100%">
                   <thead>
                   <tr>
                       <th>Салон</th>
                       <th>Адрес</th>
                       <th>Режим работы</th>
                       <th>Телефон</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <td>Yamaha</td>
                       <td>хутор Трудобеликовский,  ул. Ленина, 67 Г</td>
                       <td>с 09:30 до 17:00, понедельник выходной</td>
                       <td>+7 (938) 426-24-00</td>
                   </tr>
                   </tbody>
               </table>
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
