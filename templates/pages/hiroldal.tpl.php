<?php

?>
<h3>Híroldal</h3>
<form action = "?page=hiroldal" method = "post">
    <fieldset>
        <legend>Híroldal</legend>
        <br>
        <label for="ertekeles">Hírek értékelése</label><br><br>
        <select name="ertekeles" id="ertekeles">
            <option value="3">Kiváló</option>
            <option value="2">Megfelelő</option>
            <option value="1">Elégséges</option>
            <option value="0">Értékelhetetlen</option>
        </select><br><br>
        <label for="uzenet">Üzenet törzse</label><br><br>
        <textarea name="uzenet" id="uzenet" maxlength="1000"></textarea><br><br>
        <input type="submit" name="kuld" value="Beküldés">
        <br>&nbsp;
    </fieldset>
</form>


