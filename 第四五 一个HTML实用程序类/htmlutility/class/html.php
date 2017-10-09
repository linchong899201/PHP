<?php 

class HTML
{
	public static $base_url='localhost:8888/';

	public static function link($href,$text)
	{
		return "<a href='".self::$base_url.$href."'>$text</a>";
	}

	public static function ul($items)
	{
		return "<ul><li>" . implode('</li><li>', $items) . "</li></ul>";
	}

	public static function image($src,$alt='')
	{
		return "<img src='$src' alt='$alt' />";
	}
}

$html = new HTML();

?>
