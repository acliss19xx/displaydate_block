<?php  defined('C5_EXECUTE') or die("Access Denied.");

/*
1:Y/n/j
2:Y年n月j日
3:Y/n/j h:g a
4:Y/n/j H:g
5:Y年n月j日 h時g分
*/

switch($dateformat) {
	case '1': $df = "Y/n/j";
		  break;
	case '2': $df = "Y年n月j日";
		  break;
	case '3': $df = "Y/n/j g:i a";
		  break;
	case '4': $df = "Y/n/j g:i";
		  break;
	case '5': $df = "Y年n月j日 g時i分";
		  break;
	default: $df = "Y/n/j";
}
?>

<p>

<?php

if($dateflag=='1') {
//公開日
	echo '公開日: ' . date($df , strtotime($publicdate));
} else {
//更新日
	echo '更新日: ' . date($df , strtotime($modifieddate));
}
?>

</p>
