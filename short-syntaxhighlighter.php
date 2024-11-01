<?php 
/*
Plugin Name: Short Syntax Highlighter Shortcode
Plugin URI: http://www.digcms.com/
Description: This is plugin will add the syntax highlighting with minimum code This plugin will not include the .
Version: 1.3
Author: digcms.com
Author URI: http://www.digcms.com
*/


class WPAPISyntax {
    public function phpcode($attr, $content) {
		  $attr = shortcode_atts(array('wpapi'   => 'php',
                                 'id'    => '',
                                 'color' => 'blue'), $attr);
	$style ='<style>pre {font-size: 12px;
	padding: 20px;
	margin: 20px;
	background: #f0f0f0;
	border-left: 1px solid #ccc;
	line-height: 20px;
	background: url('.WP_PLUGIN_URL.'/short-syntax-highlighter/pre_code_bg.gif) repeat-y left top;
	width: 600px;
	overflow: auto;
	overflow-Y:hidden;}pre p{margin:0}</style>';
   
    //return '<h2>Attributes</h2><pre>' . print_r($attr, true) . '</pre><h2>content</h2>' . $content;
	return $style .'<pre id="'.$attr[id].'">' .$content . '</pre>';
}

public function csscode($attr, $content) {
		  $attr = shortcode_atts(array('wpapi'   => 'css',
                                 'id'    => '',
                                 'color' => 'blue'), $attr);
	$style ='<style>pre {font-size: 12px;
	padding: 20px;
	margin: 20px;
	background: #f0f0f0;
	border-left: 1px solid #ccc;
	line-height: 20px;
	background: url('.WP_PLUGIN_URL.'/short-syntax-highlighter/pre_code_bg.gif) repeat-y left top;
	width: 600px;
	overflow: auto;
	overflow-Y:hidden;}pre p{margin:0}</style>';

    //return '<h2>Attributes</h2><pre>' . print_r($attr, true) . '</pre><h2>content</h2>' . $content;
	return $style .'<pre id="'.$attr[id].'">' .$content . '</pre>';
}

private function commonpre(){
$style ='pre {font-size: 12px;
	padding: 0;
	margin: 20px;
	background: #f0f0f0;
	border-left: 1px solid #ccc;
	line-height: 20px;
	background: url('.WP_PLUGIN_URL.'/short-syntax-highlighter/pre_code_bg.gif) repeat-y left top;
	width: 600px;
	overflow: auto;
	overflow-Y:hidden;}';
echo $style;
}

private function yellowpre(){
$style ='pre {font-size: 12px;
	padding: 0;
	margin: 20px;
	background: #f0f0f0;
	border-left: 1px solid #ccc;
	line-height: 20px;
	background: url('.WP_PLUGIN_URL.'/short-syntax-highlighter/pre_code_bg.gif) repeat-y left top;
	width: 600px;
	overflow: auto;
	overflow-Y:hidden;}';
return $style;
}


private function blackpre(){
$style ='pre {font-size: 12px;
	padding: 0;
	margin: 20px;
	background: #f0f0f0;
	border-left: 1px solid #ccc;
	line-height: 20px;
	width: 600px;
	overflow: auto;
	overflow-Y:hidden;
	background: url('.WP_PLUGIN_URL.'/short-syntax-highlighter/pre_code_bg_blk.gif) repeat-y left top;
	border: none;
	color: #fff;}';
return $style;
}



}
add_shortcode( 'php', array('WPAPISyntax', 'phpcode') );
add_shortcode( 'css', array('WPAPISyntax', 'csscode') );