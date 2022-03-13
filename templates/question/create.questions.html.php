              <?php
              if(isset($_SESSION["succes_ques"]))
              {
                $success= $_SESSION["succes_ques"];
                unset($_SESSION["succes_ques"]);
              }
              ?>
              <div class="info">
                    <h1>PARAMETRER VOS QUESTIONS</h1>
                    <form action="" class="formulaire_question" id="formulaire_question" method="POST" onSubmit="return question_form()">
                        <input type="hidden" name="controller" value="question">
                        <input type="hidden" name="action" value="ajout">
                        <?php if (isset($success['question_suc'])):?>
                            <p style="color:#2ecc71;"><?= $success['question_suc'];?></p>
                        <?php endif?>
                    <div id="saisie">
                        <div class="form-block">
                            <label class="lab_que" for="textarea">Questions</label>
                            <textarea name="textarea" id="textarea" cols="30" rows="4" ></textarea> <br>
                            <small></small>
                        </div>
                        <div class="form-block">

                            <label class="lab_que" for="nombre">Nbre de Points</label>
                            <img id="moins" class="inc-dec" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."moins.png"?>"alt="" height="20px">
                            <input type="text" name="nombre" id="nombre" value="1" >
                            <img id="plus" class="inc-dec" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."plus.png"?>"alt="" height="20px"> 
                                <small></small>
                        </div>
                        <div class="form-block">
                            <label class="lab_que" for="select">Type de réponse</label>
                            <select name="select" id="select">
                                <option value="" disabled selected>Donnez le type de réponse</option>
                                <option value="texte">Texte</option>
                                <option value="multi">Multiple</option>
                                <option value="unique">Unique</option>
                            </select> <img id="ajout" src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."add.png"?>"alt="" height="33px">
                            <small></small>
                        </div> <br>
                    </div>
                        <input type="submit" id="send" value="Enregistrer">
                    </form>
                </div>
  <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."add_question.js"?>"></script>

