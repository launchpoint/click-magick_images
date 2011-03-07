<?

global $magick_sizes;

$default_sizes = array(
  'micro'=>25,
  'icon'=>60,
  'tiny'=>100,
  'small'=>160,
  'smallish'=>250,
  'medium'=>450,
  'large'=>900
);

$default_settings = array(
  'rad'=>false, // 7
  'bg'=>false, // '#fff'
  'ds'=>false, // '#000',
  'zc'=>false, // true
);

if(!isset($magick_sizes)) $magick_sizes = array();
if(!isset($magick_settings)) $magick_settings = array();

$magick_sizes = array_merge($default_sizes, $magick_sizes);
$magick_settings = array_merge($default_settings, $magick_settings);