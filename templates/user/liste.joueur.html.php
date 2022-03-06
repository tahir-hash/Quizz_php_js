                  <div class="info">
                    <h1>Liste des Joueurs</h1>
                      <table id="example">
                        <tr>
                          <th>NOM</th>
                          <th>PRENOM</th>
                          <th>SCORE</th>
                        </tr>
                        <tr>
                          <?php /*  */
                          foreach ($items  as $value) :?>
                          <td><?=  $value['prenom'];?></td>
                          <td><?=  $value['nom'];?></td>
                          <td><?=  $value['score'];?></td>
                        </tr>
                        <?php endforeach ?>
                      </table>
                      <div class="butt">
                        <?php if($page != 1) :?>
                          <button><a href="http://localhost/quizz_mvc/public/?controller=user&action=liste_joueur&page=<?=$page-1;?>">PRECEDENT</a></button>
                        <?php endif ?>
                        <?php //for($i=1; $i<=$totalPages; $i++) : ?>
                          <?php if($page < $totalPages) :?>
                          <button><a href="http://localhost/quizz_mvc/public/?controller=user&action=liste_joueur&page=<?=$page+1;?>">SUIVANT</a></button>
                        <?php endif ?>
                      </div>
                  </div>
                  <!-- <a href="<?=WEBROOT."?controller=user&action=liste_joueur?page=<?=$page-1;?>"?>" -->
