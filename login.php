<?php
    include("hthead.php");
?>
<body style="color:#effedd; margin:0; padding:0; padding-top:5pt;">
   <?php
   include("header.php");
   ?>
   <script>
       $('#login').css('color', 'red');
   </script>
    <div style="font-family: 'Inconsolata', cursive; font-size:10pt; background:rgba(0,0,0, 0.7); padding:2em; margin-top:97px;">
        <form method="post" action="login.php?dologin">
            <table>
                <tr>
            <td><div>Twój adres e-mail: </div><td><input name="user">
            <tr>
            <td><div>Hasło: </div><td><input type="password" name="pass">
            <tr>
            <td colspan=2><input type="submit" value="zaloguj">
            </table>
        </form>
        <br>
        <div>
        Nie masz konta? 
        <a href="reg.php" target="_new">Zarejestruj się</a>
        </div>