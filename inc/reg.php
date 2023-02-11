<form class="reg_form" action="/send.php" method="post">
    <input name="name" type="text" placeholder="Ваше ФИО" class="data" required="">

    <div class="reg_phone_label left">Телефон</div>
    <input type="tel" id="tel" placeholder="499 000 00 00" class="data" required="">

    <input name="email" type="email" placeholder="Email" class="data" required="">   

    <input name="pass" class="data" placeholder="Пароль" type="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="8 или более символов, в том числе, одна цифра, одна прописная, одна строчная буква">  

    <label class="check">
        <input type="checkbox" id="check1" checked required="">
        <span class="checkmark"></span>
    </label>
        <label for="check1" class="check1_label"><a href="/offer.php">Я согласен с офертой</a></label>
    
    
    <div class="step_icon_button">
        <input type="submit" value="Открыть реальный счет" class="button_big">
    </div>
</form>