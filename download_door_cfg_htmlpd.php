<?php
error_reporting(E_ERROR | E_PARSE);
    if (isset($_GET['door_cfg']) AND !empty($_GET['door_cfg'])) :

        $door_cfg = json_decode($_GET['door_cfg'], true);

        $total_cost = 0;
        $total_cost_old = 0;

        $door_left = '';
        $door_right = '';

        foreach ($door_cfg as $door) {
           
            $total_cost = $total_cost + $door['price'];

        }

        $total_cost_old = $total_cost + ($total_cost / 100 * 10);

        $indoor = file_get_contents('https://portamia.ru/wp-content/themes/mercato/get_indoor.php?door_cfg='.$_GET['door_cfg']);
        $outdoor = file_get_contents('https://portamia.ru/wp-content/themes/mercato/get_outdoor.php?door_cfg='.$_GET['door_cfg']);

?>

    <!DOCTYPE html>
    <html lang="ru">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
            <title>Ваша идеальная дверь - (дата создания двери: <?=date('d.m.Y H:i')?>)</title>
            <style>
                * {font-family: Raleway; }
                body {font-family: Raleway; }
                table {font-family: Raleway; }
                table td {font-family: Raleway; }
                table th {font-family: Raleway;
                    font-variant-numeric: lining-nums proportional-nums; }
                table tr th {font-family: Raleway;
                    font-variant-numeric: lining-nums proportional-nums; }
                table tr td {font-family: Raleway;
                    font-variant-numeric: lining-nums proportional-nums; }

                 @media print {

                    section {
                         margin: auto;
                        page-break-before: always;
                    }
                    * {font-family: Raleway; }

                    @page {
                        margin: 0mm;
                    }

                    *,
                    *:before,
                    *:after {
                        color: #000;
                        box-shadow: none;
                        text-shadow: none;
                    }

                    * {
                        -webkit-print-color-adjust: exact !important;
                        color-adjust: exact !important;
                    }

            
                }
.door th {
    font-family: Raleway;
    font-variant-numeric: lining-nums proportional-nums;
    vertical-align: top;
}

                section {
                    height: 297mm;
                    width: 180mm;
                    margin: 0px;
                    background: url("https://portamia.ru/app.png");
                    background-repeat: no-repeat;
                    background-size: cover;
                 }
                 #lolo {
                     background: none !important;
                 }
                table {
                    width: 100%;
                }
                table th {
                    font-size:13px
                }

                tbody {
                    width: 100%;
                }

                .header {
                    height: 100px;
                    width: 100%;
                  
                    background-color: #fff;
                    padding-bottom: 20px;
                    margin-bottom: 20px     
                }
                 .header td {  border-bottom: 1px solid #000;}
                 .header th {  border-bottom: 1px solid #000;}
                 
          
                 
                .pdf__logo {
                    max-height: 50px;
                    text-align: left;
                    
                }

                .header th:first-child {
                    text-align: left;
                }

                .pdf__number {
                    font-family: Raleway;
                    font-weight: 700;
                    font-size: 25px;
                    text-align: right;
                    color: #000;
                    font-variant-numeric: lining-nums proportional-nums;
                }

                .title {
                     width: 100%;
                    text-align: center;
                }

                .title th {
                    font-size: 70px;
                    color: #000;
                    font-weight: 700;
                }

                .descr {
                 }

                .descr th {
                    font-size: 25px;
                    color: rgba(0, 0, 0, 0.50);
                    font-weight: 500
                }

                .door {
                 }

                

                .door th img {
                    height: 550px;
                }

                .cheque-title {
                    font-size: 40px;
                    font-weight: 700;
                    color: #000 !important;
                    padding-left: 0px;
                    text-align: left;
                    padding-top: 10px
                }

                .page1 {
                    font-size: 40px;
                    font-weight: 700;
                    color: #00000080;
                    opacity: 0.3;
                    text-align: right;
                    padding-right: 50px;
                }

                .cheque-title__block {
                    height: 100px;
                }

                .table-transparent {
                    background: none;
                    text-align: left;
                    padding: 0 20px;
                }

                .cheque__table-cost
                {
                    font-family: Raleway;
                    font-variant-numeric: lining-nums proportional-nums;
                }
                .cheque__table-base {
                    text-align: right;
                    font-size: 14px;
                    font-weight: 500;
                }

                .cheque__table-title {
                    font-family: Raleway;
                     font-size: 16px;
                    font-weight: 700;
                    padding-top: 20px;
                    padding-bottom: 5px;
                    text-align: left
                }

                .cheque__table th {
                    vertical-align: baseline;
                }

                .cheque__table-name {
                    font-size: 14px;
                    font-weight: 500;
                 }

                .cheque__table-descr {
                    font-size: 12px;
                    color: #aaaaaa;
                    font-weight: 500;
                }

                .cheque__table-base {
                    color: #2ABF1D;
                }

                .cheque__total {
                    background-color: #f1f1f1;
                }

                .cheque__total-cost {
                    border-bottom: 1px solid #000;
                    height: 100px;
                    font-size: 20px;
                    color: #000;
                    text-align: left;
                    padding-left: 0px;
                }

                .cheque__total-current-cost {
                    border-bottom: 1px solid #000;
                    font-size: 24px;
                    line-height: 30px;
                    font-weight: bold
                    color: #252525;
                    height: 30px;
                    vertical-align: top;
                    text-align: right;
                    padding-right: 50px;
                }

                .cheque__total-old-cost {
                    font-size: 16px;
                    line-height: 20px;
                    font-weight: bold;
                    color: #808080;
                    text-decoration: line-through;
                    text-decoration-color: #BFBFBF;
                    text-decoration-thickness: 4px;
                    height: 40px;
                    vertical-align: bottom;
                    text-align: right;
                    padding-right: 50px;

                }

                .cheque__total-img {
                    width: 300px;
                }

                .cheque__total-img-inner {
                 }

                .cheque__total-title {
                    text-align: left;
                    font-size: 20px;
                    font-weight: 700;
                    color: #252525;
                    vertical-align: bottom;
                }

                .cheque__total-descr {
                    font-size: 16px;
                    text-align: left;
                    vertical-align: top;
                    font-weight: 500;
                    color: #808080;
                    vertical-align: top;
                    padding-top: 10px;
                }

                .cheque__total-name {
                    font-size: 20px;
                    text-align: left;
                    vertical-align: bottom;
                }

                .cheque__space {
                 }

                .cheque__total-img-inner img {
                    width: 60px;
                }
                .door {
  height: 550px;
}
.title th {
  font-size: 27px;
  color: #252525;
  font-weight: 700;
}
.cheque__table-name {
    font-family: Raleway;
    font-variant-numeric: lining-nums proportional-nums;
                    font-size:11px;text-align: left;font-weight: normal;vertical-align: top
}
.cheque__table-cost {
    font-family: Raleway;
    font-variant-numeric: lining-nums proportional-nums;
                    font-size:11px;text-align: left;font-weight: normal;vertical-align: top
}
.cheque__table-base {
    font-family: Raleway;
    font-variant-numeric: lining-nums proportional-nums;
                    font-size:11px;text-align: left;font-weight: normal;vertical-align: top
}
.cheque__table-descr {
    font-family: Raleway;
    font-variant-numeric: lining-nums proportional-nums;
                    font-size:11px;text-align: left;font-weight: normal;vertical-align: top
}
.cheque-title {  
    font-family: Raleway;        
    font-variant-numeric: lining-nums proportional-nums;font-size:18px;text-align: left;}
.page1 {          font-size:16px}

.pdf__number {
    font-variant-numeric: lining-nums proportional-nums;
    font-family: Raleway;
    font-size:18px;
}
 
 
.door th {
  vertical-align: middle;
}
section {
  height: 982px;
  box-sizing: border-box
}  
.cheque__space {
    height: auto;
}
.external-side {width: 100%}
.external-table {width: 100%}
            </style>
        </head>

        <body>
            <section class="external-side">
                <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                    <tr class="header" style="width:100%;">
                        <th style="text-align:left;width:50%;padding-bottom: 20px"><img  style="margin-top:10px" src="https://portamia.ru/lpt.png" class="pdf__logo"></th>
                        <th style="font-family: Raleway;text-align:right;width:50%;padding-bottom: 20px" class="pdf__number">+7(961)949-48-48</th>
                    </tr>
                    <tr class="title" style="">
                        <th style="font-size:35px;padding-top:40px;font-weight: 600; font-family: Raleway" colspan="2">Ваша идеальная дверь</th>
                    </tr>
                    <tr class="descr">
                        <th colspan="2" style="font-size:30px;padding-top: 0px;font-weight: 400">Внешняя сторона</th>
                    </tr>
                    <tr class="door door-external-side">
                        <th colspan="2"><img  style="margin-top:80px" src="<?=$outdoor?>"></th>
                    </tr>
                </table>
            </section>
            <section class="inner-side">
                <table border="0" cellpadding="0" cellspacing="0">
                      <tr class="header" style="width:100%;">
                        <th style="text-align:left;width:50%;padding-bottom: 20px"><img  style="margin-top:10px" src="https://portamia.ru/lpt.png" class="pdf__logo"></th>
                        <th style="text-align:right;width:50%;padding-bottom: 20px" class="pdf__number">+7(961)949-48-48</th>
                    </tr>
                    <tr class="title" style="">
                        <th style="font-size:35px;padding-top:40px;font-weight: 600; font-family: Raleway" colspan="2">Ваша идеальная дверь</th>
                    </tr>
                    <tr class="descr">
                        <th colspan="2" style="font-size:30px;padding-top: 0px;font-weight: 400">Внутренняя сторона</th>
                    </tr>
                    <tr class="door door-external-side">
                        <th colspan="2"><img  style="margin-top:80px" src="<?=$indoor?>"></th>
                    </tr>
                   
                </table>
            </section>
            <section class="cheque-1" style="font-family : Raleway">
                <table border="0" cellpadding="0" cellspacing="0" style="font-family : Raleway">
                      <tr class="header" style="width:100%;">
                        <th style="text-align:left;width:50%;padding-bottom: 20px"><img  style="margin-top:10px" src="https://portamia.ru/lpt.png" class="pdf__logo"></th>
                        <th style="text-align:right;width:50%;padding-bottom: 20px" class="pdf__number">+7(961)949-48-48</th>
                    </tr>
                    <tr class="cheque-title__block">
                        <th style="text-align:left;width:50%;padding-left: 0px;color:#000;padding-top: 10px" class="cheque-title">Чек двери</th>
                        <th style="text-align:right;width:50%;padding-right: 0px;color:rgba(0, 0, 0, 0.50);padding-top: 10px" class="page1">Страница 1</th>
                    </tr>
                    <tr class="cheque__table">
                        <th class="cheque__table-left">
                            <table class="table-transparent">
                                <tr>
                                    <th colspan="2" class="cheque__table-title">Основная конструкция двери</th>
                                </tr>
                                
                                <?php if ($door_cfg['model']['value'] == 1) : ?>
                                    
                                    <tr>
                                        <th class="cheque__table-name">База</th>
                                        <th class="cheque__table-cost" style="font-variant-numeric: lining-nums proportional-nums; "><?=$door_cfg['model']['price']?> ₽123456780</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Termo</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['model']['value'] == 2) : ?>
                                    
                                    <tr>
                                        <th class="cheque__table-name">База</th>
                                        <th class="cheque__table-cost" style="font-variant-numeric: lining-nums proportional-nums; font-family: Raleway"><?=$door_cfg['model']['price']?> ₽</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Termo Plus</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Конструкция</th>
                                </tr>

                                <?php if ($door_cfg['leaf']['value'] == 'single') : ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem1') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?=$door_cfg['leafdooritems_single']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Одностворчатая: Тип I</th>
                                        </tr>

                                    <?php endif; ?>


                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem2') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?=$door_cfg['leafdooritems_single']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Одностворчатая: Тип II</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem3') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?=$door_cfg['leafdooritems_single']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Одностворчатая: Тип III</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['leaf']['value'] == 'double') : ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem1') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?=$door_cfg['leafdooritems_double']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Двустворчатая: Тип I</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem2') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?=$door_cfg['leafdooritems_double']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Двустворчатая: Тип II</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem3') : ?>

                                        <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base"><?=$door_cfg['leafdooritems_double']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Двустворчатая: Тип II</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ((isset($door_cfg['leafdooritems_single']['value']) AND $door_cfg['leafdooritems_single']['value'] != 'slditem1') OR (isset($door_cfg['leafdooritems_double']['value']) AND $door_cfg['leafdooritems_double']['value'] != 'dlditem1')) : ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item1') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Прозрачное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item2') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item3') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Угольное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item4') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Серебряное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item5') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Серебряное матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item6') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Полосатое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item7') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Белое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item8') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Голубое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item9') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Бронзовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item10') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Бронзовое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item11') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Зеленое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item12') : ?>

                                        <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Дополнительная секция</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Остекление: Золотое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if (isset($door_cfg['furniture_extra-grid1_check']['value']) AND $door_cfg['furniture_extra-grid1_check']['value'] == 1) : ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item1-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Asia</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item2-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Англия</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item3-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 1</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item4-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 2</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item5-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1d']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 3</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item6-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 4</th>
                                            </tr>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item7-step__1') : ?>

                                            <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])) : ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-cost"><?=$door_cfg['furnitem_extra-grid1']['price'].' ₽'?></th>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <th class="cheque__table-name">Дополнительная секция</th>
                                                    <th class="cheque__table-base">Включено в базу</th>
                                                </tr>
                                            <?php endif; ?>

                                            <tr>
                                                <th class="cheque__table-descr">Декоративная решетка: Тип 5</th>
                                            </tr>

                                        <?php endif; ?>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Внешняя панель</th>
                                </tr>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'classic') : ?>

                                    <?php if (!empty($door_cfg['outdoorstyles']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Отделка</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['outdoorstyles']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Отделка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Металл без отделки</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'baguette') : ?>
                                    
                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item1-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 001</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item2-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 002</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item3-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 002</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item4-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 007</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item5-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 008</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item6-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 010</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item7-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: F 011</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item8-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: I</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item9-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: II</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item10-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: III</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item10-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">С багетом: III</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed') : ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item1-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 001</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item2-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 002</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item3-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 003</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item4-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 004</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item5-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 005</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item6-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 009</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item7-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 010</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item8-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 011</th>
                                        </tr>

                                    <?php endif; ?>


                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item9-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 012</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item10-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 013</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item11-step__2') : ?>

                                        <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Отделка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Со стеклом: V 014</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item1') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Прозрачное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item2') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Угольное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item3') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Серебряное</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item4') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Серебряное матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item5') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Полосатое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item6') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Белое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item7') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Голубоее</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item8') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Бронзовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item9') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Бронзовое матовое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item10') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Золотое</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item11') : ?>

                                        <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Цвет стекла</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Зеленое</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol1') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Bronze</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol2') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Silver</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol3') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Vesuvio</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol4') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Tobacco</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol5') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9003</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol6') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Patina</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol7') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8017</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol8') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Del Mare</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol9') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol10') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7043</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol11') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7009</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol12') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol13') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6028</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol14') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8025</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol16') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7006</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol17') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol18') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3031</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol19') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 5005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol20') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7004</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol21') : ?>

                                    <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7024</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Внутренняя панель</th>
                                </tr>
                                <tr>
                                    <th class="cheque__table-name">Отделка</th>
                                    <th class="cheque__table-base">Включено в базу</th>
                                </tr>
                                <tr>
                                    <th class="cheque__table-descr">Металл без отделки</th>
                                </tr>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout1') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Bronze</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout2') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Silver</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout3') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Vesuvio</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout4') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Tobacco</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout5') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9003</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout6') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Patina</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout7') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8017</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout8') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Del Mare</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout10') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 9005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout11') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7009</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout12') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout13') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 6028</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout14') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 8025</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout15') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7006</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout16') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 1019</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout17') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout18') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 3031</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout19') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 5005</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout20') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7004</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout21') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7024</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout22') : ?>

                                    <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет металла</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">RAL 7024</th>
                                    </tr>

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Фурнитура</th>
                                </tr>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-1') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Хром</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-2') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Хром матовый</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-2') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Хром матовый</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-3') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Бронза</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-4') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Золото</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-5') : ?>

                                    <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Цвет</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Черный</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-1') : ?>

                                    <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituretype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Venera</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-2') : ?>

                                    <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituretype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Garda</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-3') : ?>

                                    <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituretype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Ручка</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Trendy</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item1') : ?>

                                    <?php if (!empty($door_cfg['hinges']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['hinges']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Стандартный</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item2') : ?>

                                    <?php if (!empty($door_cfg['hinges']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['hinges']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Тип петель</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Скрытые петли</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if (isset($door_cfg['furniture_listtype_check']['value']) AND $door_cfg['furniture_listtype_check']['value'] == '1') : ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-1') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Sparta серебро</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-2') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Vizantia золото</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-3') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Vizantia бронза</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-4') : ?>

                                        <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Защитная пластина</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Черная</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item1') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Стандартный</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item2') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Накладной порог Sparta Хром</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item3') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Накладной порог Vizantia Золото</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item4') : ?>

                                    <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Усиление порога</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Цельнопрофильный порог Матовый Хром</th>
                                    </tr>

                                <?php endif; ?>
                            </table>
                        </th>
                        <th class="cheque__table-right">
                            <table class="table-transparent">
                                <tr>
                                    <th colspan="2" class="cheque__table-title">Замковая система</th>
                                </tr>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Италия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Турция</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item9') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Россия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Италия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item11') : ?>

                                    <tr>
                                        <th class="cheque__table-name">Производитель замка</th>
                                    </tr>
                                    <tr>
                                        <th class="cheque__table-descr">Италия</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale сувальдный</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Securemme сувальдный</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale цилиндровый</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Guardian, электро-механический</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Biocode</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale сувальдные</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Kale цилинд. и сувальд.</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item9') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Guardian Revolution</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Securemme сувальдные</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>

                                    <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Замок</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">CISA Revolution</th>
                                    </tr>                                        

                                <?php endif; ?>

                                <tr>
                                    <th colspan="2" class="cheque__table-title">Дополнительные опции</th>
                                </tr>

                                <?php if (isset($door_cfg['furniture_closer_check']['value']) AND $door_cfg['furniture_closer_check']['value'] == 1) : ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item1-step_6') : ?>

                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Черный (внешний)</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item2-step_6') : ?>

                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Коричневый (внешний)</th>
                                        </tr>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item3-step_6') : ?>

                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Тип доводчика</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Серебристый (внешний)</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if (isset($door_cfg['furniture_vent_check']['value']) AND $door_cfg['furniture_vent_check']['value'] == 1) : ?>

                                    <?php if ($door_cfg['furnitem_vent']['value'] == 'vent-item1-step_7') : ?>
                                        
                                        <?php if (!empty($door_cfg['furnitem_vent']['price'])) : ?>
                                            <tr>
                                                <th class="cheque__table-name">Вентиляционная решетка</th>
                                                <th class="cheque__table-cost"><?=$door_cfg['furnitem_vent']['price'].' ₽'?></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="cheque__table-name">Вентиляционная решетка</th>
                                                <th class="cheque__table-base">Включено в базу</th>
                                            </tr>
                                        <?php endif; ?>

                                        <tr>
                                            <th class="cheque__table-descr">Да</th>
                                        </tr>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_side']['value'] == 'side-item1-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_side']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_side']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Внешнее</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_side']['value'] == 'side-item2-step_6') : ?>
                                    
                                    <?php if (!empty($door_cfg['furnitem_side']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_side']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Сторона открывания</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Левая</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item1-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Не знаю</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item2-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">960 х 2050 мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item3-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">860 х 2050 мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item4-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Свой размер, мм</th>
                                    </tr>

                                <?php endif; ?>
                                
                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item5-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Размер двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Свой размер, мм</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_met']['value'] == 'met-item1-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_met']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_met']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Холоднокатаная сталь</th>
                                    </tr>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_met']['value'] == 'met-item2-step_6') : ?>

                                    <?php if (!empty($door_cfg['furnitem_met']['price'])) : ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-cost"><?=$door_cfg['furnitem_met']['price'].' ₽'?></th>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th class="cheque__table-name">Металл двери</th>
                                            <th class="cheque__table-base">Включено в базу</th>
                                        </tr>
                                    <?php endif; ?>

                                    <tr>
                                        <th class="cheque__table-descr">Нержавеющая сталь</th>
                                    </tr>

                                <?php endif; ?>

                            </table>
                        </th>
                    </tr>
                </table>
            </section>
            <section id="lolo" class="cheque-2">
                
                <table border="0" cellpadding="0" cellspacing="0" style="font-family : Raleway">
                       <tr class="header" style="width:100%;border: 0">
                        <th style="text-align:left;width:50%;padding-bottom: 20px"><img  style="margin-top:10px" src="https://portamia.ru/lpt.png" class="pdf__logo"></th>
                        <th style="text-align:right;width:50%;padding-bottom: 20px;border-bottom:1px solid #000000;color:#000000;opacity: 1" class="pdf__number">+7(961)949-48-48</th>
                    </tr>
                    <tr class="cheque-title__block">
                        <th style="text-align:left;width:50%;padding-left: 0px;color:#000;padding-top: 20px" class="cheque-title">Чек двери</th>
                        <th style="text-align:right;width:50%;padding-right: 0px;padding-top: 20px" class="page1">Страница 2</th>
                    </tr>
              </table>      
                <div class="mtttop" style="margin-top:100px">
               <table border="0" cellpadding="0" cellspacing="0" style="font-family : Raleway">   
                    <tr class="cheque__space"></tr>
                    <tr class="cheque__total">
                        <th rowspan="2" class="cheque__total-cost" style="padding-left:25px">Общая стоимость</th>
                        <th class="cheque__total-old-cost" style="font-variant-numeric: lining-nums proportional-nums; font-family: Raleway"><?=$total_cost_old?> ₽</th>

                    </tr>
                    <tr class="cheque__total">
                        <th class="cheque__total-current-cost" style="font-variant-numeric: lining-nums proportional-nums; font-family: Raleway "><?=$total_cost?> ₽</th>
                    </tr>
               
                
              
                    <tr class="cheque__total imotr" >
                        <td style="padding-top: 40px;vertical-align: top;padding-left:25px; width: 230px" class="cheque__total-img">
                            <div class="cheque__total-img-inner" style="">
                                <img src="<?=$outdoor?>">
                                <img src="<?=$indoor?>">
                            </div>
                        </td>
                        <td style="padding-top: 40px;vertical-align: top;" class="cheque__total-name1" style="font-size:14px;color:#000000">Дата создания двери: <span style="font-size:14px;color:#00000080; font-family: Raleway; font-variant-numeric: lining-nums proportional-nums"><?=date('d.m.Y H:i')?></span>
                        
                        </td>
                         
                    </tr>
                     
                </table>
                </div>    
            </section>
            
            <style>
               * {font-family: Raleway; }
               th,td {font-family: Raleway; }
                      #lolo .header td {  border-bottom: 0}
                 #lolo .header th {  border-bottom: 0}
                 #lolo table {  border: 0}
                 
#lolo .cheque-title__block th {  border-bottom: 0;border-top: 0;}
#lolo .cheque-title__block th {  border-bottom: 0;border-top: 0;}

#lolo .header th {border-bottom:1px solid #000000 !important;}
#lolo .header th.pdf__number {border-bottom:1px solid #000000 !important;opacity: 1}
            </style>   
        </body>

    </html>

<?php

    else:

        die('Не переданы необходимые параметры!');

    endif;

?>
