function setConfig() {

   let door_cfg = [];

    $('#cfg-options [data-variable-name]').each(function(index, value) {

        if ($(value).hasClass('active')) {

            door_cfg[$(value).attr('data-variable-name')] = { value : $(value).attr('data-variable-value'), price : $(value).attr('data-price') };
        
        }

    });

    let toAssociative = (keys, values) => 
        
        values.reduce((acc, cv) => {
           
           acc[acc.shift()] = cv
           
           return acc;

        }, keys);

    let fromAssociative = (assArr) => ({...assArr});

    let serialized = JSON.stringify(fromAssociative(door_cfg));

    localStorage.setItem('door_cfg', serialized);

    let o = JSON.parse(localStorage.getItem('door_cfg'));

    let restored = toAssociative(Object.keys(o) , Object.values(o));

    console.log('restored:', restored);

}

function getConfig() {

}

function buildCheck() {

    let toAssociative = (keys, values) => 
        
        values.reduce((acc, cv) => {
           
           acc[acc.shift()] = cv
           
           return acc;

        }, keys);

    let o = JSON.parse(localStorage.getItem('door_cfg'));

    let restored = toAssociative(Object.keys(o) , Object.values(o));

    console.log('restored:', restored);

    $.ajax({
        url: '/wp-content/themes/mercato/check_build.php',
        method: 'POST',
        //dataType: 'json',
        data: { door_cfg: localStorage.getItem('door_cfg') },
        success: function(response) {

            $('#aria-step7-cheque').html(response);

        }

    });

    let door_cfg = localStorage.getItem('door_cfg');

    door_cfg = JSON.parse(door_cfg);

    console.log('door_cfg:', door_cfg);

    let total_cost = 0;

    $.each(door_cfg, function(key, val){
        
        total_cost = parseInt(total_cost) + parseInt(val.price);

    })

    console.log(total_cost);

    let total_cost_old = total_cost + (parseInt(total_cost) / 100 * 10);

    $('#cfg-total-cost').text(total_cost + ' ₽');
    $('#cfg-price-group-cost-old').text(total_cost_old + ' ₽');
    $('#cfg-price-group-cost-current').text(total_cost + ' ₽');

}

/**
 * кнопка выбора первой модели
 * */
function cfgDoorModel1() {
    
    let item1 = document.getElementById('cfg-firstmodel');
    let item2 = document.getElementById('cfg-secondmodel');
    const blockstylestep61 = document.getElementById('checkbox-3step-style-default');
    const blockstylestep62 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockstyleglazed = document.getElementById('checkbox-3step-glazed');

    let numbermetcol = document.querySelector('#checkbox-3step-metcol .step');

    if (item1.classList.contains('active')) {

    }
    else {

        blockstylestep61.style.display = '';
        blockstylestep62.style.display = 'none';
        blockmirror.style.display = 'none';
        blockmilled.style.display = 'none';
        blocktreecolor.style.display = 'none';
        blockstyleglazed.style.display = 'none';

        numbermetcol.textContent = '2.   ';

        item1.classList.add('active');
        item2.classList.remove('active');

    }

    setConfig();

    buildCheck();

}

/**
 * кнопка выбора второй модели
*/
function cfgDoorModel2() {
    
    let item1 = document.getElementById('cfg-firstmodel');
    let item2 = document.getElementById('cfg-secondmodel');
    const blockstylestep61 = document.getElementById('checkbox-3step-style-default');
    const blockstylestep62 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockstyleglazed = document.getElementById('checkbox-3step-glazed');

    let numbermetcol = document.querySelector('#checkbox-3step-metcol .step');

    if (item2.classList.contains('active')) {

    }
    else {
        
        blockstylestep61.style.display = 'none';
        blockstylestep62.style.display = '';
        blockmirror.style.display = 'none';
        blockmilled.style.display = '';
        blocktreecolor.style.display = '';
        numbermetcol.textContent = '4.   ';
        blockstyleglazed.style.display = 'none';

        item2.classList.add('active');
        item1.classList.remove('active');
        
        indoorStylesMilled();

    }

    setConfig();

    buildCheck();

}

/**
 * //кнопка закрытия баннера
 * @param {*} id 
 * @param {*} butid 
 */
function closebanner(id, butid) {
    
    let elem = document.getElementById(id);
    
    elem.classList.add('closed');
    
    $(elem).slideUp('slow');

}

/**
 * функция сворачивания блоков на кнопки +/-
 * @param {id} id id блока, который необходимо свернуть
 * @param {id} butid id кнопки +/-, на которую нажимаем]
 * @param {id} lineid id линии, которая меняет цвет, в зависимости от состояний развернутости блока
 */
function closeblock(id, butid, lineid) {
    
    let elem = document.getElementById(id); //находим блок div по его id, который передали в функцию
    let button = document.getElementById(butid); //айди кнопки, который передали в функцию
    let line = document.getElementById(lineid);
    let state = elem.classList.contains('closing'); //смотрим, включен ли сейчас элемент
    
    if (state == '') {
        
        $(elem).slideUp('slow');
        
        button.classList.add('closed');
        elem.classList.add('closing');
        line.classList.add('colored');

    }
    else {

        button.classList.remove('closed');
        elem.classList.remove('closing');
        
        $(elem).slideDown('slow');
        
        line.classList.remove('colored');

    }

}

/**
 * функция сворачивания последнего из блоков на кнопки +/-, где находится чек двери
 * @param {id} id id блока, который необходимо сворачивать
 * @param {id} butid id кнопки +/-, которую нажимаем
 * @param {id} arr id стрелки в конце последнего блока с чеком, на которую можно нажать и свернуть чек двери
 * @param {id} lineid id линии, которая меняет цвет, в зависимости от состояний развернутости блока 
 */
function closelastblock(id, butid, arr, lineid) {
    
    let elem = document.getElementById(id); //находим блок div по его id, который передали в функцию
    let button = document.getElementById(butid); //айди кнопки, который передали в функцию
    let line = document.getElementById(lineid);
    let state = elem.classList.contains('closing'); //смотрим, включен ли сейчас элемент
    let arrow = document.getElementById(arr);
    
    if (state == '') {
        
        $(elem).slideUp('slow');
        
        button.classList.add('closed');
        elem.classList.add('closing');
        arrow.style.display = 'none';
        line.classList.add('colored');

    }
    else {
        
        button.classList.remove('closed');
        elem.classList.remove('closing');
        
        $(elem).slideDown('slow');
        
        arrow.style.display = '';
        line.classList.remove('colored');

    }

}

/**
 * функция сворачивания последнего из блоков, где находится чек двери, с помощью стрелочки снизу
 * @param {id} id id блока, который необходимо сворачивать
 * @param {id} butid id кнопки +/-, которую нажимаем
 * @param {id} lineid id линии, которая меняет цвет, в зависимости от состояний развернутости блока
 */
function closearrowblock(id, butid, lineid) {
    
    let elem = document.getElementById(id); //находим блок div по его id, который передали в функцию
    let button = document.getElementById(butid); //айди кнопки, который передали в функцию
    let line = document.getElementById(lineid);
    let state = elem.classList.contains('closing'); //смотрим, включен ли сейчас элемент
    
    if (state == '') {
        
        $(elem).slideUp('slow');
        
        elem.classList.add('closing');
        button.style.display = 'none';
        line.classList.add('colored');

    }
    else {
        
        elem.classList.remove('closing');
        
        $(elem).slideDown('slow');
        
        button.style.display = '';
        line.classList.remove('colored');

    }

}

/**
 * функция нажатия на кнопку "двустворчатая" в типах дверей
 * */
function doubleleaf() {
    
    let singleblock = document.getElementById('singleleafdoor');
    let doubleblock = document.getElementById('doubleleafdoor');
    let singlebutton = document.getElementById('singleleafdoorbutton');
    let doublebutton = document.getElementById('doubleleafdoorbutton');
    
    if (doublebutton.classList.contains('active')) {

    }
    else {
        
        $(singleblock).slideUp('slow');
        $(doubleblock).slideDown('slow');
        
        doublebutton.classList.add('active');
        doubleblock.classList.add('active');
        singleblock.classList.remove('active');
        singlebutton.classList.remove('active');

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "одностворчатая" в типах дверей
 */
function singleleaf() {
    
    let singleblock = document.getElementById('singleleafdoor');
    let doubleblock = document.getElementById('doubleleafdoor');
    let singlebutton = document.getElementById('singleleafdoorbutton');
    let doublebutton = document.getElementById('doubleleafdoorbutton');
    
    if (singlebutton.classList.contains('active')) {

    }
    else {
        
        $(doubleblock).slideUp('slow');
        $(singleblock).slideDown('slow');
        
        singlebutton.classList.add('active');
        singleblock.classList.add('active');
        doubleblock.classList.remove('active');
        doublebutton.classList.remove('active');

    }

    setConfig();

    buildCheck();

}

/**
 * функция выбора типов дверей по рисункам (с фрамугами, арочная, обычная и т.д.)
 * @param {*} button нажимаемая иконка
 */
function leafdooritems(button) {
    
    let btn = document.getElementById(button);
    let buttons = document.querySelectorAll('#step__1 .furniture-item--big');
    let glasscol = document.getElementById('checkbox-1step-glass-col');
    let glasscol2 = document.getElementById('checkbox-1step-extra-grid');
    let block = document.getElementById('singleleafdoor');
    
    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'))
        
        btn.classList.add('active');
        
        if (button === 'slditem2' || button === 'slditem3' || button === 'dlditem3' || button === 'dlditem2') {
            
            glasscol.style.display = '';
            glasscol2.style.display = '';

        }
        else {
            
            glasscol.style.display = 'none';
            glasscol2.style.display = 'none';

        }

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "Классика" во 2-ом шаге, в стиле
 */
function outdoorStylesClassic() {
    
    const btn1 = document.getElementById('btn2step1');
    const btn2 = document.getElementById('btn2step2');
    const btn3 = document.getElementById('btn2step3');
    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const firstmodel = document.getElementById('cfg-firstmodel');

    let numbermetcol = document.querySelector('#close-button-2step-2 .step');

    if (btn1.classList.contains('active')) {

    }
    else {
        
        btn1.classList.add('active');
        btn2.classList.remove('active');
        btn3.classList.remove('active');
        blockbaguette.style.display = 'none';
        blockgrid.style.display = 'none';
        blockglass.style.display = 'none';
        numbermetcol.textContent = '2.   ';
        
        if (firstmodel.classList.contains('active')) {
            
            cfgDoorModel2();
            cfgDoorModel1();

        }
        else {
            
            cfgDoorModel1();
            cfgDoorModel2();
            indoorStylesMilled();

        }

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "С багетом" во 2-ом шаге, в стиле
 */
function outdoorStylesBaguette() {
    
    const btn1 = document.getElementById('btn2step1');
    const btn2 = document.getElementById('btn2step2');
    const btn3 = document.getElementById('btn2step3');
    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const firstmodel = document.getElementById('cfg-firstmodel');

    let numbermetcol = document.querySelector('#close-button-2step-2 .step');
    
    if (btn2.classList.contains('active')) {

    }
    else {
        
        btn2.classList.add('active');
        btn1.classList.remove('active');
        btn3.classList.remove('active');
        blockbaguette.style.display = '';
        blockgrid.style.display = 'none';
        blockglass.style.display = 'none';
        numbermetcol.textContent = '3.   ';
        
        if (firstmodel.classList.contains('active')) {
            
            cfgDoorModel2();
            cfgDoorModel1();

        }
        else {
            
            cfgDoorModel1();
            cfgDoorModel2();
            indoorStylesMilled();

        }

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "Со стеклом" во 2-ом шаге, в стиле
 */
function outdoorStylesGlazed() {
    
    const btn1 = document.getElementById('btn2step1');
    const btn2 = document.getElementById('btn2step2');
    const btn3 = document.getElementById('btn2step3');

    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    let indoorbtn1 = document.getElementById('checkbox-2step-extra-grid');
    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockstyle2 = document.getElementById('checkbox-3step-style-default');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');

    let numbermetcol = document.querySelector('#close-button-2step-2 .step');
    let numbermetcolstep3 = document.querySelector('#checkbox-3step-metcol .step');
    let numberdoorcol = document.querySelector('#checkbox-3step-tree-color .step');

    if (btn3.classList.contains('active')) {

    }
    else {
        
        btn3.classList.add('active');
        btn2.classList.remove('active');
        btn1.classList.remove('active');
        blockbaguette.style.display = 'none';
        blockgrid.style.display = '';
        blockglass.style.display = '';
        blockglazedstyle.style.display = '';
        blockstyle1.style.display = 'none';
        blockmirror.style.display = 'none';
        blockmilled.style.display = 'none';
        blocktreecolor.style.display = '';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = '';
        blockstyle2.style.display = 'none';

        numbermetcol.textContent = '3.   ';
        numbermetcolstep3.textContent = '3.   ';
        numberdoorcol.textContent = '2.   ';

    }

    setConfig();

    buildCheck();

}

/**
 * функция выбора цвета металла во 2 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function metalColIn(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#step__2 .met-col .texture-item');
    
    if (button.classList.contains('active')) {
       
    }
    else {
        
        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');
        
    }

    setConfig();

    buildCheck();

}

/**
 * функция выбора цвета металла в 3 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function metalColOut(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#checkbox-3step-metcol .texture-item');
    
    if (button.classList.contains('active')) {

    }
    else {
        
        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}
function doorColOut(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#aria-step3-tree-color .texture-item');
    
    if (button.classList.contains('active')) {

    }
    else {
        
        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function typeMilledOutClassic(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#classicmilled-block .milling-item');
    
    if (button.classList.contains('active')) {

    }
    else {
        
        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function typeMilledOutModern(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#modernmilled-block .milling-item');
    
    if (button.classList.contains('active')) {

    }
    else {
        
        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function typeMirrorIn(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#aria-step3-mirror .milling-item');
    
    if (button.classList.contains('active')) {

    }
    else {
        
        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function typeMirrorColIn(butid) {
    
    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#checkbox-3step-mirror .texture-item');
    
    if (button.classList.contains('active')) {

    }
    else {

        elemens.forEach(b => b.classList.remove('active'));
        
        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function chooseGlassCol(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__2 .glass-col .texture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function chooseExtraGrid(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__2 .extra-grid .texture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function chooseFrameGlassCol(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__1 .glass-frame-col .texture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function togglerGridStep2() {
    
    let toggler = document.querySelector('#step__2 .checkbox-pseudo-input');
    let block = document.getElementById('aria-step2-extra-grid');
    let line = document.getElementById('checkbox-2step-extra-grid');
    
    if (toggler.classList.contains('checked')) {
        
        $(block).slideUp('slow');
        
        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');

    }
    else {
        
        $(block).slideDown('slow');
        
        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');

    }

    setConfig();

    buildCheck();

}

function togglerGridStep1() {
    
    let toggler = document.querySelector('#step__1 .checkbox-pseudo-input');
    let block = document.getElementById('aria-step1-extra-grid');
    let line = document.getElementById('checkbox-1step-extra-grid');
    
    if (toggler.classList.contains('checked')) {
        
        $(block).slideUp('slow');
        
        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');

    }
    else {
        
        $(block).slideDown('slow');
        
        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function lockNumber(butid) {
    
    btn = document.getElementById(butid);
    block1 = document.getElementById('lock-group-body1');
    block2 = document.getElementById('lock-group-body2');
    btns = document.querySelectorAll('#step__4 .lock-system .tab');
    lockbtns = document.querySelectorAll('#step__4 .lock-group .cfg-locksystem ');

    if (btn.classList.contains('active')) {

    }
    else {
        
        btns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        if (butid == 'lockbtn1') {

            block1.style.display = '';
            block2.style.display = 'none';
            
            lockItems('cfg-lock-item1');

            
        }
        else {
            
            block1.style.display = 'none';
            block2.style.display = '';
            
            lockbtns.forEach(b => b.classList.remove('active'));
            
            lockItems('cfg-lock-item7');

        }

    }

    setConfig();

    buildCheck();

}

function lockItems(butid) {
    
    btn = document.getElementById(butid);
    btns = document.querySelectorAll('#step__4 .lock-group .cfg-locksystem ');
    image = document.querySelector('#step__4 .cfg-locksystem-parts-pictures-item > img');
    image2 = document.querySelector('#step__4 #lock-group-body2 .cfg-locksystem-parts-pictures-item > img');
    keytext = document.querySelector('#step__4 #lock-group-body1 .cfg-locksystem-parts-pictures-item-text');
    keyimage = document.querySelector('#step__4 #lock-group-body1 .cfg-locksystem-parts-pictures-item:last-child > img');
    keytext2 = document.querySelector('#step__4 #lock-group-body2 .cfg-locksystem-parts-pictures-item-text');
    keyimage2 = document.querySelector('#step__4 #lock-group-body2 .cfg-locksystem-parts-pictures-item:last-child > img');

    if (btn.classList.contains('active')){
    
    }
    else {
        
        btns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        if (butid == 'cfg-lock-item1') {
            
            image.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/ea8116a199873c4a698620afd79c9c1e.png');
            keytext.textContent = 'Сувальдный ключ';
            keyimage.setAttribute('src', 'https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png');

        }
        else if (butid == 'cfg-lock-item2') {
            
            image.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/ea8116a199873c4a698620afd79c9c1e.png');
            keytext.textContent = 'Сувальдный ключ';
            keyimage.setAttribute('src', 'https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png');

        }
        else if (butid == 'cfg-lock-item3')  {
            
            image.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/31b9fef1d16aca77fa5c791476c68c88.png');
            keytext.textContent = 'Сувальдный ключ';
            keyimage.setAttribute('src', 'https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png');

        }
        else if (butid == 'cfg-lock-item4')  {
            
            image.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/5270ef94f97b5d3cd799359e23a04e7e.png');
            keytext.textContent = 'Цилиндровый ключ';
            keyimage.setAttribute('src', '	https://portalle.ru/assets/img/design/configurator/lock/key_cylinder.png');

        }
        else if (butid == 'cfg-lock-item5')  {
            
            image.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/b4b9d7f9cb52eb48af33a75980160225.png');
            keytext.textContent = 'Цилиндровый ключ';
            keyimage.setAttribute('src', '	https://portalle.ru/assets/img/design/configurator/lock/key_cylinder.png');

        }
        else if (butid == 'cfg-lock-item6')  {
            
            image.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/8408c535a534d7ca12e69cf7fcdbf48e.png');
            keytext.textContent = 'Цилиндровый ключ';
            keyimage.setAttribute('src', '	https://portalle.ru/assets/img/design/configurator/lock/key_cylinder.png');

        }
        else if (butid == 'cfg-lock-item7')  {
            
            image2.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/047b74ec6908479dd706bb8c7cbbdb75.png');
            keytext2.textContent = 'Сувальдный ключ';
            keyimage2.setAttribute('src', 'https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png');

        }
        else if (butid == 'cfg-lock-item8')  {
            
            image2.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/b9bf828fe5ad6f443aa051e8ee1d05da.png');
            keytext2.textContent = 'Цилиндровый ключ';
            keyimage2.setAttribute('src', '	https://portalle.ru/assets/img/design/configurator/lock/key_cylinder.png');

        }
        else if (butid == 'cfg-lock-item9')  {
            
            image2.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/bb35c0af2c0e9094b653c5a0173da4ae.png');
            keytext2.textContent = 'Цилиндровый ключ';
            keyimage2.setAttribute('src', '	https://portalle.ru/assets/img/design/configurator/lock/key_cylinder.png');

        }
        else if (butid == 'cfg-lock-item10')  {
            
            image2.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/06e69b929ae824ff94112f982332d654.png');
            keytext2.textContent = 'Сувальдный ключ';
            keyimage2.setAttribute('src', 'https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png');

        }
        else if (butid == 'cfg-lock-item11')  {
            
            image2.setAttribute('src', 'https://portalle.ru/storage/cfg-door-extend-locks/c8d0eea0c33b9cd4e9712cc3d20831b2.png');
            keytext2.textContent = 'Цилиндровый ключ';
            keyimage2.setAttribute('src', '	https://portalle.ru/assets/img/design/configurator/lock/key_cylinder.png');
        
        }

    }

    setConfig();

    buildCheck();

}


function furnitureCol(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__4 .furniture-color-circle .texture-item');

    //фото ручек
    img1 = document.getElementById('furn-item-img-1');
    img2 = document.getElementById('furn-item-img-2');
    img3 = document.getElementById('furn-item-img-3');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

        if (butid == 'furn-col-1'){
            
            img1.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/405f0c310183529e5a0ee21d62ad41a0.jpeg");');
            img2.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/0c67eacfbb1d0f3b533d8df147f7122f.jpeg");');
            img3.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/c7481eb76c5db94ed8ce063be475be46.jpeg");');
        
        }
        else if (butid == 'furn-col-2') {
            
            img1.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/793caede410da560155d2ba550338874.jpeg");');
            img2.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/92d2f3985afd2eeaa807da54e953867f.jpeg");');
            img3.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/6dcf40e364ab2f2b37279c3d94c65444.jpeg");');
        
        }
        else if (butid == 'furn-col-3') {
            
            img1.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/2544736585f1cddc16c8cbfe27b8817f.jpeg");');
            img2.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/6ed5eb1fa8a436c37c25229ded78d61b.jpeg");');
            img3.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/1724fe7b018d1bcc951049e83a3f9c0c.jpeg");');
        
        }
        else if (butid == 'furn-col-4') {
            
            img1.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/2e586e77c191c7b4840b975cfed9f2cf.jpeg");');
            img2.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/f256e908e2618c457826b576852d8a7f.jpeg");');
            img3.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/b28ae685acb07b5a60b4a128dd937679.jpeg");');
        
        }
        else if (butid == 'furn-col-5') {
            
            img1.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/5357a22cc159565dd292cf69a6122a03.jpeg");');
            img2.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/0f304614db74034148464832aa002655.jpeg");');
            img3.setAttribute('style', 'background-image: url("https://portalle.ru/storage/cfg-door-extend-furniture/12c6ffab9b41682b0789ef45246a3b77.jpeg");');
        
        } 
    
    }

    setConfig();

    buildCheck();

}

function furnitureType(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__4 .furn-type .furniture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function chooseHinges(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__4 .door-hinges .furniture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function togglerListStep4() {
    
    let toggler = document.querySelector('#step__4 .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-plate');
    let line = document.getElementById('checkbox-4step-plate');
    
    if (toggler.classList.contains('checked')) {
        
        $(block).slideUp('slow');
        
        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');

    }
    else {
        
        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function furnitureListType(butid) {
    
    let btn = document.getElementById(butid); 
    let buttons = document.querySelectorAll('#step__4 .list-type .furniture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function furnitureDoorStepType(butid) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__4 .furn-doorstep .furniture-item');

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function togglerListStep4() {
    
    let toggler = document.querySelector('#step__4 .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-plate');
    let line = document.getElementById('checkbox-4step-plate');
    
    if (toggler.classList.contains('checked')) {
        
        $(block).slideUp('slow');
        
        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');

    }
    else {
        
        $(block).slideDown('slow');
        
        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function furnItem(butid, css) {
    
    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll(css);

    if (btn.classList.contains('active')) {

    }
    else {
        
        buttons.forEach(b => b.classList.remove('active'));
        
        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function popupWindowOpen(id) {
    
    popup = document.getElementById(id);
    
    popup.setAttribute('style', 'display: ""');

}

function popupWindowClose(id) {
    
    popup = document.getElementById(id);
    
    popup.setAttribute('style', 'display: none');

}

function PrintDiv(data) {
    
    var mywindow = window.open();
    var is_chrome = Boolean(mywindow.chrome);
    
    mywindow.document.write(data);

   if (is_chrome) {
     
     setTimeout(function() { // wait until all resources loaded 
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10
        mywindow.print(); // change window to winPrint
        mywindow.close(); // change window to winPrint
     }, 250);

   }
   else {
        
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

   }

    return true;

}

/**
 * функция нажатия на кнопку "фрезерованная" в 3-м шаге, в стиле
 */
 function indoorStylesMilled() {
    
    const btn1 = document.getElementById('btn3step1-1');
    const btn2 = document.getElementById('btn3step1-2');
    const btn3 = document.getElementById('btn3step1-3');

    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockstyle2 = document.getElementById('checkbox-3step-style-default');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');

    let numbermetcol = document.querySelector('#checkbox-3step-metcol .step');
    let numberdoorcol = document.querySelector('#checkbox-3step-tree-color .step');

    if (btn1.classList.contains('active')) {

    }
    else {
        
        btn1.classList.add('active');
        btn2.classList.remove('active');
        btn3.classList.remove('active');
        blockstyle1.style.display = '';
        blockmirror.style.display = 'none';
        blockmilled.style.display = '';
        blocktreecolor.style.display = '';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = 'none';

        numbermetcol.textContent = '4.   ';
        numberdoorcol.textContent = '3.   ';
        numberdoorcol.textContent = '3.   ';

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "панель гладкая" в 3-м шаге, в стиле
 */
 function indoorStylesPanel() {
    
    const btn1 = document.getElementById('btn3step1-1');
    const btn2 = document.getElementById('btn3step1-2');
    const btn3 = document.getElementById('btn3step1-3');
    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockstyle2 = document.getElementById('checkbox-3step-style-default');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');

    let numbermetcol = document.querySelector('#checkbox-3step-metcol .step');
    let numberdoorcol = document.querySelector('#checkbox-3step-tree-color .step');

    if (btn2.classList.contains('active')) {

    }
    else {
        
        btn2.classList.add('active');
        btn1.classList.remove('active');
        btn3.classList.remove('active');
        blockstyle1.style.display = '';
        blockmirror.style.display = 'none';
        blockmilled.style.display = 'none';
        blocktreecolor.style.display = '';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = 'none';

        numbermetcol.textContent = '3.   ';
        numberdoorcol.textContent = '2.   ';

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "с зеркалом" в 3-м шаге, в стиле
 */
 function indoorStylesMirror() {
    
    const btn1 = document.getElementById('btn3step1-1');
    const btn2 = document.getElementById('btn3step1-2');
    const btn3 = document.getElementById('btn3step1-3');
    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockstyle2 = document.getElementById('checkbox-3step-style-default');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');

    let numbermetcol = document.querySelector('#checkbox-3step-metcol .step');
    let numberdoorcol = document.querySelector('#checkbox-3step-tree-color .step');

    if (btn3.classList.contains('active')) {

    }
    else {
        
        btn3.classList.add('active');
        btn1.classList.remove('active');
        btn2.classList.remove('active');
        blockstyle1.style.display = '';
        blockmirror.style.display = '';
        blockmilled.style.display = 'none';
        blocktreecolor.style.display = '';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = 'none';

        numbermetcol.textContent = '4.   ';
        numberdoorcol.textContent = '3.   ';

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "современная" в типах фрезеровки в 3-м шаге
 * */
 function modernmilled() {
    
    let classicblock = document.getElementById('classicmilled-block');
    let modernblock = document.getElementById('modernmilled-block');
    let classicbutton = document.getElementById('classicmilled-btn');
    let modernbutton = document.getElementById('modernmilled-btn');
    
    if (modernbutton.classList.contains('active')) {

    }
    else {
        
        $(classicblock).slideUp('slow');
        $(modernblock).slideDown('slow');
        
        modernbutton.classList.add('active');
        modernblock.classList.add('active');
        classicblock.classList.remove('active');
        classicbutton.classList.remove('active');

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "классическая" в типах фрезеровки в 3-м шаге
 */
function classicmilled() {
    
    let classicblock = document.getElementById('classicmilled-block');
    let modernblock = document.getElementById('modernmilled-block');
    let classicbutton = document.getElementById('classicmilled-btn');
    let modernbutton = document.getElementById('modernmilled-btn');
    
    if (classicbutton.classList.contains('active')) {

    }
    else {
        
        $(modernblock).slideUp('slow');
        $(classicblock).slideDown('slow');
        
        classicbutton.classList.add('active');
        classicblock.classList.add('active');
        modernblock.classList.remove('active');
        modernbutton.classList.remove('active');

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "фрезерованная панель с зеркалом" в типах стекла в 3-м шаге
 * */
 function panelmirror() {
    
    let milledblock = document.getElementById('milled-mirror-block');
    let panelblock = document.getElementById('panel-mirror-block');
    let milledbutton = document.getElementById('milled-mirror-btn');
    let panelbutton = document.getElementById('panel-mirror-btn');
    
    if (panelbutton.classList.contains('active')) {

    }
    else {
        
        $(milledblock).slideUp('slow');
        $(panelblock).slideDown('slow');
        
        panelbutton.classList.add('active');
        panelblock.classList.add('active');
        milledblock.classList.remove('active');
        milledbutton.classList.remove('active');
        
        typeMirrorIn('btn-mirrorin9');
        typeMirrorColIn('btn-mirrorcolin4');

    }

    setConfig();

    buildCheck();

}

/**
 * функция нажатия на кнопку "гладкая панель с зеркалом" в типах стекла в 3-м шаге
 */
function milledmirror() {
    
    let milledblock = document.getElementById('milled-mirror-block');
    let panelblock = document.getElementById('panel-mirror-block');
    let milledbutton = document.getElementById('milled-mirror-btn');
    let panelbutton = document.getElementById('panel-mirror-btn');
    
    if (milledbutton.classList.contains('active')) {

    }
    else {
        
        $(panelblock).slideUp('slow');
        $(milledblock).slideDown('slow');
        
        milledbutton.classList.add('active');
        milledblock.classList.add('active');
        panelblock.classList.remove('active');
        panelbutton.classList.remove('active');
        
        typeMirrorIn('btn-mirrorin1');
        typeMirrorColIn('btn-mirrorcolin1');
    
    }

    setConfig();

    buildCheck();

}

function togglerCloserStep6() {
    
    let toggler = document.querySelector('#checkbox-6step-closer .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-closer');
    let line = document.getElementById('checkbox-6step-closer');
    
    if (toggler.classList.contains('checked')) {
        
        $(block).slideUp('slow');
        
        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');

    }
    else {
        
        $(block).slideDown('slow');
        
        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function togglerGridStep6() {
    
    let toggler = document.querySelector('#checkbox-6step-ventil-grate .checkbox-pseudo-input');
    let block = document.getElementById('aria-step6-ventil-grate');
    let line = document.getElementById('checkbox-6step-ventil-grate');
    
    if (toggler.classList.contains('checked')) {
        
        $(block).slideUp('slow');
        
        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');

    }
    else {
        
        $(block).slideDown('slow');
        
        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
    
    }

    setConfig();

    buildCheck();

}

function popupGetCallNow() {
    
    const nowbtn = document.querySelector('.popup-btn-now');
    const thenbtn = document.querySelector('.popup-btn-then');
    const nowblock = document.querySelector('.popup__call-form-inner.now');
    const thenblock = document.querySelector('.popup__call-form-inner.then');

    if (nowbtn.classList.contains('active')) {

    }
    else {
        
        nowbtn.classList.add('active');
        thenbtn.classList.remove('active');
        nowblock.style.display = '';
        thenblock.style.display = 'none';

    }

    setConfig();

    buildCheck();

}

function popupGetCallThen() {
    
    const nowbtn = document.querySelector('.popup-btn-now');
    const thenbtn = document.querySelector('.popup-btn-then');
    const nowblock = document.querySelector('.popup__call-form-inner.now');
    const thenblock = document.querySelector('.popup__call-form-inner.then');

    if (thenbtn.classList.contains('active')) {

    }
    else {
        
        thenbtn.classList.add('active');
        nowbtn.classList.remove('active');
        thenblock.style.display = '';
        nowblock.style.display = 'none';

    }

    setConfig();

    buildCheck();

}

$(document).ready(function() {
    
    setConfig();

    buildCheck();

});
