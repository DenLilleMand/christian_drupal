	/**
	 * Load local development override configuration, if available.
	 *
	 * Use settings.local.php to override variables on secondary (staging,
	 * development, etc) installations of this site. Typically used to disable
	 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
	 * other things that should not happen on development and testing sites.
	 *
	 * Keep this code block at the end of this file to take full effect.
	 */
	$databases['default']['default'] = array (
	  'database' => 'matti_christian',
	  'username' => 'matti',
	  'password' => 'b3MmjzkY0jv662pQ',
	  'prefix' => '',
	  'host' => 'localhost',
	  'port' => '3306',
	  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
	  'driver' => 'mysql',
	);
