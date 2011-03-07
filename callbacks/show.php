<?
$fmt = 'jpg';

global $magick_sizes;

extract($params);
$key = magick_key($params);
$fpath = MAGICK_IMAGES_CACHE_FPATH;
$fname = $fpath ."/$key.$fmt";

lock($key);
if (!file_exists($fname) || $run_mode == RUN_MODE_DEVELOPMENT)
{
  $src = BUILD_FPATH ."/$path";
  convert($src, $fname, $params);
}
unlock($key);

header("Cache-Control: max-age=360000, public");
header("Content-Type: image/$fmt");
header("Content-Length: " . filesize($fname));
header("X-Sendfile: $fname");
exit;
