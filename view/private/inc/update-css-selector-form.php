<?php
// DO EVERYTHING NEEDED HERE. FINISH THE INSERT BEFORE THIS ONE
?>

<ul class="list-group">
        <?php
    if (is_array($cssSelectors)) {
    foreach ($cssSelectors as $css) {
        ?>
            <li class="list-group-item"><?=$css['selector']?></li>
        <?php
    }
}
?>
    </ul>
    
<fieldset class="reset">
    <legend class="reset">Update CSS Selector</legend>
    <form action="" method="POST" id = "loginForm">
    <label for="nomInp" id="logLabelName"></label>
    <input type="text" name="nameInp" id="nomInp" aria-describedby="userNameField" placeholder="User Name">
    <label for="pwdInp" id="logLabelPwd"></label>
    <input type="password" name="passInp" id="pwdInp" placeholder="Password">
    <button type="submit" id="submitLogin"></button>
</form>
</fieldset>