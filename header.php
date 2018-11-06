<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bike2Go</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark justify-content-center">
      <div class="container">
        <?php if($custom_logo): ?>
          <a class="navbar-brand" href="<?= bloginfo('home');?>">
            <img src="<?= $logo_url  ?>" height="50" alt="<?= bloginfo('name');  ?>">
          </a>
        <?php else: ?>
          <a class="navbar-brand" href="<?= bloginfo('home');?>"><?= bloginfo('name');  ?></a>
        <?php endif; ?>
        <?php wp_nav_menu( array (
          'theme_locaiton' => 'header_nav',
          'menu_id' => 'header_nav' 
        ) ); ?>
      </div>
    </nav>
