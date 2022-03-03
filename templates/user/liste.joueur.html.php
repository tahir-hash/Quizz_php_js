
                  <div class="info">
                    <h1>Liste des Joueurs</h1>
                      <table>
                        <tr>
                          <th>NOM</th>
                          <th>PRENOM</th>
                          <th>SCORE</th>
                        </tr>
                        <tr>
                          <?php /*  */
                          foreach ($data as $value) :?>
                          <td><?=  $value['prenom'];?></td>
                          <td><?=  $value['nom'];?></td>
                          <td><?=  $value['score'];?></td>
                        </tr>
                        <?php endforeach ?>
                      </table>
                    <button disabled="true">SUIVANT</button>
                  </div>
