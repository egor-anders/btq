<footer>
    <div class="container">
        <div class="col-md-12 col-lg-3 right footer_logo_block">
            <a href="/" class="footer_logo_img"><img src="./img/logo_footer.svg"></a>
            <div class="footer_contact">
                <div class="footer_mail">info@<?php echo $_SERVER['HTTP_HOST']; ?></div>
                <div class="footer_phone">+44 (757) 023-5429 </div>
            </div>
        </div>
        <div class="footer_text col-md-12 col-lg-9 left">
            Bitqon inc лицензируетя IFSR (International Financial Services Regulation), номер лицензии IF4139633. Bitqon inc
            (Kings Hedges Rd, Cambridge CB4 2HY, UK) зарегистрирован IFSR, регистрационный номер 2018/000029
            от 2 октября 2018. Услуги предоставляются под брендом Bitqon, который является зарегистрированной
            торговой маркой.

            <div class="footer_href_block">
                <a href="/risk.php" class="footer_href">Уведомления о рисках</a>
                <a href="/terms.php" class="footer_href">Пользовательское соглашение</a>
                <a href="/aml.php" class="footer_href">Политика AML</a>
                <a href="/refund.php" class="footer_href">Политика возврата платежей</a>
                <a href="/privacy.php" class="footer_href">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>

<script src="/js/jquery-3.4.1.slim.min.js"></script>
<!-- <script src="/js/jquery-3.5.1.min.js"></script> -->
<script src="/js/bootstrap.bundle.min.js"></script>

<script src="/js/swiper.min.js"></script>
<script src="/js/snap.svg.min.js"></script>
<script src="/js/intlTelInput.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>


<script>
var input = document.querySelector("#tel");
window.intlTelInput(input, {
    preferredCountries: ["ru", "kz", "lv", "lt", "am", "az", "md", "uz", "kg"],
    separateDialCode: true,
    hiddenInput: "full",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.11/js/utils.js",
});
</script>

<script>
var swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
});
</script>

<script>
var swiper = new Swiper('.invest-container', {
    navigation: {
        nextEl: '.invest-next',
        prevEl: '.invest-prev',
    },
});
</script>


<script>
var swiper = new Swiper('.tariff', {
    slidesPerView: 'auto',
    spaceBetween: 0,
    autoHeight: true,
    noSwiping: true,
    //   allowTouchMove: false,
    // init: false,
    navigation: {
        nextEl: '.trading-next',
        prevEl: '.trading-prev',
    },
});
</script>

<script>
jQuery(function() {
    jQuery(".trading-next, .trading-prev").on("click", function() {
        $('.trading-prev img').attr('src', "./img/right_red.svg");

        $('.trading-next img').attr('src', "./img/right_red.svg");


        $('.swiper-button-disabled img').attr('src', "./img/right_gray.svg");
    });

    $(".burger").click(function() {
        $(".menu_burger").toggle("slow", function() {

        });
        // $('.burger img').attr("src", $('.burger img').replace("on", "off"));
    });


    $('.text_bg_right_block img').css('height', $('.text_left_block').height());
});
</script>

</body>

</html>