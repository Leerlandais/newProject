<?php
// DO EVERYTHING NEEDED HERE. AGAIN, FINISH THE INSERT FIRST
?>
<div class="container d-flex flex-column align-items-center">
<fieldset class="reset">
    <legend class="reset" id="updateOneTextLegend"></legend>
    <form action="" method="POST" id = "updateOneTextForm" class="d-flex flex-column">
    <label for="oneTextId" id="oneTextIdLabel">id-</label>
        <input type="text" class="text-center" name="oneTextId" aria-describedby="oneTextIdField" value="<?=$getOneText["id"]?>">
    <label for="oneTextElem" id="oneTextElemLabel">elem-</label>
        <input type="text" class="text-center" name="oneTextElem" value="<?=$getOneText["elem"]?>">
    <label for="oneTextEng" id="oneTextEngLabel">ang-</label>
        <textarea name="oneTextEng" value="<?=$getOneText["enText"]?>"><?=$getOneText["enText"]?></textarea>
    <label for="oneTextFre" id="oneTextFreLabel">fre-</label>
        <textarea name="oneTextFre" value="<?=$getOneText["frText"]?>"><?=$getOneText["frText"]?></textarea>

    <div class="d-flex flex-row">
            <label for="labelTypeSelect">Selector</label>
                <input type="radio" name="selectorType"id="labelTypeSelect" class="mx-1" value="selector" <?php if($getOneText["theType"] === "selector") echo 'checked'?>>
            <label for="labelTypeId">ID</label>
                <input type="radio" name="selectorType"id="labelTypeId" class="mx-1" value="id" <?php if($getOneText["theType"] === "id") echo 'checked'?>>
            <label for="labelTypeClass">Class</label>
                <input type="radio" name="selectorType"id="labelTypeClass" class="mx-1" value="class" <?php if($getOneText["theType"] === "class") echo 'checked'?>>
        </div>

        <div class="form-group text-center">
                 <button type="submit" class="btn btn-dark rounded-pill mt-3" id="updateButton">Changer</button> 
                 <badge class="btn btn-dark rounded-pill mt-3"><a href="./">Annuler</a></badge> 
                 </div>
</form>
</fieldset>
</div>