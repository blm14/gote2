<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $pathways = GpcrDownstreamPathway::find(array("parameters"=>"GPCR_symbol = 'ACKR3'","limit"=>"100"));	

	try{
		$pathways = GpcrDownstreamPathway::find(
   			  array(
			  	"cache" => array(
            				"key" => "my-cache"
					        )
			       )
		 );
        }catch(Phalcon\Exception $e){
		echo $e->getMessage();
	}
	$this->view->pathways = $pathways;
    }

}

