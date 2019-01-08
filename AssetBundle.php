<?php
/**
 * Created by PhpStorm.
 * User: levani
 * Date: 1/8/19
 * Time: 1:13 PM
 */

namespace apollo11\yii2GaOptOut;

class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@npm/gaoptout';
    public $js = [
        'ApGaOptOut.js'
    ];
}