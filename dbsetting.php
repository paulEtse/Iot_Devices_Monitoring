<?php
class DatabaseSettings
{
	var $settings;

	function getSettings()
	{
		$settings['dbhost'] = 'localhost';
		// Database name
		$settings['dbname'] = 'iot';
		// Username
		$settings['dbusername'] = 'paul';
		// Password
		$settings['dbpassword'] = 'mysqlserver';
		
		return $settings;
	}
}
?>
?>