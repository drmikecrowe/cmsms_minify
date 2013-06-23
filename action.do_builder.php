<?php

if (!isset($gCms))
	exit;

if (!$this->CheckAccess()) {
	return $this->DisplayErrorPage($id, $params, $returnid, $this->Lang('accessdenied'));
}

if (phpversion() < 5) {
	exit('Minify requires PHP5 or greater.');
}

// check for auto-encoding
$encodeOutput = (function_exists('gzdeflate') && !ini_get('zlib.output_compression'));

require dirname(__FILE__) . '/min/config.php';

require "$min_libPath/Minify/Loader.php";
Minify_Loader::register();

if (!$min_enableBuilder) {
	header('Content-Type: text/plain');
	die('This application is not enabled. See http://code.google.com/p/minify/wiki/BuilderApp');
}

if (isset($min_builderPassword) && is_string($min_builderPassword) && $min_builderPassword !== '') {
	DooDigestAuth::http_auth('Minify Builder', array('admin' => $min_builderPassword));
}

$cachePathCode = '';
if (!isset($min_cachePath) && !function_exists('sys_get_temp_dir')) {
	$detectedTmp = Minify_Cache_File::tmp();
	$cachePathCode = "\$min_cachePath = " . var_export($detectedTmp, 1) . ';';
}
echo $this->ProcessTemplate('builder.tpl');

//$content = ob_get_clean();

// setup Minify
//Minify::setCache( isset($min_cachePath) ? $min_cachePath : '' , $min_cacheFileLocking);
//Minify::$uploaderHoursBehind = $min_uploaderHoursBehind;
//Minify::serve('Page', array(
//	'content' => $content
//	, 'id' => __FILE__
//	// regenerate cache if any of these change
//	, 'lastModifiedTime' => max( filemtime(__FILE__) , filemtime(dirname(__FILE__) . '/../config.php') , filemtime(dirname(__FILE__) . '/../lib/Minify.php'))
//	, 'minifyAll' => true
//	, 'encodeOutput' => $encodeOutput
//));
