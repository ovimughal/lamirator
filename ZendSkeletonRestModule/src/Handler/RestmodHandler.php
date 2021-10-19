<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ZendSkeletonModule\Handler;

use Lamirest\BaseProvider\OhandlerBaseProvider;
use Lamirest\Sniffers\OexceptionSniffer;
use Lamirest\Sniffers\OvalidationSniffer;
use Oapirestmod\Model\OapirestmodModel;

/**
 * Description of OapirestmodHandler
 *
 * @author OviMughal
 */
class RestmodHandler extends OhandlerBaseProvider
{
    public function fooHandle($id)
    {
        if(OvalidationSniffer::isNumeric($id)){
            $restmodModel = new OapirestmodModel();
            $resultRestmodDetails = $restmodModel->getRestmodDetails($id);
            $this->setData(OexceptionSniffer::exceptionScanner($resultRestmodDetails));
        }
        
        return $this->getResult();
    }
    
    public function exceptionExampleHandle($param)
    {
        $exc = new \Exception('This is Exception Example. Enable or Disable Exception messages in Lamirest.global');
        $this->setData(OexceptionSniffer::exceptionScanner($exc));
        return $this->getResult();
    }
}
