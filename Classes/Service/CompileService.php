<?php
namespace Malhar\Sitepackage\Service;

use ScssPhp\ScssPhp\Compiler;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class CompileService
{
    protected string $scssFile = 'EXT:n2t_sitepackage/Resources/Public/Scss/theme.scss';
    protected string $cssFile  = 'EXT:n2t_sitepackage/Resources/Public/Css/theme.css';

     /**
     * Constructor
     */
    public function __construct()
    {
        if (!class_exists('ScssPhp\ScssPhp\Version')) {
            require_once ExtensionManagementUtility::extPath('n2t_sitepackage') . '/Contrib/scssphp/scss.inc.php';
        }
    }

    public function compileIfNeeded(): void
    {
        $scssPath = GeneralUtility::getFileAbsFileName($this->scssFile);
        $cssPath  = GeneralUtility::getFileAbsFileName($this->cssFile);

        if (!file_exists($cssPath) || filemtime($scssPath) > filemtime($cssPath)) {
            $compiler = new Compiler();
            $compiler->setImportPaths(dirname($scssPath));
            $css = $compiler->compileString(file_get_contents($scssPath))->getCss();
            file_put_contents($cssPath, $css);
        }
    }
}
