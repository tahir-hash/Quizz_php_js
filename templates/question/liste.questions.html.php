            
                  <div class="info">
                  <form action="<?=WEBROOT?>" method="GET" id="form_liste">
                  <input type="hidden" name="controller" value="question">
                  <input type="hidden" name="action" value="liste_question">
                  <label for="">Nbr de question/jeu</label>
                  <input type="number" name="limit" value="<?= $limit?>">
                    <input type="submit" name="submit" value="ok">
                  </form>

                    <div class="liste_q">
                      <div class="questions">
                      <?php /*  */
                          foreach ($data as $value) :?>
                              <h3><?= $value['id']."."." ".$value['question'];?></h3>
                              <!-- type multi -->
                              <?php if($value['type']=='multi') :?>
                                <ul type="square">
                                    <?php foreach ($value['reponses'] as $val_reponses) :?>
                                    <li><?= $val_reponses;?></li>
                                    <?php endforeach ?>
                                </ul>
                              <?php endif ?>
                              <!-- type texte -->
                              <?php if($value['type']=='texte') :?>
                                <ul>
                                    <?php foreach ($value['reponses'] as $val_reponses) :?>
                                   <input type="text" value="<?= $val_reponses;?>" disabled>
                                    <?php endforeach ?>
                                </ul>
                              <?php endif ?>
                              <!-- type radio -->
                              <?php if($value['type']=='unique') :?>
                                <ul type="circle">
                                    <?php foreach ($value['reponses'] as $val_reponses) :?>
                                    <li><?= $val_reponses;?></li>
                                    <?php endforeach ?>
                                </ul>
                              <?php endif ?>
                          <?php endforeach ?>
                      </div>
                          
                    </div>
                    
                    <div class="butt">
                        <?php if($page != 1) :?>
                          <button><a href="http://localhost/quizz_mvc/public/?controller=question&action=liste_question&page=<?=$page-1;?>&limit=<?=$limit;?>">PRECEDENT</a></button>
                        <?php endif ?>
                        <?php //for($i=1; $i<=$totalPages; $i++) : ?>
                          <?php if($page < $totalPages) :?>
                          <button><a href="http://localhost/quizz_mvc/public/?controller=question&action=liste_question&page=<?=$page+1;?>&limit=<?=$limit;?>">SUIVANT</a></button>
                        <?php endif ?>
                      </div>
                  </div>