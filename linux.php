<?php
  $theme = 'Linux';
  $theme_c = '#8CD19D';
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
      <input value="sudo usermod -a -G www-data username" type="text" readonly>
    </dt>
    <dd>Add user to www-data</dd>

    <dt>
      <input value="sudo chown www-data:www-data . -R" type="text" readonly>
    </dt>
    <dd>set www-data to owner of folder</dd>

    <dt>
      <input value="sudo find . -type d -exec chmod 775 {} +" type="text" readonly>
    </dt>
    <dd>Change folder permissions</dd>

    <dt>
      <input value="sudo find . -type f -exec chmod 664 {} +" type="text" readonly>
    </dt>
    <dd>Change file permissions</dd>

    <dt>
      <input value="sudo ln -s /etc/nginx/sites-available/example.com /etc/nginx/sites-enabled/example.com" type="text" readonly>
      <input value="sudo ln -s /etc/apache2/sites-available/example.com.conf /etc/apache2/sites-enabled/example.com.conf" type="text" readonly>
    </dt>
    <dd>Create symbolic link between sites-available and sites-enabled</dd>

    <dt>
      <input value="sudo -H /opt/letsencrypt/letsencrypt-auto certonly -a webroot --agree-tos --renew-by-default --webroot-path=/var/www/example/example.com/www -d example.com -d www.example.com" type="text" readonly>
    </dt>
    <dd>Setup new SSL/TLS Certificate with Let's Encrypt</dd>
    <dd><span class="warning">WARN:</span> Might cause issues on servers with 512MB of RAM or less</dd>

    <dt>
      <input value="sudo -H le-renew-webroot example.com" type="text" readonly>
    </dt>
    <dd>Renew domain for example.com</dd>
    <dd>If you don't specify domain, default domain will be run.</dd>
    <dd>Check /usr/local/etc/le-renew-webroot.ini for default settings</dd>
    <dd>Go to /usr/local/etc/ to add more domains. Add file le-cli-example.com.ini</dd>
  </dl>
<?php require_once('_templates/footer.php'); ?>