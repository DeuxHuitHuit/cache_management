<?php 
require('include.cron.php');

CacheManagement::purgeFileCache();
echo 'Purged file cache' . PHP_EOL;

CacheManagement::purgeDBCache();
echo 'Purged DB cache' . PHP_EOL;