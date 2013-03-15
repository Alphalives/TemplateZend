<?php
$dbParams = array(
    'database'  => 'templatezend_dev',
    'username'  => 'templatezend_dev',
    'password'  => '2tSYWLpbKjSdym2p',
    'hostname'  => 'localhost',
);

return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) use ($dbParams) {
                $adapter = new BjyProfiler\Db\Adapter\ProfilingAdapter(array(
                    'driver'    => 'pdo',
                    'dsn'       => 'mysql:dbname='.$dbParams['database'].';host='.$dbParams['hostname'],
                    'database'  => $dbParams['database'],
                    'username'  => $dbParams['username'],
                    'password'  => $dbParams['password'],
                    'hostname'  => $dbParams['hostname'],
                ));

                $adapter->setProfiler(new BjyProfiler\Db\Profiler\Profiler);
                if (isset($dbParams['options']) && is_array($dbParams['options'])) {
                    $options = $dbParams['options'];
                } else {
                    $options = array();
                }
                $adapter->injectProfilingStatementPrototype($options);
                return $adapter;
            },
        ),
    ),
	
	'doctrine' => array(
    	'connection' => array(
        	'orm_default' => array(
            	'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                	'params' => array(
	                    'host' => $dbParams['hostname'],
	                    'port' => '3306',
	                    'user' => $dbParams['username'],
	                    'password' => $dbParams['password'],
	                    'dbname' => $dbParams['database'],
	                    'charset' => 'utf8',
	                    'driverOptions' => array(
	                    	1002 => 'SET NAMES utf8'
	                     )
                     )
                 )
            )
       )
);

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    
	'db' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=aurelbgc_dev;host=localhost',
		'username' => 'aurelbgc_dev',
        'password' => '6TNrzaGCsZKsyV9j',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
	
	
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                    => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
	
	
	
	
	'doctrine' => array(
    	'connection' => array(
        	'orm_default' => array(
            	'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                	'params' => array(
	                    'host' => 'localhost',
	                    'port' => '3306',
	                    'user' => 'aurelbgc_dev',
	                    'password' => '6TNrzaGCsZKsyV9j',
	                    'dbname' => 'aurelbgc_dev',
	                    'charset' => 'utf8',
	                    'driverOptions' => array(
	                    	1002 => 'SET NAMES utf8'
	                     )
                     )
                 )
            )
       )
);
