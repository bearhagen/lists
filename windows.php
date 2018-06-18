<?php
  $theme = 'Windows';
  $theme_c = '#5CACC4';
  require_once('_templates/head.php');
?>
<body>
  <div class="header">
    <h1><?= $theme; ?></h1>
    <p>Commands & settings</p>
    <h2>Commands</h2>
  </div>
  <dl>
    <dt>
      <input value='New-SelfSignedCertificate -DnsName "example.com", "www.example.com"' type="text" readonly>
    </dt>
    <dd>Create a self-signed certificate</dd>
    <dd><span class="note">NOTE:</span> Requires admin</dd>
  </dl>
<?php require_once('_templates/footer.php'); ?>
