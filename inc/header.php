<?php
  global $page;
  global $page_title;

  global $url_auth;
  global $url_reg;

  $url_auth = 'https://'. $_SERVER['HTTP_HOST'] .'/contact.php';
  $url_reg = 'https://'. $_SERVER['HTTP_HOST'] .'/start_trading.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta id="vp" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script>
    window.onload = function() {
        if (screen.width < 576) {
            var mvp = document.getElementById('vp');
            mvp.setAttribute('content', 'user-scalable=no,width=576');
        }
    }
    </script>
    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="/css/style.css?ver=2.5" />
    <link rel="stylesheet" href="/css/swiper.min.css" />
    <link rel="stylesheet" href="/css/intlTelInput.min.css" />
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />



    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="theme-color" content="#333333">



    <title><?= $page_title ?></title>
</head>

<body class="<?= $page ?>">

    <!-- <header>
        <div class="container">
            <div class="lang_block left"> 
                <img src="../img/ru.jpg" class="lang_img left"> <div class="lang left">Русский</div> <img src="../img/arrow.svg" class="lang_arrow left">
            </div>

            <div class="menu_up right">
                <div class="menu_up_item"><a href="/history.php"><img src="../img/icon/icon_up_one.svg">История</a>
                </div>
                <div class="menu_up_item"><a href="/contact.php"><img src="../img/icon/icon_up_two.svg">Контакты</a>
                </div>
                <div class="menu_up_item"><a href="<?= $url_auth; ?>"><img src="../img/icon/icon_up_tree.svg">Вход в
                        кабинет</a></div>
            </div>
        </div>
    </header> -->

    <section class="one">
        <div class="container">
            <div class="logo left">
                <a href="/">
                    <img src="../img/logo_white.svg" class="logo_img">
                    <!-- <img src="../img/logo_text.svg" class="logo_text"> -->
                </a>
            </div>

            <div class="menu right">

                <div class="dropdown menu_item">
                    <a href="#" class="dropbtn">О компании</a>
                    <div class="dropdown-content menu_href">
                        <a href="/about.php">Bitqon</a>
                        <a href="/advantages.php">Наши преимущества</a>
                        <a href="/history.php">История</a>
                        <a href="/licenses.php">Лицензии компании</a>
                        <a href="/terms.php">Условия предоставления сервиса</a>
                        <a href="/privacy.php">Политика конфиденциальности</a>
                        <a href="/contact.php">Контакты</a>
                        <a href="/vacancies.php">Открытые вакансии</a>
                    </div>
                </div>

                <div class="dropdown menu_item">
                    <a href="#" class="dropbtn">Торговать</a>
                    <div class="dropdown-content menu_href">
                        <a href="/tariff.php">Типы счетов</a>
                        <a href="/start_trading.php">Как начать торговлю</a>
                        <a href="/offer.php">Оферта и Соглашение</a>
                        <a href="/for_professional_traders.php">Условия торговли для проф. трейдеров</a>
                    </div>
                </div>

                <div class="dropdown menu_item">
                    <a href="#" class="dropbtn">Продукты</a>
                    <div class="dropdown-content menu_href">
                        <a href="/stock.php">Акции</a>
                        <a href="/commodity.php">Сырьевые товары</a>
                        <a href="/cryptocurrency.php">Криптовалюта</a>
                        <a href="/indices.php">Индексы</a>                    
                        <a href="/bonds.php">Облигации</a>
                        <a href="/metals.php">Драгоценные металлы</a>
                        <a href="/energetics.php">Энергетика</a>
                        <a href="/portfolio_investment.php">Портфельные инвестиции</a>
                    </div>
                </div>

                <div class="menu_media">
                    <div class="dropdown menu_item">
                        <a href="#" class="dropbtn">Аналитики</a>
                        <div class="dropdown-content menu_href">
                            <a href="/tools_analytics.php">Инструменты анализа</a>
                            <a href="/expert_analytics.php">Экспертная аналитика</a>
                        </div>
                    </div>
                    <div class="dropdown menu_item">
                        <a href="#" class="dropbtn">Обучение</a>
                        <div class="dropdown-content menu_href">
                            <a href="/trading_platform.php">Торговая платформа</a>
                            <a href="/cryptocurrencies.php">Криптовалюты</a>
                            <a href="/trading_psychology.php">Психология трейдинга</a>
                            <a href="/trading_instruments.php">Торговые инструменты</a>
                            <a href="/trading_automatic.php">Автоматическая торговля</a>
                        </div>
                    </div>
                    <div class="dropdown menu_item">
                        <a href="#" class="dropbtn">Партнерство</a>
                        <div class="dropdown-content menu_href">
                            <a href="/new_clients.php">Привлечение новых клиентов</a>
                            <a href="/engaging_audience.php">Привлечение своей аудитории</a>
                            <a href="/portfolio_expansion.php">Расширение своего личного финансового портфеля</a>
                        </div>
                    </div>
                </div>
                <div class="menu_points">
                    <div class="menu_item"><a href="#">...</a></div>
                </div>

                <a href="<?= $url_reg; ?>" class="button"><img src="../img/open.svg" class="button_icon"> Открыть
                    счет</a>
                <a href="<?= $url_auth; ?>" class="button alt align-middle"><img src="../img/user.svg"></a>
                <div class="burger"><img src="../img/menu_on.svg"></div>
            </div>
        </div>
    </section>

<!-- Links -->
<div class="menu_burger mr-auto">
    <?php
        include './inc/menu_footer.php';
    ?>
</div>
<!-- Links -->
