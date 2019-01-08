<?php
/**
 * Created by PhpStorm.
 * User: levani
 * Date: 1/8/19
 * Time: 1:39 PM
 */

namespace apollo11\yii2GaOptOut;


class gaOpOut
{
//gap Id
    public $gaAppId;
//output call event
    public $optOutCallEvent = 'click';
//element selector with link to jsoutput
    public $elementSelector = '[href="#jsgaoptout"]';

//Debug default false
    public $debug = false;

}