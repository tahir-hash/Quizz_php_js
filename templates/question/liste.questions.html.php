            
                  <div class="info">

                    <h1>Liste des questions</h1>
                    
                    <div class="liste_q">
                          <?php /*  */
                          foreach ($items as $value) :?>
                              <span><?= $value['id']."."." ".$value['quest'];?></span>
                              <ul type="square">
                                  <?php foreach ($value['reponses'] as $val_reponses) :?>
                                  <li><?= $val_reponses;?></li>
                                  <?php endforeach ?>
                              </ul>
                              <?php endforeach ?>
                    </div>
                    
                    <div class="butt">
                        <?php if($page != 1) :?>
                          <button><a href="http://localhost/quizz_mvc/public/?controller=question&action=liste_question&page=<?=$page-1;?>">PRECEDENT</a></button>
                        <?php endif ?>
                        <?php //for($i=1; $i<=$totalPages; $i++) : ?>
                          <?php if($page < $totalPages) :?>
                          <button><a href="http://localhost/quizz_mvc/public/?controller=question&action=liste_question&page=<?=$page+1;?>">SUIVANT</a></button>
                        <?php endif ?>
                      </div>
                  </div>
