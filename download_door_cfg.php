<?php

    if (isset($_GET['door_cfg']) AND !empty($_GET['door_cfg']) AND is_string($_GET['door_cfg'])) {

        $html_content = file_get_contents('https://portamia.ru/wp-content/themes/mercato/download_door_cfg_html.php?door_cfg='.$_GET['door_cfg']);

        $filename = md5(time() . mt_rand(0, 9999)).'.html';
        $filepath = $_SERVER['DOCUMENT_ROOT'] . '/door-cfg-generator-files/' . $filename;

        file_put_contents($filepath, $html_content);

        if (file_exists($filepath)) {
            
            if (ob_get_level()) {
                
                ob_end_clean();

            }
            
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filename));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            
            readfile($filepath);
           
            die();

        }

    }
    else {

        die('Не переданы необходимые параметры!');

    }

?>
