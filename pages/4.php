<!DOCTYPE html>
<html lang="ru">
<head>
    <?include '../components/head.php';?>
    <title>Портфолио</title>
</head>
<body>
    <?include '../components/header.php';?>

    <section class="bread">
        <div class="container">
            <a href="/">Главная</a>
            <img src="//level-agency/image/icon/bread.svg" alt="">
            <a href="/pages/portfolio.php">Портфолио</a>
            <img src="//level-agency/image/icon/bread.svg" alt="">
            <p>Кибер-турнир от ростелекома</p>
        </div>
    </section>

    <section class="portfolio-detail">
        <div class="container">
            <h2 class="portfolio-detail__header">кибер-турнир от ростелекома</h2>

            <div class="portfolio-detail__item_container">
                <div class="portfolio-detail__customer">
                    <div>
                        <p>Заказчик</p>
                        <p>ПАО “Ростелеком” </p>
                    </div>

                    <div>
                        <p>Год</p>
                        <p>2022 - 2023</p>
                    </div>
                </div>

                <div class="portfolio-detail__descr">
                    “Ростелеком” в Астрахани выступил организатором кибер-турнина по игровым дисциплинаам - Counter-Strike: Global Offensive и League of Legends. <br><br>
                    Партнерами мероприятия стали федерация киберспорта Астраханской области и сеть клубов виртуальной реальности Portal VR. В состотязаниях приняли участие 30 команд киберспортсменов. <br><br>
                    Соревнования прошли на двух площадках: киберспортивная арена “COLIZEUM CAMP Астрахань” приняла игры по CS:GO, а киберспортивный клуб ACE - онлайн-состязания по League of Legends.<br><br>
                    Цифровой провайдер накануне турнира подключил в игровом клубе “COLIZEUM CAMP Астрахань” в ТЦ “Сити” интернет скоростью до 500 Мбит/с, который позволил организаторам транслировать игру в соц.сетях в реальном времени.
                </div>
            </div>
            
            <p class="portfolio-detail__galery_header">Фотографии мероприятия</p>
            <div class="portfolio-detail__galery swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8120.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8121.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8122.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8123.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8124.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8125.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8126.JPG" alt=""></div>
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case4/IMG_8127.JPG" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <?include '../components/footer.php';?>
</body>
</html>