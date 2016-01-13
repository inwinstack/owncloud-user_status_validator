<?php
namespace OCA\User_Status_Validator\AppInfo;

use \OCP\AppFramework\App;

use \OCA\User_Status_Validator\Hooks\LoginHooks;


class Application extends App {

    public function __construct(array $urlParams=array()){
        parent::__construct('user_status_validator', $urlParams);

        $container = $this->getContainer();

        /**
         * Controllers
         */
        $container->registerService('LoginHooks', function($c) {
            return new LoginHooks(
                $c->query('ServerContainer')->getUserSession()
            );
        });

        $container->registerService('L10N', function($c) {
            return $c->query('ServerContainer')->getL10N($c->query('AppName'));
        });
        
      
    }
}

