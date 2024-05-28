<?php
// DO EVERYTHING NEEDED HERE. DO THIS ONE FIRST
?>

<fieldset class="reset">
    <legend class="reset">Add CSS Selector</legend>
    
    <form action="" method="POST" id = "addSelectorForm" class="d-flex flex-column align-items-center"> 
        <label for="addSelectorName" id="addSelectorNameLabel"></label>
        <input type="text" name="addSelectorName" id="addSelectorName" aria-describedby="addSelectorName" placeholder="CHANGE_THIS">
        <div class="d-flex flex-row">
            <label for="labelTypeSelect">Selector</label><input type="radio" name="selectorType"id="labelTypeSelect" class="mx-1" checked>
            <label for="labelTypeId">ID</label><input type="radio" name="selectorType"id="labelTypeId" class="mx-1">
            <label for="labelTypeClass">Class</label><input type="radio" name="selectorType"id="labelTypeClass" class="mx-1">
        </div>

        <button type="submit" class="btn btn-primary submitButton"></button>
    </form>
    
</fieldset>

<div class="container-fluid">

<fieldset class="reset w-25 d-flex flex-column justify-content-center align-items-center flex-wrap">
    <legend class="reset" id="existingSelectorList"></legend>
    <p class="h3" id="existingSelectorHead"></p>
    <ul class="list-group w-50">
        <?php
                if (is_array($cssSelectors)) {
                    foreach ($cssSelectors as $css) {
                        ?>
                        <a href="?updateCss&id=<?=$css["css_id"]?>">
                            <li class="list-group-item"><?=$css['sel_name']?></li> 
                        </a>
                        <?php
                    }
                }
        ?>

    </ul>
</fieldset>

</div>