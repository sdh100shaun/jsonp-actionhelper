<?php

class Application_Controller_Action_Helper_Jsonp extends Zend_Controller_Action_Helper_Abstract
{
	
	public function direct($response, $callback = "")
    {
        return $this->jsonp($response, $callback);
    }
	
    
	protected function jsonp($response,$callback = "") {
        if (Zend_Controller_Action_HelperBroker::hasHelper('viewRenderer')) {
            $viewRenderer = Zend_Controller_Action_HelperBroker::getExistingHelper('viewRenderer');
            $viewRenderer->setNoRender();
        }
        Zend_Json::$useBuiltinEncoderDecoder = true; 
        $json = Zend_Json::encode($response); 
		if($callback !="")
		{
        	$jsonp =$callback ."(" .$json.")";
       		$json=$jsonp;
		}
		
            $this->getResponse()->setHeader('Content-Type', 'application/json');
            $this->getResponse()->setBody($json);
        
       
    }
	
	
	
	
}
