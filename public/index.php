<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';
include_once $ROOT . 'version.php';
?>

<head>
	<base href="<?= $BASE_HREF ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>
		Факультет event-менеджмента
	</title>

	<meta property="og:title" content="Факультет event-менеджмента ">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image"
		content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src"
		href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $gtm ?>');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
				n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
			n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2487426621502508');
		fbq('track', 'PageView');
	</script>
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> ">
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm ?>" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>

	
	<div class="wrapper">
		
		
		<section class="main ">
    
    <header class="header">
	<div class="container">
		<div class="header__content">
			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="logo" class="lazy">
				<img data-src="img/header/logo-mob.svg" alt="logo" class="lazy">
			</div>
			<a href="<?= $WA ?>" class="header__phone">
				<img data-src="img/header/phone.svg" alt="" class="lazy">
				<div>
					<?= $phone ?>
				</div>
			</a>
		</div>
	</div>
</header>
    

    <div class="container">
        <div class="main__content">
            <div class="main__wrap">

                
                <div class="main__desc">
                    <?= $desc ?>
                </div>
                

                
                <h1 class="main__title title">
                    <?= $title ?>
                </h1>
                

                
                <div class="main__subtitle">Загляни за&nbsp;границы<br> привычного обучения</div>
                

                


                
                <div class="main__button">
                    <a href="#popup-reg" class="main__button-left button"  data-fancybox>Заглянуть</a>
                    <a href="#popup-reg" class="main__button-right button" data-fancybox>Оставить заявку</a>
                </div>
                

                
                <ul class="main__list">
                    <li><span>Погрузим</span><br> в&nbsp;практику<br> с&nbsp;1-ого курса</li>
                    <li><span>Дадим</span><br> государственный<br> диплом</li>
                    <li><span>Научим создавать</span><br> события с учётом реалий <br> текущей ситуации</li>
                </ul>
                
            </div>

            
            

            
            <div class="main__contact">
                <a href="" class="main__contact-insta">
                    <img data-src="img/main/insta.svg" alt="" class="lazy">
                </a>
                <a href="tel:<?= $phone ?>" class="main__contact-icon">
                    <img data-src="img/main/phone.svg" alt="" class="lazy">
                </a>
                <a href="tel:<?= $phone ?>" class="main__contact-phone">8 800 100 3231</a>
            </div>
            

        </div>
    </div>
    
    <img data-src="img/main/piple.png" alt="" class="lazy main__img">
    
</section>
		
<section class="course" id="course">
    <div class="container">
        <div class="course__box" data-sticky-container>
            <div class="course__wrap-left">
                <div class="course__block sticky" data-margin-bottom="300" data-margin-top="140" data-sticky-class="is-sticky">
                    <div class="course__block-title title">Что <span>тебя<br> ждёт?</span></div>
                </div>
            </div>
            <div class="course__wrap-right">
                
                <div class="course__content">
                    <h3 class="course__content-title title">1 курс <div><span>+</span> <span>1 год стажа</span></div></span></h3>
                    
                    <ul class="course__content-list">
                        
                        <li>
                            <img src="img/course/course-icon-1.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Ты&nbsp;напуган и&nbsp;пока не&nbsp;уверен в&nbsp;своём выборе</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-2.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Ты&nbsp;знакомишься с&nbsp;экспертами индустрии</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-3.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Начинаешь работу помощником event-менеджера</p>
                        </li>
                        
                    </ul>
                    
                </div>
                
                <div class="course__content">
                    <h3 class="course__content-title title">2 курс <div><span>+</span> <span>2 года стажа</span></div></span></h3>
                    
                    <ul class="course__content-list">
                        
                        <li>
                            <img src="img/course/course-icon-4.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Узнаешь, как работает индустрия изнутри</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-5.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Поймешь, чем именно ты&nbsp;хочешь заниматься</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-6.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Становишься event-менеджером</p>
                        </li>
                        
                    </ul>
                    
                </div>
                
                <div class="course__content">
                    <h3 class="course__content-title title">3 курс <div><span>+</span> <span>3 года стажа</span></div></span></h3>
                    
                    <ul class="course__content-list">
                        
                        <li>
                            <img src="img/course/course-icon-7.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Помогаешь организовывать крупные события с&nbsp;партнёрами факультета</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-8.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Приобретаешь связи и&nbsp;получаешь постоянных клиентов</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-9.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Тебе поручают организовывать собственный проект</p>
                        </li>
                        
                    </ul>
                    
                </div>
                
                <div class="course__content">
                    <h3 class="course__content-title title">4 курс <div><span>+</span> <span>4 года стажа</span></div></span></h3>
                    
                    <ul class="course__content-list">
                        
                        <li>
                            <img src="img/course/course-icon-10.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Ты&nbsp;консультируешь новых event-менеджеров и&nbsp;постоянно организовываешь мероприятия</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-11.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Общаешься с&nbsp;ведущими экспертами индустрии</p>
                        </li>
                        
                        <li>
                            <img src="img/course/course-icon-12.svg" alt="" class="course__content-icon">
                            <p class="course__content-text">Подготавливаешь проект event-агентства вместо классической работы</p>
                        </li>
                        
                    </ul>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
		<section class="info" id="info">
    <img data-src="img/info/info-woman.png" alt="" class="lazy info__img">
    <img data-src="img/info/info-woman-mob.png" alt="" class="lazy info__img-mob">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <h2 class="info__title title"><span>Итог</span></h2>
            </div>
            <div class="col-12">
                <div class="info__subtitle title">Стаж: 4 года</div>
            </div>
        </div>
        <div class="row info__list">
            <div class="col-sm-6">
                <div class="info__item">
                    <img data-src="img/info/info-check.png" alt="" class="lazy">
                    Связи<br> в&nbsp;индустрии
                </div>
            </div>
            <div class="col-sm-6">
                <div class="info__item">
                    <img data-src="img/info/info-check.png" alt="" class="lazy">
                    Постоянные<br> клиенты
                </div>
            </div>
            <div class="col-sm-6">
                <div class="info__item">
                    <img data-src="img/info/info-check.png" alt="" class="lazy">
                    Бизнес-план собственного<br> Event-агентства
                </div>
            </div>
            <div class="col-sm-6">
                <div class="info__item">
                    <img data-src="img/info/info-check.png" alt="" class="lazy">
                    Рекомендации<br> от&nbsp;крупных заказчиков
                </div>
            </div>
        </div>
    </div>
</section>
		<section class="form-reg" id="form-reg">
    <div class="container">
       <div class="row no-gutters">
           <div class="col-12">
               <div class="form-reg__form">
                   
<form action="<?=$action?>&form=" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title">Оставьте заявку и мы свяжемся с вами <span>в течение 15 минут</span></h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Ваш телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш e-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь&nbsp;c<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a></div>
            </label>
        </div>
    </div>
</form>

               </div>
           </div>
       </div>
    </div>
</section>
		<section class="school" id="school">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <h2 class="school__title title"><span>Формы</span> обучения</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-5">
                <div class="school__item">
                    <img data-src="img/school/school-icon-1.svg" alt="" class="lazy">
                    <div class="school__item-wrap">
                        <div class="school__item-title title">очная</div>
                        <a href="#popup-reg" class="school__item-button button black" data-fancybox>Получить консультацию</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-7">
                <div class="school__item">
                    <img data-src="img/school/school-icon-2.svg" alt="" class="lazy">
                    <div class="school__item-wrap">
                        <div class="school__item-title title"><span>Дистанционная</span></div>
                        <a href="#popup-reg" class="school__item-button button" data-fancybox>Получить консультацию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		<section class="discipline" id="discipline">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="discipline__title title"><span>Ключевые</span> дисциплины</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="discipline__item item-line">Еvent-индустрия: рынок,<br> структура, классификация,<br> ресурсы</div>
                <div class="discipline__item item-line">Маркетинг<br> в&nbsp;event-индустрии</div>
                <div class="discipline__item item-line">Инновационные методы<br> продвижения специальных<br> событий</div>
            </div>
            <div class="col-sm-4">
                <div class="discipline__item item-line">Технология организации<br> мероприятий</div>
                <div class="discipline__item item-line">Продажи на&nbsp;event-рынке.<br> Бюджетирование проекта</div>
                <div class="discipline__item item-line">Управление<br> командой проекта</div>
            </div>
            <div class="col-sm-3">
                <div class="discipline__item item-line">Проектный<br> менеджмент</div>
                <div class="discipline__item item-line">Рекомендации<br> от&nbsp;крупных заказчиков</div>
                <div class="discipline__item item-line">Бренд-<br>менеджмент</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="files/program.pdf" class="discipline__button button" data-fancybox>скачать учебный план</a>
            </div>
        </div>
    </div>
</section>
		<section class="organization" id="organization">
    <div class="container">
        <h2 class="organization__title title">Наши студенты принимали участие в&nbsp;<span>организации масштабных событий</span> </h2>
    </div>
    <div class="container-fluid">
        <div class="organization__wrap">
            <div class="organization__slider">
                <div class="organization__item">
                    <img data-lazy="img/organization/slider-1.jpg" alt="">
                    <div>Synergy Global Forum</div>
                </div>
                <div class="organization__item">
                    <img data-lazy="img/organization/slider-2.jpg" alt="">
                    <div>New Atom Energy</div>
                </div>
                <div class="organization__item">
                    <img data-lazy="img/organization/slider-3.jpg" alt="">
                    <div>Трансформация</div>
                </div>
                <div class="organization__item">
                    <img data-lazy="img/organization/slider-4.jpg" alt="">
                    <div>Synergy Digital Forum</div>
                </div>
                <div class="organization__item">
                    <img data-lazy="img/organization/slider-5.jpg" alt="">
                    <div>Best Experience Marketing Festival</div>
                </div>
                <!-- <div class="organization__item">
                    <img data-lazy="img/organization/slider-1.jpg" alt="">
                    <div>Synergy Global Forum</div>
                </div> -->
            </div>
            <div class="controlls">
                <div class="organization-arrows controlls-arrows"></div>
                <div class="organization-dots controlls-dots"></div>
            </div>
        </div>
    </div>

</section>
		<section class="covid" id="covid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="covid__wrap">
                    <h2 class="covid__title title"><span>Covid —</span>фактор</h2>
                    <img data-src="img/covid/covid-mask.png" alt="" class="lazy">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="covid__item item-line">
                    Программа скорректирована<br> с&nbsp;учетом реалий 2020
                </div>
            </div>
            <div class="col-sm-6">
                <div class="covid__item item-line">
                    Учим использовать программы<br> поддержки бизнеса
                </div>
            </div>
            <div class="col-sm-6">
                <div class="covid__item item-line">
                    Обучаем извлекать выгоду из<br>ограничений и&nbsp;использовать их&nbsp;для&nbsp;<br>PR
                </div>
            </div>
            <div class="col-sm-6">
                <div class="covid__item item-line">
                    Рассказываем, как обходить<br> ограничения законным путём
                </div>
            </div>
        </div>
    </div>
</section>
		<!-- <section class="partner" id="partner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partner__wrap">
                    <h2 class="partner__title title">Генеральный<br> партнёр факультета <span>market emotion</span></h2>
                    <img data-src="img/partner/partner.png" alt="" class="lazy partner__img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="partner__item">
                    <span>1 место</span>В&nbsp;рейтинге AdIndex в&nbsp;сегменте&nbsp;HR
                </div>
            </div>
            <div class="col-sm-3">
                <div class="partner__item">
                    <span>9.8</span>Средняя оценка клиентов
                </div>
            </div>
            <div class="col-sm-3">
                <div class="partner__item">
                    <span>50</span>Профессионалов в&nbsp;штате
                </div>
            </div>
            <div class="col-sm-3">
                <div class="partner__item">
                    <span>28</span>Наград премий event-индустрии
                </div>
            </div>
        </div>
    </div>
</section> -->
		<section class="online" id="online">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="online__title title">Онлайн-курс <span>event как бизнес</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="online__item">
                    <span>37</span> видеолекций с&nbsp;кейсами
                </div>
                <div class="online__item">
                    <span>20</span> творческих заданий
                </div>
                <div class="online__item">
                    <span>15</span> разделов с&nbsp;дополнительными материалами
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="online__text">Стоимость участия</div>
                <div class="online__price">15 000 рублей</div>
                <div class="online__button">
                    <a href="#popup-reg" class="online__button-left button" data-fancybox>оплатить</a>
                    <a target="_blank" href="files/program.pdf" class="online__button-right button" >Скачать программу курса</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="online__banner title">
                    Для тех, кто не готов учиться 4&nbsp;года
                </div>
            </div>
        </div>
    </div>
</section>
		<section class="teachers" id="teachers">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="teachers__title title"><span>наши</span> преподаватели</h2>
            </div>
        </div>
        <div class="organization__wrap">
            <div class="row teachers__slider">
                <div class="col-sm-4">
                    <div class="teachers__item">
                        <img src="img/teachers/teachers-1.jpg" alt="" class="teachers__img">
                        <div class="teachers__wrap">
                            <div class="teachers__name">Утукин Илья<br> Михайлович</div>
                            <div class="teachers__desc">Управляющий партнер и основатель компании Music Max Group</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="teachers__item">
                        <img src="img/teachers/teachers-2.jpg" alt="" class="teachers__img">
                        <div class="teachers__wrap">
                            <div class="teachers__name">Лясникова Екатерина Игоревна</div>
                            <div class="teachers__desc">коммерческим директор международной серии онлайн мероприятий о человеке в мире будущего «ReForum Winning The Hearts»</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="teachers__item">
                        <img src="img/teachers/teachers-3.jpg" alt="" class="teachers__img">
                        <div class="teachers__wrap">
                            <div class="teachers__name">Цуканов Евгений <br> Олегович</div>
                            <div class="teachers__desc">Основатель и генеральный директор ООО «Фэнси-декор»</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row teachers__slider">

                <div class="col-sm-6">
                    <div class="teachers__item">
                        <img src="img/teachers/teachers-4.jpg" alt="" class="teachers__img">
                        <div class="teachers__wrap">
                            <div class="teachers__name">Шурыгина Елена <br> Александровна</div>
                            <div class="teachers__desc">Основатель и исполнительный директор ивент-агенства «REDLINE EVENT»</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="teachers__item">
                        <img src="img/teachers/teachers-5.jpg" alt="" class="teachers__img">
                        <div class="teachers__wrap">
                            <div class="teachers__name">Кобец Маргарита  <br> Вячеславовна</div>
                            <div class="teachers__desc">Кандидат экономических наук, заведующая лабораторией Event-менеджмента</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="controlls">
                <div class="teachers-arrows controlls-arrows"></div>
                <div class="teachers-dots controlls-dots"></div>
            </div>
        </div>
    </div>
</section>
		<!-- <section class="video" id="video">
    <div class="container">
        <div class="row video__main">
            <div class="col-12">
                <div class="video__wrap">
                    <img data-src="img/video/video-logo.svg" alt="" class="lazy">
                    <h2 class="video__title title"><span>университет</span> синергия</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters video__block">
            <div class="col-sm-2">
                <a href="#popup-reg" class="video__button button" data-fancybox>Смотреть видео</a>
            </div>
            <div class="col-sm-10">
                <div class="row video__list">
                    <div class="col-sm-6">
                        <div class="video__item"><span>500+</span> Преподавателей</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="video__item"><span>200+</span> Программ высшего образования</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="video__item"><span>19</span> Преподавателей</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="video__item"><span>1988</span> Год основания</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12 offset-sm-2">
                <div class="video__text title">70 000 студентов из 50 стран</div>
            </div>
        </div>
    </div>
</section> -->
		<section class="mask" id="mask">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mask__title title">Почему мы <span>в масках?</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="mask__item">Event&nbsp;- это сфера, которая позволяет создавать образы и&nbsp;целые миры, при этом оставаясь за&nbsp;кулисами</div>
                <div class="mask__item">Маски и&nbsp;переодевания&nbsp;- неотъемлемый элемент индустрии EVENT</div>
                <div class="mask__item">Event-менеджер должен уметь подстроиться под любого клиента и&nbsp;любой запрос, поэтому маска&nbsp;&mdash; это символ рабочего процесса в&nbsp;нашей концепции</div>
            </div>
        </div>
    </div>
</section>
		
		
		<section class="main main-bottom">
    

    <div class="container">
        <div class="main__content">
            <div class="main__wrap">

                

                

                
                <div class="main__subtitle">Когда каждый день - пятница</div>
                

                


                

                
                <ul class="main__list">
                    <li><span>Погрузим</span><br> в&nbsp;практику<br> с&nbsp;1-ого курса</li>
                    <li><span>Дадим</span><br> государственный<br> диплом</li>
                    <li><span>Научим создавать</span><br> события с учётом реалий <br> текущей ситуации</li>
                </ul>
                
            </div>

            
            <div class="main__block">
                <div class="main__form">
                    
<form action="<?=$action?>&form=" class="form ">
    <div class="form__wrapper">
        
        <h3 class="form__title title">Оставьте заявку и мы свяжемся с вами <span>в течение 15 минут</span></h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Ваш телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш e-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь&nbsp;c<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a></div>
            </label>
        </div>
    </div>
</form>

                </div>
                <footer class="footer" id="footer">
    <div class="footer__content header__content">
        <div class="footer__logo header__logo">
            <img data-src="img/header/logo.svg" alt="logo" class="lazy">
            <img data-src="img/header/logo-mob.svg" alt="logo" class="lazy">
        </div>
        <a href="<?= $WA ?>" class="footer__phone header__phone">
            <img data-src="img/header/phone.svg" alt="" class="lazy"><div><?= $phone ?></div>
        </a>
    </div>
</footer>
            </div>
            

            

        </div>
    </div>
    
</section>
		
	</div>

	<div hidden>
		
		<div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title title">Оставьте заявку и мы свяжемся с вами <span>в течение 15 минут</span></h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Ваш телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="Ваш e-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Даю согласие на&nbsp;обработку персональных данных и&nbsp;соглашаюсь&nbsp;c<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a></div>
            </label>
        </div>
    </div>
</form>

</div>


		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>
	<script src="libs/sticky.min.js"></script>
	<script src="js/script.js"></script>


</body>

</html>