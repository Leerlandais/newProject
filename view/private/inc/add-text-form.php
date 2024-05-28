<?php
// DO EVERYTHING NEEDED HERE. ALSO DO THIS ONE FIRST
?>


<?php
$block = "";
/*
if (isset($errorMessage) && $errorMessage == "Sorry but you can't get in that easily.<br><a href='?home'>Return</a>") {
    die();
  }
  $_SESSION["np_user_permission"] < 128 ? $block = "disabled" : $block = "";
  */
  // ADD TEXT TO SITE
  ?>


<fieldset class="reset">
<p class="h3 text-center" id="addTextTest"></p>
<div class="container d-flex flex-row">
  <div class="container text-center">
    <fieldset class="reset"><legend  class="reset" id="addTextLegend"></legend>
    <form action="" method="POST" id = "add-textForm" class="d-flex flex-column align-items-center">
      <label for="selectInp" id="selectLabelName"></label>
      <input type="text" name="selectInp" id="selectInp" aria-describedby="userNameField" placeholder="selector" <?=$block?>>
      <label for="englishInp" id="enLabelName"></label>
      <input type="text" name="englishInp" id="englishInp" aria-describedby="userNameField" placeholder="english version" <?=$block?>>
      <label for="frenchInp" id="frLabelName"></label>
      <input type="text" name="frenchInp" id="frenchInp" aria-describedby="userNameField" placeholder="french version" <?=$block?>>
      <div class="d-flex flex-row">
      <label for="typeInpId" id="typeInpIdLabel" class="mx-2"></label>
      <input type="radio" name="typeInp" id="typeInpId" checked value="id">
      <label for="typeInpClass" id="typeInpClassLabel" class="mx-2"></label>
      <input type="radio" name="typeInp" id="typeInpClass" value="class">
      </div>
      <button type="submit" class="submitButton" <?=$block?>></button>
    </form>
  </fieldset>
</div>
</fieldset>