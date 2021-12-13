<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'save':
            saveData();
            break;
    }
}
function saveData()
{
	$somecontent = isset($_POST['krya'])? $_POST['krya']: "";
	$filename = './resource.txt';
	$handle = fopen($filename, 'w+');
	fwrite($handle, $somecontent);
    fclose($handle);
    header('Location: Shukalova_KIUKI-19-4_LB_4.php');  	
    exit;	
}
?>