<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset=<?php bloginfo('charset') ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">

  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="nav">
    <div class="nav__logo">
      <a href="<?= home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"  alt="Logo"></a>
    </div>
    <ul class="nav__hamburger">
      <li> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone.png" alt="icone"></li>
    </ul>

    <div class="nav__parts block">
      <?php wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => 'nav__part'
      ]) ?>
      <?php wp_nav_menu([
        'theme_location' => 'header2',
        'container' => false,
        'menu_class' => 'nav__part'
      ]) ?>
      <?php
      ?>
      <ul class="nav__part">
        <?php if (is_user_logged_in()) { ?>
          <li> <small><a href="#">CONTACT US</a></small></li>
          <!-- <li> <small> <a href=" <?php //echo esc_url(wp_logout_url(home_url())); ?>">LOGOUT</a> </small></li> -->
          <li> <small>
            <!-- dropdown -->
              <div class="dropdown">
                <button class="dropdown-toggle toggleBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo get_avatar(get_the_author_meta("ID"), 22); ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="<?php echo esc_url(get_dashboard_url()); ?>">Dashboard</a>
                  <a class="dropdown-item" href="<?php echo esc_url(wp_logout_url(home_url())); ?>">Logout</a>
                </div>
              </div>
            <!-- end dropdown -->
            </small>
          </li>
        <?php } else { 
          // data-toggle="modal" data-target="#loginmodal"
          // data-toggle="modal" data-target="#registerModal"
          ?>
          <li> <small><a href="<?php echo esc_url(get_home_url()."/?loginMode=login")?>" >LOGIN</a></small></li>
          <li> <small><a href="<?php echo esc_url(get_home_url()."/?loginMode=register")?>" >REGISTER</a></small></li>
          <li> <small><a href="#">CONTACT US</a></small></li>
        <?php } ?>
      </ul>
      <ul class="nav__logs block block2">
        <?php if (is_user_logged_in()) { ?>
          <li class="icone_nav"> <small> <a href=" <?php echo wp_logout_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone.png" alt="icone"></a> </small></li>
          <li class="icone_nav"> <small><a href="#">CONTACT US</a></small></li>
        <?php } else { ?>
          <li class="icone_nav"> <small><a href="<?php echo esc_url(get_home_url()."/?loginMode=login")?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone.png" alt="icone"></a></small></li>
          <li class="icone_nav"> <small><a href="<?php echo esc_url(get_home_url()."/?loginMode=register")?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone.png" alt="icone"></a></small></li>
          <li class="icone_nav"> <small><a href="#">CONTACT US</a></small></li>
        <?php } ?>
      </ul>
    </div>
    <!-- for testing purpose -->
    <!-- login part -->
    <?php if (!is_user_logged_in() && isset($_REQUEST["loginMode"]) && $_REQUEST["loginMode"] == "login"):?>
      <div class="login-form" id="loginmodal">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title" id="loginModalTitle">login</h5>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeLogin">
                <span aria-hidden="true">&times;</span>
              </button> -->
              <a href="<?php 
                echo explode("?", esc_url(home_url()))[0];
              ?>" class="close">
                <span aria-hidden="true">&times;</span>
              </a>
            </div>
            <div class="modal-body">
              <!-- 
                  for displaying errors message
                -->
                <?php 
                  if (isset($_REQUEST["sucess"]) && $_REQUEST["sucess"] == 1) {
                   echo "<div class='alert alert-success small-text'> password updated successfully
                            <a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        </div>";
                  }
                ?>
              <div class="d-none" id="loginerrorsContainer"></div>
              <!-- form -->
              <form action="" method="POST" id="loginuserform">
                <?php //wp_nonce_field("add_user", "wp_nonece_register_user"); 
                wp_nonce_field('ajax-login-nonce', 'loginSecurity'); ?>
                <div class="form-group">
                  <input type="text" class="form-control" id="login" placeholder="Username or E-mail" name="loginuser">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="loginpassword" placeholder="password" name="loginpassword">
                  <a class="lostpassword" href="<?php echo esc_url(wp_lostpassword_url()); ?>">Lost your password?</a>

                </div>
                <button type="submit" name="loginuser" class="btn blackBtn">Login</button>
              </form>
              <p class="text-center switch">don't have an account?<a href="<?php echo esc_url(get_home_url()."/?loginMode=register")?>" class="yellow-word" id="registerBtn"> REGISTER</a></p>
              <!-- end form -->
            </div>
          </div>
        </div>
      </div>
    <?php endif;?>


    <!-- end login button -->


    <!-- Button trigger modal -->

    <!-- Modal -->
    <?php if (!is_user_logged_in() && isset($_REQUEST["loginMode"]) && $_REQUEST["loginMode"] == "register"):?>
    <div class="register-form" id="registerModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title" id="registerModalTitle">INSCRIVEZ VOUS</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeRegister">
              <span aria-hidden="true">&times;</span>
            </button> -->
            <a href="<?php  echo explode("?", esc_url(home_url()))[0];?>" class="close">
              <span aria-hidden="true">&times;</span>
            </a>
          </div>
          <div class="modal-body">
            <!-- 
                for displaying errors message
               -->
            <div class="d-none" id="errorsContainer"></div>
            <!-- form -->
            <form action="" method="POST" id="adduser">
              <?php //wp_nonce_field("add_user", "wp_nonece_register_user"); 
              wp_nonce_field('ajax-register-nonce', 'security'); ?>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="useremail" placeholder="Email" name="useremail">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="userpassword" placeholder="Password" name="userpassword">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" name="confirmPassword">
              </div>
              <button type="submit" name="addUser" class="btn blackBtn">Créer Mon Compte</button>
            </form>
            <p class="text-center switch">Already have an account?<a href="<?php echo esc_url(get_home_url()."/?loginMode=login")?>" class="yellow-word" id="loginBtn"> LOGIN</a></p>
            <!-- end form -->
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>

    <!-- another try -->

    <!-- end -->

    

  </nav>