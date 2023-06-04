<!DOCTYPE html>
<html lang="ru">
<head>
    <?include './components/head.php';?>
    <title>LEVEL-AGENCY</title>
</head>
<body>
    <?include './components/header.php';?>

    <header class="header" id="main">
      <div class="container">
        <div class="header__logo">
            <h1>L<span>E</span>VEL<br/><u>AGENCY</u></h1>

            <svg width="814" height="533" viewBox="0 0 814 533" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M711.714 279.571C764.785 226.994 798.959 174.524 809.723 129.093C820.487 83.6617 807.333 47.4069 772 25.1177C736.667 2.82853 680.817 -4.44633 611.827 4.25417C542.838 12.9547 463.955 37.2212 385.599 73.848L386.281 77.1553C463.253 41.1751 540.743 17.3371 608.515 8.79019C676.286 0.243302 731.151 7.38972 765.86 29.2854C800.569 51.1811 813.49 86.7958 802.917 131.425C792.343 176.054 758.772 227.597 706.638 279.246L711.714 279.571Z" fill="url(#paint0_linear_0_1)"/>
                <path d="M70.4264 289.061C27.3099 338.204 2.95068 385.633 0.267378 425.666C-2.41592 465.7 16.6905 496.639 55.2974 514.776C93.9043 532.914 150.374 537.481 217.941 527.93C285.508 518.379 361.306 495.116 436.254 460.927L435.477 457.679C361.852 491.264 287.392 514.117 221.018 523.499C154.645 532.881 99.1716 528.395 61.2464 510.577C23.3211 492.76 4.55206 462.367 7.18799 423.041C9.82392 383.714 33.7531 337.122 76.1083 288.847L70.4264 289.061Z" fill="url(#paint1_linear_0_1)"/>
                <defs>
                    <linearGradient id="paint0_linear_0_1" x1="819.505" y1="-50.8409" x2="523.772" y2="225.978" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EB499C"/>
                        <stop offset="1" stop-color="#DBDCDE"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_0_1" x1="48.7965" y1="532.026" x2="233.199" y2="355.361" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#EB499C"/>
                        <stop offset="1" stop-color="#DBDCDE"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
      </div>
    </header>

    <section class="about" id="about">
      <div class="container">
        <div class="about__container">
          <div class="about__item">
            <h2 class="about__header">Немного о нас</h2>

            <div class="about__pros">
              <div class="about__pros_item">
                <p class="about__pros_header">20+</p>
                <p class="about__pros_subheader">Организованных мероприятия</p>
              </div>

              <div class="about__pros_item">
                <p class="about__pros_header">15</p>
                <p class="about__pros_subheader">Постоянных клиентов</p>
              </div>
            </div>
          </div>

          <div class="about__hr"></div>

          <div class="about__item">
            <p class="about__item_header">Агентство «LEVel» - БУдьте с нами на уровень выше!</p>
            <p class="about__item_subheader">
              Подготовка деловых мероприятий и их организация - это 60% успеха в достижение бизнес целей компании, только тщательно разработанный план, четкая организация и оперативное решение всех возникающих вопросов обеспечат успех инициатора, именно это мы гарантируем своим заказчикам.
            </p>
          </div>
        </div>

        <div class="about__images">
          <img src="/image/img/about1.png" alt="" data-aos="fade-up" data-aos-delay="100"/>
          <img src="/image/img/about2.png" alt="" data-aos="fade-up" data-aos-delay="200"/>
          <img src="/image/img/about3.png" alt="" data-aos="fade-up" data-aos-delay="300"/>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <div class="container">
        <h2 class="services__header">наши услуги</h2>

        <div class="services__content">
          <div class="services__item" data-aos="fade-up" data-aos-delay="100">
            <p class="services__item_header">Форумы и слеты</p>

            <p class="services__item_description">
              Помогаем собраться, обменяться практическим опытом и решать глобальные проблемы
            </p>
          </div>

          <div class="services__item" data-aos="fade-up" data-aos-delay="200">
            <p class="services__item_header">Тимбилдинги</p>

            <p class="services__item_description">
              Продвигаем умное и эффективное командообразование
            </p>
          </div>

          <div class="services__item" data-aos="fade-up" data-aos-delay="300">
            <p class="services__item_header">Бизнес-мероприятия</p>

            <p class="services__item_description">
              Организуем любые конференции, презентации, круглые столы, форумы, семинары, встречи.
            </p>
          </div>

          <div class="services__item" data-aos="fade-up" data-aos-delay="400">
            <p class="services__item_header">Официальные события</p>

            <p class="services__item_description">
              Любые события, связанные с жизнью компании: день рождения фирмы, презентация новых товаров, услуг, награждение сотрудников.
            </p>
          </div>

          <div class="services__item" data-aos="fade-up" data-aos-delay="500">
            <p class="services__item_header">Корпоративные события</p>

            <p class="services__item_description">
              Занимаемся организацией мероприятий, связанных с жизнью компании
            </p>
          </div>

          <a class="button__nofill" href="#contacts"><span>Оставить заявку</span></a>
        </div>
      </div>
    </section>

    <section class="portfolio-main" id="portfolio">
      <div class="container">
        <h2 class="portfolio__header">Портфолио</h2>

        <p class="portfolio__subheader">то, чем мы гордимся</p>

        <div class="portfolio__content">
          <div class="portfolio__item" data-aos="fade-up" data-aos-delay="100">
            <img src="/image/img/portfolio1.png" alt=""/>

            <p>премия «предприниматель года»<span></span></p>
          </div>

          <div class="portfolio__item" data-aos="fade-up" data-aos-delay="100">
            <img src="/image/img/portfolio2.png" alt=""/>

            <p>Кибертурнир от «ростелеком»<span></span></p>
          </div>

          <div class="portfolio__item" data-aos="fade-up" data-aos-delay="100">
            <img src="/image/img/portfolio3.png" alt=""/>

            <p>МЕЖДУНАРОДНЫЙ БИЗНЕС КОНГРЕСС “НОВЫЕ ПРАВИЛА РОСТА” В САНКТ-ПЕТЕРБУРГЕ <span></span></p>
          </div>
        </div>

        <a class="button__nofill" href="/pages/portfolio.php"><span>Смотреть больше</span></a>
      </div>
    </section>

    <section class="team" id="team">
      <div class="container">
        <h2 class="team__header">Наша команда</h2>

        <p class="team__subheader">Те, кто создают ваши мероприятия</p>

        <div class="team__content">
          <div class="team__item">
            <img src="/image/img/team1.png" alt="" />

            <p class="team__item_fullname">чурсина мария</p>
            <p class="team__item_descr">совладелица агентства по организации бизнес-мероприятий «LEVEL»</p>
          </div>

          <div class="team__item">
            <img src="/image/img/team2.png" alt="" />

            <p class="team__item_fullname">Кузнецова Екатерина</p>
            <p class="team__item_descr">совладелица агентства по организации бизнес-мероприятий «LEVEL»</p>
          </div>
        </div>
      </div>
    </section>

    <section class="client" id="client">
      <div class="container">
        <h2 class="client__header">наши клиенты</h2>


        <div class="client__content">
          <div class="client__item" data-aos="fade-up" data-aos-delay="100">
            <img src="/image/icon/client1.svg" alt="" />
          </div>

          <div class="client__item" data-aos="fade-up" data-aos-delay="150">
            <img src="/image/icon/client2.svg" alt="" />
          </div>

          <div class="client__item" data-aos="fade-up" data-aos-delay="200">
            <img src="/image/icon/client3.svg" alt="" />
          </div>

          <div class="client__item" data-aos="fade-up" data-aos-delay="250">
            <img src="/image/icon/client4.svg" alt="" />
          </div>

          <div class="client__item" data-aos="fade-up" data-aos-delay="300">
            <img src="/image/icon/client5.svg" alt="" />
          </div>

          <div class="client__item" data-aos="fade-up" data-aos-delay="350">
            <img src="/image/icon/client6.svg" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="contacts" id="contacts">
      <div class="container">
        <div class="contacts__item">
          <h2 class="contacts__header">Контакты</h2>

          <p class="contacts__descr">Свяжитесь с нами и мы организуем лучшее мероприятие для Вас</p>

          <div class="contacts__item">
            <p>Телефоны:</p>

            <div class="contacts__phones">
              <a href="tel:79608570375">+7 (960) 857-03-75</a>
              <a href="tel:79608558805">+7 (960) 855-88-05</a>
            </div>
          </div>

          <div class="contacts__item">
            <p>E-mail:</p>

            <div>
              <a href="mailto:agencylevel30@yandex.ru">agencylevel30@yandex.ru</a>
            </div>
          </div>

          <div class="contacts__item">
            <p>Соцсети:</p>

            <div class="contacts__socials">
              <a href="#">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_205_116)">
                        <path d="M21.0906 10.6383C20.9605 10.3012 20.7611 9.99506 20.5055 9.73967C20.2498 9.48428 19.9435 9.28527 19.6062 9.15547C19.1419 8.98348 18.6514 8.89257 18.1562 8.88672C17.3328 8.84922 17.0859 8.83984 15 8.83984C12.9141 8.83984 12.6672 8.84922 11.8437 8.88672C11.3481 8.89239 10.857 8.9833 10.3922 9.15547C10.0551 9.28563 9.74897 9.48496 9.49358 9.74062C9.23819 9.99628 9.03918 10.3026 8.90938 10.6398C8.73738 11.1042 8.64648 11.5947 8.64063 12.0898C8.60313 12.9133 8.59375 13.1602 8.59375 15.2461C8.59375 17.332 8.60313 17.5789 8.64063 18.4023C8.6463 18.898 8.73721 19.389 8.90938 19.8539C9.03954 20.191 9.23887 20.4971 9.49452 20.7525C9.75018 21.0079 10.0565 21.2069 10.3937 21.3367C10.8581 21.5087 11.3486 21.5996 11.8437 21.6055C12.6672 21.643 12.9141 21.6523 15 21.6523C17.0859 21.6523 17.3328 21.643 18.1562 21.6055C18.6519 21.5998 19.143 21.5089 19.6078 21.3367C19.9449 21.2066 20.251 21.0072 20.5064 20.7516C20.7618 20.4959 20.9608 20.1896 21.0906 19.8523C21.2626 19.388 21.3535 18.8975 21.3594 18.4023C21.3969 17.5789 21.4062 17.332 21.4062 15.2461C21.4062 13.1602 21.3969 12.9133 21.3594 12.0898C21.3537 11.5942 21.2628 11.1031 21.0906 10.6383ZM15 19.2586C14.2064 19.2586 13.4306 19.0233 12.7708 18.5824C12.1109 18.1415 11.5966 17.5148 11.2929 16.7816C10.9892 16.0484 10.9098 15.2416 11.0646 14.4633C11.2194 13.6849 11.6016 12.97 12.1627 12.4088C12.7239 11.8477 13.4389 11.4655 14.2172 11.3107C14.9955 11.1559 15.8023 11.2353 16.5355 11.539C17.2687 11.8427 17.8954 12.357 18.3363 13.0169C18.7772 13.6767 19.0125 14.4525 19.0125 15.2461C19.0125 16.3103 18.5898 17.3309 17.8373 18.0834C17.0848 18.8358 16.0642 19.2586 15 19.2586ZM19.1703 12.0133C18.9849 12.0133 18.8036 11.9583 18.6495 11.8553C18.4953 11.7523 18.3751 11.6059 18.3042 11.4345C18.2332 11.2632 18.2147 11.0747 18.2508 10.8929C18.287 10.711 18.3763 10.544 18.5074 10.4129C18.6385 10.2818 18.8056 10.1925 18.9874 10.1563C19.1693 10.1201 19.3578 10.1387 19.5291 10.2096C19.7004 10.2806 19.8468 10.4008 19.9498 10.5549C20.0528 10.7091 20.1078 10.8904 20.1078 11.0758C20.1078 11.3244 20.009 11.5629 19.8332 11.7387C19.6574 11.9145 19.419 12.0133 19.1703 12.0133Z" fill="#282828"/>
                        <path d="M14.9992 17.85C16.4377 17.85 17.6039 16.6838 17.6039 15.2453C17.6039 13.8068 16.4377 12.6406 14.9992 12.6406C13.5607 12.6406 12.3945 13.8068 12.3945 15.2453C12.3945 16.6838 13.5607 17.85 14.9992 17.85Z" fill="#282828"/>
                        <path d="M15 0.246094C12.0333 0.246094 9.13319 1.12583 6.66645 2.77405C4.19972 4.42227 2.27713 6.76495 1.14181 9.50584C0.00649923 12.2467 -0.290551 15.2627 0.288228 18.1724C0.867006 21.0822 2.29562 23.7549 4.3934 25.8527C6.49119 27.9505 9.16394 29.3791 12.0737 29.9579C14.9834 30.5366 17.9994 30.2396 20.7403 29.1043C23.4811 27.969 25.8238 26.0464 27.472 23.5796C29.1203 21.1129 30 18.2128 30 15.2461C30 11.2678 28.4197 7.45254 25.6066 4.63949C22.7936 1.82645 18.9783 0.246094 15 0.246094ZM22.7656 18.468C22.7522 19.1158 22.6291 19.7566 22.4016 20.3633C22.2009 20.8822 21.8941 21.3534 21.5007 21.7468C21.1073 22.1401 20.6361 22.447 20.1172 22.6477C19.5105 22.8752 18.8697 22.9983 18.2219 23.0117C17.3875 23.0492 17.1219 23.0586 15 23.0586C12.8781 23.0586 12.6125 23.0492 11.7781 23.0117C11.1303 22.9983 10.4895 22.8752 9.88282 22.6477C9.36395 22.447 8.89272 22.1401 8.49934 21.7468C8.10596 21.3534 7.79911 20.8822 7.59844 20.3633C7.37088 19.7566 7.24779 19.1158 7.23438 18.468C7.19688 17.6336 7.18751 17.368 7.18751 15.2461C7.18751 13.1242 7.19688 12.8586 7.23438 12.0242C7.24779 11.3764 7.37088 10.7356 7.59844 10.1289C7.79911 9.61003 8.10596 9.13881 8.49934 8.74543C8.89272 8.35205 9.36395 8.04519 9.88282 7.84453C10.4895 7.61697 11.1303 7.49387 11.7781 7.48047C12.6125 7.44297 12.8781 7.43359 15 7.43359C17.1219 7.43359 17.3875 7.44297 18.2219 7.48047C18.8697 7.49387 19.5105 7.61697 20.1172 7.84453C20.6361 8.04519 21.1073 8.35205 21.5007 8.74543C21.8941 9.13881 22.2009 9.61003 22.4016 10.1289C22.6291 10.7356 22.7522 11.3764 22.7656 12.0242C22.8031 12.8586 22.8125 13.1242 22.8125 15.2461C22.8125 17.368 22.8031 17.6336 22.7656 18.468Z" fill="#282828"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_205_116">
                            <rect width="30" height="30" fill="white" transform="translate(0 0.246094)"/>
                        </clipPath>
                    </defs>
                </svg>
              </a>

              <a href="#">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_205_120)">
                        <path d="M15.0016 0.845703C7.04856 0.845703 0.601562 7.2927 0.601562 15.2457C0.601562 23.1987 7.04856 29.6457 15.0016 29.6457C22.9546 29.6457 29.4016 23.1987 29.4016 15.2457C29.4016 7.2927 22.9546 0.845703 15.0016 0.845703ZM20.5396 17.0922C20.5396 17.0922 21.8131 18.3492 22.1266 18.9327C22.1356 18.9447 22.1401 18.9567 22.1431 18.9627C22.2706 19.1772 22.3006 19.3437 22.2376 19.4682C22.1326 19.6752 21.7726 19.7772 21.6496 19.7862H19.3996C19.2436 19.7862 18.9166 19.7457 18.5206 19.4727C18.2161 19.2597 17.9161 18.9102 17.6236 18.5697C17.1871 18.0627 16.8091 17.6247 16.4281 17.6247C16.3797 17.6246 16.3316 17.6322 16.2856 17.6472C15.9976 17.7402 15.6286 18.1512 15.6286 19.2462C15.6286 19.5882 15.3586 19.7847 15.1681 19.7847H14.1376C13.7866 19.7847 11.9581 19.6617 10.3381 17.9532C8.35506 15.8607 6.57006 11.6637 6.55506 11.6247C6.44256 11.3532 6.67506 11.2077 6.92856 11.2077H9.20106C9.50406 11.2077 9.60306 11.3922 9.67206 11.5557C9.75306 11.7462 10.0501 12.5037 10.5376 13.3557C11.3281 14.7447 11.8126 15.3087 12.2011 15.3087C12.2739 15.3078 12.3455 15.2893 12.4096 15.2547C12.9166 14.9727 12.8221 13.1652 12.7996 12.7902C12.7996 12.7197 12.7981 11.9817 12.5386 11.6277C12.3526 11.3712 12.0361 11.2737 11.8441 11.2377C11.9218 11.1305 12.0242 11.0435 12.1426 10.9842C12.4906 10.8102 13.1176 10.7847 13.7401 10.7847H14.0866C14.7616 10.7937 14.9356 10.8372 15.1801 10.8987C15.6751 11.0172 15.6856 11.3367 15.6421 12.4302C15.6286 12.7407 15.6151 13.0917 15.6151 13.5057C15.6151 13.5957 15.6106 13.6917 15.6106 13.7937C15.5956 14.3502 15.5776 14.9817 15.9706 15.2412C16.0218 15.2733 16.0811 15.2905 16.1416 15.2907C16.2781 15.2907 16.6891 15.2907 17.8021 13.3812C18.1453 12.7666 18.4436 12.1279 18.6946 11.4702C18.7171 11.4312 18.7831 11.3112 18.8611 11.2647C18.9186 11.2354 18.9825 11.2204 19.0471 11.2212H21.7186C22.0096 11.2212 22.2091 11.2647 22.2466 11.3772C22.3126 11.5557 22.2346 12.1002 21.0151 13.7517L20.4706 14.4702C19.3651 15.9192 19.3651 15.9927 20.5396 17.0922Z" fill="#282828"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_205_120">
                            <rect width="30" height="30" fill="white" transform="translate(0 0.246094)"/>
                        </clipPath>
                    </defs>
                </svg>
              </a>

              <a href="#">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_205_122)">
                        <path d="M15 0.246094C6.71625 0.246094 0 6.96234 0 15.2461C0 23.5298 6.71625 30.2461 15 30.2461C23.2838 30.2461 30 23.5298 30 15.2461C30 6.96234 23.2838 0.246094 15 0.246094ZM22.3675 10.5223L19.905 22.1223C19.7237 22.9448 19.2337 23.1448 18.55 22.7573L14.8 19.9948L12.9925 21.7373C12.8175 21.9623 12.5462 22.1061 12.2425 22.1061C12.24 22.1061 12.2387 22.1061 12.2362 22.1061L12.5025 18.2886L19.4525 12.0111C19.7525 11.7448 19.385 11.5936 18.9862 11.8598L10.4 17.2673L6.7 16.1123C5.9 15.8586 5.8775 15.3123 6.86875 14.9198L21.3263 9.34734C21.9988 9.10234 22.5837 9.50734 22.3662 10.5236L22.3675 10.5223Z" fill="#282828"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_205_122">
                            <rect width="30" height="30" fill="white" transform="translate(0 0.246094)"/>
                        </clipPath>
                    </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="contacts__item contacts__form">
          <form action="controllers/mail.php" method="post">
            <div class="contacts__form_inputs">
                <input name="name" type="text" placeholder="Ваше имя">
                <input name="phone" type="phone" placeholder="Ваш телефон">
                <input name="email" type="email" placeholder="Ваш e-mail">
            </div>
            
            <input name="message" type="text" placeholder="Ваше сообщение" class="contacts__form_message">

            <div class="contacts__form_bottom">
                <button type="submit">Отправить</button>

                <div class="contacts__form_rool">
                    <input name="checkbox" type="checkbox" class="contacts__form_checkbox">

                    <p>
                        Нажимая на кнопку Отправить, я соглашаюсь с офертой на обработку персональных данных.
                    </p>
                </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <?include './components/footer.php';?>
</body>
</html>