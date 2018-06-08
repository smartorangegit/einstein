<? 
$ar=array_search('91.225.165.165', explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']));

if ($ar===FALSE) {header('Location: /');}

//if ($_SERVER['REMOTE_ADDR']!='91.225.165.165') {header('Location: /');}


 spl_autoload_register(function ($class) {
    include __DIR__.'/classes/' . $class . '.php';
});
 $ob = new  SiteDb();
 $rez=$ob->site();
 
 $site=$_POST['url'];

 function ConectDb($par=array()){

$db = new MySQLi($par['server'], $par['login'], $par['password'], $par['db']);

$result = $db->query("Set charset utf8");
$result = $db->query("Set character_set_client = utf8");
$result = $db->query("Set character_set_connection = utf8");
$result = $db->query("Set character_set_results = utf8");
$result = $db->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 

return  $db;
 }
 
 function clearpost($get){
foreach ($get as $key=>$text) {
$text = strip_tags($text);
$par[$key] = htmlspecialchars($text);
}
return $par;
}

if ($site) {

$ob = new  SiteDb();
 $conect =$ob->site($site);
 

require_once __DIR__.'/PHP_XLSXWriter/xlsxwriter.class.php';

$header = array(
    'Номер'=>'string',
	'Дата'=>'date',
    'Имя'=>'string',
    'Телефон'=>'string',
    'Сообшение'=>'string',
    'Тип формы'=>'string', 
);

$header1 = array(
    'Номер',
	'Дата',
    'Имя',
    'Телефон',
    'Сообшение',
    'Тип формы'
);



$styles1 = array( 'font'=>'Arial','font-size'=>10,'font-style'=>'bold', 'fill'=>'#eee', 'halign'=>'center');
$styles2 = array( 'font'=>'Arial','font-size'=>10);
$writer = new XLSXWriter();

$writer->setAuthor('SmartOrange');
$post=clearpost($_POST);

$from=$to=$sql='';
$title='calls';

	if($post['crm'] ) 
	{  
		$sql2="AND crm!=0";
		$header['Ответ CRM']='string';
		$header1[6]='Ответ CRM';
	}

	if($post['from']) { $from=$post['from']; $sql="WHERE  `dates`>='".$from."' ". $sql2.""; $title='calls от '.$from;}
	if($post['to']) { $to=$post['to']; $sql="WHERE  `dates`<='".$to."' ". $sql2.""; $title='calls до '.$to;}
	if($post['from'] AND $post['to']) {  $sql="WHERE  `dates`>='".$from."' AND `dates`<='".$to."' ". $sql2.""; $title='calls '.$from.' - '.$to;}

	if (empty( $sql) AND $post['crm']) { $sql="WHERE crm!=0";	}
//if($post['crm']) {  }
//echo '<pre>'; print_r($post); echo '</pre>'; 


foreach ($conect as $key=>$t){
	
	$db=ConectDb($t);
	 
	$result = $db->prepare("SELECT id,dates,ip,name,fhonenumber	,texts,typs,kv,crm FROM ".$t['tables']." ".$sql."");
    $result->execute();
	$result->bind_result($s['id'],$s['dates'],$s['ip'],$s['name'],$s['fhonenumber'],$s['texts'],$s['typs'],$s['kv'],$s['crm']);
	
$i=0;

$writer->writeSheetRow($key, $header1, $styles1 );

    while ($result->fetch()) {       $i++;
			switch ($s['typs']) {
    case 0:
        $s['typs']='Заказать звонок';
        break;
    case 1:
       $s['typs']='Форма обратной связи';
        break;
    case 2:
        $s['typs']='Забронировать квартиру';
        break;
	
	 case 21:
        $s['typs']='Узнать цену';
        break;
	}
		$n=array($i,$s['dates'],$s['name'],$s['fhonenumber'],$s['texts'],$s['typs']);
		
		if($post['crm'] ) 
	{  
		$n[6]=$s['crm'];
	}
		
		$array[$i]=$n;
$writer->writeSheetRow($key, $n, $styles2);
	array_push($array, $n);
	}
	
}

	$writer->writeToFile('xls/'.$title.'.xlsx');

	header('Location: /docs/xls/'.$title.'.xlsx?r='.time());
	
} else {
	
	//header('Location: /');
}


?>  <!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<style>
body {
	font: 13.3333px Arial;
}
 .form-control {
    margin: 5px;
    text-align: center;
	width:160px;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
 .form-control-input {
	  height: 20px;
 }
.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
    .btn-success {
    background-image: -webkit-linear-gradient(top,#5cb85c 0,#419641 100%);
    background-image: -o-linear-gradient(top,#5cb85c 0,#419641 100%);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#5cb85c),to(#419641));
    background-image: linear-gradient(to bottom,#5cb85c 0,#419641 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff419641', GradientType=0);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    background-repeat: repeat-x;
	color: #fff;
    background-color: #5cb85c;
    border-color: #3e8f3e;
}
.outer {
    height: 200px;
    text-align: center;

}

.inner {
    display: inline-block;
    height: 100px;
    margin: 50px 0;

}
 </style>
</head>
<body>
 
<div class="outer" >
 <span class="inner" >
<form action="/docs/" method="post" enctype="multipart/form-data">
От: <input name="from" type="date" class="form-control form-control-input" >
<span>До:</span><input name="to" type="date" class="form-control form-control-input" >
<select  class="form-control" name="url"><?
				echo'<option value="1">Все</option>';
				foreach ($rez as $key=>$t) { 
				
				$active = $key == $_POST['url'] ? 'selected' : '';
					
				echo '<option '.$active.'  value="'.$key.'">'.$t['url'].'</option>';
					
				}
				
				?>
</select>	
 <span>CRM:</span> <input name="crm" title='Отображать только те заявки, которые попали в CRM (для заявок оформленых после 14 декабря 2017)' type="checkbox">
  
  <input class="btn btn-success" type="submit" value="Получить">
</form>
	  </span>
 </div>
 
 </body>
 </html>
 