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
        <script src="js/jquery.tinyscrollbar.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#scrollbar1').tinyscrollbar({
                    axis: "x",
                    thumbSize: 100,
                    wheel: false,
                    trackSize: 1200
                });
            });
        </script>
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
        <div class="cont_main fullcontent">
            <div class="wrapper">
                <div class="speednav">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li class="devider">»</li>
                        <li>Мотоциклы</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <h1>XVS950 A — вдохновлен прошлым,
                    создан для будущего</h1>
            </div>
        </div>
        <div id="scrollbar1">
            <div class="viewport">
                <div class="overview">
                    <img src="images/slider_1.jpg" alt="" />
                    <img src="images/slider_2.jpg" alt="" />
                    <img src="images/slider_1.jpg" alt="" />
                    <img src="images/slider_2.jpg" alt="" />
                    <img src="images/slider_1.jpg" alt="" />
                    <img src="images/slider_2.jpg" alt="" />
                </div>
            </div>
            <div class="scrollbar"><div class="track"><div class="thumb"></div></div></div>
        </div>

        <div class="full_item_content">
            <div class="wrapper">
                <div class="full_left">
                    <a class="preorder" href="#"><span>Предварительный заказ</span></a> <br/>
                    <a class="testdrive" href="#"><span>Записаться на тест-драйв</span></a>
                    <div class="full_nav">
                        <span class="curr_item"><a class="review" href="javascript://"><i>Обзор модели</i></a></span>
                        <span><a class="tech" href="javascript://"><i>Технические характеристики</i></a></span>
                        <span><a class="colors" href="javascript://"><i>Цветовые решения</i></a></span>
                    </div>
                </div>
                <div class="full_right">
                    <!-- review -->
                    <div class="review_cont">
                        <div class="review_left">
                            <h2>Классические японские технологии
                                в новом дизайне боббера</h2>
                            <p>Специалисты по всему миру используют традиционное японское качество
                                конструирования в виде основы для создания новых стилей мотоциклов.
                                Каждая модель индивидуальна и отражает личность ее создателя. Однако,
                                в основе каждой из них всегда лежат незыблемые принципы инженерного
                                превосходства. Они в «сердце» каждого мотоцикла марки Yamaha.</p>
                            <p>Сегодня Yamaha вдохновляет новое поколение мотоциклистов своим
                                боббером XV950, вобравшим в себя характер и индивидуальность
                                классических мотоциклов.</p>
                            <img src="images/full_img.png" alt=""/>
                            <h2>Классические японские технологии
                                в новом дизайне боббера</h2>
                            <p>Специалисты по всему миру используют традиционное японское качество
                                конструирования в виде основы для создания новых стилей мотоциклов.
                                Каждая модель индивидуальна и отражает личность ее создателя. Однако,
                                в основе каждой из них всегда лежат незыблемые принципы инженерного
                                превосходства. Они в «сердце» каждого мотоцикла марки Yamaha.</p>
                            <p>Сегодня Yamaha вдохновляет новое поколение мотоциклистов своим
                                боббером XV950, вобравшим в себя характер и индивидуальность
                                классических мотоциклов.</p>
                            <h2>Классические японские технологии
                                в новом дизайне боббера</h2>
                            <p>Специалисты по всему миру используют традиционное японское качество
                                конструирования в виде основы для создания новых стилей мотоциклов.
                                Каждая модель индивидуальна и отражает личность ее создателя. Однако,
                                в основе каждой из них всегда лежат незыблемые принципы инженерного
                                превосходства. Они в «сердце» каждого мотоцикла марки Yamaha.</p>
                            <p>Сегодня Yamaha вдохновляет новое поколение мотоциклистов своим
                                боббером XV950, вобравшим в себя характер и индивидуальность
                                классических мотоциклов.</p>
                        </div>
                        <div class="review_right">
                            <div class="review_right_title">Комплектации и цены</div>
                            <div class="review_content">
                                <ul>
                                    <li><a href="">XVS950A Midnight Star, 2014 м.г</a><div class="review_price">731 000 руб.</div></li>
                                    <li><a href="#">XVS950CU, 2014 м.г</a><div class="review_price">731 000 руб.</div></li>
                                    <li><a href="#">XVS950CR CAFE RACER, 2015 м.г</a><div class="review_price">731 000 руб.</div></li>
                                </ul>
                                <a class="count_price" href="#">Рассчитать стоимость в кредит</a>
                            </div>
                        </div>
                    </div>
                    <!-- //review -->
                    <!-- tech -->
                        <div class="tech_cont">
                            <div class="tech_title">Технические характеристики</div>
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>ДВИГАТЕЛЬ</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Главная передача</td>
                                        <td>ремень</td>
                                    </tr>
                                    <tr>
                                        <td>Диаметр цилиндра x ход поршня</td>
                                        <td>85.0 x 83.0 мм</td>
                                    </tr>
                                    <tr>
                                        <td>Макс. крутящий момент</td>
                                        <td>79.5 Нм (8.1 кг-м) @ 3,000 об/мин</td>
                                    </tr>
                                    <tr>
                                        <td>Макс. мощность</td>
                                        <td>38.3 кВт (52.1 л.с.) при 5,500 об. / мин</td>
                                    </tr>
                                    <tr>
                                        <td>Рабочий объем</td>
                                        <td>942 куб. см</td>
                                    </tr>
                                    <tr>
                                        <td>Система зажигания</td>
                                        <td>транзисторная система зажигания TCI</td>
                                    </tr>
                                    <tr>
                                        <td>Система запуска</td>
                                        <td>электрический</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя</td>
                                        <td>воздушного охлаждения, 4 клапана на цилиндр, 4-тактный, c одним
                                            верхним распредвалом (SOHC), 2-цилиндровый V-образный
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Тип сцепления</td>
                                        <td>в масляной ванне, многодисковое
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <!-- //tech -->
                    <!-- colors -->
                        <div class="colors_cont">
                            <div class="tech_title">Цветовые решения</div>
                            <img src="images/bigphoto.png" alt="" />
                            <div class="colors_descr">Competition White</div>
                        </div>
                    <!-- //colors -->
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
