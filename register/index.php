<?php
require '../templates/header.php';
?>
<body class="all">
    <form action="index.php" method="post" style="display:block;text-align: center;margin-top: 15%">
        <div class="input-info">
            <p>
                EMAIL: <input name="login" class="input-pole">
            </p>
        </div>
        <div class="input-info">
            <p>
                ПАРОЛЬ: <input type="password" name="password" class="input-pole">
            </p>
        </div>
        <input type="submit" style="min-width: 25%" value="ЗАРЕГИСТРИРОВАТЬСЯ" class="test-button">
    </form>
</body>
<?php
function SendToDB($string_request) {
    $connection = mysqli_connect('localhost', 'root', '', 'duomath');
    mysqli_query($connection, $string_request);
    mysqli_close($connection);
}
function GetFromDB($string_request) {
    $connection = mysqli_connect('localhost', 'root', '', 'duomath');
    $result = mysqli_query($connection, $string_request);
    $row = mysqli_fetch_array($result);
    mysqli_close($connection);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function echoMessage($message, $bg_color) {?>
    <div class="echo-message-func" style="background-color: <?=$bg_color?>">
        <?=$message?>
    </div>
<?php
}

if ($_POST['login'] && $_POST['password']) {
    if (GetFromDB('SELECT * FROM users WHERE email = "' . $_POST['login'] . '"')) {
        echoMessage('ВЫ УЖЕ ЗАРЕГИСТРИРОВАНЫ!', '#ff7777');
    } else {
        SendToDB('INSERT INTO users(`email`, `login`) VALUES("' . $_POST['login'] . '", "' . $_POST['password'] . '");');
        echoMessage('ПОЗДРАВЛЯЕМ С УСПЕШНОЙ РЕГИСТРАЦИЕЙ!', '#63d760');
    }
}