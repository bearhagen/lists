<?php
$theme = 'VS Code';
$theme_c = '#007acc';
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
            <textarea rows="16">
Prettier
Color Highlight
EditorConfig
GitLens
Github Light Theme

Vetur
Sanity.io

PHP Intelephense
Laravel Blade Snippets
Twig Language 2

Rainbow CSV
XML Tools
            </textarea>
        </dt>
        <dd>Extensions</dd>

        <dt>
            <textarea rows="32" readonly>
{
    "workbench.sideBar.location": "right",
    "workbench.colorTheme": "Github Light Theme",
    "window.zoomLevel": 2,
    "editor.rulers": [
        120
    ],
    "[javascript]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
    },
    "editor.fontFamily": "'SF Mono', Menlo, Monaco, 'Courier New', monospace",
    "editor.wordWrapColumn": 120,
    "editor.formatOnSave": true,
    "[json]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
    },
    "files.associations": {
        "*.blade.php": "php"
    },
    "gitlens.currentLine.enabled": false,
    "[vue]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
    },
    "[html]": {
        "editor.defaultFormatter": "esbenp.prettier-vscode"
    },
    "editor.accessibilitySupport": "off",
    "extensions.ignoreRecommendations": false,
    "emmet.triggerExpansionOnTab": true
}
            </textarea>
        </dt>
        <dd>User Settings</dd>

        <dt>
            <textarea rows="24" readonly>
[
    {
        "key": "ctrl+tab",
        "command": "workbench.action.nextEditor"
    },
    {
        "key": "ctrl+shift+tab",
        "command": "workbench.action.previousEditor"
    },
    {
        "key": "ctrl+shift+cmd+up",
        "command": "scrollLineUp"
    },
    {
        "key": "ctrl+shift+cmd+down",
        "command": "scrollLineDown"
    },
    {
        "key": "shift+alt+l",
        "command": "editor.action.insertCursorAtEndOfEachLineSelected"
    }
]
            </textarea>
        </dt>
        <dd><span class="note">Mac OS:</span> Keyboard shortcuts</dd>

    </dl>
    <?php require_once('_templates/footer.php'); ?>