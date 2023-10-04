<?php

    if (isset($_POST['door_cfg']) AND !empty($_POST['door_cfg'])) :

        $door_cfg = json_decode($_POST['door_cfg'], true);

        print '<pre>';
        print_r($door_cfg);
        print '</pre>';

?>

        <div class="accordion-body">
            <div class="accordion-content">
                <div>
                    <div class="cfg-option-changer-wrapper">
                        <div class="cfg-option-changer-title"> Основная конструкция двери</div>
                    </div>
                    <div class="cfg-optionsline first">
                        <ul>

                            <?php if ($door_cfg['model']['value'] == 1) : ?>

                                <li>
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">База</div>
                                            <div class="options-item-l-description">Termo
                                            </div>
                                        </div>
                                        <div class="options-item-r">
                                            <div class="options-item-r-cost"><?=$door_cfg['model']['price']?> ₽</div>
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

                            <?php if ($door_cfg['model']['value'] == 2) : ?>

                                <li>
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">База</div>
                                            <div class="options-item-l-description">Termo Plus
                                            </div>
                                        </div>
                                        <div class="options-item-r">
                                            <div class="options-item-r-cost"><?=$door_cfg['model']['price']?> ₽</div>
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

                                <?php if ($door_cfg['leaf']['value'] == 'single') : ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem1') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип</div>
                                                <div class="options-item-l-description">Одностворчатая: Тип I</div>
                                            </div>
                                            <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['leafdooritems_single']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem2') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип</div>
                                                <div class="options-item-l-description">Одностворчатая: Тип II</div>
                                            </div>
                                            <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['leafdooritems']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_single']['value'] == 'slditem3') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип</div>
                                                <div class="options-item-l-description">Одностворчатая: Тип III</div>
                                            </div>
                                            <?php if (!empty($door_cfg['leafdooritems_single']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['leafdooritems_single']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['leaf']['value'] == 'double') : ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem1') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип</div>
                                                <div class="options-item-l-description">Двустворчатая: Тип I</div>
                                            </div>
                                            <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['leafdooritems_double']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem2') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип</div>
                                                <div class="options-item-l-description">Двустворчатая: Тип II</div>
                                            </div>
                                            <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['leafdooritems_double']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['leafdooritems_double']['value'] == 'dlditem3') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип</div>
                                                <div class="options-item-l-description">Двустворчатая: Тип III</div>
                                            </div>
                                            <?php if (!empty($door_cfg['leafdooritems_double']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['leafdooritems_double']['price'].' ₽'?></div>
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

                            <?php if ((isset($door_cfg['leafdooritems_single']['value']) AND $door_cfg['leafdooritems_single']['value'] != 'slditem1') OR (isset($door_cfg['leafdooritems_double']['value']) AND $door_cfg['leafdooritems_double']['value'] != 'dlditem1')) : ?>

                                <li>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item1') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Базовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item2') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item3') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Угольное</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item4') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Серебряное</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item5') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Серебряное матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item6') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Полосатое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item7') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Белое матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item8') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Голубое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item9') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Бронзовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item10') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Бронзовое матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item11') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Зеленое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['frameglasscol']['value'] == 'glass-frame-col-item12') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Дополнительная секция</div>
                                                <div class="options-item-l-description">Остекление: Золотое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['frameglasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['frameglasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                </li>

                                <?php if (isset($door_cfg['furniture_extra-grid_check']['value']) AND $door_cfg['furniture_extra-grid_check']['value'] == 1) : ?>

                                    <li>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item1-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Азия</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-included">Включено в базу</div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item2-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Англия</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-included">Включено в базу</div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item3-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Тип 1</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-included">Включено в базу</div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item4-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Тип 2</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-included">Включено в базу</div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item5-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Тип 3</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-included">Включено в базу</div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item6-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Тип 4</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-included">Включено в базу</div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                        <?php endif; ?>

                                        <?php if ($door_cfg['furnitem_extra-grid']['value'] == 'extra-grid-step1-item7-step__1') : ?>
                                            
                                            <div class="options-item">
                                                <div class="options-item-l">
                                                    <div class="options-item-l-title">Дополнительная секция</div>
                                                    <div class="options-item-l-description">Декоративная решетка: Тип 5</div>
                                                </div>
                                                <?php if (!empty($door_cfg['furnitem_extra-grid']['price'])) : ?>
                                                    <div class="options-item-r">
                                                        <div class="options-item-r-cost"><?=$door_cfg['furnitem_extra-grid']['price'].' ₽'?></div>
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
                        <div class="cfg-option-changer-title">Внешняя панель</div>
                    </div>
                    <div class="cfg-optionsline">
                        <ul>
                            <li>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'classic') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Отделка</div>
                                            <div class="options-item-l-description">Металл без отделки</div>
                                        </div>
                                        <?php if (!empty($door_cfg['outdoorstyles']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['outdoorstyles']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'baguette') : ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item1-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 001</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item2-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 002</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item3-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 005</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item4-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 007</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item5-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 008</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item6-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 010</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item7-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: F 011</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item8-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: I</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item9-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: II</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_baguette']['value'] == 'baguette-item10-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">С багетом: III</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_baguette']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_baguette']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed') : ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item1-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 001</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item2-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 002</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item3-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 003</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item4-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 004</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item5-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 005</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item6-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 009</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item7-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 009</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item8-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 011</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item9-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 011</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item10-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 011</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_glass-type']['value'] == 'glass-type-item11-step__2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Отделка</div>
                                                <div class="options-item-l-description">Со стеклом: V 014</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_glass-type']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_glass-type']['price'].' ₽'?></div>
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
                                
                                <?php if ($door_cfg['outdoorstyles']['value'] == 'glazed') : ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item1') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Прозрачное</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item2') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Угольное</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item3') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Серебряное</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item4') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Серебряное матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item5') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Полосатое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item6') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Белое матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item7') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Голубоее</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item8') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Бронзовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item9') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Бронзовое матовое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item10') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Золотое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['glasscol']['value'] == 'glass-col-item11') : ?>
                                    
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Цвет стекла</div>
                                                <div class="options-item-l-description">Зеленое</div>
                                            </div>
                                            <?php if (!empty($door_cfg['glasscol']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['glasscol']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Bronze</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Silver</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol3') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Vesuvio</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol4') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Tobacco</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol5') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 9003</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Patina</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol7') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 8017</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol8') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Del Mare</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol9') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 9005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol10') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7043</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol11') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7009</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol12') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 6005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol13') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 6028</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol14') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 8025</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol15') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7006</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol16') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 1019</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol17') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 3005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol18') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 3031</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol19') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 5005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol20') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7004</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolin']['value'] == 'btncol21') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7024</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolin']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolin']['price'].' ₽'?></div>
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
                        <div class="cfg-option-changer-title">Внутренняя панель</div>
                    </div>
                    <div class="cfg-optionsline">
                        <ul>
                            <li>
                                <div class="options-item">
                                    <div class="options-item-l">
                                        <div class="options-item-l-title">Отделка</div>
                                        <div class="options-item-l-description">Металл без
                                            отделки
                                        </div>
                                    </div>
                                    <div class="options-item-r">
                                        <div class="options-item-r-included"> Включено в базу
                                        </div>
                                    </div>
                                </div>
                                <ul></ul>
                            </li>
                            <li>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Bronze</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Silver</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout3') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Vesuvio</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout4') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Tobacco</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout5') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 9003</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Patina</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout7') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 8017</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout8') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">Del Mare</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout9') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 9005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout10') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7043</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout11') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7009</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout12') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 6005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout13') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 6028</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout14') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 8025</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout15') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7006</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout16') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 1019</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout17') : ?>
                                   
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 3005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout18') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 3031</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout19') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 5005</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout20') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7004</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['metalcolout']['value'] == 'btncolout21') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет металла</div>
                                            <div class="options-item-l-description">RAL 7024</div>
                                        </div>
                                        <?php if (!empty($door_cfg['metalcolout']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['metalcolout']['price'].' ₽'?></div>
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
                        <div class="cfg-option-changer-title">Фурнитура</div>
                    </div>
                    <div class="cfg-optionsline">
                        <ul>
                            <li>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет</div>
                                            <div class="options-item-l-description">Хром</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет</div>
                                            <div class="options-item-l-description">Хром матовый</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-3') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет</div>
                                            <div class="options-item-l-description">Бронза</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-4') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет</div>
                                            <div class="options-item-l-description">Золото</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furniturecol']['value'] == 'furn-col-5') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Цвет</div>
                                            <div class="options-item-l-description">Черный</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furniturecol']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furniturecol']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Ручка</div>
                                            <div class="options-item-l-description">Venera</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituretype']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Ручка</div>
                                            <div class="options-item-l-description">Garda</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituretype']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituretype']['value'] == 'furn-item-3') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Ручка</div>
                                            <div class="options-item-l-description">Trendy</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituretype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituretype']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Тип петель</div>
                                            <div class="options-item-l-description">Стандартный</div>
                                        </div>
                                        <?php if (!empty($door_cfg['hinges']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['hinges']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['hinges']['value'] == 'furn-hinges-item2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Тип петель</div>
                                            <div class="options-item-l-description">Скрытые петли</div>
                                        </div>
                                        <?php if (!empty($door_cfg['hinges']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['hinges']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                            </li>

                            <?php if (isset($door_cfg['furniture_listtype_check']['value']) AND $door_cfg['furniture_listtype_check']['value'] == '1') : ?>

                                <li>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-1') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Защитная пластина</div>
                                                <div class="options-item-l-description">Sparta серебро</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-2') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Защитная пластина</div>
                                                <div class="options-item-l-description">Vizantia золото</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-3') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Защитная пластина</div>
                                                <div class="options-item-l-description">Vizantia бронза</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furniturelisttype']['value'] == 'furn-list-item-4') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Защитная пластина</div>
                                                <div class="options-item-l-description">Черная</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furniturelisttype']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furniturelisttype']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Усиление порога</div>
                                            <div class="options-item-l-description">Стандартный</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Усиление порога</div>
                                            <div class="options-item-l-description">Накладной порог Sparta Хром</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item3') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Усиление порога</div>
                                            <div class="options-item-l-description">Накладной порог Vizantia Золото</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnituredoorsteptype']['value'] == 'doorstep-item4') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Усиление порога</div>
                                            <div class="options-item-l-description">Цельнопрофильный порог Матовый Хром</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnituredoorsteptype']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnituredoorsteptype']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Производитель замка</div>
                                            <div class="options-item-l-description">Россия</div>
                                        </div>
                                        <div class="options-item-r">
                                            <div></div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Производитель замка</div>
                                            <div class="options-item-l-description">Россия</div>
                                        </div>
                                        <div class="options-item-r">
                                            <div></div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Производитель замка</div>
                                            <div class="options-item-l-description">Россия</div>
                                        </div>
                                        <div class="options-item-r">
                                            <div></div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item9') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Производитель замка</div>
                                            <div class="options-item-l-description">Россия</div>
                                        </div>
                                        <div class="options-item-r">
                                            <div></div>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item11') : ?>
                                    
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

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item1') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Guardian сувальдный</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item2') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Kale сувальдный</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item3') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Securemme сувальдный</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item4') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Kale цилиндровый</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item5') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Guardian, электро-механический</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Biocode</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item7') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Kale сувальдные</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item8') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Kale цилинд. и сувальд.</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item9') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Guardian Revolution</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item10') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">Securemme сувальдные</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['lockitems']['value'] == 'cfg-lock-item11') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Замок</div>
                                            <div class="options-item-l-description">CISA Revolution</div>
                                        </div>
                                        <?php if (!empty($door_cfg['lockitems']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['lockitems']['price'].' ₽'?></div>
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

                            <?php if (isset($door_cfg['furniture_closer_check']['value']) AND $door_cfg['furniture_closer_check']['value'] == 1) : ?>

                                <li>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item1-step_6') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип доводчика</div>
                                                <div class="options-item-l-description">Черный (внешний)</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item2-step_6') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип доводчика</div>
                                                <div class="options-item-l-description">Коричневый (внешний)</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></div>
                                                </div>
                                            <?php else: ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-included">Включено в базу</div>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                    <?php endif; ?>

                                    <?php if ($door_cfg['furnitem_closer']['value'] == 'closer-item3-step_6') : ?>
                                        
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Тип доводчика</div>
                                                <div class="options-item-l-description">Серебристый (внешний)</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></div>
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

                            <?php if (isset($door_cfg['furniture_vent_check']['value']) AND $door_cfg['furniture_vent_check']['value'] == 1) : ?>

                                <?php if ($door_cfg['furnitem_vent']['value'] == 'vent-item1-step_7') : ?>

                                    <li>
     
                                        <div class="options-item">
                                            <div class="options-item-l">
                                                <div class="options-item-l-title">Вентиляционная решетка</div>
                                                <div class="options-item-l-description">Да</div>
                                            </div>
                                            <?php if (!empty($door_cfg['furnitem_vent']['price'])) : ?>
                                                <div class="options-item-r">
                                                    <div class="options-item-r-cost"><?=$door_cfg['furnitem_vent']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['furnitem_side']['value'] == 'side-item1-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Сторона открывания</div>
                                            <div class="options-item-l-description">Правая</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_closer']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_closer']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_side']['value'] == 'side-item2-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Сторона открывания</div>
                                            <div class="options-item-l-description">Левая</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_side']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_side']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item1-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Размер двери</div>
                                            <div class="options-item-l-description">Не знаю</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item2-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Размер двери</div>
                                            <div class="options-item-l-description">960 х 2050 мм</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item3-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Размер двери</div>
                                            <div class="options-item-l-description">860 х 2050 мм</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_size']['value'] == 'size-item4-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Размер двери</div>
                                            <div class="options-item-l-description">Свой размер, мм</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_size']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_size']['price'].' ₽'?></div>
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

                                <?php if ($door_cfg['furnitem_met']['value'] == 'met-item1-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Металл двери</div>
                                            <div class="options-item-l-description">Холоднокатаная сталь</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_met']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_met']['price'].' ₽'?></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-included">Включено в базу</div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                <?php endif; ?>

                                <?php if ($door_cfg['furnitem_met']['value'] == 'met-item2-step_6') : ?>
                                    
                                    <div class="options-item">
                                        <div class="options-item-l">
                                            <div class="options-item-l-title">Металл двери</div>
                                            <div class="options-item-l-description">Нержавеющая сталь</div>
                                        </div>
                                        <?php if (!empty($door_cfg['furnitem_met']['price'])) : ?>
                                            <div class="options-item-r">
                                                <div class="options-item-r-cost"><?=$door_cfg['furnitem_met']['price'].' ₽'?></div>
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
            </div>
        </div>

<?php endif; ?>