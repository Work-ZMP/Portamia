<?php

    //if (isset($_POST['door_cfg']) AND !empty($_POST['door_cfg'])) {

        //if (isset($_POST)) {

            //$door_cfg = json_decode($_POST['door_cfg'], true);

        //}
        //else {

            $door_cfg = array(
                'model' => 1,
                'leaf' => 'single',
                'leafdooritems_single' => 'slditem1',
                'outdoorstyles' => 'classic',
                'metalcolin' => 'btncol1',
                'metalcolout' => 'btncolout1',
                'locknumber' => 'lockbtn1',
                'lockitems' => 'cfg-lock-item1',
                'furniturecol' => 'furn-col-1',
                'furnituretype' => 'furn-item-1',
                'hinges' => 'furn-hinges-item1',
                'furnituredoorsteptype' => 'doorstep-item1',
                'furnitem_size' => 'size-item3-step_6',
                'furnitem_side' => 'side-item1-step_6',
                'furnitem_met' => 'met-item1-step_6'
            );

        //}

        unset($door_cfg['model']);

        //print '<pre>';
        //print_r($door_cfg);
        //print '</pre>';

        $path = __DIR__ . '/doors_parts/';
        $directory = new \RecursiveDirectoryIterator($path);
        $iterator = new \RecursiveIteratorIterator($directory);
        $files = array();
        $bad = 0;
        $ok = 0;

        $paths = array();
        
        foreach ($iterator as $info) {

            //if (strripos($info->getPathname(), 'door'))

            //print $info->getPathname()."<br><br>";

            if (strripos($info->getPathname(), 'door.png')) {

                $paths[] = $info->getPathname();

            }

        }

        //print '<pre>';
        //print_r($paths);
        //print '</pre>';
        
        $paths = array_unique($paths);

        $new_paths = array();

        foreach ($paths as $key_path => $path) {
            
            foreach ($door_cfg as $key_cfg => $cfg) {
                
                if (strripos($path, $cfg)) {

                    //print $path . ' = ' . $cfg . '<br>';

                    $new_paths[] = $path;

                    unset($door_cfg[$key_cfg]);

                    //print $path . ' = ' . $cfg . '<br>';

                }

            }

        }

        //$new_paths = array_unique($new_paths);

        $new_paths = array(
            '0' => '/var/www/vhosts/u0826554.plsk.regruhosting.ru/magical-borg.31-31-198-207.plesk.page/wp-content/themes/mercato/doors_parts/base/slditem1/btncol1/furn-hinges-item1/door.png',
            '1' => '/var/www/vhosts/u0826554.plsk.regruhosting.ru/magical-borg.31-31-198-207.plesk.page/wp-content/themes/mercato/doors_parts/handler/slditem1/furn-col-1/furn-item-3/side-item1-step_6/door.png',
            '2' => '/var/www/vhosts/u0826554.plsk.regruhosting.ru/magical-borg.31-31-198-207.plesk.page/wp-content/themes/mercato/doors_parts/handler/slditem1/furn-col-1/furn-item-1/side-item1-step_6/door.png',
            '3' => '/var/www/vhosts/u0826554.plsk.regruhosting.ru/magical-borg.31-31-198-207.plesk.page/wp-content/themes/mercato/doors_parts/lock/slditem1/cfg-lock-item1/furn-col-1/side-item1-step_6/door.png',

        );

        //print '<pre>';
        //print_r($new_paths);
        //print '</pre>';

        merge_images($new_paths);

        /* function recdir($door_cfg, $dir, $tab = '') {
            
            $d = opendir($dir);
            $space = str_repeat('&nbsp;', 4);
            //$path_array = array();

            while ($name = readdir($d)) {
                
                if ($name == '.' || $name == '..') continue;
                
                $temp = $dir . DIRECTORY_SEPARATOR . $name;

                if (is_dir($temp)) {
                    
                    //print $tab .'[<b>'. $name .'</b>]<br />';

                    if (in_array($name, $door_cfg)) {

                        //print '!!!catch!!!-'. $name .'<br><br>'.$temp;

                        if (file_exists($temp.'/door.png')) {

                            print $tab .'[<b>'. $name .'</b>] - ';
                            print '!!!FILE EXIST!!!<br><br>';

                            $path_array[] = $temp . '/door.png';

                            //merge_images(__DIR__ . '/doors_parts/' . 'furn-hinges-item1.png', __DIR__ . '/doors_parts/' . 'furn-list-item-2.png', __DIR__ . '/doors_parts/' . 'furn-item-1.png');

                        }

                    }
                    
                    recdir($door_cfg, $temp, $tab . $space);

                }
                else {
                    
                    //print $tab . $name .'<br />';

                }
            }

            closedir($d);

            return $path_array;

        } */

        function merge_images($images) {

            // We want our final image to be 76x76 size
            $x = 203;
            $y = 410;

            $final_img = imagecreatetruecolor($x, $y);

            foreach ($images as $key => $image) {
                
                $new_image[$key] = imagecreatefrompng($image);

                imagealphablending($final_img, true);
                
                imagesavealpha($final_img, true);

                imagecopy($final_img, $new_image[$key], 0, 0, 0, 0, $x, $y);

            }

            ob_start();
            
            imagepng($final_img);
            
            $watermarkedImg = ob_get_contents(); // Capture the output
           
            ob_end_clean(); // Clear the output buffer

            header('Content-Type: image/png');
            
            print $watermarkedImg;

            /* // dimensions of the final image
            $final_img = imagecreatetruecolor($x, $y);

            // Create our image resources from the files
            $image_1 = imagecreatefrompng($img1);
            $image_2 = imagecreatefrompng($img2);
            $image_3 = imagecreatefrompng($img3);

            // Enable blend mode and save full alpha channel
            imagealphablending($final_img, true);
            imagesavealpha($final_img, true);

            // Copy our image onto our $final_img
            imagecopy($final_img, $image_1, 0, 0, 0, 0, $x, $y);
            imagecopy($final_img, $image_2, 0, 0, 0, 0, $x, $y);
            imagecopy($final_img, $image_3, 0, 0, 0, 0, $x, $y);

            ob_start();
            imagepng($final_img);
            $watermarkedImg = ob_get_contents(); // Capture the output
            ob_end_clean(); // Clear the output buffer

            header('Content-Type: image/png');
            echo $watermarkedImg; */

        }

        //print '<pre>';
        //print_r($door_cfg);
        //print '</pre>';

        $picture_path = '';

        foreach ($door_cfg as $key => $value) {
            
            $picture_path .= $key . '=' . $value . '&';

        }

        //print $picture_path;

    //}

    // /var/www/vhosts/u0826554.plsk.regruhosting.ru/magical-borg.31-31-198-207.plesk.page/wp-content/themes/mercato

    //merge_images(__DIR__ . '/doors_parts/' . 'furn-hinges-item1.png', __DIR__ . '/doors_parts/' . 'furn-list-item-2.png', __DIR__ . '/doors_parts/' . 'furn-item-1.png');

?>

