add_module


<?php

if(mw('url')->param('add_module')){
	$install = mw('url')->param('add_module');
} else if(isset($_REQUEST['add_module'])){
		$install = $_REQUEST['add_module'];
}	
	 $update_api = new \Mw\Update();
 
	$result = $update_api -> install_module($install);
 d($result);


	