<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="#">Facemash</a></h1>
      </li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
       
      </ul>

      <!-- Left Nav Section -->
      <ul class="left">
        <li class='active'>
          <?php
            echo $this->Html->link('Votez !', array(
              'controller' => 'Mashes',
              'action'=>'facemash'));
          ?>
        </li>
        <li>
          <?php
            echo $this->Html->link('Consulter le classement', array(
              'controller' => 'Mashes',
              'action'=>'facemash_scores'));
          ?>
        </li>
        <li>
          <?php
            echo $this->Html->link('Ajouter une photo', array(
              'controller' => 'Mashes',
              'action'=>'add'));
          ?>
        </li>
      </ul>
    </section>
  </nav>
</div>