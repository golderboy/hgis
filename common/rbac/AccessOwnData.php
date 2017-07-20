<?php
namespace common\rbac;

use yii\rbac\Rule;

class AccessOwnData extends Rule
{
    public $name = 'AccessOwnData';

    public function execute($pcucode, $item, $params)
    {
        //return Admin Full control;
        if($pcucode === 00000){
            //return TRUE;
        }
        return $params['model']->$params['attr'] == $pcucode;
    }
}
 ?>
