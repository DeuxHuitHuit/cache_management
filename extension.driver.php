<?php
	/*
	Copyight: Deux Huit Huit 2013
	License: MIT, http://deuxhuithuit.mit-license.org
	*/

	if(!defined("__IN_SYMPHONY__")) die("<h2>Error</h2><p>You cannot directly access this file</p>");

	/**
	 *
	 * @author Deux Huit Huit
	 * http://www.deuxhuithuit.com
	 *
	 */
	class extension_cache_management extends Extension {

		/**
		 * Name of the extension
		 * @var string
		 */
		const EXT_NAME = 'Cache Management';

		/*********** DELEGATES ***********************/
		/**
		 * Delegate fired to add a link to Cache Management
		 */
		public function fetchNavigation() {
			$group = Symphony::Author()->isDeveloper() ? 'developer' : 'manager';
			
			return array(
					array (
						'location' => __('System'),
						'name' => __(self::EXT_NAME),
						'link' => 'cache_management',
						'limit' => $group,
					) // nav group
			); // nav
		}


		/* ********* INSTALL/UPDATE/UNISTALL ******* */

		/**
		 * Creates the table needed for the settings of the field
		 */
		public function install() {
			return true;
		}

		/**
		 * Creates the table needed for the settings of the field
		 */
		public function update($previousVersion) {
			return true;
		}

		/**
		 *
		 * Drops the table needed for the settings of the field
		 */
		public function uninstall() {
			return true;
		}

	}
