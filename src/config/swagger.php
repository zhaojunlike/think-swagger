<?php

return [
    'title' => 'Swagger-ui', // 标题
    'assets_path' => '/static/swagger-ui/', // 静态资源目录
    'scan_dir' => [ // 扫描目录
        \think\facade\App::getAppPath()
    ],
    'scan_options' => [],
    'enable_cache' => false, // 是否开启缓存
    'cache_key' => 'api-swagger-cache', // 缓存key

    /* @see https://github.com/swagger-api/swagger-ui/blob/master/docs/usage/configuration.md */
    'configurations' => '', // json 格式
    'oauth_configuration' => '' // json 格式
];
