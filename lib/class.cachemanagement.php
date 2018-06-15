<?php
	/*
	Copyight: Deux Huit Huit 2013
	License: MIT, http://deuxhuithuit.mit-license.org
	*/

	class CacheManagement {

		public static function deleteFileCache() {
			return self::purgeFileCache(false);
		}
		public static function purgeFileCache($expiredOnly = true, $filter = null, $subdirectory = '') {
			$count = 0;
			$files = General::listStructure(CACHE . $subdirectory, $filter, false);

			if (!empty($files)) {
				foreach ($files['filelist'] as $file) {
					if (!$expiredOnly || filemtime($file) < time() - (60 * 60)) {
						if (General::deleteFile($file, true)) {
							$count++;
						}
					}
				}
			}
			return $count;
		}

		/** Database */
		public static function deleteDBCache() {
			$count = self::getCacheCount();

			Symphony::Database()
				->delete('tbl_cache')
				->all()
				->finalize()
				->execute()
				->success();
			return $count;
		}

		public static function purgeDBCache() {
			$count = self::getCacheCount();
			$cache = new Cacheable(Symphony::Database());
			$cache->delete();
			return $count - self::getCacheCount();
		}

		private static function getCacheCount() {
			return Symphony::Database()
				->select(['count(*)' => 'c'])
				->from('tbl_cache')
				->execute()
				->variable('c');
		}
	}
