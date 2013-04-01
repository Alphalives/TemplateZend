<?php
return array(
    /**
     * Default BjyAuthorize configuration for ACL
     */ 
    'bjyauthorize' => array(
        'guards' => array(
            'BjyAuthorize\Guard\Controller' => array(
                array('controller' => 'AlmAuthorize\Controller\RoleAdmin', 'roles' => array('admin')),
            ),
        ),
    ),
);
