<div class="top" style="background-image: url('/img/page/analysts.jpg');">
<?php
    $page = 'page_bg';
    $page_title = "Forex календарь :: Bitqon";
    include './inc/header.php';
?>


<section class="page">
    <div class="container">
        <div class="page_red">
            <div class="page_title">Аналитики</div>
            <div class="page_text">
                Жизнь это всегда развитие и движение <br>
                только вперед
            </div>
        </div>

    </div>
</section>

</div>




<section class="page_content default_padding_bottom">
    <div class="container">
        <div class="page_content_title">
            Forex календарь
        </div>

        <div class="row default_padding_mini_bottom">
            <div class="col-12 col-md-12 col-lg-12 col-xl-12 text_mini">
               
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>            
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                {
                "colorTheme": "light",
                "isTransparent": false,
                "width": "100%",
                "height": "1200",
                "locale": "ru",
                "importanceFilter": "-1,0,1"
                }
                </script>
                </div>
                <!-- TradingView Widget END -->

            </div>
        </div>
    </div>
</section>


<?php
    include './inc/footer_go.php';
?>

<?php
    include './inc/footer_reg.php';
?>

<?php
    include './inc/menu_footer.php';
?>


<?php
    include './inc/footer.php';
?>