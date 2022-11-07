<?php
?>
<h3>Belépés</h3>
<form action = "?page=belepes" method = "post">
    <fieldset>
        <legend>Belépés</legend>
        <br>
        <input type="text" name="felhasznalonev" placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
    </fieldset>
</form>
<h3>Regisztráció</h3>
<form action = "../../logicals/regisztracio.php" method = "post">
    <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalonev" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
    </fieldset>
</form>
</body>
</html>