<?Class SiteDb{
	 
	private $conect=array(
	'rybalsky'=>
		array(
		'server'=>'smartora.mysql.ukraine.com.ua',
		'login'=>'smartora_ryba',
		'password'=>'wneyfjhn',
		'db'=>'smartora_ryba',
		'tables'=>'calls',
		'url'=>'rybalsky.com.ua'
		
		),
	'sanfrancisko'=>
		array(
		'server'=>'customsh.mysql.ukraine.com.ua',
		'login'=>'customsh_sanfran',
		'password'=>'ze2he8qx',
		'db'=>'customsh_sanfran',
		'tables'=>'calls',
		'url'=>'sanfrancisco.com.ua'
		),
	'new-york'=>
		array(
		'server'=>'localhost',
		'login'=>'smart',
		'password'=>'KIVhbSKA',
		'db'=>'york_calls',
		'tables'=>'york_call',
		'url'=>'new-york.com.ua'
		),
	'chicago'=>
		array(
		'server'=>'localhost',
		'login'=>'smart',
		'password'=>'KIVhbSKA',
		'db'=>'chicago_calls',
		'tables'=>'chi_call',
		'url'=>'chicago.kev.ua'
		),
	'einstein'=>
		array(
		'server'=>'localhost',
		'login'=>'smart',
		'password'=>'KIVhbSKA',
		'db'=>'ein_calls',
		'tables'=>'ein_call',
		'url'=>'einstein.house'
		),
	'bristol'=>
		array(
		'server'=>'forel.mysql.ukraine.com.ua',
		'login'=>'forel_bristoll',
		'password'=>'beajl4pw',
		'db'=>'forel_bristoll',
		'tables'=>'bristol_calls',
		'url'=>'bristol.house'
		),
	'kandinsky'=>
		array(
		'server'=>'smartora.mysql.ukraine.com.ua',
		'login'=>'smartora_kandi',
		'password'=>'j5z9kekt',
		'db'=>'smartora_kandi',
		'tables'=>'calls',
		'url'=>'kandinsky-residence.com.ua'
		),
	'resident'=>
		array(
		'server'=>'smartora.mysql.ukraine.com.ua',
		'login'=>'smartora_residen',
		'password'=>'m5sqdr98',
		'db'=>'smartora_residen',
		'tables'=>'calls',
		'url'=>'resident.house'
		)

		);
	
	function site($id=1){
		 if ($id==1)
		 {
			 $array=$this->conect;
		 } else {
			 $array[$id]=$this->conect[$id];
			 
		 }
		return $array;
	 }
	 
	 
 } 