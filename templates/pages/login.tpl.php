<?php
?>
<div class="login">
    <div class="login-signup">
        <h3>Regisztráció</h3>
        <form action="../../includes/signup.php" method="post">
            <input type="text" name="vezeteknev" placeholder="vezetéknév">
            <input type="text" name="utonev" placeholder="keresztnév">
            <input type="text" name="felhasznalonev" placeholder="bejelentkező név">
            <input type="password" name="jelszo" placeholder="jelszó">
            <br>
            <button type="submit" name="submit">Regisztráció</button>
        </form>
    </div>
    <div class="login-login">
        <h3>Bejelentkezés</h3>
        <form action="" method="post">
            <input type="text" name="felhasznalonev" placeholder="bejelentkező név">
            <input type="password" name="jelszo" placeholder="jelszó">
            <br>
            <button type="submit" name="submit">Bejelentkezés</button>
        </form>
    </div>
</div>