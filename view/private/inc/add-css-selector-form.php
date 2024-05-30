<div class="container mt-5 d-flex flex-column justify-content-center align-items-center flex-wrap">
    
<fieldset class="reset w-75 mb-2 d-flex flex-column justify-content-center align-items-center flex-wrap">
    <legend class="reset"  id="updateSelectorLegend"></legend>
    <ul class="list-group w-50">
        <?php
                if (is_array($cssSelectors)) {
                    
                    
                    foreach ($cssSelectors as $css) {
                        if ($css["sel_type"] === "selector") {
                        ?>
                        <p class="h6" id="updateSelectorTypeSelect"></p>
                        <a href="?updateCss&id=<?=$css["sel_id"]?>">
                            <li class="list-group-item"><?=$css['sel_name']?></li> 
                        </a>
                        <?php
                    }else if ($css["sel_type"] === "id") {
                        ?>
                        <p class="h6" id="updateSelectorTypeId"></p>
                        <a href="?updateCss&id=<?=$css["sel_id"]?>">
                            <li class="list-group-item"><?=$css['sel_name']?></li> 
                        </a>
                        <?php
                    }else {
                        ?>
                        <p class="h6" id="updateSelectorTypeClass"></p>
                        <a href="?updateCss&id=<?=$css["sel_id"]?>">
                            <li class="list-group-item"><?=$css['sel_name']?></li> 
                        </a>
                        <?php
                        }
                    }
                }
        ?>

    </ul>
</fieldset>


<fieldset class="reset d-flex flex-column align-items-center">
    <legend class="reset" id="addSelectorLegend"></legend>
    
    <form action="" method="POST" id = "addSelectorForm" class="d-flex flex-column align-items-center"> 
        <label for="addSelectorName" id = "addSelectorNameLabel"></label>
        <input type="text" name="addSelectorName" id="addSelectorName" aria-describedby="addSelectorName">
        <div class="d-flex flex-row">
            <label for="labelTypeSelect" class="radioSelectLabel"></label><input type="radio" name="selectorType"id="labelTypeSelect" class="me-2" checked value="selector">
            <label for="labelTypeId" class="radioIdLabel"></label><input type="radio" name="selectorType"id="labelTypeId" class="me-2" value="id">
            <label for="labelTypeClass" class="radioClassLabel"></label><input type="radio" name="selectorType"id="labelTypeClass" class="me-2" value="class">
        </div>

        <button type="submit" class="btn btn-primary submitButton"></button>
    </form>
    
</fieldset>
</div>


