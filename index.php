<?php
  $theme = 'Default';
  require_once('_templates/head.php');
?>
<body>
  <div class="header">
    <h1>Bear Hagen</h1>
    <p>Lists with commands & settings</p>
  </div>
  <dl>
    <dt>
      <input value="Linux" type="text" readonly>
    </dt>
    <dt>
      <input value="Sublime" type="text" readonly>
    </dt>
    <dt>
      <input value="Wordpress" type="text" readonly>
    </dt>
  </dl>
<?php require_once('_templates/footer.php'); ?>