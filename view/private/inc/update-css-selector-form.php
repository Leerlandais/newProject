<?php
// DO EVERYTHING NEEDED HERE. FINISH THE INSERT BEFORE THIS ONE
// var_dump($getSelector);
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


<div class="container-fluid d-flex flex-row justify-content-center">
<fieldset class="reset w-25 d-flex flex-column justify-content-center align-items-center flex-wrap">
    <legend class="reset" id="updateSelectorField"></legend>
    <div class="mb-4 d-flex flex-row flex-wrap w-auto">
  <?php
   
      ?>
      <div class="d-flex flex-column mx-5">
      <form method="POST" id="globalForm" class="mt-5 w-auto">
    <label for="addCssSelector" class="form-label text-danger"><?=$getSelector["sel_name"]?></label><br>
    <?php
      if(!$getSelector["att_name"]) {
    ?>
        <h5 id="selectorHasNoAtt"></h5>
    <?php
      }else
    ?>
        <p class="h5" id="selectorAddAttFlag"></p>
    <input type="text" name="addCssSelector" class="d-none" value="<?=$getSelector["np_css_selector_id"]?>" <?=$block?>>
    <label for="addCssAttrib">Attrib : </label>
    <input type="text" class="form-control text-center" name="addCssAttrib"  value="<?=$getSelector["att_name"]?>" placeholder="<?=$getSelector["att_name"]?>" <?=$block?>>
    <label for="addCssValue">Value : </label>
    <input type="text" class="form-control text-center" name="addCssValue"  value="<?=$getSelector["new_val"]?>" <?=$block?>>

    <button type="submit" class="btn btn-primary submitButton" <?=$block?>></button>
  </form>
  
  <form method="POST" id="globalFormOpt" class="mt-1 w-auto d-none">
    
    <input type="text" name="cssReset" value="<?=$getSelector["att_name"]?>">
    <button type="submit" class="btn btn-primary" id = "undoButton" name="undoChange"  <?=$block?>></button>
    <button type="submit" class="btn btn-primary" id = "resetButton" name="resetDefault"  <?=$block?>></button>
  </form> 
</div>
  
    <?php
    
    ?>
    </div>


</fieldset>
</div>