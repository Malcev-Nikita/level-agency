<?
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];
?>

<?if ($url == "/"):?>
    <nav class="nav">
        <div class="nav__opacity"></div>

        <div class="container">
            <a href="/" class="logo"><img src="//level-agency/image/icon/logo.svg" alt=""></a>

            <ul class="nav__ul">
                <a href="#main"><li>ГЛАВНАЯ</li></a>
                <a href="#about"><li>О НАС</li></a>
                <a href="#services"><li>УСЛУГИ</li></a>
                <a href="#portfolio"><li>ПОРТФОЛИО</li></a>
                <a href="#client"><li>КЛИЕНТЫ</li></a>
                <a href="#contacts"><li>КОНТАКТЫ</li></a>
            </ul>

            <div class="nav__burger">
                <span></span>
            </div>
        </div>
    </nav>
<?else:?>
    <nav class="nav nav__static">
            <div class="nav__opacity"></div>
            
            <div class="container">
                <a href="/" class="logo"><img src="//level-agency/image/icon/logo.svg" alt=""></a>
            </div>
        </nav>
<?endif?>

<div class="nav__burger_menu">
    <div class="nav__burger_menu_close"></div>
    
    <ul class="nav__burger_ul">
        <a href="#main"><li>ГЛАВНАЯ</li></a>
        <a href="#about"><li>О НАС</li></a>
        <a href="#services"><li>УСЛУГИ</li></a>
        <a href="#portfolio"><li>ПОРТФОЛИО</li></a>
        <a href="#client"><li>КЛИЕНТЫ</li></a>
        <a href="#contacts"><li>КОНТАКТЫ</li></a>
    </ul>
</div>