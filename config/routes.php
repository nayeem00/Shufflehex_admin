<?php
/**
 * Created by PhpStorm.
 * User: Sakil
 * Date: 11/24/2018
 * Time: 2:44 PM
 */

return [
    'login' => 'site/login',
//                '<alias:\w+>' => 'site/<alias>',
    '<controller:[\w\-]+>/<id:\d+>' => '<controller>/view',
    '<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>' => '<controller>/<action>',
    '<controller:[\w\-]+>/<action:[\w\-]+>' => '<controller>/<action>',
    '<module:[\w\-]+>/<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>' => '<module>/<controller>/<action>',
];

?>