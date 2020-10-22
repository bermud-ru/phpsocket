<?php
/**
 * config.php
 *
 * @category SPA
 * @author Андрей Новиков <andrey (at) novikov (dot) be>
 * @data 07/12/2015
 *
 */
namespace Application;

return array(
    'app' => 'http://localhost',
    'basedir' => __DIR__,
    'view' => __DIR__.'/Application/view/',
    '404' => '404.phtml',
    'route' => function($app, $path)
    {
        $result = null;

        return $result;
    },
    'mail'=>['from'=>'andrey@novikov.be']
);
?>