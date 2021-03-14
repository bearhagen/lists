<?php
$theme = 'Web Dev';
$theme_c = '#000';
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
            <input value="openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -keyout privkey.pem -out fullchain.pem" type="text" readonly>
        </dt>
        <dd>Create self-signed certificate for local use</dd>

        <dt>
            <input value="ssh user@server -L LOCAL_PORT:localhost:REMOTE_PORT" type="text" readonly>
        </dt>
        <dd>Port forward a remote port to a local one</dd>
        <dd>Very handy for using local software with remote data</dd>
        <dd><span class="note">MySQL example:</span> <code>ssh user@server -L 3307:localhost:3306</code></dd>
        <dd><code>localhost:3307</code> now works locally as <code>localhost:3306</code> works on the server</dd>

        <dt>
            <input value="chmod -R +a '_www allow read,write,append,readattr,writeattr,readextattr,readsecurity,file_inherit' ~/Dev/Web" type="text" readonly>
        </dt>
        <dd><span class="note">Mac OS:</span> Give _www (apache group) permissions to ~/Dev/Web</dd>


        <dt>
            <textarea rows="16">
const form = document.querySelector('form');
const data = new FormData(form);

let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        let response = null;

        try {
            response = JSON.parse(xhr.responseText);
        } catch (e) {
            console.error(e);
        }

        handleSuccess(input, response);
    }
};
xhr.open("POST", form.action, true);
xhr.send(data);
            </textarea>
        </dt>
        <dd>Extensions</dd>
    </dl>
    <div class="header">
        <h2>Settings</h2>
    </div>
    <dl>
        <dt>
            <textarea rows="12" readonly>
&lt;VirtualHost *:80&gt;
    DocumentRoot "/Dir"
    ServerName domain.local
    ServerAlias *.domain.local

    &lt;Directory "/Dir"&gt;
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
            </textarea>
        </dt>
        <dd>Apache virtual host example</dd>
    </dl>
    <?php require_once('_templates/footer.php'); ?>