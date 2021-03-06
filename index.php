<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if($_GET){
setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}

if(!isset($_SESSION['utms'])) {
$_SESSION['utms'] = array();
$_SESSION['utms']['utm_source'] = '';
$_SESSION['utms']['utm_medium'] = '';
$_SESSION['utms']['utm_term'] = '';
$_SESSION['utms']['utm_content'] = '';
$_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <title>Специализированный магазин Найсер Дайсер Плюс (Nicer Dicer Plus)</title>
    <meta name="description" content="Овощерезка Nicer Dicer со скидкой и быстрой доставкой по СНГ">
    <meta name="keywords" content="Nicer Dicer, купить Nicer Dicer, овощерезка Nicer Dicer, Nicer Dicer отзывы">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="nicer-dicer-2_files/style.css">
    <link rel="stylesheet" href="nicer-dicer-2_files/slick.css">
    <link rel="stylesheet" href="nicer-dicer-2_files/slick-theme.css">
    <link rel="stylesheet" href="nicer-dicer-2_files/font.css">
    <link rel="stylesheet" href="nicer-dicer-2_files/prompt.css">
    <script src="nicer-dicer-2_files/prompt.js"></script>

</head>
<body>

<section class="block1">
    <div class="wrap">
        <h1>Мультирезка <span>Nicer Dicer Plus</span></h1>
        <h2>Незаменимый помощник на вашей кухне!</h2>
        <ul class="plus">
            <li>Немецкое качество</li>
            <li>Стильный дизайн</li>
            <li>Нержавеющие лезвия</li>
            <li>Простая в использовании</li>
            <li>Сохраняет продукты свежими</li>
        </ul>
        <div class="produkt"></div>
        <div class="sale">Скидка<p>53%</p></div>
        <ul class="price">
            <li>1280грн</li>
            <li>599грн</li>
        </ul>
        <a href="#buy" class="button">Заказать со скидкой</a>
    </div>
</section>

<section class="block2">
    <div class="wrap">
        <h2>Nicer Dicer Plus <span>поможет Вам:</span></h2>
        <ul class="clrfx">
            <li>
                <h3>Чистить</h3>
                Удобный пиллер поможет Вам быстро почистить овощи и фрукты без риска поранить руки об острое лезвие
            </li>
            <li>
                <h3>Нарезать</h3>
                Набор из четырёх лезвий поможет быстро и аккуратно нарезать продукты ломтиками или кубиками
            </li>
            <li>
                <h3>Натирать</h3>
                Удобная насадка крупной терки с защитной крышкой позволит натереть продукты прямо в контейнер
            </li>
            <li>
                <h3>Сохранять</h3>
                Удобный контейнер на 1.5л с герметичной крышкой сохранит ваши продукты свежими на долгое время
            </li>
        </ul>
    </div>
</section>

<section class="block3">
    <div class="wrap">
        <h2>Nicer Dicer Plus <span>включает в себя:</span></h2>
        <div class="col1">
            <figure>
                <p></p>
                <figcaption>Пилер для удаления кожуры</figcaption>
            </figure>
            <figure>
                <p></p>
                <figcaption>Режущие насадки</figcaption>
            </figure>
            <ul class="dot">
                <li>Насадка с двойным ножом для резки на четверти;</li>
                <li>Насадка с 4 ножами для резки на узкие ломтики;</li>
                <li>Насадка с 12 лезвиями для нарезки пластинами 6/36 мм;</li>
                <li>Насадка с 6 лезвиями для нарезки кубиками 18/18мм.</li>
            </ul>
        </div>
        <div class="col2">
            <figure>
                <p></p>
                <figcaption>Контейнер</figcaption>
            </figure>
            <ul class="dot">
                <li>Удобный контейнер емкостью 1,5 л;</li>
                <li>Основа с креплениями для насадок;</li>
                <li>Верхний режущий элемент с функцией самоочистки;</li>
                <li>Специальная герметичная крышка на защелках.</li>
            </ul>
        </div>
        <div class="col3">
            <figure>
                <p></p>
                <figcaption>Терка с защитной крышкой</figcaption>
            </figure>
            <figure>
                <p></p>
                <figcaption>Шиновка с мембраной</figcaption>
            </figure>
            <p>Шинковка-слайсер с защитной мембраной и насадки для безопасной фиксации продукта при натирании</p>
        </div>
    </div>
    <div class="wrap">
        <a href="#buy" class="button">Заказать со скидкой</a>
    </div>
</section>

<section class="block4">
    <div class="wrap">
        <h2>Видео обзор <span>Nicer Dicer Plus</span></h2>
        <div class="video box">
            <style>
                .video-container {
                    position: relative;
                    width: 560px;
                    height: 315px;
                    overflow: hidden;
                }

                .video-container iframe, .video-container object, .video-container embed {
                    position: absolute;
                    display: block;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                }
            </style>
            <div class="video-container">
                <div class="youtube" id="dTwSs4sGewI"><img src="nicer-dicer-2_files/hqdefault.jpg" class="thumb">
                    <div class="play"></div>
                </div>
            </div>
            <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/dTwSs4sGewI?showinfo=0" frameborder="0" allowfullscreen></iframe>-->
        </div>
        <p>Овощерезка Nicer Dicer Plus – это незаменимый помощник на
            любой кухне, даже профессиональной. Его чрезвычайно острые режущие
            лезвия позволяют безупречно нарезать все виды фруктов и овощей.</p>
        <p>Для того, чтобы нарезать овощи, фрукты, мясо, сыр и другие
            продукты, достаточно потратить несколько секунд. Кстати, независимо от
            того сырые они или варенные. Нужно выбрать способ нарезания (кубиками,
            ломтиками, четвертинками, клиньями), поставить соответствующую
            насадку-нож, положить на него желаемый продукт и закрыть крышку, которая
            протолкнет его через лезвия ножа.</p>
    </div>
</section>

<section class="block5">
    <div class="wrap">
        <h2>Чем хороша овощерезка <span>Nicer Dicer Plus</span></h2>
        <div class="view3d box">
            <div class="twist-cont">
                <ul class="twist">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <ul>
                <li>360°</li>
            </ul>
        </div>
        <ul class="dot">
            <li>Овощерезка Nicer Dicer Plus проста в уходе и эксплуатации. Ее можно мыть даже в посудомойке.</li>
            <li>За доступную цену вы получаете отличное приспособление для нарезания продуктов.</li>
            <li>Nicer Dicer Plus более чем в трое сэкономит Ваше время на приготовление еды.</li>
            <li>Овощерезка Nicer Dicer Plus за считаные минуты поможет нарезать продукты</li>
            <li>Острые как бритва лезвия овощерезки произведены из нержавеющей стали</li>
            <li>Контейнер с герметично закрывающейся крышкой сохранит свежесть продуктам</li>
        </ul>
    </div>
</section>

<section class="block6">
    <div class="wrap">
        <h2>Фото овощерезки <span>Nicer Dicer Plus</span></h2>
        <div class="photo">
            <div></div><div></div><div></div><div></div>
        </div>
        <p>Конструкция лезвий Nicer Dicer Plus такова, что при нарезании
            овощей и фруктов с тонкой кожурой ломтики выходят ровными и не
            сминаются. Теперь не важно, что вы будете резать: помидор или ананас –
            все кусочки получаться одинаково красивыми.</p>
        <p>Контейнер, идущий в комплекте с овощерезкой Nicer Dicer Plus,
            позволяет некоторое время хранить свежими нарезанные продукты в
            холодильнике. Вы просто режете продукты для салата, закрываете контейнер
            и ставите его в холодильник и вуаля - салат готов. Остается только
            добавить заправку для салата!</p>
    </div>
</section>

<section class="block7">
    <div class="wrap">
        <h2>Отзывы об овощерезке <span>Nicer Dicer Plus</span></h2>
        <ul>
            <li></li>
            <li></li>
            <li>
                <h3>Татьяна Волошина</h3>
                <p>Купила себе овощерезку - осталась очень довольна, но
                    для быстрого нарезания продуктов нужно немного приловчиться. Режет
                    суперски как варенные, так и сырые овощи. Всем рекомендую. Спасибо!<span>г. Вольногорск</span></p>
            </li>
        </ul>
        <ul>
            <li></li>
            <li></li>
            <li>
                <h3>Ольга Мичурина</h3>
                <p>Эту овощерезку мне подарил брат на день рожденья. Я
                    отнеслась к подарку скептически, но попробовав нарезать продукты для
                    салата, поняла, что ошибалась Режет быстро, моется легко. Я в восторге.<span>г. Красноярск</span>
                </p>
            </li>
        </ul>
    </div>
</section>


<section class="block8">
    <div class="wrap">
        <h2>Как заказать <span>Nicer Dicer Plus</span></h2>
        <ul class="clrfx">
            <li>Вы оставляете заявку в форме на нашем сайте указав свои контакты</li>
            <li>Менеджер связывается с Вами для подтверждения заказа</li>
            <li>Мы максимально быстро отправляем ваш заказ по указаному адресу</li>
            <li>Вы получаете свой товар и платите за него на почте или курьеру</li>
        </ul>
    </div>
</section>
<a id="buy"></a>
<section class="block9">
    <div class="wrap">
        <h2>Мультирезка <span>Nicer Dicer Plus</span></h2>
        <h3>По акционной цене со скидкой 53 %</h3>
        <div class="produkt-fot"></div>
        <div class="sale">Скидка<p>53%</p></div>
        <div class="formbox box">
            <h4>До конца акции осталось:</h4>
            <div class="countbox">
                <div class="countbox-num">
                    <div class="countbox-hours1"><span></span>0</div>
                    <div class="countbox-hours2"><span></span>5</div>
                    <div class="countbox-hours-text">Часов</div>
                </div>
                <div class="countbox-hours-text"></div>
                <div class="countbox-space">:</div>
                <div class="countbox-num">
                    <div class="countbox-mins1"><span></span>1</div>
                    <div class="countbox-mins2"><span></span>6</div>
                    <div class="countbox-mins-text">Минут</div>
                </div>
                <div class="countbox-mins-text"></div>
                <div class="countbox-space">:</div>
                <div class="countbox-num">
                    <div class="countbox-secs1"><span></span>5</div>
                    <div class="countbox-secs2"><span></span>1</div>
                    <div class="countbox-secs-text">Секунд</div>
                </div>
            </div>
            <ul class="price">
                <li>1280грн</li>
                <li>599грн</li>
            </ul>
            <form method="post" action="zakaz.php"
                  onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
                <input name="name" placeholder="Введите ваше имя" type="text">
                <input name="phone" placeholder="Введите ваш телефон" type="tel">
                <input value="Заказать со скидкой" class="button" type="submit">
            </form>
        </div>
    </div>
</section>

<section class="block10">
    <div class="wrap">
        <img src="nicer-dicer-2_files/cop1-w-320.png" alt="">
        <p><a target="_blank" href="https://qualityby.ru/nicer-dicer-a/?page=politics">Политика конфиденциальности</a>&nbsp;&nbsp;<a
                target="_blank" href="https://qualityby.ru/nicer-dicer-a/?page=agreement">Пользовательское
            соглашение</a></p>
    </div>
</section>


<link rel="stylesheet" type="text/css" href="nicer-dicer-2_files/roboto.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="nicer-dicer-2_files/jquery.js" type="text/javascript"></script>
<script src="nicer-dicer-2_files/plugins.js" type="text/javascript"></script>
<script src="nicer-dicer-2_files/detect.js" type="text/javascript"></script>


<link href="nicer-dicer-2_files/popup-m1-style.css" rel="stylesheet" type="text/css">
<script src="nicer-dicer-2_files/popup-m1.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        M1.initComebacker(3000);
        var M1Text = {
            'validation_name': 'Укажите корректные ФИО.',
            'validation_phone1': 'Номер телефона может содержать только цифры, символы "+", "-", "(", ")" и пробелы.',
            'validation_phone2': 'В вашем телефоне слишком мало цифр.',
            'comebacker_text': 'ВНИМАНИЕ'
        };
        M1.validateAndSendForm(false, M1Text);
    });
</script>
<script type="text/javascript" src="nicer-dicer-2_files/previewYouTube.js"></script>
<style type="text/css">.youtube {
    background-color: #000;
    max-width: 100%;
    height: inherit;
    overflow: hidden;
    position: relative;
    cursor: hand;
    cursor: pointer
}

.youtube .thumb {
    bottom: 0;
    display: block;
    left: 0;
    margin: auto;
    max-width: 100%;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    height: auto
}

.youtube .play {
    filter: alpha(opacity=80);
    opacity: .8;
    height: 77px;
    left: 50%;
    margin-left: -38px;
    margin-top: -38px;
    position: absolute;
    top: 50%;
    width: 77px;
    background: url("//static.best-gooods.ru/img/youtube-play-icon.png") no-repeat
}</style>


<script src="js/slick.min.js"></script>
<script src="nicer-dicer-2_files/count.js"></script>
<script src="nicer-dicer-2_files/main.js"></script>


<div id="selenium-highlight"></div>
</body>
<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal"><a class="close-m1"></a>
    <div>
        <div class="popup-m1-title">Вам понравилось это предложение?</div>
        <div class="popup-m1-cont">
            <div class="popup-m1-text1">Мы расскажем Вам все об этом товаре, предложим наилучшие условия и ознакомим с
                подходящими акционными предложениями!
            </div>
            <form method="POST" action="zakaz.php" class="popup-m1-form">
                <input name="name" placeholder="Введите ваше имя" required="" type="text">
                <input name="phone" placeholder="Введите телефон" required="" type="text">
                <button>Перезвоните мне</button>
                <input name="is_popup" value="1" type="hidden">
                <input name="from_recall_button" value="0" type="hidden">
            </form>
            <div class="popup-m1-text2">Оператор перезвонит Вам через 5-10 минут</div>
        </div>
    </div>
</div>
</html>