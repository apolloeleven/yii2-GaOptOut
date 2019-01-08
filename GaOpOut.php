<?php
/**
 * Created by PhpStorm.
 * User: levani
 * Date: 1/8/19
 * Time: 1:39 PM
 */

namespace apollo11\yii2GaOptOut;

use yii\base\Widget;


class GaOpOut extends Widget
{
    // view
    public $view;

    //gap Id
    public $gaAppId;

    //output call event
    public $optOutCallEvent = 'click';

    //element selector with link to jsoutput
    public $elementSelector = '[href="#jsgaoptout"]';

    /**
     * @var bool
     */
    public $debug = false;

    public $showAlterAfterDeactivate = true;

    public function init()
    {
        AssetBundle::register($this->getView());
        $this->getView()->registerJs("
            new ApGaOptOut({
                gaAppId: '{$this->gaAppId}',
                optOutCallEvent: '{$this->optOutCallEvent}',
                elementSelector: '{$this->elementSelector}',
                debug: " . ($this->debug ? 'true' : 'false') . ",
                showAlterAfterDeactivate: " . ($this->showAlterAfterDeactivate ? 'true' : 'false') . "
            });
        ");
    }
}