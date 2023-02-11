<?php
    $page = 'page_bg';
    $page_title = "Наши контакты :: Bitqon";
    include './inc/header.php';
?>

<img src="./img/page/about.jpg" class="bg_page">

<section class="page"> 
    <div class="container">
        <div class="page_red">
            <div class="page_title">О НАШЕЙ КОМПАНИИ</div>
            <div class="page_text">
                Жизнь это всегда развитие и движение <br>
                только вперед
            </div>
        </div>

    </div>
</section>

<section class="">
    <div class="container">
        <div class="page_content_title">
            Вы можете связаться с нами по<br>
            следующим контактам:
        </div>


        <div class="row justify-content-around default_padding">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 contact_block">
                <div class="contact_mini_title">
                    Оперативный штаб в Мадриде
                </div>
                <div class="contact_mini_text">
                    Calle del Dr. Castello, 44, 28009 Madrid
                </div>
                <div class="step_icon_block">
                        <img src="./img/page/icon/time.svg" class="left">

                        <div class="step_icon_text left text_light">
                            Пн-Пт 9:00-18:00
                            (UTC+2:00) (GMT+1) <br>
                            mail: support@<?php echo $_SERVER['HTTP_HOST']; ?> <br>
                            info@<?php echo $_SERVER['HTTP_HOST']; ?>
                        </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 contact_block">
                <div class="contact_mini_title">
                    Офис в Великобритании
                </div>
                <div class="contact_mini_text">
                    Kings Hedges Rd, Cambridge CB4 2HY, UK
                </div>
                <div class="step_icon_block">
                        <img src="./img/page/icon/time.svg" class="left">

                        <div class="step_icon_text left text_light">
                            Пн-Пт 9:00-18:00 
                            (UTC+3:00) <br>
                            mail: support@<?php echo $_SERVER['HTTP_HOST']; ?> <br>
                            info@<?php echo $_SERVER['HTTP_HOST']; ?>
                        </div>
                </div>             
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 contact_block">
                <div class="contact_mini_title">
                    Административный офис в Берлине
                </div>
                <div class="contact_mini_text">
                    Fasanenstraße 85, 10623 Berlin
                </div>
                <div class="step_icon_block">
                        <img src="./img/page/icon/time.svg" class="left">

                        <div class="step_icon_text left text_light">
                            Пн-Пт 9:00-18:00
                            (UTC+2:00) (GMT+1) <br>
                            mail: support@<?php echo $_SERVER['HTTP_HOST']; ?> <br>
                            info@<?php echo $_SERVER['HTTP_HOST']; ?>
                        </div>
                </div>               
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