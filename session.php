<?php

session_start();
//session_regenerate_id();

echo "Session ID: " . session_id() . "<br>";

if (isset($_REQUEST["logout"]) && isset($_SESSION["ativo"])) {
    unset($_SESSION["ativo"]);
    session_destroy();
}

if (isset($_SESSION["ativo"])) {
    var_dump($_SESSION);
    echo "<h1> Olá " . $_SESSION["nome"] . "</h1>";
    echo "<h2> Você está logado como " . $_SESSION["login"] . "<h2>";
    echo "<p><a href=?logout> Logout </a></p>";
    return;
}

if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $_SESSION["login"] = "adm";
    $_SESSION["nome"] = "Administrador";
    $_SESSION["ativo"] = true;
    
    var_dump($_SESSION);
    echo "<h1> Olá " . $_SESSION["nome"] . "</h1>";
    echo "<h2> Você está logado como " . $_SESSION["login"] . "<h2>";
    echo "<p><a href=?logout> Logout </a></p>";

    return;
}
?>
<html>
    <body>
        <h1> Login </h1>
        <hr>
        <form method="post">
            <input type="text" name="login">
            <input type="text" name="senha">
            <input type="submit">
        </form>
    </body>
</html>