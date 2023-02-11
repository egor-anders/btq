<?php
    $page = 'main_img';
    $page_title = "Bitqon";
    include './inc/header.php';
?>

<!--<img src="./img/main.png" class="bg_main">-->

<section class="main">
    <div class="container">

        <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                  
                <div class="col-5 right teaser_block">
                    <img src="../img/card.png" class="teaser" style="box-shadow:none;">
                    <div class="teaser_text"> <span>%</span> Снятие без процентов во всех банкоматах мира</div>
                </div>
                <div class="col-11 col-md-11 col-lg-6 col-xl-6 right">
                    <div class="main_title">
                        Деньги должны работать и приносить прибыль!
                    </div>
        
                    <div class="main_text">
                        1.&nbsp; Диверсификация рисков<br>
                        2. Низкий порог для инвестиций<br>
                        3. Гибкая система ввода и вывода средств<br>
                        4. Талантливая команда опытных специалистов<br>
                        5. Автоматизированное управление собственными финансами
                    </div>              
        
                </div>
              </div>
              <!-- <div class="swiper-slide">
                  
                <div class="col-5 left teaser_block"><img
                    <img src="../img/card.png" class="teaser">
                    <div class="teaser_text"> <span>%</span> Снятие без процентов во всех банкоматах мира</div>
                </div>
                <div class="col-6 left">
                    <div class="main_title">
                        Партнерство вместе<br>
                        с Bitqon
                    </div>
        
                    <div class="main_text">
                        Став партнером Bitqon, Вы имеете <br>
                        возможность получить банковскую карту для снятия <br>
                        средств в любой точке мира
                    </div>              
        
                </div>
              </div> -->
            </div>
                <!-- <div class="nav_swiper">
                    <div class="swiper-prev"><img src="./img/left_white.svg"></div>
                    <div class="swiper-next"><img src="./img/left_white.svg" class="rotate"></div>              
                </div> -->
                
                <div class="main_input">
                    <a href="/about.php" class="button main_input_button">Узнать подробнее о нас</a>
                </div>            
            <!-- Add Arrows -->
        </div>

<!--
        <div class="col-6 left">
            <img src="../img/card.png" class="teaser">
            <div class="teaser_text"> <span>%</span> Снятие без процентов во всех банкоматах мира</div>
        </div>
        <div class="col-6 left">
            <div class="main_title">
                Партнерство <br>
                вместе <br>
                с Bitqon
            </div>

            <div class="main_text">
                Став партнером Bitqon, вы имеете <br>
                возможность получить банковскую карту для снятия <br>
                средств в любой точке мира
            </div>

            <div class="main_input">
                <a href="#" class="button main_input_button">Узнать подробнее о нас</a>
            </div>

        </div>
-->

    </div>
</section>

<!--
<section class="currency gray">
    <div class="container">
        <div class="currency_title">
            Зарабатывать на изменении<br>
            курса легко
        </div>
        <div class="button_center"><a href="#" class="button_big">Заработать на изменении курса</a></div>
    </div>
</section>-->

<section class="step">
    <div class="container">
        <div class="step_title">
            Пройдите <span>4 простых шага</span><br>
            и начните торговать
        </div>
     
        <div class="steps">
            <div class="row">
                <div class="step1 col-6 col-md-6 col-lg-3 left">
                    <img class="step_img" src="../img/icon/registr.svg">
                    <div class="step_num">
                        1 
                    </div>
                    <div class="step_title_mini"><a class="steps_url" href="<?= $url_reg; ?>">Регистрация</a><img class="steps_arrow_red" src="./img/arrow_right_red.svg"></div>
                    <div class="step_text">
                        Открокйте реальный <br>
                        счет черерез BitqonPro <br>
                        Direct
                    </div>
                    <div class="steps_arrow">
                        <img src="./img/arrow_right.svg">
                    </div>
                </div>
                <div class="step2 col-6 col-md-6 col-lg-3 left">
                    <img class="step_img" src="../img/icon/verify.svg">
                    <div class="step_num">2</div>
                    <div class="step_title_mini">Верификация <img class="steps_arrow_red" src="./img/arrow_right_black.svg"></div>
                    <div class="step_text">
                        Загрузите сканы элементов<br>
                        и получите быстрое <br>
                        подтверждение
                    </div>
                    <div class="steps_arrow steps_arrow_step2">
                        <img src="./img/arrow_right.svg">
                    </div>
                </div>
                <div class="step3 col-6 col-md-6 col-lg-3 left">
                    <img class="step_img" src="../img/icon/payment.svg">
                    <div class="step_num">3</div>
                    <div class="step_title_mini">Пополнение счета <img class="steps_arrow_red" src="./img/arrow_right_black.svg"></div>
                    <div class="step_text">
                        Войдите через BitqonPro Direct и<br>
                        совершите свой первый <br>
                        депозит
                    </div>     
                    <div class="steps_arrow steps_arrow_step3">
                        <img src="./img/arrow_right.svg">
                    </div>      
                </div>
                <div class="step4 col-6 col-md-6 col-lg-3 left">
                    <img class="step_img" src="../img/icon/trade.svg"> 
                    <div class="step_num">4</div>
                    <div class="step_title_mini">Начало торговли <img class="steps_arrow_red" src="./img/arrow_right_black.svg"></div>
                    <div class="step_text">
                        Начните торговать 280+<br>
                        инструментами
                    </div>              
                </div>
            </div>
        </div> 



        <!-- <div class="nums" style="float: left;
        margin: 0 auto;
        text-align: center;
        width: 100%;"> -->
        <div class="nums">
            <div class="nums_title">Bitqon в цифрах</div>
            <div class="nums_panel">
                <div class="nums_block">
                    <div class="nums_title_mini">Прибыль</div>
                    <div class="nums_num">+350%</div>
                    <div class="nums_line"><img src="./img/nums_line.svg"></div>
                </div>
                <div class="nums_block nums_country">
                    <div class="nums_title_mini">Стран</div>
                    <div class="nums_num">12</div>
                    <div class="nums_line nums_line_country"><img src="./img/nums_line.svg"></div>
                </div>
                <div class="nums_block">
                    <div class="nums_title_mini">Сотрудников</div>
                    <div class="nums_num">560</div>
                    <div class="nums_line"><img src="./img/nums_line.svg"></div>
                </div>
                <div class="nums_block">
                    <div class="nums_title_mini">На рынке</div>
                    <div class="nums_num">20 лет</div>
                </div>

                <div class="nums_panel_shadow"></div>  
                <!-- <div class="nums_panel_dotted"><img src="./img/dotted.svg"></div>        -->
            </div>
        </div>
    </div>
</section>

<div class="num_bg" style="text-align: center;">
    <img src="./img/line.svg" class="num_bg_img">
    <div class="num_bg_text">+ 350% / 12 / 560</div>
</div>

<section class="icon gray">
    <div class="container">
        <div class="left">
            <div class="left">
                <div class="step_title_down">
                    Лучшие торговые условия<br>
                    в Bitqon
                </div>
                <a href="/tariff.php" class="step_button">Формула успеха</a>
                <a href="/trading_instruments.php" class="step_href">Инструменты</a>
            </div>
            
            <div class="left" style="clear:both;">
                <div class="step_text_down">
                    Мы нацелены на постоянное улучшение и расширение <br>
                    нашего спектра услуг. Bitqon была и <br>
                    является  в числе первых брокеров в том, что <br>
                    касалось открытия торговли CFD на сырье, индексы, <br>
                    акции и криптовалюты.
                </div>
            </div>

        </div>
        
        <div class="icon_swiper right">
            <div class="icon_swiper_title left">
                Инвестируй вместе <br>
                с Bitqon
            </div>
            <div class="icon_swiper_nav right">
                <div class="invest-prev"><img src="./img/left_gray.svg"></div>
                <div class="invest-next"><img src="./img/right_gray.svg"></div>                  
            </div>
            <div class="invest-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container tradingview-widget-container--index" style="float:left;margin-right: 20px;">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:BTCUSD",
  "width": "320",
  "height": "200",
  "locale": "ru",
  "dateRange": "12m",
  "colorTheme": "light",
  "trendLineColor": "#37a6ef",
  "underLineColor": "#E3F2FD",
  "isTransparent": false,
  "autosize": false,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container tradingview-widget-container--index" style="float:left;">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "BITSTAMP:ETHUSD",
  "width": "320",
  "height": "200",
  "locale": "ru",
  "dateRange": "12m",
  "colorTheme": "light",
  "trendLineColor": "#37a6ef",
  "underLineColor": "#E3F2FD",
  "isTransparent": false,
  "autosize": false,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
                  </div>
                  <div class="swiper-slide">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container tradingview-widget-container--index" style="float:left;margin-right: 20px;">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "BINANCE:DOGEUSDT",
  "width": "320",
  "height": "200",
  "locale": "ru",
  "dateRange": "12m",
  "colorTheme": "light",
  "trendLineColor": "#37a6ef",
  "underLineColor": "#E3F2FD",
  "isTransparent": false,
  "autosize": false,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container tradingview-widget-container--index" style="float:left;">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "NASDAQ:AAPL",
  "width": "320",
  "height": "200",
  "locale": "ru",
  "dateRange": "12m",
  "colorTheme": "light",
  "trendLineColor": "#37a6ef",
  "underLineColor": "#E3F2FD",
  "isTransparent": false,
  "autosize": false,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->                  
                  </div>
                </div>
                <!-- Add Arrows -->            
            </div>

        </div>

        <div class="step_down ">
            <div class="col-md-12 col-lg-6 left">
    
                <div class="step_icon">
                    
                    <div class="step_icon_block">
                        <img src="../img/icon/1.svg" class="left">

                        <div class="step_icon_text left">
                            Продукт от ведущего мирового разработчика торговой <br>
                            CFD-платформы Meta Trade 4
                        </div>
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/2.svg" class="left">

                        <div class="step_icon_text left">
                            Качественная поддержка 24/7
                        </div>                      
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/3.svg" class="left">

                        <div class="step_icon_text left">
                            Коментарии и видеоаналитика
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/4.svg" class="left">

                        <div class="step_icon_text left">
                            Высокоскоросной вывод средств 24/7 <br>
                            Широкий спектр способов пополнения торгового счета
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/5.svg" class="left">

                        <div class="step_icon_text left">
                            10 торговых серверов (США, Великобритания, ЕС, СГ, ГК)
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/6.svg" class="left">

                        <div class="step_icon_text left">
                            Рекомендации по размещению
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/7.svg" class="left">

                        <div class="step_icon_text left">
                            Брокер имеет ведущую лицензию <br>
                            сопровождения
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/8.svg" class="left">

                        <div class="step_icon_text left">
                            Регулируемый брокер
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 left">
    
                <div class="step_icon">
                    
                    <div class="step_icon_block">
                        <img src="../img/icon/9.svg" class="left">

                        <div class="step_icon_text left">
                            Операционная торговля, внутридневные <br>
                            бинарные и срочные опционы
                        </div>
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/10.svg" class="left">

                        <div class="step_icon_text left">
                            88 контрактов СFD на Американские акции
                        </div>                      
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/11.svg" class="left">

                        <div class="step_icon_text left">
                            Сделки по золоту и серебру
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/12.svg" class="left">

                        <div class="step_icon_text left">
                            CFD на фьючерсы
                        </div>  
                    </div>

                    <div class="step_icon_block">
                        <img src="../img/icon/13.svg" class="left">

                        <div class="step_icon_text left">
                            107  валютных инструментов
                        </div>  
                    </div>
                </div>

                <div class="step_icon_button">
                    <a href="<?= $url_reg; ?>" class="button_big">Открыть реальный счет</a>
                </div>

            </div>  
        </div>

    </div>
</div>
</section>

<section class="reg">
    <div class="container">
        <div class="reg_title">Попробуйте сейчас</div>

        <div class="reg_subtitle">Станьте участниками платформы</div>

        <div class="reg_text">
            Демонстративный счет, является учебным, его депозит <br>
            составляют виртуальные средства, и он позволяет <br>
            трейдеру практиковаться в торговле
        </div>

        <?php
            include './inc/reg.php';
        ?>

       <div class="reg_subtitle_down">Всегда под рукой:</div>

        <div class="reg_icons">
            <div class="reg_icon">
                <img class="reg_icon_img" src="../img/icon/money-portfolio.svg">
                <div class="reg_icon_text">Cоветники</div>
            </div>
            <div class="reg_icon">
                <img class="reg_icon_img" src="../img/icon/bar-graph.svg">
                <div class="reg_icon_text">Графики</div>
            </div>       
            <div class="reg_icon">
                <img class="reg_icon_img" src="../img/icon/profit-up-3.svg">
                <div class="reg_icon_text">Аналитика</div>
            </div>  
            <div class="reg_icon">
                <img class="reg_icon_img" src="../img/icon/tax-day.svg">
                <div class="reg_icon_text">Календарь</div>
            </div>      
            <div class="reg_icon">
                <img class="reg_icon_img" src="../img/icon/computer-money.svg">
                <div class="reg_icon_text">Видео уроки</div>
            </div>                                          
        </div>

    </div>
</section>

<section class="trading">
    <div class="container">
        <div class="trading_title_block">
            <div class="trading_title">Откройте реальный торговый счет</div>
            <div class="trading_subtitle">или начните торговать на учебном</div>
        </div>

        <div class="row justify-content-end">
            <div class="trading_nav col-12">      
                <div class="trading-next right"><img src="./img/right_red.svg"></div>     
                <div class="trading-prev right"><img src="./img/right_gray.svg"></div>             
            </div>
        </div>

        <div class="trading_description_block left">
            <div class="trading_description trading_description_header">
                <div>Услуги</div>
            </div>

            <div class="trading_description">
                <div>Депозит</div>
            </div>

            <div class="trading_description">
                <div>Личный менеджер</div>
            </div>

            <div class="trading_description">
                <div>Тех. поддержка 24\7</div>
            </div>

            <div class="trading_description trading_description_cell_medium">
                <div>Торговые сигналы на платформе</div>
            </div>

            <div class="trading_description">
                <div>Приоритет вывода</div>
            </div>

            <div class="trading_description trading_description_cell_medium">
                <div>Доступные платформы: веб и мобильные</div>
            </div>

            <div class="trading_description">
                <div>Уровень страховой защиты</div>
            </div>

            <div class="trading_description">
                <div>Индивидуальный бизнес-план</div>
            </div>

            <div class="trading_description trading_description_cell_hight">
                <div>Юридическое сопровождение при наличии проблем с не лицензированными брокерами</div>
            </div>

            <div class="trading_description trading_description_cell_medium">
                <div>Прием платежей от сторонних участников рынка </div>
            </div>

            <div class="trading_description trading_description_cell_hight trading_description_last">
                <div>Увеличенное количество открытых и отложенных ордеров</div>
            </div>

        </div>

        <div class="trading_block trading_shadow slider__size">
            <div class="tariff">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="trading_line">
                            <div class="trading_info trading_info_header">
                                <div class="trading_info_title">Bitqon-test</div>
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">100 $ - 1 000 $</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">В порядке очереди</div>
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_info_bottom">
                                <a href="<?= $url_reg; ?>"
                                    class="trading_button">Подключить</a>
                                <div class="trading_about"><a href="/tariff.php">Подробнее о тарифе</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trading_line">
                            <div class="trading_info trading_info_header">
                                <div class="trading_info_title">Bitqon-basic</div>
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">1 000 $ - 2 500 $</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">В порядке очереди</div>
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">С+</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_info_bottom">
                                <a href="<?= $url_reg; ?>"
                                    class="trading_button">Подключить</a>
                                <div class="trading_about"><a href="/tariff.php">Подробнее о тарифе</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trading_line">
                            <div class="trading_info trading_info_header">
                                <div class="trading_info_title">Bitqon-optimal</div>
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">2 500 $ - 10&nbsp;000&nbsp;$</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">В порядке очереди</div>
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">B+</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/no.svg">
                            </div>

                            <div class="trading_info trading_info_bottom">
                                <a href="<?= $url_reg; ?>"
                                    class="trading_button">Подключить</a>
                                <div class="trading_about"><a href="/tariff.php">Подробнее о тарифе</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trading_line">
                            <div class="trading_info trading_info_header">
                                <div class="trading_info_title">Bitqon-priority</div>
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">10 000 $ - 50&nbsp;000&nbsp;$</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">Приоритетный</div>
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">B++</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_info_bottom">
                                <a href="<?= $url_reg; ?>"
                                    class="trading_button">Подключить</a>
                                <div class="trading_about"><a href="/tariff.php">Подробнее о тарифе</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trading_line">
                            <div class="trading_info trading_info_header">
                                <div class="trading_info_title">Bitqon-pro</div>
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">50 000 $ - 250&nbsp;000&nbsp;$</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">Приоритетный</div>
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">A+</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_info_bottom">
                                <a href="<?= $url_reg; ?>"
                                    class="trading_button">Подключить</a>
                                <div class="trading_about"><a href="/tariff.php">Подробнее о тарифе</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="trading_line">
                            <div class="trading_info trading_info_header">
                                <div class="trading_info_title">Bitqon-elite</div>
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">250 000 $ +</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">Экспресс</div>
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info">
                                <div class="trading_info_subtitle">A++</div>
                            </div>

                            <div class="trading_info">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_medium">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_cell_hight">
                                <img src="../img/yes.svg">
                            </div>

                            <div class="trading_info trading_info_bottom">
                                <a href="<?= $url_reg; ?>"
                                    class="trading_button">Подключить</a>
                                <div class="trading_about"><a href="/tariff.php">Подробнее о тарифе</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <!--<div class="hr"></div>

        <div class="training">
            <div class="training_title left">Материалы для новичков</div>
            <div class="right"><a href="#" class="trading_button_demo">Все материалы</a></div>

            <div class="row left">
                <div class="training_block col-6">
                    <div class="training_block_up">Обучение для новичков</div>


                    <div class="training_block_title">Онлайн обучение</div>
                    <div class="training_block_text">Техническая безопасность торговых счетов на банковском ровне</div>

                    <a href="#"><img src="../img/button-arrow.svg"> <div class="training_block_url">Узнать подробнее</div></a>
                </div>


                <div class="col-6"></div>
            </div>
        </div>-->


    </div>
</section>

<section class="output">
    <div class="container">
        <div class="output_title_block">
            <div class="output_title">Вывод средств 24/7</div>
            <div class="output_subtitle">Система вывода денег работет круглосуточно</div>
        </div>

        <div class="row justify-content-center align-items-center partners_list">
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/qiwi.svg">
            </div>
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/neteller.svg">
            </div>
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/mastercard.svg">
            </div>
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/webmoney.svg">
            </div>
        </div>
        <div class="row justify-content-center partners_list">
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/yandex.svg">
            </div>
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/skrill.svg">
            </div>
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/paypal.svg">
            </div>
            <div class="output_img col-6 col-md-6 col-lg-3 col-xl-3 partners_item">
                <img src="./img/output/visa.svg">
            </div>
        </div>

    </div>    
</section>

<section class="awards">
    <div class="container">
        <div class="awards_title_block">
            <div class="awards_title">Мы обладатели более 10<br> престижных наград</div>
            <div class="awards_subtitle">
                Мы обеспечиваем быструю обработку запросов, информация по <br>
                исполнению запросов доступна через вашу учетную запись. <br>
                Система вывода денег работает круглосуточно
            </div>
        </div>   
        
        <div class="awards_img_block row justify-content-center">
            <div class="col-6 col-md-6 col-lg-6 col-xl-3">
                <img src="./img/awards/one.png" class="awards_img">
            </div>
            <div class="col-6 col-md-6 col-lg-6 col-xl-3">
                <img src="./img/awards/two.png" class="awards_img">
            </div>
            <div class="col-6 col-md-6 col-lg-6 col-xl-3">
                <img src="./img/awards/tree.png" class="awards_img">
            </div>
            <div class="col-6 col-md-6 col-lg-6 col-xl-3">
                <img src="./img/awards/four.png" class="awards_img"> 
            </div>   
        </div>   
        <div class="award_button">
            <a href="<?= $url_reg; ?>" class="button_big">Открыть реальный счет</a> 
        </div>        
     </div>
</section>


<section class="director">
    <div class="container">
        <div class="left director_block">
            <div class="director_title">Bitqon</div>
            <div class="director_text">
                Нашими основными ценностями являются целостность и <br>
                инновации, мы всегда ставим клиентов на первое место и <br>
                позволяем им полностью раскрыть свой истинный потенциал. <br>
                Мы полагаем, что торговый опыт - это прежде всего процесс <br>
                изучения и понимания финансовых рынков, который в <br>
                конечном счете полностью самоокупается, хоть иногда он и <br>
                сопряжен с негативными эмоциями.  
            </div>

            <div class="left">
                <div class="director_name">Михаэль Штейн</div>
                <div class="director_sub">Главный финансовый директор Bitqon</div>
                <img src="img/bitqon.jpg" alt="" class="mobile_img">
            </div>
            

            <a href="/about.php" class="director_button">Узнать подробнее</a>
        </div>


    </div>
</section>

<section class="pre_footer">
    <div class="container">

        <div class="pre_footer_title_block">
            <div class="pre_footer_title">Начните ваше путешествие в мир<br> трейдинга уже сейчас</div>
            <div class="pre_footer_subtitle">
                Вы можете торговать  CFD на валютные пары, <br>
                энергоносители, металы, акции и многое другое
            </div>
            <div class="award_button">
                <a href="<?= $url_reg; ?>" class="button_big">Открыть реальный счет</a> 
            </div>    
        </div>           

    </div>
</section>

<!--
<section class="menu_footer">
    <div class="container">
        <div>
            <div class="menu_title">Про компанию</div>
            <div class="menu_item"><a href="#">Преимущества</a></div>
            <div class="menu_item"><a href="#">Финансовая стабильность</a></div>
            <div class="menu_item"><a href="#">Аналитики</a></div>
            <div class="menu_item"><a href="#">Контакты</a></div>
        </div>


    </div>
</section>
-->

<?php
    include './inc/footer.php';
?>