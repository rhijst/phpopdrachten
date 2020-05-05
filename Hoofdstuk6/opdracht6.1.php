<?php
include "../include/header.php";
include "../include/aside.php";
?>
    <main id="wrapper">
        <h2>
            hoofdstuk 6.1
        </h2>

        <form method="post" action="opdracht6.1.php">
            <label for="username">
                vul hier je naam in
            </label><br>

            <input type="text" name="username" id="username"><br>

            <br>

            <label for="password">
                vul hier je wachtword in
            </label><br>
            <input type="password" name="password" id="password"><br>
            <br>
            <input type="submit">
        </form>
    </main>

<?php
include "../include/footer.php"
?>