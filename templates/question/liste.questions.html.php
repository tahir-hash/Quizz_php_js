
                  <div class="info">
                    <h1>Liste des questions</h1>

                    <ol>
                          <?php /*  */
                          foreach ($data as $value) :?>
                          
                              <li><?=$value['quest'];?></li>
                              <ul type="square">
                                  <?php foreach ($value['reponses'] as $val_reponses) :?>
                                  <li><?= $val_reponses;?></li>
                                  <?php endforeach ?>
                              </ul>
                        <?php endforeach ?>
                    </ol>
                    <button disabled="true">SUIVANT</button>
                  </div>
