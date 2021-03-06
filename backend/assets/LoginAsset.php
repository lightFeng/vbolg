<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\3\11 0011
 * Time: 22:31
 */

namespace backend\assets;

use yii\web\AssetBundle;
use common\components\CommonTools;
/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public function init()
    {
        parent::init();
        foreach ($this->css as &$c){
            $c=$c.CommonTools::versionCSS();
        }
        foreach ($this->js as &$j){
            $j=$j.CommonTools::versionJs();
        }
    }

    public $css = [
        'css/site.css',
        'css/login.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}