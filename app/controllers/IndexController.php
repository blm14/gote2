<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
       //$pathways = GpcrDownstreamPathway::find(array("parameters"=>"GPCR_symbol = 'ACKR3'","limit"=>"100"));	

        print("trying to pull");
	try{
		$pathways = GpcrDownstreamPathway::find(
   			  array(
			  	"cache" => array(
            				"key" => "my-cache"
					        )
			       )
		 );
                 print("success!");
        }catch(Phalcon\Exception $e){
                print("exception!");
		print $e->getMessage();
	}
	$this->view->pathways = $pathways;
    }

}

