<?php

include 'config.php'; //$db = new PDO('mysql:host=localhost;dbname=leakedsource','root','');
	
$dbc1 = $db->query("SELECT group_concat(table_name) AS tables FROM information_schema.tables WHERE table_schema='dataleaks'");



$user_search_entry= $_REQUEST["sss"];

$user_selected_field='username';

$dbc1_ftchd = $dbc1->fetch(PDO::FETCH_ASSOC);


foreach(explode(',',$dbc1_ftchd['tables']) as $next_tb_name){  //Her seferinde new table name döndüren fonksiyon <3
	//echo $next_tb_name.'<br>';
	$m_dbc = $db->query("SELECT * FROM $next_tb_name WHERE $user_selected_field='$user_search_entry'");
	
	$m_dbc_ftchd = $m_dbc->fetchALL(PDO::FETCH_ASSOC);


	if($m_dbc_ftchd!=NULL){  //Aranan değer varsa yazdıran fonk.
		$tblc = $db->query("SELECT group_concat(column_name) AS fields FROM information_schema.columns WHERE table_name='$next_tb_name'");
		$tblc_ftchd = $tblc->fetch(PDO::FETCH_ASSOC);
		
		$fields_str = $tblc_ftchd['fields'];
		$fields_str = explode(',', $fields_str);
		
		$filtered = array_filter($m_dbc_ftchd['0'], function($var){return !is_null($var);} );
		unset($filtered['id']);

		foreach ($filtered as $key => $value) {
			echo $key.': '.$value.'<br/>';
		}

		
		echo '<br/><hr>';
		
		
	}
		
}


?>