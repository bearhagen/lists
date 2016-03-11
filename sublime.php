<?php
  $theme = 'Sublime';
  $theme_c = '#b2ccd6';
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
      <textarea rows="18" readonly>
{
  "color_scheme": "Packages/Material Theme/schemes/Material-Theme.tmTheme",
  "detect_indentation": false,
  "font_size": 12,
  "ignored_packages":
  [
    "Vintage"
  ],
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
      <dd>User settings</dd>
    </dt>
    <dt>
      <textarea rows="9" readonly>
[
  { "keys": ["ctrl+tab"], "command": "next_view" },
  { "keys": ["ctrl+shift+tab"], "command": "prev_view" },

  { "keys": ["ctrl+pagedown"], "command": "next_view_in_stack" },
  { "keys": ["ctrl+pageup"], "command": "prev_view_in_stack" },
  { "keys": ["ctrl+alt+p"], "command": "prompt_select_workspace" }
]
      </textarea>
      <dd>User key bindings</dd>
      <dd>"Fixes" <kbd>ctrl</kbd> + <kbd>tab</kbd> and <kbd>ctrl</kbd> + <kbd>shift</kbd> + <kbd>tab</kbd></dd>
      <dd>Also brings back the <kbd>ctrl</kbd> + <kbd>alt</kbd> + <kbd>P</kbd> for project quick switch</dd>
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