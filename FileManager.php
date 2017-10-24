<?php
namespace vovasit91\yii2\tinymce;

use yii\base\Object;
use yii\web\JsExpression;
use yii\web\View;

/**
 * Abstract FileManager to use with TinyMce.
 * For example see elFinder extension.
 */
abstract class FileManager extends Object
{
    /**
     * Initialize FileManager component, registers required JS
     */
    public function init()
    {

    }

    /**
     * @abstract
     * @return JsExpression JavaScript callback function, starts with "js:"
     */
    abstract public function getFileBrowserCallback();

    /**
     * @param View $view
     */
    abstract public function registerAsset($view);
}
