<?php

    if (isset($_GET['door_cfg']) AND !empty($_GET['door_cfg']) AND is_string($_GET['door_cfg'])) {

        $html_content = file_get_contents('https://portamia.ru/wp-content/themes/mercato/download_door_cfg_htmlpd.php?door_cfg='.$_GET['door_cfg']);

        $filename = md5(time() . mt_rand(0, 9999)).'';
        $filepath = $_SERVER['DOCUMENT_ROOT'] . '/door-cfg-generator-files/' . $filename;

        file_put_contents($filepath, $html_content);

        if (file_exists($filepath)) {
            
            if (ob_get_level()) {
                
                ob_end_clean();

            }
            
//require_once "/var/www/vhosts/u0826554.plsk.regruhosting.ru/portamia.ru/dompdf/autoload.inc.php";
//require_once "/www/portamia.ru/dompdf/autoload.inc.php";
require_once "../../../dompdf/autoload.inc.php";
$dompdf = new Dompdf\Dompdf();
$dompdf->set_option('isRemoteEnabled', TRUE);
$dompdf->set_option('defaultFont', 'DejaVu Sans');
$dompdf->setPaper('A4', 'portrait');
$htm = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/door-cfg-generator-files/' . $filename);
$html = $html_content;
$dompdf->loadHtml($html, 'UTF-8');
$dompdf->set_option('defaultMediaType', 'all');

$dompdf->render();

 

// Вывод файла в браузер:
//$dompdf->stream($filename); 
//file_put_contents('/var/www/vhosts/u0826554.plsk.regruhosting.ru/portamia.ru/pdfread/'.$filename.'.pdf', $dompdf->output());
file_put_contents('../../../pdfread/'.$filename.'.pdf', $dompdf->output());

// Открытие файла в новой вкладке браузера
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename.'.pdf"');
readfile($filename.'.pdf"');

//echo $filename;
            die();

        }

    }
    else {

        die('Не переданы необходимые параметры!');

    }

    

?>
