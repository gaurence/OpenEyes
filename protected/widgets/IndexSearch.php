<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class IndexSearch extends BaseCWidget
{
    public $event_type;

    public function init()
    {
      parent::init();
    }

    public function run()
    {
      //or just render
      return $this->renderPartial('IndexSearch_'.$event_type);
    }
}
