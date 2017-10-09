<?php 

class file{
	//检查文件是否存在
	public static function exists($file){
		return file_exists($file);
	}

	//获取文件大小
	public static function size($file){
		return filesize($file);
	}

	//获取文件名称
	public static function name($file){
		return pathinfo($file,PATHINFO_FILENAME);
	}

	//获取文件扩展名
	public static function extension($file){
		return pathinfo($file,PATHINFO_EXTENSION);
	}

	//删除文件
	public static function delete($file){
		return unlink($file);
	}

	//文件更新
	public static function last_updated($file){
		return filemtime($file);
	}

	//获取文件内容
	public static function get($file,$default=null){
		//if (static::exists($file)) {
		//	return file_get_contents($file);
		//}else{
		//	return false;
		//}

		return static::exists($file)
		?file_get_contents($file)
		:$default;
	}

	//添加内容到文件
	public static function put($file,$data,$append = false){
		if ($append) {
			return file_put_contents($file, $data,FILE_APPEND|LOCK_EX);
		}
		//return file_put_contents($file, $data);
		
	}

	//删除文件内容
	public static function truncate($file){
		$fp = fopen($file,'w');
		fclose($fp);
	}

	//作业
	//move文件到另外一个文件夹
	//copy文件到另外一个文件夹
}

?>