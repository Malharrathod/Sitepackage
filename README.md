# SCSS Auto Compilation in TYPO3 v13 Sitepackage

This guide explains how to add [scssphp](https://scssphp.github.io/scssphp/) to your TYPO3 v13 extension for automatic SCSS → CSS compilation.

---

## 1. Create the SCSS compiler service
Create:
Classes/Service/ScssCompiler.php

## 2. Create a middleware for automatic compilation
Create:
Classes/Middleware/ScssAutoCompileMiddleware.php

## 3. Register middleware
Configuration/RequestMiddlewares.php

## 4. Include the compiled CSS
Add to Configuration/TypoScript/setup.typoscript:
page.includeCSS.site = EXT:sitepackage/Resources/Public/Css/theme.css

## 5. Folder structure
sitepackage/<br>
│<br>
├── Classes/<br>
│   ├── Middleware/<br>
│   │   └── ScssAutoCompileMiddleware.php<br>
│   └── Service/<br>
│       └── ScssCompiler.php<br>
│<br>
├── Configuration/<br>
│   ├── RequestMiddlewares.php<br>
│   └── TypoScript/<br>
│       └── setup.typoscript<br>
│<br>
└── Resources/<br>
    └── Public/<br>
        └── Css/<br>
            └── theme.css (compiled)<br>
        └── Scss/<br>
            └── theme.scss<br>

## How it works
In Development: TYPO3 recompiles SCSS when theme.scss changes.

In Production: No recompilation — only the compiled CSS is used.

SCSS file location: Resources/Private/Scss/theme.scss

Compiled CSS location: Resources/Public/Css/theme.css
