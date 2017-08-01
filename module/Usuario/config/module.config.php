<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Usuario;

use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'usuario' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/login',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'login',
                    ],
                ],
            ],
            ],
        ],
    
    'controllers' => [
        'factories' => [
            Controller\IndexController::class=> Controller\Factory\UsuarioControllerFactory::class,
            ],
    ],
            
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
           'usuario/index/index' => __DIR__ . '/../view/usuario/index.phtml',
         ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
         'translator' =>[
        'locale' => 'en_US',
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ],
        ],
    ],
    ],
     'service_manager' => [
        'factories' => [
           \Zend\Authentication\AuthenticationService::class 
                => Service\Factory\AuthenticationServiceFactory::class,
                 Service\AuthAdapter::class=> Service\Factory\AuthAdapterFactory::class,
              
            ],
         ],
];
