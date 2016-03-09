<?php
  $theme = 'Sublime';
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
      <textarea rows="13" readonly>
      {
        "color_scheme": "Packages/Material Theme/schemes/Material-Theme.tmTheme",
        "detect_indentation": false,
        "rulers":
        [
          120
        ],
        "tab_size": 2,
        "theme": "Material-Theme.sublime-theme",
        "translate_tabs_to_spaces": true,
        "word_wrap": false
      }
      </textarea>
    </dt>
    <dt>
      <input value='"color_scheme": "Packages/Material Theme/schemes/Material-Theme.tmTheme"' type="text" readonly>
    </dt>
    <dd>Sets color scheme</dd>
    <dt>
      <input value='"theme": "Material-Theme.sublime-theme"' type="text" readonly>
    </dt>
    <dd>Sets the Sublime theme</dd>
    <dt>
      <input value='"detect_indentation": false' type="text" readonly>
    </dt>
    <dd>Disables indention detection</dd>
    <dt>
      <input value='"translate_tabs_to_spaces": true' type="text" readonly>
    </dt>
    <dd>Translates tabs into spaces</dd>
    <dt>
      <input value='"tab_size": 2' type="text" readonly>
    </dt>
    <dd>Sets the tab size</dd>
    <dt>
      <input value='"rulers": [ 120 ]' type="text" readonly>
    </dt>
    <dd>Makes a ruler</dd>
    <dt>
      <input value='"word_wrap": false' type="text" readonly>
    </dt>
    <dd>Disables word wrapping</dd>
  </dl>
<?php require_once('_templates/footer.php'); ?>