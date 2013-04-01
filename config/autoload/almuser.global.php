<?php
return array(
    /**
     * Default BjyAuthorize configuration for ACL
     */ 
    'bjyauthorize' => array(
        'guards' => array(
            'BjyAuthorize\Guard\Controller' => array(
                array('controller' => 'AlmUser\Controller\UserAdmin', 'roles' => array('admin')),
            ),
        ),
    ),
);
