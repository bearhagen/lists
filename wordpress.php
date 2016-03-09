<?php
  $theme = 'Wordpress';
  require_once('_templates/head.php');
?>
<body>
  <div class="header">
    <h1>Bear Hagen</h1>
    <p><?= $theme; ?> Commands & settings</p>
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