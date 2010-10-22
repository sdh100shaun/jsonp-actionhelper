<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
protected function _initHelpers()
	{
		 Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH . '/controllers/helpers', 'Application_Controller_Action_Helper');
        return $this;
	}

}

