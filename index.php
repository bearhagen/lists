<?php
  $theme = 'Default';
  $theme_c = '#FCB859';
  require_once('_templates/head.php');
?>
<body>
  <div class="header">
    <h1>Bear Hagen</h1>
    <p>Lists with commands & settings</p>
  </div>
  <dl>
    <dt>
      <a href="linux"><input value="Linux" type="text" readonly></a>
    </dt>
    <dt>
      <a href="windows"><input value="Windows" type="text" readonly></a>
    </dt>
    <dt>
      <a href="sublime"><input value="Sublime" type="text" readonly></a>
    </dt>
    <dt>
      <a href="wordpress"><input value="Wordpress" type="text" readonly></a>
    </dt>
  </dl>
  <style>
    nav {
      display: none;
    }
  </style>
<?php require_once('_templates/footer.php'); ?>
