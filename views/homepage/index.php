  <!-- ici commence le contenu pour l'utilisateur-->
  <?php require_once('views/templates/header.php'); ?>


  <main>
      <section id="banniere">
          <img src="<?php echo BASE_URL; ?>assets/img/menton-colorer1.jpg" alt="image bannière" class="bannier" />
      </section>

      <section class="descriptionville">
          <article>
              <p>
                  Ville préservée, située aux confins de l’Italie, de la Principauté
                  de Monaco et du Comté de Nice, Menton bénéficie d’un microclimat
                  subtropical bienfaiteur qui lui fait presque ignorer l’hiver. Menton
                  est classée « station d’intérêt touristique ». Ce statut permet
                  entre autres aux commerces de détail d’ouvrir le dimanche. Découvrir
                  Menton ou y vivre, c’est se laisser séduire par la sérénité et le
                  charme d’un lieu à nul autre pareil. Sur cette terre privilégiée,
                  enclavée et pourtant ouverte sur le monde, rien n’est ordinaire.
                  Pour qui prend la peine de comprendre la cité, son histoire et la
                  générosité de ses habitants, que l’on devine à chaque recoin des
                  ruelles ocre chauffées par le soleil azuré, un humanisme rare se
                  révèle alors. Il nous montre le chemin de l’harmonie, de ce bonheur
                  simple mais onirique qu’Albert Camus a décrit comme « l’accord de la
                  terre et du pied ». Ville d’Art et d’Histoire, ville jardin ou
                  encore ville de culture, Menton est un Eden préservé qui n’en
                  regarde pas moins vers son avenir sur la Riviera, réussissant
                  l’alchimie parfaite entre toutes les beautés du monde. <br />
                  Bienvenue à Menton où, vraiment, rien n’est ordinaire.
              </p>
          </article>

          <aside>
              <img src="<?php echo BASE_URL; ?>assets/img/baie-de-menton.jpg" alt="photo menton" class="menton" />
          </aside>
      </section>

      <div id="slider">
          <button class="prev sliderbutton">&lt;</button>
          <button class="next sliderbutton">&gt;</button>
          <div class="slide">
              <img src="<?php echo BASE_URL; ?>assets/img/chambre.jpg" alt="chambre" />
          </div>
          <div class="slide">
              <img src="<?php echo BASE_URL; ?>assets/img/resto1.png" alt="resto" />
          </div>
          <div class="slide">
              <img src="<?php echo BASE_URL; ?>assets/img/piscine.jpg" alt="piscine" />
          </div>
          <div class="slide">
              <img src="<?php echo BASE_URL; ?>assets/img/hall1.jpg" alt="hall" />
          </div>
      </div>

      <section class="services">
          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/parking.png" alt="parking" title="Parking gratuit et sécurisé" class="logo" />
              </p>
              <p>
                  Parking gratuit<br />
                  et sécurisé
              </p>
          </div>

          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/handicape.png" alt="accessibilité" title="Accessibilité aux personnes handicapées" class="logo" />
              </p>
              <p>
                  Accessibilité
              </p>
          </div>

          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/lit.png" alt="chambre" title="Chambre" class="logo" />
              </p>
              <p>
                  Chambre
              </p>
          </div>

          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/restauration.png" alt="restauration" title="Restauration" class="logo" />
              </p>
              <p>
                  Restauration
              </p>
          </div>

          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/wifi.png" alt="wifi" title="Wifi gratuit" class="logo" />
              </p>
              <p>
                  Wifi gratuit
              </p>
          </div>

          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/animaux.png" alt="animaux" title="Animaux acceptés" class="logo" />
              </p>
              <p>
                  Animaux acceptés
              </p>
          </div>

          <div>
              <p>
                  <img src="<?php echo BASE_URL; ?>assets/img/piscine.png" alt="piscine" title="Piscine chauffée" class="logo" />
              </p>
              <p>
                  Piscine chauffée
              </p>
          </div>
      </section>
  </main>

  <?php require_once('views/templates/footer.php'); ?>
