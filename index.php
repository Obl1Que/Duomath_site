<title>DuoMath</title>
<link rel="shortcut icon" href="/duomath/img/favicon.ico">
<link rel='stylesheet' href='/duomath/main_css.css'>

<body class="all" style="background-color: white">
    <div>
        <img src="img/square-1.svg" class="square">
        <img src="img/square-2.svg" class="square">
        <img src="img/square-3.svg" class="square">
        <img src="img/square-4.svg" class="square">
        <img src="img/square-2.svg" class="square">
    </div>
    <div>
        <img src="img/square-5.svg" class="square">
        <img src="img/square-6.svg" class="square">
    </div>
    <div style="text-align: unset; margin-top: 5%">
        <h1 style="margin-left: 20%; margin-bottom: 2%">Привет, это DuoMath!</h1>
        <h2 style="margin-left: 18%">Здесь ты сможешь начать изучать математику, даже если ничего не знаешь!
            <br>Для начала тебе следует зарегистрироваться.</h2>
    </div>
    <div style="text-align: right; margin-right: 20%; margin-top: 10%">
        <form method="post">
            <div>
                <input type="submit" name="go_reg" value="ЗАРЕГИСТРИРОВАТЬСЯ" class="test-button" style="min-width: 650px">
            </div>
        </form>
        <form method="post">
            <div>
                <input type="submit" name="alr_have" value="У МЕНЯ УЖЕ ЕСТЬ АККАУНТ" class="test-button" style="min-width: 650px">
            </div>
        </form>
    <!--    <form method="post">-->
    <!--        <div>-->
    <!--            <button class="test-button-img" name="icon" value="icon">-->
    <!--                <img src="img/favicon.ico" class="img-in-button">-->
    <!--            </button>-->
    <!--        </div>-->
    <!--    </form>-->
    </div>
</body>

<?php
if ($_POST["go_reg"]) {
    header("Location: /duomath/register");
} elseif ($_POST["alr_have"]) {
    header("Location: /duomath/login");
}