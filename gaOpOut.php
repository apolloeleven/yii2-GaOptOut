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
    // view
    public $view;
    //gap Id
    public $gaAppId;
    //output call event
    public $optOutCallEvent = 'click';
    //element selector with link to jsoutput
    public $elementSelector = '[href="#jsgaoptout"]';
    //Debug default false
    public $debug = false;

    public $showAlterAfterDeactivate = true;

    public function registerGaOpOut($view, $gaAppId, $optOutCallEvent, $elementSelector, $debug, $showAlterAfterDeactivate)
    {
        Assets::register($view);
        $view->registerJs("
    <script>
        (function() {
            window.onload = function () {
                var gaOptOut = new ApGaOptOut({
                    gaAppId: $gaAppId,
                    optOutCallEvent: $optOutCallEvent,
                    elementSelector: $elementSelector,
                    debug: $debug,
                    showAlterAfterDeactivate: $showAlterAfterDeactivate
                });
            }
        })();
    </script>");
    }
}