<?php
require 'templates/header.php';
?>
<body class="all">
    <div>
        <h1>Привет, это DuoMath!</h1>
        <h3>Здесь ты сможешь начать изучать математику, даже если ничего не знаешь!</h3>
        <h3>Для начала тебе следует зарегистрироваться.</h3>
    </div>
    <form method="post">
        <div>
            <input type="submit" name="go_reg" value="ЗАРЕГИСТРИРОВАТЬСЯ" class="test-button">
        </div>
        <div>
            <input type="submit" name="alr_have" value="У МЕНЯ УЖЕ ЕСТЬ АККАУНТ" class="test-button">
        </div>
        <div>
            <button class="test-button-img" name="icon" value="icon"><img src="img/favicon.ico" class="img-in-button"></button>
        </div>
    </form>
</body>

<?php
if ($_POST['go_reg']) {
    header('Location: /duomath/register');
} elseif ($_POST['alr_have']) {
    header('Location: /duomath/login');
} elseif ($_POST['icon']) {
    ?>
    <h1>DUOMATH IS ALIVE!</h1>
    <?php
}
?>