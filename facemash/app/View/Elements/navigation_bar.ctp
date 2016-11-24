<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="facemash">Facemash</a></h1>
      </li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">

      <?php if($loggedIn){ ?>

        <li class='active'>
            <?php

              echo $this->Html->link('Deconnexion', array(
                'controller' => 'Users',
                'action'=>'logout'));
            ?>
       </li>


      
     <?php }else{?>
    

      <li class='active'>


            <?php

              echo $this->Html->link("Se Connecter", array(
                'controller' => 'Users',
                'action'=>'login'));
            ?>
      </li>

      <li >


            <?php

             


              echo $this->Html->link("S'inscrire", array(
                'controller' => 'Users',
                'action'=>'register'));
            ?>
      </li>

     <?php } ?>


      </ul>




      <!-- Left Nav Section -->
      <ul class="left">
        <li >
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

          if($isAdmin){
            echo $this->Html->link('Images', array(
              'controller' => 'Mashes',
              'action'=>'admin'));
           
          ?>
          
        </li>

        <li>
          <?php echo $this->Html->link('Utilisateurs', array(
              'controller' => 'Users',
              'action'=>'admin'));
        }
          ?>
        </li>
      </ul>
    </section>
  </nav>
</div>