<?php

define('DOCROOT', str_replace('/extensions/cache_management/cron', '', rtrim(dirname(__FILE__), '\\/') ));


require_once(DOCROOT . '/symphony/lib/boot/bundle.php');
require_once(DOCROOT . '/symphony/lib/core/class.cacheable.php');
require_once(DOCROOT . '/symphony/lib/core/class.symphony.php');
require_once(DOCROOT . '/symphony/lib/core/class.administration.php');
require_once(DOCROOT . '/symphony/lib/toolkit/class.general.php');

// creates the DB
Administration::instance();

require_once('../lib/class.cachemanagement.php');