<?php

    function merge_images($images, $proportions) {

        if (!empty($proportions)) {

            $proportions = explode('x', $proportions);

        }
        else {

            $proportions[0] = '203';
            $proportions[1] = '410';

        }

        $x = $proportions[0];
        $y = $proportions[1];

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

        //header('Content-Type: image/png');
        
        //print $watermarkedImg;

        insert_base64_encoded_image($watermarkedImg, true);

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

    function insert_base64_encoded_image($img, $print = false) {
        
        $imageData = base64_encode($img);
        //$imageHTML = "<img src='data:;base64,{$imageData}' />";
        $imageHTML = "data:image/png;base64,{$imageData}";
    
        if ($print == true) {
            
            print $imageHTML;

        }
        else {
            
            return $imageHTML;

        }

    }

    if (isset($_GET['door_cfg']) AND !empty($_GET['door_cfg'])) {

        $fullpath = '/var/www/u2316901/data/www/portamia.ru/wp-content/themes/mercato/doors_parts/';

        $base_path = '/var/www/u2316901/data/www/portamia.ru/wp-content/themes/mercato/doors_parts/';

        if (!isset($_GET['proportions']) OR empty($_GET['proportions'])) {

            $proportions = '203x410';

        }
        else {

            $proportions = $_GET['proportions'];

        }

        if (isset($_GET)) {

            $door_cfg = json_decode($_GET['door_cfg'], true);

        }
        else {

            $door_cfg = array(
                'model' => array(
                    'value' => '1',
                    'order' => 0
                ),
                'leaf' => array(
                    'value' => 'single',
                    'order' => 1
                ),
                'leafdooritems_single' => array(
                    'value' => 'slditem1',
                    'order' => 1
                ),
                'outdoorstyles' => array(
                    'value' => 'classic',
                    'order' => 1
                ),
                'metalcolin' => array(
                    'value' => 'btncol1',
                    'order' => 0
                ),
                'metalcolout' => array(
                    'value' => 'btncolout1',
                    'order' => 1
                ),
                'locknumber' => array(
                    'value' => 'lockbtn1',
                    'order' => 1
                ),
                'lockitems' => array(
                    'value' => 'cfg-lock-item1',
                    'order' => 1
                ),
                'furniturecol' => array(
                    'value' => 'furn-col-1',
                    'order' => 1
                ),
                'furnituretype' => array(
                    'value' => 'furn-item-1',
                    'order' => 1
                ),
                'hinges' => array(
                    'value' => 'furn-hinges-item1',
                    'order' => 1
                ),
                'furnituredoorsteptype' => array(
                    'value' => 'doorstep-item1',
                    'order' => 1
                ),
                'furnitem_size' => array(
                    'value' => 'size-item3-step_6',
                    'order' => 1
                ),
                'furnitem_side' => array(
                    'value' => 'side-item1-step_6',
                    'order' => 1
                ),
                'furnitem_met' => array(
                    'value' => 'met-item1-step_6',
                    'order' => 1
                )
            );

        }

        $dependencies = array(
            '0' => 'base',
            '1' => 'handler',
            '2' => 'lock',
            '3' => 'onlay',
            '4' => 'doorstep',
            '5' => 'ventilation',
            '6' => 'glass_1_1',
            '7' => 'grid_1_2',
            '8' => 'outerdoor_lining',
            '9' => 'glass_2_1',
            '10' => 'grid_2_2'
        );

        $lines = array(
            'base' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'btncol1',
                    'btncol2',
                    'btncol3',
                    'btncol4',
                    'btncol5',
                    'btncol6',
                    'btncol7',
                    'btncol8',
                    'btncol9',
                    'btncol10',
                    'btncol11',
                    'btncol12',
                    'btncol13',
                    'btncol14',
                    'btncol15',
                    'btncol16',
                    'btncol17',
                    'btncol18',
                    'btncol19',
                    'btncol20',
                    'btncol21',
                    'btncol22',
                    'btncol23',
                    'btncol24',
                    'btncol25'
                ),
                '2' => array(
                    'furn-hinges-item1',
                    'furn-hinges-item2'
                ),
                '3' => array(
                    'side-item1-step_6',
                    'side-item2-step_6'
                ),
            ),
            'base-pan' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'btndoorcoloutdoor1',
                    'btndoorcoloutdoor2',
                    'btndoorcoloutdoor3',
                    'btndoorcoloutdoor4',
                    'btndoorcoloutdoor5',
                    'btndoorcoloutdoor6',
                    'btndoorcoloutdoor7',
                    'btndoorcoloutdoor8',
                    'btndoorcoloutdoor9',
                    'btndoorcoloutdoor10',
                    'btndoorcoloutdoor11',
                    'btndoorcoloutdoor12',
                    'btndoorcoloutdoor13',
                    'btndoorcoloutdoor14',
                    'btndoorcoloutdoor15',
                    'btndoorcoloutdoor16',
                    'btndoorcoloutdoor17',
                    'btndoorcoloutdoor18',
                    'btndoorcoloutdoor19',
                    'btndoorcoloutdoor20',
                    'btndoorcoloutdoor21',
                    'btndoorcoloutdoor22'
                ),
            ),
            'outdoor_milling' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'btn-milled-classic-outdoor1',
                    'btn-milled-classic-outdoor2',
                    'btn-milled-classic-outdoor3',
                    'btn-milled-classic-outdoor4',
                    'btn-milled-classic-outdoor5',
                    'btn-milled-classic-outdoor6',
                    'btn-milled-classic-outdoor7',
                    'btn-milled-classic-outdoor8',
                    'btn-milled-classic-outdoor9',
                    'btn-milled-classic-outdoor10',
                    'btn-milled-classic-outdoor11',
                    'btn-milled-classic-outdoor12',
                    'btn-milled-classic-outdoor13',
                    'btn-milled-classic-outdoor14',
                    'btn-milled-classic-outdoor15',
                    'btn-milled-classic-outdoor16',
                    'btn-milled-classic-outdoor17',
                    'btn-milled-classic-outdoor18',
                    'btn-milled-classic-outdoor19',
                    'btn-milled-classic-outdoor20',
                    'btn-milled-classic-outdoor21',
                    'btn-milled-classic-outdoor22',
                    'btn-milled-classic-outdoor23',
                    'btn-milled-classic-outdoor24',
                    'btn-milled-classic-outdoor25',
                    'btn-milled-classic-outdoor26',
                    'btn-milled-classic-outdoor27',
                    'btn-milled-classic-outdoor28',
                    'btn-milled-classic-outdoor29',
                    'btn-milled-classic-outdoor30',
                    'btn-milled-classic-outdoor31',
                    'btn-milled-classic-outdoor32',
                    'btn-milled-classic-outdoor33',
                    'btn-milled-classic-outdoor34',
                    'btn-milled-classic-outdoor35',
                    'btn-milled-classic-outdoor36',
                    'btn-milled-classic-outdoor37',
                    'btn-milled-classic-outdoor38',
                    'btn-milled-classic-outdoor39',
    
                    'btn-milled-modern-outdoor1',
                    'btn-milled-modern-outdoor2',
                    'btn-milled-modern-outdoor3',
                    'btn-milled-modern-outdoor4',
                    'btn-milled-modern-outdoor5',
                    'btn-milled-modern-outdoor6',
                    'btn-milled-modern-outdoor7',
                    'btn-milled-modern-outdoor8',
                    'btn-milled-modern-outdoor9',
                    'btn-milled-modern-outdoor10',
                    'btn-milled-modern-outdoor11',
                    'btn-milled-modern-outdoor12',
                    'btn-milled-modern-outdoor13',
                    'btn-milled-modern-outdoor14',
                    'btn-milled-modern-outdoor15',
                    'btn-milled-modern-outdoor16',
                    'btn-milled-modern-outdoor17',
                    'btn-milled-modern-outdoor18',
                    'btn-milled-modern-outdoor19',
                    'btn-milled-modern-outdoor20',
                    'btn-milled-modern-outdoor21',
                    'btn-milled-modern-outdoor22',
                    'btn-milled-modern-outdoor23',
                    'btn-milled-modern-outdoor24',
                    'btn-milled-modern-outdoor25'
                ),
            ),
            'outdoor_glazed' => array(
                '0' => array(
                    '2'
                ),
                '1' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '2' => array(
                    'glass-type-item1-step__2',
                    'glass-type-item2-step__2',
                    'glass-type-item3-step__2',
                    'glass-type-item4-step__2',
                    'glass-type-item5-step__2',
                    'glass-type-item6-step__2',
                    'glass-type-item7-step__2',
                    'glass-type-item8-step__2',
                    'glass-type-item9-step__2',
                    'glass-type-item10-step__2',
                    'glass-type-item11-step__2'
    
                ),
                '3' => array(
                    'btncol1',
                    'btncol2',
                    'btncol3',
                    'btncol4',
                    'btncol5',
                    'btncol6',
                    'btncol7',
                    'btncol8',
                    'btncol9',
                    'btncol10',
                    'btncol11',
                    'btncol12',
                    'btncol13',
                    'btncol14',
                    'btncol15',
                    'btncol16',
                    'btncol17',
                    'btncol18',
                    'btncol19',
                    'btncol20',
                    'btncol21',
                    'btncol22',
                    'btncol23',
                    'btncol24',
                    'btncol25'
                ),
            ),
            'lock' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'cfg-lock-item1',
                    'cfg-lock-item2',
                    'cfg-lock-item3',
                    'cfg-lock-item4',
                    'cfg-lock-item5',
                    'cfg-lock-item6',
                    'cfg-lock-item7',
                    'cfg-lock-item8',
                    'cfg-lock-item9',
                    'cfg-lock-item10',
                    'cfg-lock-item11'
                ),
                '2' => array(
                    'furn-col-1',
                    'furn-col-2',
                    'furn-col-3',
                    'furn-col-4',
                    'furn-col-5'
                ),
                '3' => array(
                    'side-item1-step_6',
                    'side-item2-step_6'
                ),
            ),
            'doorstep' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'doorstep-item1',
                    'doorstep-item2',
                    'doorstep-item3',
                    'doorstep-item4'
                )
            ),
            'ventilation' => array(
                '0' => array(
                    'slditem1',
                    'slditem2'
                ),
                '1' => array(
                    'btncol1'
                ),
                '2' => array(
                    'vent-item1-step_7'
                )
            ),
            'glass_1_1' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'glass-frame-col-item1',
                    'glass-frame-col-item2',
                    'glass-frame-col-item3',
                    'glass-frame-col-item4',
                    'glass-frame-col-item5',
                    'glass-frame-col-item6',
                    'glass-frame-col-item7',
                    'glass-frame-col-item8',
                    'glass-frame-col-item9',
                    'glass-frame-col-item10',
                    'glass-frame-col-item11',
                    'glass-frame-col-item12'
                )
            ),
            'grid_1_2' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'extra-grid-step1-item1-step__1',
                    'extra-grid-step1-item2-step__1',
                    'extra-grid-step1-item3-step__1',
                    'extra-grid-step1-item4-step__1',
                    'extra-grid-step1-item5-step__1',
                    'extra-grid-step1-item6-step__1',
                    'extra-grid-step1-item7-step__1'
                ),
                '2' => array(
                    'btncol1',
                    'btncol2',
                    'btncol3',
                    'btncol4',
                    'btncol5',
                    'btncol6',
                    'btncol7',
                    'btncol8',
                    'btncol9',
                    'btncol10',
                    'btncol11',
                    'btncol12',
                    'btncol13',
                    'btncol14',
                    'btncol15',
                    'btncol16',
                    'btncol17',
                    'btncol18',
                    'btncol19',
                    'btncol20',
                    'btncol21',
                    'btncol22',
                    'btncol23',
                    'btncol24',
                    'btncol25'
                )
            ),
            'outerdoor_lining' => array(
                '0' => array(
                    'baguette',
                    'glazed',
                    'classic'
                ),
                '1' => array(
                    '1'
                ),
                '2' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '3' => array(
                    'baguette-item1-step__2',
                    'baguette-item2-step__2',
                    'baguette-item3-step__2',
                    'baguette-item4-step__2',
                    'baguette-item5-step__2',
                    'baguette-item6-step__2',
                    'baguette-item7-step__2',
                    'baguette-item8-step__2',
                    'baguette-item9-step__2',
                    'baguette-item10-step__2',
                    'glass-type-item1-step__2',
                    'glass-type-item2-step__2',
                    'glass-type-item3-step__2',
                    'glass-type-item4-step__2',
                    'glass-type-item5-step__2',
                    'glass-type-item6-step__2',
                    'glass-type-item7-step__2',
                    'glass-type-item8-step__2',
                    'glass-type-item9-step__2',
                    'glass-type-item10-step__2',
                    'glass-type-item11-step__2'
                )              
            ),
            'glass_2_1' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'glass-type-item1-step__2',
                    'glass-type-item2-step__2',
                    'glass-type-item3-step__2',
                    'glass-type-item4-step__2',
                    'glass-type-item5-step__2',
                    'glass-type-item6-step__2',
                    'glass-type-item7-step__2',
                    'glass-type-item8-step__2',
                    'glass-type-item9-step__2',
                    'glass-type-item10-step__2',
                    'glass-type-item11-step__2'
                ),
                '2' => array(
                    'glass-col-item1',
                    'glass-col-item2',
                    'glass-col-item3',
                    'glass-col-item4',
                    'glass-col-item5',
                    'glass-col-item6',
                    'glass-col-item7',
                    'glass-col-item8',
                    'glass-col-item9',
                    'glass-col-item10',
                    'glass-col-item11'
                )
            ),
            'grid_2_2' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'glass-type-item1-step__2',
                    'glass-type-item2-step__2',
                    'glass-type-item3-step__2',
                    'glass-type-item4-step__2',
                    'glass-type-item5-step__2',
                    'glass-type-item6-step__2',
                    'glass-type-item7-step__2',
                    'glass-type-item8-step__2',
                    'glass-type-item9-step__2',
                    'glass-type-item10-step__2',
                    'glass-type-item11-step__2'

                ),
                '2' => array(
                    'extra-grid-item1',
                    'extra-grid-item2',
                    'extra-grid-item3',
                    'extra-grid-item4',
                    'extra-grid-item5',
                    'extra-grid-item6',
                    'extra-grid-item7'
                ),
                '3' => array(
                    'btncol1',
                    'btncol2',
                    'btncol3',
                    'btncol4',
                    'btncol5',
                    'btncol6',
                    'btncol7',
                    'btncol8',
                    'btncol9',
                    'btncol10',
                    'btncol11',
                    'btncol12',
                    'btncol13',
                    'btncol14',
                    'btncol15',
                    'btncol16',
                    'btncol17',
                    'btncol18',
                    'btncol19',
                    'btncol20',
                    'btncol21',
                    'btncol22',
                    'btncol23',
                    'btncol24',
                    'btncol25'
                )
            ),
            'onlay' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'furn-list-item-1',
                    'furn-list-item-2',
                    'furn-list-item-3',
                    'furn-list-item-4'
                )
            ),
            'handler' => array(
                '0' => array(
                    'slditem1',
                    'slditem2',
                    'slditem3',
                    'slditem4',
                    'slditem5',
                    'slditem6',
                    'slditem7',
                    'slditem8',
                    'slditem9',
                    'dlditem1',
                    'dlditem2',
                    'dlditem3'
                ),
                '1' => array(
                    'furn-col-1',
                    'furn-col-2',
                    'furn-col-3',
                    'furn-col-4',
                    'furn-col-5'
                ),
                '2' => array(
                    'furn-item-1',
                    'furn-item-2',
                    'furn-item-3',
                    'furn-item-4',
                    'furn-item-5',
                    'furn-item-6',
                    'furn-item-7',
                    'furn-item-8',
                    'furn-item-9',
                    'furn-item-10'
                ),
                '3' => array(
                    'side-item1-step_6',
                    'side-item2-step_6'
                ),  
            ),
        );

        unset($door_cfg['model']);

        usort($door_cfg, function($a, $b){
            
            return ($a['order'] - $b['order']);
            
        });

        //print '<pre>';
        //print_r($door_cfg);
        //print '</pre>';

        //die();

        $path = __DIR__ . '/doors_parts/';
        $directory = new \RecursiveDirectoryIterator($path);
        $iterator = new \RecursiveIteratorIterator($directory);
        $files = array();
        $bad = 0;
        $ok = 0;

        $paths = array();
        $paths_with_dependencies = array();
        $i = 0;
        
        foreach ($iterator as $info) {

            //if (strripos($info->getPathname(), 'door'))

            //print $info->getPathname()."<br><br>";

            if (strripos($info->getPathname(), 'door.png')) {

                //$paths[$i]['path'] = str_replace('/var/www/u2316901/data/www/portamia.ru/wp-content/themes/mercato/doors_parts', '', $info->getPathname());
                $paths[$i]['path'] = $info->getPathname();

                $i++;

            }

        }

        foreach ($dependencies as $dependency_key => $dependency) {

            foreach ($paths as $path) {
            
                if (strripos($path['path'], '/'.$dependency.'/')) {

                    $paths_with_dependencies[$dependency][] = $path;

                }

            }

        }

        //print '<pre>';
        //print_r($paths_with_dependencies);
        //print '</pre>';

        //die();

        $new_paths = array();

        /* foreach ($paths_with_dependencies as $key_path_with_dependency => $path_with_dependency) {

            foreach ($path_with_dependency as $key_path_with_dependency_value => $path_with_dependency_value) {
                
                foreach ($door_cfg as $key_cfg => $cfg) {

                    //print '<pre>';
                    //print_r($paths);
                    //print '</pre>';

                    //die();
                    
                    if (strripos($path_with_dependency_value['path'], $cfg['value'])) {

                        //print $path . ' = ' . $cfg . '<br>';

                        $new_paths[$key_path_with_dependency_value]['path'] = $path_with_dependency_value['path'];
                        $new_paths[$key_path_with_dependency_value]['priority'] = @$new_paths[$key_path_with_dependency]['priority'] + 1;

                        //unset($door_cfg[$key_cfg]);

                        //print $path . ' = ' . $cfg . '<br>';

                    }

                }

            }

        } */

        /* foreach ($lines as $key_line => $line) {

            foreach ($door_cfg as $key_cfg => $cfg) {

                foreach ($paths_with_dependencies as $key_path_with_dependency => $path_with_dependency) {

                    foreach ($path_with_dependency as $key_path_with_dependency_value => $path_with_dependency_value) {

                        
                        
                        if (strripos($path_with_dependency_value['path'], '/'.$cfg['value'].'/') AND (in_array($cfg['value'], $line))) {

                            //print $path_with_dependency_value['path'] . ' = ' . $cfg['value'] . '<br>';

                            $new_paths[$key_path_with_dependency]['path'] = $path_with_dependency_value['path'];
                            $new_paths[$key_path_with_dependency]['cfg'][] = $cfg['value'];

                            //unset($path_with_dependency[$key_path_with_dependency_value]);

                            //print $path . ' = ' . $cfg . '<br>';

                            break;

                        }

                    }

                }

            }
            
        } */

        $path_parts = array();
            
        foreach ($lines as $key_dependency => $dependency) {

            foreach ($dependency as $values) {

                foreach ($values as $key_value => $value) {

                    foreach ($door_cfg as $key_cfg => $cfg) {

                        if ($cfg['value'] == $value) {

                            //print $cfg['value'] . '=' . $value . ' / ';                            

                            $path_parts[$key_dependency][] = $cfg['value'];

                        }

                    }

                }

            }

        }

        //print '<pre>';
        //print_r($path_parts);
        //print '</pre>';

        //die();

        if (in_array('slditem1', $path_parts['base'])) {

            $proportions = '338x683';

        }

        if (in_array('slditem2', $path_parts['base'])) {

            $proportions = '160x405';

        }

        if (in_array('slditem3', $path_parts['base'])) {

            $proportions = '163x405';

        }
        if (in_array('slditem4', $path_parts['base'])) {

            $proportions = '485x683';

        }
        if (in_array('slditem5', $path_parts['base'])) {

            $proportions = '485x683';

        }
        if (in_array('dlditem1', $path_parts['base'])) {

            $proportions = '374x410';

        }
        if (in_array('dlditem2', $path_parts['base'])) {

            $proportions = '374x501';

        }
        if (in_array('dlditem3', $path_parts['base'])) {

            $proportions = '299x410';

        }

        $paths = array();

        foreach ($path_parts as $key => $path) {

            if (file_exists($base_path . $key . '/' . implode('/', $path) . '/door.png')) {

                $paths[$key] = $base_path . $key . '/' . implode('/', $path) . '/door.png';                

            }

        }

        //print '<pre>';
        //print_r($paths);
        //print '</pre>';

        merge_images($paths, $proportions);

    }
