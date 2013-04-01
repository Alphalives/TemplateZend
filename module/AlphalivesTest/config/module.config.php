<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'AlphalivesTest\Controller\Index' => 'AlphalivesTest\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'alphalives-test' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/alphalives-test/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'AlphalivesTest\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                   'secuRessource' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'secuRessource',
                            'defaults' => array(
								'__NAMESPACE__' => 'AlphalivesTest\Controller',
								'controller' => 'Index',
                                'action'     => 'secuRessource',
                            ),
                        ),
                    ),
					
				   'secu1' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'secu',
                            'defaults' => array(
								'__NAMESPACE__' => 'AlphalivesTest\Controller',
								'controller' => 'Index',
                                'action'     => 'secu',
                            ),
                        ),
                    ),
					
					'secu2' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'secu2',
                            'defaults' => array(
								'__NAMESPACE__' => 'AlphalivesTest\Controller',
								'controller' => 'Index',
                                'action'     => 'secu2',
                            ),
                        ),
                    ),
					
					'error' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => 'error',
                            'defaults' => array(
								'__NAMESPACE__' => 'AlphalivesTest\Controller',
								'controller' => 'Index',
                                'action'     => 'error',
                            ),
                        ),
                    ),
				   
				    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                   /* 'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),*/
                ),
            ),
        ),
    ),
    'view_manager' => array(
		'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        ),
		'template_path_stack' => array(
            'AlphalivesTest' => __DIR__ . '/../view',
        ),
    ),
);
