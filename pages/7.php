<!DOCTYPE html>
<html lang="ru">
<head>
    <?include '../components/head.php';?>
    <title>Портфолио</title>
</head>
<body>
    <?include '../components/header.php';?>

    <section class="portfolio-detail">
        <div class="container">
            <h2 class="portfolio-detail__header"></h2>

            <div class="portfolio-detail__item_container">
                <div class="portfolio-detail__customer">
                    <div>
                        <p>Заказчик</p>
                        <p></p>
                    </div>

                    <div>
                        <p>Год</p>
                        <p></p>
                    </div>
                </div>

                <div class="portfolio-detail__descr">
                   
                </div>
            </div>
            
            <p class="portfolio-detail__galery_header">Фотографии мероприятия</p>
            <div class="portfolio-detail__galery swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="//level-agency/image/portfolio/case/" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <?include '../components/footer.php';?>
</body>
</html>