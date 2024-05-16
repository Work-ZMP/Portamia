<?php

if (isset($_POST['door_cfg']) and !empty($_POST['door_cfg'])):

    if (isset($_POST)) {

        $door_cfg = json_decode($_POST['door_cfg'], true);
    } else {

        $door_cfg = array(
            'model' => 1,
            'leaf' => 'single',
            'leafdooritems_single' => 'slditem1',
            'outdoorstyles' => 'classic',
            'metalcolin' => 'btncol1',
            'metalcolout' => 'btncolout1',
            'doorcolout' => 'btndoorcolout1',
            'indoorstylesmilled' => '1',
            'classicmilled' => '1',
            'typemilledoutclassic' => 'btn-milled-classic1',
            'locknumber' => 'lockbtn1',
            'lockitems' => 'cfg-lock-item1',
            'furniturecol' => 'furn-col-1',
            'furnituretype' => 'furn-item-1',
            'hinges' => 'furn-hinges-item1',
            'furnituredoorsteptype' => 'doorstep-item1',
            'furnitem_size' => 'size-item3-step_6',
            'furnitem_side' => 'side-item1-step_6',
            'furnitem_met' => 'met-item1-step_6',

        );
    }

    //print '<pre>';
    //print_r($door_cfg);
    //print '</pre>';

    ?>

    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title"> Основная конструкция двери</div>
        </div>
        <div class="cfg-optionsline first">
            <ul>

                <?php if ($door_cfg['model']['value'] == 1): ?>

                    <li>
                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">База</div>
                                <div class="options-item-l-description">Portamia MW
                                </div>
                            </div>
                            <div class="options-item-r">
                                <div class="options-item-r-cost"><?= $door_cfg['model']['price'] ?> ₽</div>
                            </div>
                        </div>
                        <ul>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Толщина стали
                                        двери
                                    </div>
                                    <div class="options-item-l-description">1.5 мм</div>
                                </div>
                                <div class="options-item-r">


                                </div>
                            </li>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Контуры притвора
                                    </div>
                                    <div class="options-item-l-description">2 шт.</div>
                                </div>
                                <div class="options-item-r"></div>
                            </li>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Глубина короба
                                    </div>
                                    <div class="options-item-l-description">150 мм</div>
                                </div>
                                <div class="options-item-r"></div>
                            </li>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Толщина полотна
                                    </div>
                                    <div class="options-item-l-description">83 мм</div>
                                </div>
                                <div class="options-item-r">


                                </div>
                            </li>
                        </ul>
                    </li>

                <?php endif; ?>

                <?php if ($door_cfg['model']['value'] == 2): ?>

                    <li>
                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">База</div>
                                <div class="options-item-l-description">Portamia MDF
                                </div>
                            </div>
                            <div class="options-item-r">
                                <div class="options-item-r-cost"><?= $door_cfg['model']['price'] ?> ₽</div>
                            </div>
                        </div>
                        <ul>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Толщина стали
                                        двери
                                    </div>
                                    <div class="options-item-l-description">1.5 мм</div>
                                </div>
                                <div class="options-item-r">


                                </div>
                            </li>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Контуры притвора
                                    </div>
                                    <div class="options-item-l-description">2 шт.</div>
                                </div>
                                <div class="options-item-r"></div>
                            </li>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Глубина короба
                                    </div>
                                    <div class="options-item-l-description">150 мм</div>
                                </div>
                                <div class="options-item-r"></div>
                            </li>
                            <li class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Толщина полотна
                                    </div>
                                    <div class="options-item-l-description">83 мм</div>
                                </div>
                                <div class="options-item-r">


                                </div>
                            </li>
                        </ul>
                    </li>

                <?php endif; ?>

            </ul>
        </div>
    </div>
    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title">Конструкция</div>
        </div>
        <div class="cfg-optionsline">
            <ul>
                <li>

                    <?php if ($door_cfg['leaf']['value'] == 'single'): ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид I</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид V</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид IX</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид II</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид III</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид IV</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem7'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид VI</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem8'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид VII</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem9'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Одностворчатая: Вид VIII</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_single']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_single']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                    <?php if ($door_cfg['leaf']['value'] == 'double'): ?>

                        <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Двустворчатая: Вид I</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_double']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_double']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Двустворчатая: Вид II</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_double']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_double']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div>
                                    <div class="options-item-l-description">Двустворчатая: Вид III</div>
                                </div>
                                <?php if (!empty($door_cfg['leafdooritems_double']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['leafdooritems_double']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </li>

                <?php if ((isset($door_cfg['leafdooritems_single']['value']) and $door_cfg['leafdooritems_single']['value'] != 'slditem1') or (isset($door_cfg['leafdooritems_double']['value']) and $door_cfg['leafdooritems_double']['value'] != 'dlditem1')): ?>

                    <li>

                        <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция (Фрамуга)</div>
                                    <div class="options-item-l-description">Остекление: Серебро</div>
                                </div>
                                <?php if (!empty($door_cfg['frameglasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция (Фрамуга)</div>
                                    <div class="options-item-l-description">Остекление: Серебристо-серый</div>
                                </div>
                                <?php if (!empty($door_cfg['frameglasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция (Фрамуга)</div>
                                    <div class="options-item-l-description">Остекление: Бронза</div>
                                </div>
                                <?php if (!empty($door_cfg['frameglasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция (Фрамуга)</div>
                                    <div class="options-item-l-description">Остекление: Голубой</div>
                                </div>
                                <?php if (!empty($door_cfg['frameglasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция (Фрамуга)</div>
                                    <div class="options-item-l-description">Остекление: Мультифункциональное</div>
                                </div>
                                <?php if (!empty($door_cfg['frameglasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['frameglasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    </li>

                    <?php if (isset($door_cfg['furniture_extra-grid1_check']['value']) and $door_cfg['furniture_extra-grid1_check']['value'] == 1): ?>

                        <li>

                            <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item1-step__1'): ?>

                                <div class="options-item">
                                    <div class="options-item-l">
                                        <div class="options-item-l-title">Декоративная решетка на фрамугу</div>
                                        <div class="options-item-l-description">Тип решетки: Тип 1</div>
                                    </div>
                                    <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])): ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></div>
                                        </div>
                                    <?php else: ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-included">Включено в базу</div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php endif; ?>

                            <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item2-step__1'): ?>

                                <div class="options-item">
                                    <div class="options-item-l">
                                        <div class="options-item-l-title">Декоративная решетка на фрамугу</div>
                                        <div class="options-item-l-description">Тип решетки: Тип 2</div>
                                    </div>
                                    <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])): ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></div>
                                        </div>
                                    <?php else: ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-included">Включено в базу</div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php endif; ?>

                            <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item3-step__1'): ?>

                                <div class="options-item">
                                    <div class="options-item-l">
                                        <div class="options-item-l-title">Декоративная решетка на фрамугу</div>
                                        <div class="options-item-l-description">Тип решетки: Тип 3</div>
                                    </div>
                                    <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])): ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></div>
                                        </div>
                                    <?php else: ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-included">Включено в базу</div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php endif; ?>

                            <?php if ($door_cfg['furnitem_extra-grid1']['value'] == 'extra-grid-step1-item4-step__1'): ?>

                                <div class="options-item">
                                    <div class="options-item-l">
                                        <div class="options-item-l-title">Декоративная решетка на фрамугу</div>
                                        <div class="options-item-l-description">Тип решетки: Тип 4</div>
                                    </div>
                                    <?php if (!empty($door_cfg['furnitem_extra-grid1']['price'])): ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-cost"><?= $door_cfg['furnitem_extra-grid1']['price'] . ' ₽' ?></div>
                                        </div>
                                    <?php else: ?>
                                        <div class="options-item-r">
                                            <div class="options-item-r-included">Включено в базу</div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            <?php endif; ?>

                        </li>

                    <?php endif; ?>

                <?php endif; ?>

            </ul>
        </div>
    </div>
    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title">Наружная сторона</div>
        </div>
        <div class="cfg-optionsline">
            <ul>
                <li>

                    <?php if ($door_cfg['outdoorstyles']['value'] == 'classic'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Отделка</div>
                                <div class="options-item-l-description">Металл / МДФ</div>
                            </div>
                            <?php if (!empty($door_cfg['outdoorstyles']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['outdoorstyles']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['outdoorstyles']['value'] == 'baguette'): ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item1-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 001</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item2-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 002</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item3-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 003</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item4-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 004</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item5-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 005</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item6-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 006</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item7-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 007</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item8-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 008</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item9-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 009</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item10-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Рамка: B 010</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_baguette']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_baguette']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                    <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed'): ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item1-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 001</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item2-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 002</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item3-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 003</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item4-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 004</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item5-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 005</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item6-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 006</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item7-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 007</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item8-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 008</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item9-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 009</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item10-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 010</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item11-step__2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление: G 011</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_glass-type']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_glass-type']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </li>

                <li>

                    <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed'): ?>

                        <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет стекла</div>
                                    <div class="options-item-l-description">Серебро</div>
                                </div>
                                <?php if (!empty($door_cfg['glasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет стекла</div>
                                    <div class="options-item-l-description">Серебристо-серый</div>
                                </div>
                                <?php if (!empty($door_cfg['glasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет стекла</div>
                                    <div class="options-item-l-description">Бронза</div>
                                </div>
                                <?php if (!empty($door_cfg['glasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет стекла</div>
                                    <div class="options-item-l-description">Голубой</div>
                                </div>
                                <?php if (!empty($door_cfg['glasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет стекла</div>
                                    <div class="options-item-l-description">Мультифункциональное</div>
                                </div>
                                <?php if (!empty($door_cfg['glasscol']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['glasscol']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </li>
                <li>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23119</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23039</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23239</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N43009</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">SX3019</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23129</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol7'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23219</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol8'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">R23009</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol9'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23019</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol10'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23049</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol11'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23109</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol12'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23079</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol13'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23089</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol14'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23099</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol15'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23009</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol16'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23139</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol17'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23189</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol18'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23149</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol19'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23209</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol20'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23159</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol21'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23179</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol22'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23059</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol23'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23229</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol24'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23069</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolin']['value'] == 'btncol25'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">SA3039</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolin']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolin']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
                
            </ul>
        </div>
    </div>
    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title">Внутренняя сторона</div>
        </div>
        <div class="cfg-optionsline">
            <ul>
                <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed'): ?>
                    <li>
                        <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Остекление</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            </div>

                        <?php endif; ?>
                    </li>
                <?php endif; ?>
                <?php if (isset($door_cfg['typemilledoutclassic']['value'])): ?>
                    <li>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 001</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 002</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 003</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 004</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 005</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 006</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic7'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 007</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic8'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 008</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic9'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 009</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic10'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 010</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic11'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 011</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic12'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 012</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic13'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 013</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic14'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 014</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic15'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 015</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic16'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 016</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic17'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 017</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic18'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 018</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic19'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 019</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic20'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 020</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic21'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 021</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic22'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 022</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic23'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 023</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic24'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 024</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic25'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 025</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic26'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 026</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic27'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 027</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic28'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 028</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic29'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 029</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic30'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 030</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic31'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 031</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic32'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 032</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic33'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 033</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic34'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 034</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic35'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 035</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic36'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 036</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic37'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 037</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic38'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 038</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutclassic']['value'] == 'btn-milled-classic39'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FK-MDF 039</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutclassic']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutclassic']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    </li>
                <?php endif; ?>

                <?php if (isset($door_cfg['typemilledoutmodern']['value'])): ?>
                    <li>
                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 001</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 002</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 003</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 004</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 005</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 006</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern7'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 007</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern8'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 008</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern9'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 009</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern10'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 010</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern11'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 011</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern12'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 012</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern13'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 013</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern14'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 014</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern15'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 015</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern16'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 016</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern17'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 017</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern18'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 018</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern19'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 019</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern20'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 020</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern21'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 021</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern22'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 022</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern23'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 023</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern24'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 024</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemilledoutmodern']['value'] == 'btn-milled-modern25'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Фрезеровка: FS-MDF 025</div>
                                </div>
                                <?php if (!empty($door_cfg['typemilledoutmodern']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemilledoutmodern']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    </li>
                <?php endif; ?>

                <?php if (isset($door_cfg['typemirrorin']['value'])): ?>
                    <li>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 001</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 002</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 003</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 004</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 005</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 006</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin7'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 007</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin8'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZF-MDF 008</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorin']['value'] == 'btn-mirrorin9'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Зеркало: ZG-MDF 001</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorin']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorin']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>


                    </li>
                <?php endif; ?>

                <?php if (isset($door_cfg['typemirrorcolIn']['value'])): ?>
                    <li>
                        <?php if ($door_cfg['typemirrorcolIn']['value'] == 'btn-mirrorcolin1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет зеркала</div>
                                    <div class="options-item-l-description">Стандарт</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorcolIn']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorcolIn']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorcolIn']['value'] == 'btn-mirrorcolin2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет зеркала</div>
                                    <div class="options-item-l-description">Кофе</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorcolIn']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorcolIn']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorcolIn']['value'] == 'btn-mirrorcolin3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет зеркала</div>
                                    <div class="options-item-l-description">Графит</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorcolIn']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorcolIn']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorcolIn']['value'] == 'btn-mirrorcolin4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет зеркала</div>
                                    <div class="options-item-l-description">Стандарт</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorcolIn']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorcolIn']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorcolIn']['value'] == 'btn-mirrorcolin5'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет зеркала</div>
                                    <div class="options-item-l-description">Кофе</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorcolIn']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorcolIn']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['typemirrorcolIn']['value'] == 'btn-mirrorcolin6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет зеркала</div>
                                    <div class="options-item-l-description">Графит</div>
                                </div>
                                <?php if (!empty($door_cfg['typemirrorcolIn']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['typemirrorcolIn']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>
                    </li>
                <?php endif; ?>
                <li>
                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Венге</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Белое дерево</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Коньячный дуб</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Ванильный дуб</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Милк</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Кофейное дерево</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout7'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Серый матовый</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout8'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Черный матовый</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout9'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Графитовое дерево</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout10'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Дымчатое дерево</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout11'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Сатиновое дерево</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout12'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Граб белый</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout13'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Венге бонобо</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout14'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Арктическая береза</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout15'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Бетон темный</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout16'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Бетон светлый</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout17'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Греческий платан</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout18'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Джут</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout19'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Джут белый</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout20'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Белый</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout21'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Дуб бренди</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['doorcolout']['value'] == 'btndoorcolout22'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип МДФ панели</div>
                                <div class="options-item-l-description">Дуб рустик</div>
                            </div>
                            <?php if (!empty($door_cfg['doorcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['doorcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>
                </li>

                <li>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23119</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23039</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23239</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N43009</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">SX3019</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23129</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout7'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23219</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout8'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">R23009</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout9'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23019</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout10'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23049</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout11'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23109</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout12'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23079</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout13'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23089</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout14'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23099</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout15'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23009</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout16'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23139</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout17'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23189</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout18'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23149</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout19'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23209</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout20'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23159</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout21'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23179</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout22'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23059</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout23'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23229</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout24'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">N23069</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['metalcolout']['value'] == 'btncolout25'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет металла</div>
                                <div class="options-item-l-description">SA3039</div>
                            </div>
                            <?php if (!empty($door_cfg['metalcolout']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['metalcolout']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if (isset($door_cfg['furnitem_platband_check']['value']) and $door_cfg['furnitem_platband_check']['value'] == 1): ?>

                    <><!-- Наличник -->

                    <?php if ($door_cfg['furnitem_platband']['value'] == 'platband-item1-step_4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Наличники</div>
                                <div class="options-item-l-description">Стандартные</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_platband']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_platband']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnitem_platband']['value'] == 'platband-item2-step_4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Наличники</div>
                                <div class="options-item-l-description">Стандартные</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_platband']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_platband']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>
                    <?php if ($door_cfg['furnitem_platband']['value'] == 'platband-item3-step_4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Наличники</div>
                                <div class="options-item-l-description">Стандартные</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_platband']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_platband']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <?php if (isset($door_cfg['furniture_dodings_check']['value']) and $door_cfg['furniture_dodings_check']['value'] == 1): ?>
                <li><!-- Доборы -->
                

                    <?php if ($door_cfg['furnitem_dodings']['value'] == 'dodings-item1-step_4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Доборы</div>
                                <div class="options-item-l-description">Стандартные</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_dodings']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_dodings']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>
                    
                </li>
                <?php endif; ?>                    
                </li>
            </ul>
        </div>
    </div>
    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title">Фурнитура</div>
        </div>
        <div class="cfg-optionsline">
            <ul>
                <li>

                    <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет</div>
                                <div class="options-item-l-description">Хром</div>
                            </div>
                            <?php if (!empty($door_cfg['furniturecol']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет</div>
                                <div class="options-item-l-description">Матовый хром</div>
                            </div>
                            <?php if (!empty($door_cfg['furniturecol']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет</div>
                                <div class="options-item-l-description">Латунь</div>
                            </div>
                            <?php if (!empty($door_cfg['furniturecol']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет</div>
                                <div class="options-item-l-description">Бронза</div>
                            </div>
                            <?php if (!empty($door_cfg['furniturecol']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Цвет</div>
                                <div class="options-item-l-description">Черный</div>
                            </div>
                            <?php if (!empty($door_cfg['furniturecol']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furniturecol']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
                <li>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">Arena</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">Pyramide Sircle</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">Pyramide Quadro</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">Vitoria</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">Dallas</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">Rania</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-7'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">SKS (100см)</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-8'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">SKS (50см)</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-9'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">SPS (100см)</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-10'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Ручка</div>
                                <div class="options-item-l-description">SPS (50см)</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituretype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituretype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
                <li>

                    <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип петель</div>
                                <div class="options-item-l-description">С петлями</div>
                            </div>
                            <?php if (!empty($door_cfg['hinges']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['hinges']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Тип петель</div>
                                <div class="options-item-l-description">Скрытые петли</div>
                            </div>
                            <?php if (!empty($door_cfg['hinges']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['hinges']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>

                <?php if (isset($door_cfg['furniture_listtype_check']['value']) and $door_cfg['furniture_listtype_check']['value'] == '1'): ?>

                    <li>

                        <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-1'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Защитная пластина</div>
                                    <div class="options-item-l-description">Матовый хром</div>
                                </div>
                                <?php if (!empty($door_cfg['furniturelisttype']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-2'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Защитная пластина</div>
                                    <div class="options-item-l-description">Латунь</div>
                                </div>
                                <?php if (!empty($door_cfg['furniturelisttype']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-3'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Защитная пластина</div>
                                    <div class="options-item-l-description">Бронза</div>
                                </div>
                                <?php if (!empty($door_cfg['furniturelisttype']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-4'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Защитная пластина</div>
                                    <div class="options-item-l-description">Черная</div>
                                </div>
                                <?php if (!empty($door_cfg['furniturelisttype']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furniturelisttype']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    </li>

                <?php endif; ?>

                <li>

                    <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Усиление порога</div>
                                <div class="options-item-l-description">Стандартный порог</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Усиление порога</div>
                                <div class="options-item-l-description">Накладной порог Хром</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Усиление порога</div>
                                <div class="options-item-l-description">Накладной порог Латунь</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Усиление порога</div>
                                <div class="options-item-l-description">Цельнопрофильный порог Матовый Хром</div>
                            </div>
                            <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnituredoorsteptype']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
            </ul>
        </div>
    </div>
    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title">Замковая система</div>
        </div>
        <div class="cfg-optionsline">
            <ul>
                <li>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Турция</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Италия</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Турция</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Италия</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Турция</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Италия</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Италия</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Производитель замка</div>
                                <div class="options-item-l-description">Италия</div>
                            </div>
                            <div class="options-item-r">
                                <div></div>
                            </div>
                        </div>

                    <?php endif; ?>

                </li>
                <li>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Kale сувальдный</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Securemme сувальдный</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Kale циллиндрический</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Securemme циллиндрический</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Kale суввальд. + Kale суввальд.</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Securemme сувальд. + Securemme сувальд.</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Securemme цилинд. + Securemme суввальд.</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Замок</div>
                                <div class="options-item-l-description">Securemme двухсистемный замок</div>
                            </div>
                            <?php if (!empty($door_cfg['lockitems']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['lockitems']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>


                </li>
            </ul>
        </div>
    </div>
    <div>
        <div class="cfg-option-changer-wrapper">
            <div class="cfg-option-changer-title">Дополнительные опции</div>
        </div>
        <div class="cfg-optionsline">
            <ul>

                <?php if (isset($door_cfg['furniture_closer_check']['value']) and $door_cfg['furniture_closer_check']['value'] == 1): ?>

                    <li>

                        <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item1-step_6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип доводчика</div>
                                    <div class="options-item-l-description">Черный (внешний)</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_closer']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_closer']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item2-step_6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип доводчика</div>
                                    <div class="options-item-l-description">Коричневый (внешний)</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_closer']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_closer']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item3-step_6'): ?>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип доводчика</div>
                                    <div class="options-item-l-description">Серебристый (внешний)</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_closer']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_closer']['price'] . ' ₽' ?></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        <?php endif; ?>

                    </li>

                <?php endif; ?>

                <?php if (isset($door_cfg['furniture_vent_check']['value']) and $door_cfg['furniture_vent_check']['value'] == 1): ?>

                    <?php if ($door_cfg['furnitem_vent']['value'] == 'vent-item1-step_7'): ?>

                        <li>

                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Вентиляционная решетка</div>
                                    <div class="options-item-l-description">Да</div>
                                </div>
                                <?php if (!empty($door_cfg['furnitem_vent']['price'])): ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-cost"><?= $door_cfg['furnitem_vent']['price'] . ' ₽' ?></div>
                                        <div class="options-item-r-remove"></div>
                                    </div>
                                <?php else: ?>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included">Включено в базу</div>
                                        <div class="options-item-r-remove"></div>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </li>

                    <?php endif; ?>

                <?php endif; ?>

                <li>

                    <?php if ($door_cfg['furnitem_side']['value'] == 'side-item1-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Сторона открывания</div>
                                <div class="options-item-l-description">Правая</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_side']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_side']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnitem_side']['value'] == 'side-item2-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Сторона открывания</div>
                                <div class="options-item-l-description">Левая</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_side']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_side']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
                <li>

                    <?php if ($door_cfg['furnitem_size']['value'] == 'size-item1-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Размер двери</div>
                                <div class="options-item-l-description">Не знаю</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_size']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnitem_size']['value'] == 'size-item2-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Размер двери</div>
                                <div class="options-item-l-description">960 х 2050 мм</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_size']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnitem_size']['value'] == 'size-item3-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Размер двери</div>
                                <div class="options-item-l-description">860 х 2050 мм</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_size']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnitem_size']['value'] == 'size-item4-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Размер двери</div>
                                <div class="options-item-l-description">Свой размер, мм</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_size']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_size']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
                <li>

                    <?php if ($door_cfg['furnitem_met']['value'] == 'met-item1-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Металл двери</div>
                                <div class="options-item-l-description">Холоднокатаная сталь</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_met']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_met']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                    <?php if ($door_cfg['furnitem_met']['value'] == 'met-item2-step_6'): ?>

                        <div class="options-item">
                            <div class="options-item-l">
                                <div class="options-item-l-title">Металл двери</div>
                                <div class="options-item-l-description">Нержавеющая сталь</div>
                            </div>
                            <?php if (!empty($door_cfg['furnitem_met']['price'])): ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost"><?= $door_cfg['furnitem_met']['price'] . ' ₽' ?></div>
                                </div>
                            <?php else: ?>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>

                </li>
            </ul>
        </div>
    </div>

<?php endif; ?>