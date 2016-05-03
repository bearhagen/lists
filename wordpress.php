<?php
  $theme = 'Wordpress';
  $theme_c = '#5CACC4';
  require_once('_templates/head.php');
?>
<body>
  <div class="header">
    <h1><?= $theme; ?></h1>
    <p>Commands & settings</p>
    <h2>Settings</h2>
  </div>
  <dl>
    <dt>
      <input value="define( 'WP_MEMORY_LIMIT', '64M' );" type="text" readonly>
    </dt>
    <dd>wp-config.php</dd>
    <dd>Sets the memory limit to 64MB</dd>
  </dl>
<?php require_once('_templates/footer.php'); ?>