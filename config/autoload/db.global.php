<?php
$dbParams = array(
    'database'  => '',
    'username'  => '',
    'password'  => '',
    'hostname'  => '',
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