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
            <td>Twój adres e-mail: <td><input name="user">
            <tr>
            <td>Hasło: <td><input type="password" name="pass">
            <tr>
            <td colspan=2><input type="submit" value="zaloguj">
            </table>
        </form>
        <br>
        Nie masz konta? 
        <a href="reg.php" target="_new">Zarejestruj się</a>