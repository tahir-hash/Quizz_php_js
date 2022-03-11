            
                  <div class="info">

                    <h1>Liste des questions</h1>
                    
                    <div class="liste_q">
                          <?php /*  */
                          foreach ($items as $value) :?>
                              <span><?= $value['id']."."." ".$value['question'];?></span>
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
                              <!-- type radion -->
                              <?php if($value['type']=='unique') :?>
                                <ul type="circle">
                                    <?php foreach ($value['reponses'] as $val_reponses) :?>
                                    <li><?= $val_reponses;?></li>
                                    <?php endforeach ?>
                                </ul>
                              <?php endif ?>
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
