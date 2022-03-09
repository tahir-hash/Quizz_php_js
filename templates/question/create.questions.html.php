                <div class="info">
                    <h1>PARAMETRER VOS QUESTIONS</h1>
                    <form class="formulaire_question">
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
                        </div>
                        <div class="form-block">
                            <label for="reponse">Réponse 1</label>
                            <input type="text" name="rep" id="reponse"> 
                        </div>
                        <input type="submit" id="submit" value="Enregistrer">
                    </form>
                </div>
