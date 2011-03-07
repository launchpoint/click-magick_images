<?


global $magick_sizes;

if(!isset($magick_sizes))
{
  $magick_sizes = array(
    'micro'=>25,
    'tiny'=>70,
    'thumb'=>85,
    'small'=>160,
    'smallish'=>250,
    'medium'=>450,
    'large'=>1024
  );
}

$base = dirname(__FILE__) . '/lib/plugins';
$plugins = glob($base . '/*.php');
foreach($plugins as $plugin){
	include_once $plugin ;
}