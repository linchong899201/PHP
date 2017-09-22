<?php 

function view($path,$data=null){
	if($data){
		extract($data);
	}
	include "views/{$path}.tmpl.php";
}

//view('single',$data);

?>