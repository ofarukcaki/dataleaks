<?php

include 'config.php'; //$db = new PDO('mysql:host=localhost;dbname=leakedsource','root','');
	
$dbc1 = $db->query("SELECT group_concat(table_name) AS tables FROM information_schema.tables WHERE table_schema='dataleaks'");



//$user_search_entry= $_REQUEST["sss"];
$user_search_entry= 'amerkel';
$user_selected_field='username';

$dbc1_ftchd = $dbc1->fetch(PDO::FETCH_ASSOC);
//var_dump($dbc1_ftchd); die();

//print_r($dbc1_ftchd);
//echo $dbc1_ftchd['tables'];


foreach(explode(',',$dbc1_ftchd['tables']) as $next_tb_name){  //Her seferinde new table name döndüren fonksiyon <3
	//echo $next_tb_name.'<br>';
	$m_dbc = $db->query("SELECT * FROM $next_tb_name WHERE $user_selected_field='$user_search_entry'");
	//var_dump($m_dbc);
	//var_dump($m_dbc); die();

	
	//$m_dbc_ftchd = $m_dbc->fetchObject();
	$m_dbc_ftchd = $m_dbc->fetchALL(PDO::FETCH_ASSOC);
	//$m_dbc_ftchd = $m_dbc_ftchd[0];
	
	//	var_dump($m_dbc_ftchd); die();

	//var_dump($m_dbc_ftchd); 

	if($m_dbc_ftchd!=NULL){  //Aranan değer varsa yazdıran fonk.
		echo 'results from: '.$next_tb_name.'<br/>';
		$tblc = $db->query("SELECT group_concat(column_name) AS fields FROM information_schema.columns WHERE table_name='$next_tb_name'");
		$tblc_ftchd = $tblc->fetch(PDO::FETCH_ASSOC);
		//echo $tblc_ftchd['fields'];
		$fields_str = $tblc_ftchd['fields'];
		$fields_str = explode(',', $fields_str);
		//var_dump($fields_str);

		//echo 'Username: '.$m_dbc_ftchd->username.'<br/>';
		//$filtered = array_filter($arr, function($var){return !is_null($var);} );
		$filtered = array_filter($m_dbc_ftchd['0'], function($var){return !is_null($var);} );
		unset($filtered['id']);

		foreach ($filtered as $key => $value) {
			echo $key.': '.$value.'<br/>';
		}

		
		//var_dump($filtered);




		//var_dump($m_dbc_ftchd['0']);
		echo '<br/><hr>';
		//var_dump($tblc);
		
	}
		
}
die();

die();

/*

$sayac1=0;
 *old algorithm-noobie .p
foreach($dbc1_ftchd as $key){  //->fetchALL(PDO::FETCH_OBJ) 
	$nm = $key->tables;
	for($sayac1 ; $sayac1<1 ; $sayac1++)
	{
		$table_names = $nm;
	}
	$table_names .=','.$nm;
}

foreach(explode(',', $table_names) as $row){
	echo $row;
*/
//dbm_u = main database conenction
// sırasıyla tüm tablolar geliyor / ilk tablonun içindeyiz.
/*$dbm_u = $db->query("SELECT username FROM $row WHERE username='$user_search_entry'");   // 
	var_dump($dbm_u);
	//die();


}

*/

?>