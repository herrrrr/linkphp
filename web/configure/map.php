<?php

// +----------------------------------------------------------------------
// | LinkPHP [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               映射文件
// +----------------------------------------------------------------------

return [
    //命名空间注册
    'autoload_namespace'   =>  [
        'assets\controllers\main'         =>  array(APPLICATION_PATH . 'controllers/main'),
        'assets\models\main'              =>  array(APPLICATION_PATH . 'models/main'),
        'assets\base\models'              =>  array(APPLICATION_PATH . 'base/models'),
        'assets\base\controllers'         =>  array(APPLICATION_PATH . 'base/controllers'),
        'api\controllers\main'            =>  array(APPLICATION_PATH . 'controllers/main'),
        'api\models\main'              =>  array(APPLICATION_PATH . 'models/main'),
        'linkphp\boot'               =>  array(BOOT_PATH . 'boot'),
        'linkphp\boot\router'               =>  array(BOOT_PATH . 'boot/router'),
        'linkphp\boot\handle'               =>  array(BOOT_PATH . 'boot/handle'),
        'linkphp\boot\router\config'               =>  array(BOOT_PATH . 'boot/router/config'),
        'linkphp\boot\cli\command'               =>  array(BOOT_PATH . 'boot/cli/command'),
        //'extend\helper\sms'               =>  array(EXTEND_PATH . 'helper/sms'),
    ],
    'class_autoload_map' => [
        //'类名' => '类文件地址'
        'Configure'  => CORE_PATH . 'Configure' . EXT,
    ],
];