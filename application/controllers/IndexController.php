<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
	$callback ="";

	$params = $this->_request->getParams(); 
    	
		
		if(isset($params['callback']))
		{
			$callback=$params['callback'];
		}
	$callback = $params["callback"]; 
	$this->helper->jsonp(array("test"=>'test'),$callback);
    }


}

