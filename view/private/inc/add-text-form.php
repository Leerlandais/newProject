
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

<?php
//        VERY IMPORTANT ---- ADD A PROTECTED COLUMN TO DB FOR TEXT THAT CANNOT BE CHANGED BY ANYONE BUT ME ---- END VERY IMPORTANT

?>
<fieldset class="reset">
  <div class="container d-flex flex-row">
  <div class="container text-center">
    <fieldset class="reset"><legend  class="reset" id="addTextLegend"></legend>
    <form action="./" method="POST" id = "add-textForm" class="d-flex flex-column align-items-center">
      
      <label for="selectInp" id="addTextselectLabelName"></label>
      <input class="ps-2" type="text" name="selectInp" id="selectInp" aria-describedby="userNameField" placeholder="selector" <?=$block?>>
      
      <label for="englishInp" id="addTextEnLabelName"></label>
      <input class="ps-2" type="text" name="englishInp" id="englishInp" aria-describedby="userNameField" placeholder="english version" <?=$block?>>
      
      <label for="frenchInp" id="addTextFrLabelName"></label>
      <input class="ps-2" type="text" name="frenchInp" id="frenchInp" aria-describedby="userNameField" placeholder="french version" <?=$block?>>
      
      <div class="d-flex flex-row">
        
        <label for="typeInpId" class="radioIdLabel mx-2"></label>
        <input class="ps-2" type="radio" name="typeInp" id="typeInpId" checked value="id">
        
        <label for="typeInpClass" class="radioClassLabel mx-2"></label>
        <input class="ps-2" type="radio" name="typeInp" id="typeInpClass" value="class">
        
      </div>
      
      <button type="submit" class="submitButton" <?=$block?>></button>
    </form>
  </fieldset>
</div>
</fieldset>