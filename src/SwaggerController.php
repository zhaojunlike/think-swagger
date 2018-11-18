<?php
/**
 * @link https://www.xinrennet.com/
 *
 * @copyright Copyright (c) 2018 XINRENNET
 */

namespace westhack\swagger;

use think\Controller;
use think\facade\Config;

/**
 * Class SwaggerController
 * @package westhack\swagger
 * @author westhack 452855489@qq.com
 */
class SwaggerController extends Controller
{
    protected $config;

    public function initialize()
    {

        $this->config = require 'config/swagger.php';
        $config = Config::get('swagger.'); //如果存在PHP配置则使用PHP配置 否则使用默认配置
        if ($config && isset($config)) {
            $this->config = array_merge($this->config, $config);
        }
    }
}

