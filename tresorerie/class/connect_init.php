<?php
class connect_init
{
	function __construct($dolibarr_main_db_host, $dolibarr_main_db_name, $dolibarr_main_db_user ,$dolibarr_main_db_pass)
	{
		if (!empty($dolibarr_main_db_name) && !empty($dolibarr_main_db_host) && !empty($dolibarr_main_db_user)) {
			new modTresorerie($db ,$dolibarr_main_db_host, $dolibarr_main_db_name, $dolibarr_main_db_user ,$dolibarr_main_db_pass);
		}
	}
}
?>