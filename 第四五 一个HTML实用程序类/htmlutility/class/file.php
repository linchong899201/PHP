<?php 

class file{
	public static function exists($file){
		return file_exists($file);
	}
	public static function size($file){
		return filesize($file)
	}
}

?>