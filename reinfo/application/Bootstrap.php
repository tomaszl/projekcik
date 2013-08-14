<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
public function _initDbNames()
{
    try {
	$config = array(
	    'host'     => 'localhost',
	    'username' => 'root','password' => '',
	    'dbname'   => 'reinfo',
	);
	$db = Zend_Db::factory('PDO_MYSQL', $config);
	Zend_Db_Table::setDefaultAdapter($db);
	$db->query('SET NAMES UTF8');
    }catch (Exception $e) {
        echo "Blad polaczenia z baza danych: ".$e->getMessage();
        exit(0);
    }
}
    
    
}