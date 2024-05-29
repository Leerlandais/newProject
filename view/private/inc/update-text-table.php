<div class="container">
<div class="table-responsive"> 

                        <table class="table table-bordered table-striped" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true">
                        <thead>
                                <tr>
                                    <th class="text-center" id="updateTableHeadId">ID</th>
                                    <th class="text-center" id="updateTableHeadName">Element</th>
                                    <th class="text-center" id="updateTableHeadTextEn">Content</th>
                                    <th class="text-center" id="updateTableHeadTextFr">Contenu</th>
                                    <th class="text-center" id="updateTableHeadType">Type</th>
                                    <th class="text-center">Modifier</th>
  
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // replace these with a foreach - $allText   
                                   
                                    foreach ($completeTexts as $text) {
                                        ?>
                                    <tr>
                                        <td><?=$text["id"]?></td>
                                        <td><?=$text["elem"]?></td>
                                        <td><?=$text["enText"]?></td>
                                        <td><?=$text["frText"]?></td>
                                        <td><?=$text["theType"]?></td>
  
                                        <td><a href="?update&item=<?=$text["id"]?>"><img src="img/pencil.svg" alt="update"></a></td>
  
                                    </tr>
                                    <?php
                              }                                     
                                    ?>
                            </tbody>
                        </table>

                    </div>
<button class="submitButton d-none"></button>
                    </div>