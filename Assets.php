<?php
/**
 * Created by PhpStorm.
 * User: levani
 * Date: 1/8/19
 * Time: 1:13 PM
 */

namespace apollo11\yii2GaOptOut;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath ='@npm-assets/gaopout';
    public $js=[
        'ApGaOptOut.js'
    ];
}