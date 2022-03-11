                <div class="info">
                    <h1>PARAMETRER VOS QUESTIONS</h1>
                    <form class="formulaire_question" id="formulaire_question" method="POST">
                        <input type="hidden" name="controller" value="question">
                        <input type="hidden" name="action" value="ajout">
                    <div id="saisie">
                        <div class="form-block">
                            <label for="textarea">Questions</label>
                            <textarea name="textarea" id="textarea" cols="30" rows="4"></textarea>
                        </div>
                        <div class="form-block">
                            <label for="nbr">Nbre de Points</label>
                            <input type="number" name="nombre" id="nbr">
                        </div>
                        <div class="form-block">
                            <label for="select">Type de réponse</label>
                            <select name="select" id="select">
                                <option value="" disabled selected>Donnez le type de réponse</option>
                                <option value="texte">Texte</option>
                                <option value="multi">Multiple</option>
                                <option value="unique">Unique</option>
                            </select> <img id="ajout" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."add.png"?>"alt="" height="33px">
                        </div> <br>
                    </div>
                        
                        <!-- <div class="form-block" id="champs">
                            <label for="reponse">Réponse 1</label>
                            <input type="text" name="rep" id="reponse"> 
                            <input type="checkbox">
                            <img  src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."delete.png"?>"alt="" >
                        </div> -->
                        <input type="submit" id="send" value="Enregistrer">
                    </form>
                </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."add_question.js"?>"></script>

