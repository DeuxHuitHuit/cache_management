<?php 
require('include.cron.php');

CacheManagement::deleteFileCache();
echo 'Deleted file cache' . PHP_EOL;

CacheManagement::deleteDBCache();
echo 'Deleted DB cache' . PHP_EOL;