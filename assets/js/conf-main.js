function setConfig() {
    let door_cfg = [];
    let price;

    $('#cfg-options [data-variable-name]').each(function (index, value) {

        if ($(value).hasClass('active')) {

            door_cfg[$(value).attr('data-variable-name')] = { value: $(value).attr('data-variable-value'), price: $(value).attr('data-price'), image: $(value).attr('data-image'), order: $(value).attr('data-order') };

        }

    });

    let toAssociative = (keys, values) =>

        values.reduce((acc, cv) => {

            acc[acc.shift()] = cv

            return acc;

        }, keys);

    let fromAssociative = (assArr) => ({ ...assArr });

    let serialized = JSON.stringify(fromAssociative(door_cfg));

    localStorage.setItem('door_cfg', serialized);

    let o = JSON.parse(localStorage.getItem('door_cfg'));

    let restored = toAssociative(Object.keys(o), Object.values(o));

}

function getConfigUrl() {

    let out = [];

    let toAssociative = (keys, values) =>

        values.reduce((acc, cv) => {

            acc[acc.shift()] = cv

            return acc;

        }, keys);

    let o = JSON.parse(localStorage.getItem('door_cfg'));

    let restored = toAssociative(Object.keys(o), Object.values(o));

    encodeDataToURL = (data) => {
        return Object
            .keys(data)
            .map(value => `${value}=${encodeURIComponent(data[value].value)}`)
            .join('&');
    }

    let cfg_url = '&door_cfg=1&' + encodeDataToURL(restored);

    $('#door-cfg-download, #door-cfg-download-btn').attr('href', '/wp-content/themes/mercato/download_door_cfg.php?door_cfg=' + localStorage.getItem('door_cfg'));
    $('#door-cfg-download-btn1').attr('href', '/wp-content/themes/mercato/download_door_cfg_pdf.php?door_cfg=' + localStorage.getItem('door_cfg'));
    $('#door-cfg-print').attr('href', '/wp-content/themes/mercato/print_door_cfg.php?door_cfg=' + localStorage.getItem('door_cfg'));
    $('#popup__share #vk-share').attr('href', 'http://vk.com/share.php?url=https://portamia.ru/?page_id=10&' + cfg_url);
    $('#popup__share #whatsapp-share').attr('href', 'https://api.whatsapp.com/send?text=https://portamia.ru/?page_id=10&' + cfg_url);
    $('#popup__share #ok-share').attr('href', 'https://connect.ok.ru/offer?url=https://portamia.ru/?page_id=10&' + cfg_url);
    $('#popup__share input[name="download_link"]').val('https://portamia.ru/?page_id=10&' + cfg_url);

}

function getDoorPictures() {

    let door_cfg = localStorage.getItem('door_cfg');
    let door_left = '';
    let door_right = '';

    door_cfg = JSON.parse(door_cfg);

    var picture_url = 'https://portamia.ru/door-cfg-generator-images/door';

    $.each(door_cfg, function (key, val) {

        // console.log(key + ' : ' + val.value);

        if (val.value != 'size-item1-step_6' && val.value != 'size-item2-step_6' && val.value != 'size-item3-step_6' && val.value != 'size-item4-step_6' && val.value != 'met-item1-step_6' && val.value != 'met-item2-step_6') {

            picture_url = picture_url + '/' + val.value;
            console.log(picture_url);
        }


    });
    console.log(picture_url);
    $.ajax({
        url: '/wp-content/themes/mercato/get_indoor.php',
        method: 'GET',
        data: { door_cfg: localStorage.getItem('door_cfg') },
        success: function (response_indoor) {

            $.ajax({
                url: '/wp-content/themes/mercato/get_outdoor.php',
                method: 'GET',
                data: { door_cfg: localStorage.getItem('door_cfg') },
                success: function (response_outdoor) {

                    $('img.door-preview-indoor').attr('src', response_indoor);
                    $('img.door-preview-outdoor').attr('src', response_outdoor);

                }

            });

        }

    });

}

function buildCheck() {

    let toAssociative = (keys, values) =>

        values.reduce((acc, cv) => {

            acc[acc.shift()] = cv

            return acc;

        }, keys);

    let o = JSON.parse(localStorage.getItem('door_cfg'));

    let restored = toAssociative(Object.keys(o), Object.values(o));

    //console.log('restored:', restored);

    $.ajax({
        url: '/wp-content/themes/mercato/check_build.php',
        method: 'POST',
        //dataType: 'json',
        data: { door_cfg: localStorage.getItem('door_cfg') },
        success: function (response) {

            $('#aria-step7-cheque').html(response);

            getConfigUrl();

            getDoorPictures();

        }

    });

    $.ajax({
        url: '/wp-content/themes/mercato/check_build_popup.php',
        method: 'POST',
        //dataType: 'json',
        data: { door_cfg: localStorage.getItem('door_cfg') },
        success: function (response) {

            $('#popup__cheque .accordion-content').html(response);

        }

    });

    let door_cfg = localStorage.getItem('door_cfg');

    door_cfg = JSON.parse(door_cfg);

    let total_cost = 0;
    let door_model = 'Termo';

    $.each(door_cfg, function (key, val) {

        total_cost = parseInt(total_cost) + parseInt(val.price);

    });

    if (door_cfg.model.value == 1) {

        door_model = 'Guard Pro'

    }

    if (door_cfg.model.value == 2) {

        door_model = 'Guard Wood'

    }

    let total_cost_new = total_cost - (parseInt(total_cost) / 100 * 10);

    $('#cfg-total-cost').text(total_cost + ' ₽');
    $('#cfg-price-group-cost-old').text(total_cost + ' ₽');
    $('#cfg-price-group-cost-current').text(total_cost_new + ' ₽');

    $('#popup__share .popup__share-cost-old, #popup__toemail .popup__share-cost-old').text(total_cost + ' ₽');
    $('#popup__share .popup__share-cost-current, #popup__toemail .popup__share-cost-current').text(total_cost_new + ' ₽');

    $('#popup__get-order .popup__share-cost-old, #popup__toemail .popup__share-cost-old').text(total_cost + ' ₽');
    $('#popup__get-order .popup__share-cost-current, #popup__toemail .popup__share-cost-current').text(total_cost_new + ' ₽');

    $('#popup__share .popup__share-left .popup__share-title, #popup__toemail .popup__share-left .popup__share-title, #popup__get-order .popup__share-left .popup__share-title').text(door_model);

}

/**
 * кнопка выбора первой модели (guardpro)
 * */
function cfgDoorModel1() {

    let item2 = document.getElementById('cfg-firstmodel'); // guard wood
    let item1 = document.getElementById('cfg-secondmodel'); // guard pro

    let millingStyleBtn = document.getElementById('btn2step5'); // внеш. сторона - стиль - кнопка фрезеровка
    let fusingStyleBtn = document.getElementById('btn2step4'); // внеш. сторона - стиль - кнопка фьюзинг
    let baguetteStyleBtn = document.getElementById('btn2step2'); // внеш. сторона - стиль - кнопка рамка (багет)
    let defaultStyleBtn = document.getElementById('btn2step1'); // внеш. сторона - стиль - кнопка металл/мдф или панель гладкая
    let glazedStyleBtn = document.getElementById('btn2step3'); // внеш. сторона - стиль - кнопка остекление для металла
    let glazedPanelStyleBtn = document.getElementById('btn2step6'); // внеш. сторона - стиль - кнопка остекление для панели


    let doorColOutBlock = document.getElementById('checkbox-3step-tree-color'); // блок цвета панели для внутр. стороны
    let doorColOutdoorBlock = document.getElementById('checkbox-3step-tree-color-out'); // блок цвета панели для внешней стороны
    let doorColOutdoorBtns = document.querySelectorAll('#checkbox-3step-tree-color-out .texture-item'); // все кнопки-цвета в панели внешней



    if (item1.classList.contains('active')) {

    }
    else {
        document.querySelectorAll('#checkbox-2step-style .cfg-btn-group-wrapper > button').forEach(b => b.classList.remove('active'))
        indoorStylesPanel()
        outdoorStylesClassic();

        millingStyleBtn.style.display = 'none';
        baguetteStyleBtn.style.display = '';
        defaultStyleBtn.querySelector('span > em').textContent = 'Металл / МДФ';
        fusingStyleBtn.style.display = '';
        glazedStyleBtn.style.display = '';
        glazedPanelStyleBtn.style.display = 'none';

        doorColOutdoorBlock.style.display = 'none';
        doorColOutdoorBtns.forEach(e => e.classList.remove('active'));
        doorColOutBlock.querySelector('.accordion-head').textContent = 'Цвет и текстура';

        item1.classList.add('active');
        item2.classList.remove('active');



    }

    setConfig();

    buildCheck();

}







/**
 * кнопка выбора второй модели
 * */
function cfgDoorModel2() {

    let item2 = document.getElementById('cfg-firstmodel'); // guard wood
    let item1 = document.getElementById('cfg-secondmodel'); // guard pro

    let millingStyleBtn = document.getElementById('btn2step5'); // внеш. сторона - стиль - кнопка фрезеровка
    let fusingStyleBtn = document.getElementById('btn2step4'); // внеш. сторона - стиль - кнопка фьюзинг
    let baguetteStyleBtn = document.getElementById('btn2step2'); // внеш. сторона - стиль - кнопка рамка (багет)
    let defaultStyleBtn = document.getElementById('btn2step1'); // внеш. сторона - стиль - кнопка металл/мдф или панель гладкая
    let glazedStyleBtn = document.getElementById('btn2step3'); // внеш. сторона - стиль - кнопка остекление для металла
    let glazedPanelStyleBtn = document.getElementById('btn2step6'); // внеш. сторона - стиль - кнопка остекление для панели

    let doorColOutBlock = document.getElementById('checkbox-3step-tree-color'); // блок цвета панели для внутр. стороны
    let doorColOutdoorBlock = document.getElementById('checkbox-3step-tree-color-out'); // блок цвета панели для внешней стороны
    let doorColOutdoorBtns = document.querySelectorAll('#checkbox-3step-tree-color-out .texture-item'); // все кнопки-цвета в панели внешней


    if (item2.classList.contains('active')) {

    }
    else {

        document.querySelectorAll('#checkbox-2step-style .cfg-btn-group-wrapper > button').forEach(b => b.classList.remove('active'));
        indoorStylesPanel();
        outdoorStylesClassic();

        millingStyleBtn.style.display = '';
        baguetteStyleBtn.style.display = 'none';
        defaultStyleBtn.querySelector('span > em').textContent = 'Панель гладкая';
        fusingStyleBtn.style.display = 'none';
        glazedStyleBtn.style.display = 'none';
        glazedPanelStyleBtn.style.display = '';


        item2.classList.add('active');
        item1.classList.remove('active');

        doorColOutdoorBlock.style.display = '';
        doorColOutdoorBtns.forEach(e => e.classList.remove('active'));
        doorColOutdoor('btndoorcoloutdoor1');
        doorColOutBlock.querySelector('.accordion-head').textContent = 'Цвет и текстура (внутр. сторона)';

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
    let buttons = document.querySelectorAll('#aria-step1-number-leaf .furniture-item--big');
    let glasscol = document.getElementById('checkbox-1step-glass-col');
    let glasscol2 = document.getElementById('checkbox-1step-extra-grid');
    let block = document.getElementById('singleleafdoor');
    let cards = document.querySelectorAll('#aria-step1-glass-color .texture-item');

    if (btn.classList.contains('active')) {

    }
    else {

        buttons.forEach(b => b.classList.remove('active'))

        btn.classList.add('active');

        if (button === 'slditem2' || button === 'slditem3' || button === 'dlditem3' || button === 'dlditem2' || button === 'slditem4' || button === 'slditem5' || button === 'slditem9') {

            glasscol.style.display = '';
            glasscol2.style.display = '';
            cards.forEach(b => b.classList.remove('active'));
            cards[0].classList.add('active');

            if (button === 'slditem3') {
                document.querySelectorAll('.cfg-door .container-door-preview img').forEach(b => b.classList.add('circle'));
            } else {
                document.querySelectorAll('.cfg-door .container-door-preview img').forEach(b => b.classList.remove('circle'));
            }
        }
        else {

            glasscol.style.display = 'none';
            glasscol2.style.display = 'none';
            cards.forEach(b => b.classList.remove('active'));

            if (button === 'slditem3') {
                document.querySelectorAll('.cfg-door .container-door-preview img').forEach(b => b.classList.add('circle'));
            } else {
                document.querySelectorAll('.cfg-door .container-door-preview img').forEach(b => b.classList.remove('circle'));
            }
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
    const btn4 = document.getElementById('btn2step4');
    const btn5 = document.getElementById('btn2step5');
    const btn6 = document.getElementById('btn2step6');

    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const blockfusing = document.getElementById('checkbox-2step-fusing');
    const blockmilledout = document.getElementById('checkbox-2step-milled');
    const blockglasspan = document.getElementById('checkbox-2step-glass-type-panel');

    const firstmodel = document.getElementById('cfg-firstmodel');
    let baguettecards = document.querySelectorAll('#aria-step2-baguette .milling-item');
    let glasscards = document.querySelectorAll('#aria-step2-glass-type .milling-item');
    let glasscolcards = document.querySelectorAll('#aria-step2-glass-type .texture-item');
    const fusingcards = document.querySelectorAll('#aria-step2-fusing .milling-item');
    const milledoutcards = document.querySelectorAll('#aria-step2-milled .milling-item');
    let glasspancards = document.querySelectorAll('#aria-step2-glass-type-panel .milling-item');

    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');





    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


    if (btn1.classList.contains('active')) {

    }
    else {

        btn1.classList.add('active');
        btn2.classList.remove('active');
        btn3.classList.remove('active');
        btn4.classList.remove('active');
        btn5.classList.remove('active');
        btn6.classList.remove('active');

        blockbaguette.style.display = 'none';
        blockgrid.style.display = 'none';
        blockglass.style.display = 'none';
        blockfusing.style.display = 'none';
        blockmilledout.style.display = 'none';
        blockglasspan.style.display = 'none';

        baguettecards.forEach(b => b.classList.remove('active'));
        glasscards.forEach(b => b.classList.remove('active'));
        glasscolcards.forEach(b => b.classList.remove('active'));
        milledoutcards.forEach(b => b.classList.remove('active'));
        glasspancards.forEach(b => b.classList.remove('active'));

        blockmilled.style.display = 'none';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = 'none';
        blockstyle1.style.display = '';

        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));
        fusingcards.forEach(b => b.classList.remove('active'));



        indoorStylesMilled();
        typeMilledOutClassic("btn-milled-classic1");

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
    const btn4 = document.getElementById('btn2step4');
    const btn5 = document.getElementById('btn2step5');
    const btn6 = document.getElementById('btn2step6');

    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const blockfusing = document.getElementById('checkbox-2step-fusing');
    const blockmilledout = document.getElementById('checkbox-2step-milled');
    const blockglasspan = document.getElementById('checkbox-2step-glass-type-panel');

    const firstmodel = document.getElementById('cfg-secondmodel');
    let baguettecards = document.querySelectorAll('#aria-step2-baguette .milling-item');
    let glasscards = document.querySelectorAll('#aria-step2-glass-type .milling-item');
    let glasscolcards = document.querySelectorAll('#aria-step2-glass-type .texture-item');
    const fusingcards = document.querySelectorAll('#aria-step2-fusing .milling-item');
    const milledoutcards = document.querySelectorAll('#aria-step2-milled .milling-item');
    let glasspancards = document.querySelectorAll('#aria-step2-glass-type-panel .milling-item');


    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');


    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


    if (btn2.classList.contains('active')) {

    }
    else {

        btn2.classList.add('active');
        btn1.classList.remove('active');
        btn3.classList.remove('active');
        btn4.classList.remove('active');
        btn5.classList.remove('active');
        btn6.classList.remove('active');

        blockbaguette.style.display = '';
        blockgrid.style.display = 'none';
        blockglass.style.display = 'none';
        blockfusing.style.display = 'none';
        blockmilledout.style.display = 'none';
        blockglasspan.style.display = 'none';

        blockmilled.style.display = 'none';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = 'none';
        blockstyle1.style.display = '';


        glasscards.forEach(b => b.classList.remove('active'));
        glasscolcards.forEach(b => b.classList.remove('active'));
        glasspancards.forEach(b => b.classList.remove('active'));

        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));
        fusingcards.forEach(b => b.classList.remove('active'));
        milledoutcards.forEach(b => b.classList.remove('active'));

        baguettecards.forEach(b => b.classList.remove('active'));
        furnItem('baguette-item1', '#checkbox-2step-baguette .milling-item');
        typeMilledOutClassic("btn-milled-classic1");


        if (firstmodel.classList.contains('active')) {

            cfgDoorModel1();
            blockglazedstyle.style.display = 'none';

        }
        else {

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
    const btn4 = document.getElementById('btn2step4');
    const btn5 = document.getElementById('btn2step5');
    const btn6 = document.getElementById('btn2step6');

    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const blockfusing = document.getElementById('checkbox-2step-fusing');
    const blockmilledout = document.getElementById('checkbox-2step-milled');
    const blockglasspan = document.getElementById('checkbox-2step-glass-type-panel');

    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');


    let baguettecards = document.querySelectorAll('#aria-step2-baguette .milling-item');
    let glasscards = document.querySelectorAll('#aria-step2-glass-type .milling-item');
    let glasscolcards = document.querySelectorAll('#aria-step2-glass-type .texture-item');
    const fusingcards = document.querySelectorAll('#aria-step2-fusing .milling-item');
    const milledoutcards = document.querySelectorAll('#aria-step2-milled .milling-item');
    let glasspancards = document.querySelectorAll('#aria-step2-glass-type-panel .milling-item');



    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


    if (btn3.classList.contains('active')) {

    }
    else {

        btn3.classList.add('active');
        btn2.classList.remove('active');
        btn1.classList.remove('active');
        btn4.classList.remove('active');
        btn5.classList.remove('active');
        btn6.classList.remove('active');

        blockbaguette.style.display = 'none';
        blockfusing.style.display = 'none';
        blockgrid.style.display = '';
        blockglass.style.display = '';
        blockglazedstyle.style.display = '';
        blockstyle1.style.display = 'none';
        blockmirror.style.display = 'none';
        blockmilled.style.display = 'none';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = '';
        blockmilledout.style.display = 'none';
        blockglasspan.style.display = 'none';


        glasscards.forEach(b => b.classList.remove('active'));
        fusingcards.forEach(b => b.classList.remove('active'));
        baguettecards.forEach(b => b.classList.remove('active'));
        milledoutcards.forEach(b => b.classList.remove('active'));
        glasspancards.forEach(b => b.classList.remove('active'));

        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));


        furnItem('glass-type-item1', '#checkbox-2step-glass-type .milling-item');
        chooseGlassCol('glass-col-item1');





    }

    setConfig();

    buildCheck();

}





/**
 * функция нажатия на кнопку "Со стеклом" во 2-ом шаге, в стиле
 */
function outdoorStylesGlazedPanel() {

    const btn1 = document.getElementById('btn2step1');
    const btn2 = document.getElementById('btn2step2');
    const btn3 = document.getElementById('btn2step3');
    const btn4 = document.getElementById('btn2step4');
    const btn5 = document.getElementById('btn2step5');
    const btn6 = document.getElementById('btn2step6');

    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const blockfusing = document.getElementById('checkbox-2step-fusing');
    const blockmilledout = document.getElementById('checkbox-2step-milled');
    const blockglasspan = document.getElementById('checkbox-2step-glass-type-panel');

    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');


    let baguettecards = document.querySelectorAll('#aria-step2-baguette .milling-item');
    let glasscards = document.querySelectorAll('#aria-step2-glass-type .milling-item');
    let glasscolcards = document.querySelectorAll('#aria-step2-glass-type .texture-item');
    const fusingcards = document.querySelectorAll('#aria-step2-fusing .milling-item');
    const milledoutcards = document.querySelectorAll('#aria-step2-milled .milling-item');
    let glasspancards = document.querySelectorAll('#aria-step2-glass-type-panel .milling-item');



    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


    if (btn3.classList.contains('active')) {

    }
    else {

        btn6.classList.add('active');
        btn2.classList.remove('active');
        btn1.classList.remove('active');
        btn4.classList.remove('active');
        btn5.classList.remove('active');
        btn3.classList.remove('active');

        blockbaguette.style.display = 'none';
        blockfusing.style.display = 'none';
        blockgrid.style.display = '';
        blockglass.style.display = 'none';
        blockglazedstyle.style.display = '';
        blockstyle1.style.display = 'none';
        blockmirror.style.display = 'none';
        blockmilled.style.display = 'none';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = '';
        blockmilledout.style.display = 'none';
        blockglasspan.style.display = '';


        glasscards.forEach(b => b.classList.remove('active'));
        fusingcards.forEach(b => b.classList.remove('active'));
        baguettecards.forEach(b => b.classList.remove('active'));
        milledoutcards.forEach(b => b.classList.remove('active'));
        glasspancards.forEach(b => b.classList.remove('active'));

        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));


        furnItem('glass-type-panel-item1', '#checkbox-2step-glass-type-panel .milling-item')
        chooseGlassCol('glass-col-item1-panel');





    }

    setConfig();

    buildCheck();

}





function outdoorStylesFusing() {

    const btn1 = document.getElementById('btn2step1');
    const btn2 = document.getElementById('btn2step2');
    const btn3 = document.getElementById('btn2step3');
    const btn4 = document.getElementById('btn2step4');
    const btn5 = document.getElementById('btn2step5');
    const btn6 = document.getElementById('btn2step6');


    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const blockfusing = document.getElementById('checkbox-2step-fusing');
    const blockmilledout = document.getElementById('checkbox-2step-milled');
    const blockglasspan = document.getElementById('checkbox-2step-glass-type-panel');

    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');


    let baguettecards = document.querySelectorAll('#aria-step2-baguette .milling-item');
    let glasscards = document.querySelectorAll('#aria-step2-glass-type .milling-item');
    let glasscolcards = document.querySelectorAll('#aria-step2-glass-type .texture-item');
    let glasspancards = document.querySelectorAll('#aria-step2-glass-type-panel .milling-item');



    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');
    const fusingcards = document.querySelectorAll('#aria-step2-fusing .milling-item');
    const milledoutcards = document.querySelectorAll('#aria-step2-milled .milling-item');


    if (btn4.classList.contains('active')) {

    }
    else {

        btn4.classList.add('active');
        btn3.classList.remove('active');
        btn2.classList.remove('active');
        btn1.classList.remove('active');
        btn5.classList.remove('active');
        btn6.classList.remove('active');

        blockbaguette.style.display = 'none';
        blockgrid.style.display = 'none';
        blockglass.style.display = 'none';
        blockglazedstyle.style.display = 'none';
        blockfusing.style.display = '';

        blockstyle1.style.display = 'none';
        blockmirror.style.display = 'none';
        blockmilled.style.display = 'none';
        blockmetcol.style.display = '';
        blockglazedstyle.style.display = 'none';
        blockstyle1.style.display = '';
        blockmilledout.style.display = 'none';
        blockglasspan.style.display = 'none';

        baguettecards.forEach(b => b.classList.remove('active'));
        glasscolcards.forEach(b => b.classList.remove('active'));
        glasscards.forEach(b => b.classList.remove('active'));
        fusingcards.forEach(b => b.classList.remove('active'));
        glasspancards.forEach(b => b.classList.remove('active'));

        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));
        milledoutcards.forEach(b => b.classList.remove('active'));

        furnItem('fusing-item1', '#checkbox-2step-fusing .milling-item')






    }

    setConfig();

    buildCheck();

}


/**
 * функция нажатия на кнопку "Фрезеровка" во 2-ом шаге, в стиле
 */
function outdoorStylesMilling() {

    const btn1 = document.getElementById('btn2step1');
    const btn2 = document.getElementById('btn2step2');
    const btn3 = document.getElementById('btn2step3');
    const btn4 = document.getElementById('btn2step4');
    const btn5 = document.getElementById('btn2step5');
    const btn6 = document.getElementById('btn2step6');

    const blockmetallcol = document.getElementById('checkbox-2step-metcol');
    const blockbaguette = document.getElementById('checkbox-2step-baguette');
    const blockglass = document.getElementById('checkbox-2step-glass-type');
    const blockgrid = document.getElementById('checkbox-2step-extra-grid');
    const blockfusing = document.getElementById('checkbox-2step-fusing');
    const blockmilledout = document.getElementById('checkbox-2step-milled');
    const blockglasspan = document.getElementById('checkbox-2step-glass-type-panel');

    const blockstyle1 = document.getElementById('checkbox-3step-style1');
    const blockmirror = document.getElementById('checkbox-3step-mirror');
    const blockmilled = document.getElementById('checkbox-3step-milled');
    const blocktreecolor = document.getElementById('checkbox-3step-tree-color');
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');
    const milledoutcards = document.querySelectorAll('#aria-step2-milled .milling-item');


    let baguettecards = document.querySelectorAll('#aria-step2-baguette .milling-item');
    let glasscards = document.querySelectorAll('#aria-step2-glass-type .milling-item');
    let glasscolcards = document.querySelectorAll('#aria-step2-glass-type .texture-item');
    const fusingcards = document.querySelectorAll('#aria-step2-fusing .milling-item');
    let glasspancards = document.querySelectorAll('#aria-step2-glass-type-panel .milling-item');


    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


    if (btn5.classList.contains('active')) {

    }
    else {

        btn5.classList.add('active');
        btn2.classList.remove('active');
        btn1.classList.remove('active');
        btn4.classList.remove('active');
        btn3.classList.remove('active');
        btn6.classList.remove('active');

        blockbaguette.style.display = 'none';
        blockfusing.style.display = 'none';
        blockgrid.style.display = 'none';
        blockglass.style.display = 'none';
        blockglazedstyle.style.display = 'none';
        blockstyle1.style.display = '';
        blockmirror.style.display = 'none';
        blockmilled.style.display = '';
        blockmetcol.style.display = '';
        blockmilledout.style.display = '';
        blockglasspan.style.display = 'none';


        glasscards.forEach(b => b.classList.remove('active'));
        glasscolcards.forEach(b => b.classList.remove('active'));
        fusingcards.forEach(b => b.classList.remove('active'));
        baguettecards.forEach(b => b.classList.remove('active'));
        glasspancards.forEach(b => b.classList.remove('active'));

        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));
        blockglazedstyle.style.display = 'none';



        outclassicmilled();
        typeMilledOutClassicOutdoor('btn-milled-classic-outdoor1');





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

        metalColOut(`btncolout${butid.replace('btncol', '')}`);
    }

    setConfig();

    buildCheck();

}


/**
 * функция выбора цвета металла во 2 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function metalColInEmal(butid) {

    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#step__2 .tabs-group-body-2 .texture-item');

    if (button.classList.contains('active')) {

    }
    else {

        elemens.forEach(b => b.classList.remove('active'));

        button.classList.add('active');

        metalColOut(`btncolout${butid.replace('btncol', '')}`);
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
function metalColOutEmal(butid) {

    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('.tabs-group-body-2-indoor .texture-item');

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
function metalColTypeIn1() {

    console.log('1');

    let button1 = document.getElementById('btn-coltype-in-1');
    let button2 = document.getElementById('btn-coltype-in-2');

    let blockType1 = document.querySelector('.tabs-group-body-1');
    let blockType2 = document.querySelector('.tabs-group-body-2');

    let blockTypeEl1 = document.querySelectorAll('#aria-step2-metcol .tabs-group-body-1 .texture-group .texture-item');
    let blockTypeEl2 = document.querySelectorAll('#aria-step2-metcol .tabs-group-body-2 .texture-group .texture-item');

    if (button1.classList.contains('active')) {

    }
    else {

        button1.classList.add('active');
        button2.classList.remove('active');

        $(blockType2).slideUp('slow');
        $(blockType1).slideDown('slow');

        blockType1.classList.add('active');
        blockType2.classList.remove('active');

        blockTypeEl1.forEach(b => b.classList.remove('active'));
        blockTypeEl2.forEach(b => b.classList.remove('active'));

        metalColIn('btncol1');

        metalColTypeOut1();


    }

    setConfig();

    buildCheck();

}

/**
 * функция выбора цвета металла в 3 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function metalColTypeIn2() {

    let button1 = document.getElementById('btn-coltype-in-1');
    let button2 = document.getElementById('btn-coltype-in-2');

    let blockType1 = document.querySelector('.tabs-group-body-1');
    let blockType2 = document.querySelector('.tabs-group-body-2');

    let blockTypeEl1 = document.querySelectorAll('#aria-step2-metcol .tabs-group-body-1 .texture-group .texture-item');
    let blockTypeEl2 = document.querySelectorAll('#aria-step2-metcol .tabs-group-body-2 .texture-group .texture-item');

    if (button2.classList.contains('active')) {
        console.log('2 not done')
    }
    else {
        console.log('2  done')
        button2.classList.add('active');
        button1.classList.remove('active');

        $(blockType1).slideUp('slow');
        $(blockType2).slideDown('slow');

        blockType2.classList.add('active');
        blockType1.classList.remove('active');

        blockTypeEl1.forEach(b => b.classList.remove('active'));
        blockTypeEl2.forEach(b => b.classList.remove('active'));

        metalColInEmal('btncolem1');
        metalColTypeOut2();

    }

    setConfig();

    buildCheck();

}





/**
 * функция выбора цвета металла в 3 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function metalColTypeOut1() {

    console.log('1');

    let button1 = document.getElementById('btn-coltype-out-1');
    let button2 = document.getElementById('btn-coltype-out-2');

    let blockType1 = document.querySelector('.tabs-group-body-1-indoor');
    let blockType2 = document.querySelector('.tabs-group-body-2-indoor');

    let blockTypeEl1 = document.querySelectorAll('.tabs-group-body-1-indoor .texture-group .texture-item');
    let blockTypeEl2 = document.querySelectorAll('.tabs-group-body-2-indoor .texture-group .texture-item');

    if (button1.classList.contains('active')) {

    }
    else {

        button1.classList.add('active');
        button2.classList.remove('active');

        $(blockType2).slideUp('slow');
        $(blockType1).slideDown('slow');

        blockType1.classList.add('active');
        blockType2.classList.remove('active');

        blockTypeEl1.forEach(b => b.classList.remove('active'));
        blockTypeEl2.forEach(b => b.classList.remove('active'));

        metalColOut('btncolout1')
        metalColTypeIn1();

    }

    setConfig();

    buildCheck();

}

/**
 * функция выбора цвета металла в 3 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function metalColTypeOut2() {

    let button1 = document.getElementById('btn-coltype-out-1');
    let button2 = document.getElementById('btn-coltype-out-2');

    let blockType1 = document.querySelector('.tabs-group-body-1-indoor');
    let blockType2 = document.querySelector('.tabs-group-body-2-indoor');

    let blockTypeEl1 = document.querySelectorAll('.tabs-group-body-1-indoor .texture-group .texture-item');
    let blockTypeEl2 = document.querySelectorAll('.tabs-group-body-2-indoor .texture-group .texture-item');

    if (button2.classList.contains('active')) {
        console.log('2 not done')
    }
    else {
        console.log('2  done')
        button2.classList.add('active');
        button1.classList.remove('active');

        $(blockType1).slideUp('slow');
        $(blockType2).slideDown('slow');

        blockType2.classList.add('active');
        blockType1.classList.remove('active');

        blockTypeEl1.forEach(b => b.classList.remove('active'));
        blockTypeEl2.forEach(b => b.classList.remove('active'));

        metalColOutEmal('btncoloutem1')

        metalColTypeIn2();
    }

    setConfig();

    buildCheck();

}





/**
 * функция выбора цвета металла в 3 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function handlerType1() {

    console.log('1');

    let button1 = document.getElementById('btn-handler-1');
    let button2 = document.getElementById('btn-handler-2');

    let blockType1 = document.querySelector('.furniture-group.handler-type-1');
    let blockType2 = document.querySelector('.furniture-group.handler-type-2');

    let blockTypeEl1 = document.querySelectorAll('.furniture-group.handler-type-1 .furniture-item');
    let blockTypeEl2 = document.querySelectorAll('.furniture-group.handler-type-2 .furniture-item');

    if (button1.classList.contains('active')) {

    }
    else {

        button1.classList.add('active');
        button2.classList.remove('active');

        $(blockType2).slideUp('slow');
        $(blockType1).slideDown('slow');

        blockType1.classList.add('active');
        blockType2.classList.remove('active');

        blockTypeEl1.forEach(b => b.classList.remove('active'));
        blockTypeEl2.forEach(b => b.classList.remove('active'));

        furnitureType('furn-item-1');

    }

    setConfig();

    buildCheck();

}

/**
 * функция выбора цвета металла в 3 шаге
 * @param {id} butid id нажимаемой кнопки цвета
 */
function handlerType2() {

    let button1 = document.getElementById('btn-handler-1');
    let button2 = document.getElementById('btn-handler-2');

    let blockType1 = document.querySelector('.furniture-group.handler-type-1');
    let blockType2 = document.querySelector('.furniture-group.handler-type-2');

    let blockTypeEl1 = document.querySelectorAll('.furniture-group.handler-type-1 .furniture-item');
    let blockTypeEl2 = document.querySelectorAll('.furniture-group.handler-type-2 .furniture-item');

    if (button2.classList.contains('active')) {
        console.log('2 not done')
    }
    else {
        console.log('2  done')
        button2.classList.add('active');
        button1.classList.remove('active');

        $(blockType1).slideUp('slow');
        $(blockType2).slideDown('slow');

        blockType2.classList.add('active');
        blockType1.classList.remove('active');

        blockTypeEl1.forEach(b => b.classList.remove('active'));
        blockTypeEl2.forEach(b => b.classList.remove('active'));

        furnitureType('furn-item-6');
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

function doorColOutdoor(butid) {

    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#aria-step3-tree-color-out .texture-item');

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
    let elemens = document.querySelectorAll('#checkbox-3step-milled #classicmilled-block .milling-item');

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
    let elemens = document.querySelectorAll('#checkbox-3step-milled #modernmilled-block .milling-item');

    if (button.classList.contains('active')) {

    }
    else {

        elemens.forEach(b => b.classList.remove('active'));

        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}


function typeMilledOutClassicOutdoor(butid) {

    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#checkbox-2step-milled #classicmilledout-block .milling-item');

    if (button.classList.contains('active')) {

    }
    else {

        elemens.forEach(b => b.classList.remove('active'));

        button.classList.add('active');

    }

    setConfig();

    buildCheck();

}

function typeMilledOutModernOutdoor(butid) {

    let button = document.getElementById(butid);
    let elemens = document.querySelectorAll('#checkbox-2step-milled #modernmilledout-block .milling-item');

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
    let buttons = document.querySelectorAll('#step__1 .glass-col .texture-item');

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
    let buttons = document.querySelectorAll('#checkbox-2step-extra-grid .texture-item');

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

    let toggler = document.querySelector('#step__1 #checkbox-2step-extra-grid .checkbox-pseudo-input');
    let block = document.getElementById('aria-step2-extra-grid');
    let line = document.getElementById('checkbox-2step-extra-grid');

    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');

        document.querySelectorAll('#aria-step2-extra-grid .texture-item').forEach(b => b.classList.remove('active'));

    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');

        chooseExtraGrid('extra-grid-item1');

    }

    setConfig();

    buildCheck();

}

function togglerGridStep1() {

    let toggler = document.querySelector('#step__1 .checkbox-pseudo-input');
    let block = document.getElementById('aria-step1-extra-grid');
    let line = document.getElementById('checkbox-1step-extra-grid');
    let cards = document.querySelectorAll('#aria-step1-extra-grid .texture-item');

    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
    }

    setConfig();

    buildCheck();

}



function chooseExtraCornice(butid) {

    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__4 #aria-step2-extra-cornice .texture-item');

    if (btn.classList.contains('active')) {

    }
    else {

        buttons.forEach(b => b.classList.remove('active'));

        btn.classList.add('active');

    }

    setConfig();

    buildCheck();

}


function lockNumber(butid) {

    btn = document.getElementById(butid);
    block1 = document.getElementById('lock-group-body1');
    block2 = document.getElementById('lock-group-body2');
    btns = document.querySelectorAll('#step__5 .lock-system .tab');
    lockbtns = document.querySelectorAll('#step__5 .lock-group .cfg-locksystem ');

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
    btns = document.querySelectorAll('#step__5 .lock-group .cfg-locksystem ');
    image = document.querySelector('#step__5 .cfg-locksystem-parts-pictures-item > img');
    image2 = document.querySelector('#step__5 #lock-group-body2 .cfg-locksystem-parts-pictures-item > img');
    keytext = document.querySelector('#step__5 #lock-group-body1 .cfg-locksystem-parts-pictures-item-text');
    keyimage = document.querySelector('#step__5 #lock-group-body1 .cfg-locksystem-parts-pictures-item:last-child > img');
    keytext2 = document.querySelector('#step__5 #lock-group-body2 .cfg-locksystem-parts-pictures-item-text');
    keyimage2 = document.querySelector('#step__5 #lock-group-body2 .cfg-locksystem-parts-pictures-item:last-child > img');

    if (btn.classList.contains('active')) {

    }
    else {

        btns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        if (butid == 'cfg-lock-item1') {

            image.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/1/1.png');
            keytext.textContent = 'Сувальдный ключ';
            keyimage.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/2.png');

        }
        else if (butid == 'cfg-lock-item2') {

            image.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/1/2.png');
            keytext.textContent = 'Сувальдный ключ';
            keyimage.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/2.png');

        }
        else if (butid == 'cfg-lock-item3') {

            image.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/1/3.png');
            keytext.textContent = 'Цилиндровый ключ';
            keyimage.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/1.png');

        }
        else if (butid == 'cfg-lock-item4') {

            image.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/1/4.png');
            keytext.textContent = 'Цилиндровый ключ';
            keyimage.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/1.png');

        }
        else if (butid == 'cfg-lock-item5') {

            image2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/2/1.png');
            keytext2.textContent = 'Сувальдный ключ';
            keyimage2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/2.png');

        }
        else if (butid == 'cfg-lock-item6') {

            image2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/2/2.png');
            keytext2.textContent = 'Сувальдный ключ';
            keyimage2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/2.png');

        }
        else if (butid == 'cfg-lock-item7') {

            image2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/2/3.png');
            keytext2.textContent = 'Цилиндровый ключ';
            keyimage2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/1.png');

        }
        else if (butid == 'cfg-lock-item8') {

            image2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/2/4.png');
            keytext2.textContent = 'Цилиндровый ключ';
            keyimage2.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/1.png');

        }


    }

    setConfig();

    buildCheck();

}


function furnitureCol(butid) {

    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#step__5 .furniture-color-circle .texture-item');

    //фото ручек
    img1 = document.getElementById('furn-item-img-1');
    img2 = document.getElementById('furn-item-img-2');
    img3 = document.getElementById('furn-item-img-3');
    img4 = document.getElementById('furn-item-img-4');
    img5 = document.getElementById('furn-item-img-5');
    img6 = document.getElementById('furn-item-img-6');
    img7 = document.getElementById('furn-item-img-7');
    img8 = document.getElementById('furn-item-img-8');
    img9 = document.getElementById('furn-item-img-9');
    img10 = document.getElementById('furn-item-img-10');

    img3block = document.getElementById('furn-item-3');
    img6block = document.getElementById('furn-item-6');
    img7block = document.getElementById('furn-item-7');
    img8block = document.getElementById('furn-item-8');
    img9block = document.getElementById('furn-item-9');
    img10block = document.getElementById('furn-item-10');

    if (btn.classList.contains('active')) {

    }
    else {

        buttons.forEach(b => b.classList.remove('active'));

        btn.classList.add('active');

        if (butid == 'furn-col-1') {

            img1.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-1/col-1.webp");');
            img2.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-1.webp");');
            img3block.style.display = '';
            img3.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-3/col-1.webp");');
            img4.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-4/col-1.webp");');
            img5.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-5/col-1.webp");');
            img6block.style.display = "";
            img6.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-6/col-1.webp");');
            img7block.style.display = '';
            img7.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-7/col-1.webp");');
            img8block.style.display = '';
            img8.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-8/col-1.webp");');
            img9block.style.display = 'none';
            img10block.style.display = 'none';

            handlerType1();
            furnitureType('furn-item-1');

            document.getElementById('btn-handler-2').classList.remove('unfinished')
        }
        else if (butid == 'furn-col-2') {



            img1.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-1/col-2.webp");');
            img2.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-2.webp");');
            img3block.style.display = '';
            img3.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-3/col-2.webp");');
            img4.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-4/col-2.webp");');
            img5.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-5/col-2.webp");');
            img6.style.display = "";
            img6.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-6/col-2.webp");');
            img7block.style.display = 'none';
            img8block.style.display = 'none';
            img9block.style.display = '';
            img9.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-9/col-2.webp");');
            img10block.style.display = '';
            img10.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-10/col-2.webp");');

            handlerType1();
            furnitureType('furn-item-1');

            document.getElementById('btn-handler-2').classList.remove('unfinished')
        }
        else if (butid == 'furn-col-3') {

            img1.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-1/col-3.webp");');
            img2.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-3.webp");');
            img3block.style.display = 'none';
            img4.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-4/col-3.webp");');
            img5.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-5/col-3.webp");');
            img6block.style.display = "";
            img6.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-6/col-3.webp");');
            img7block.style.display = 'none';
            img8block.style.display = 'none';
            img9block.style.display = 'none';
            img10block.style.display = 'none';

            handlerType1();
            furnitureType('furn-item-1');

            document.getElementById('btn-handler-2').classList.remove('unfinished')
        }
        else if (butid == 'furn-col-4') {

            img1.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-1/col-4.webp");');
            img2.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-4.webp");');
            img3block.style.display = 'none';
            img4.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-4/col-4.webp");');
            img5.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-5/col-4.webp");');
            img6block.style.display = "";
            img6.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-6/col-4.webp");');
            img7block.style.display = 'none';
            img8block.style.display = 'none';
            img9block.style.display = 'none';
            img10block.style.display = 'none';

            handlerType1();
            furnitureType('furn-item-1');

            document.getElementById('btn-handler-2').classList.remove('unfinished')
        }
        else if (butid == 'furn-col-5') {

            img1.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-1/col-5.webp");');
            img2.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-5.webp");');
            img3block.style.display = '';
            img3.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-5.webp");');
            img4.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-4/col-5.webp");');
            img5.setAttribute('style', 'background-image: url("https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-5/col-5.webp");');
            img6block.style.display = "none";
            img7block.style.display = 'none';
            img8block.style.display = 'none';
            img9block.style.display = 'none';
            img10block.style.display = 'none';

            document.getElementById('btn-handler-2').classList.add('unfinished')

            handlerType1();
            furnitureType('furn-item-1');
        }

    }

    setConfig();

    buildCheck();

}

function furnitureType(butid) {

    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#aria-step4-handle-type .furniture-group .furniture-item');

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
    let buttons = document.querySelectorAll('#step__1 .door-hinges .furniture-item');

    if (btn.classList.contains('active')) {

    }
    else {

        buttons.forEach(b => b.classList.remove('active'));

        btn.classList.add('active');

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

function furnitureKnockerType(butid) {

    let btn = document.getElementById(butid);
    let buttons = document.querySelectorAll('#checkbox-4step-knocker .furniture-item');

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

    let toggler = document.querySelector('#checkbox-4step-plate .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-plate');
    let line = document.getElementById('checkbox-4step-plate');
    let cards = document.querySelectorAll('#aria-step4-plate .furniture-item');


    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
    }

    setConfig();

    buildCheck();

}

function togglerCorniceStep4() {

    let toggler = document.querySelector('#checkbox-2step-extra-cornice .checkbox-pseudo-input');
    let block = document.getElementById('aria-step2-extra-cornice');
    let line = document.getElementById('checkbox-2step-extra-cornice');
    let cards = document.querySelectorAll('#aria-step2-extra-cornice .furniture-item');


    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
    }

    setConfig();

    buildCheck();

}

function togglerKnockerStep4() {

    let toggler = document.querySelector('#checkbox-4step-knocker .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-knocker');
    let line = document.getElementById('checkbox-4step-knocker');
    let cards = document.querySelectorAll('#aria-step4-knocker .furniture-item');


    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
    }

    setConfig();

    buildCheck();

}


function togglerPlatbandStep4() {

    let toggler = document.querySelector('#checkbox-4step-platband .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-platband');
    let line = document.getElementById('checkbox-4step-platband');
    let cards = document.querySelectorAll('#aria-step4-platband .furniture-item');


    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
    }

    setConfig();

    buildCheck();

}

function togglerDodingsStep4() {

    let toggler = document.querySelector('#checkbox-4step-dodings .checkbox-pseudo-input');
    let block = document.getElementById('aria-step4-dodings');
    let line = document.getElementById('checkbox-4step-dodings');
    let cards = document.querySelectorAll('#aria-step4-dodings .furniture-item');


    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
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

        if (butid == 'glass-type-item5' && css == '#checkbox-2step-glass-type .milling-item') {
            document.querySelectorAll('#aria-step2-extra-grid .texture-group :nth-child(3)').forEach(b => b.style.display = 'none');
        } else {
            document.querySelectorAll('#aria-step2-extra-grid .texture-group .texture-item').forEach(b => b.style.display = '');
        }

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

        setTimeout(function () { // wait until all resources loaded 
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
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');


    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');

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

        classicmilled();
        milledmirrorcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        typeMilledOutClassic("btn-milled-classic1");
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
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');


    let panelcards = document.querySelectorAll('#checkbox-3step-tree-color .texture-item');


    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


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


        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        panelmirrorcards.forEach(b => b.classList.remove('active'));
        milledmirrorcards.forEach(b => b.classList.remove('active'));


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
    const blockmetcol = document.getElementById('checkbox-3step-metcol');
    const blockglazedstyle = document.getElementById('checkbox-3step-glazed');

    const milledmirrorcards = document.querySelectorAll('#milled-mirror-block .milling-item');
    const panelmirrorcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    const classicmilledcards = document.querySelectorAll('#classicmilled-block .milling-item');
    const modernmilledcards = document.querySelectorAll('#modernmilled-block .milling-item');


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

        milledmirror();
        classicmilledcards.forEach(b => b.classList.remove('active'));
        modernmilledcards.forEach(b => b.classList.remove('active'));
        typeMirrorIn("btn-mirrorin1");
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

    let classiccards = document.querySelectorAll('#classicmilled-block .milling-item');
    let moderncards = document.querySelectorAll('#modernmilled-block .milling-item');



    if (modernbutton.classList.contains('active')) {

    }
    else {

        $(classicblock).slideUp('slow');
        $(modernblock).slideDown('slow');

        modernbutton.classList.add('active');
        modernblock.classList.add('active');
        classicblock.classList.remove('active');
        classicbutton.classList.remove('active');
        moderncards[0].classList.add('active');
        classiccards.forEach(b => b.classList.remove('active'));

    }

    setConfig();

    buildCheck();

}


/**
 * функция нажатия на кнопку "современная" в типах фрезеровки во 2-м шаге (внешка)
 * */
function outmodernmilled() {

    let classicblock = document.getElementById('classicmilledout-block');
    let modernblock = document.getElementById('modernmilledout-block');
    let classicbutton = document.getElementById('outclassicmilled-btn');
    let modernbutton = document.getElementById('outmodernmilled-btn');

    let classiccards = document.querySelectorAll('#classicmilledout-block .milling-item');
    let moderncards = document.querySelectorAll('#modernmilledout-block .milling-item');



    if (modernbutton.classList.contains('active')) {

    }
    else {

        $(classicblock).slideUp('slow');
        $(modernblock).slideDown('slow');

        modernbutton.classList.add('active');
        modernblock.classList.add('active');
        classicblock.classList.remove('active');
        classicbutton.classList.remove('active');
        moderncards[0].classList.add('active');
        classiccards.forEach(b => b.classList.remove('active'));

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

    let classiccards = document.querySelectorAll('#classicmilled-block .milling-item');
    let moderncards = document.querySelectorAll('#modernmilled-block .milling-item');



    if (classicbutton.classList.contains('active')) {

    }
    else {

        $(modernblock).slideUp('slow');
        $(classicblock).slideDown('slow');

        classicbutton.classList.add('active');
        classicblock.classList.add('active');
        modernblock.classList.remove('active');
        modernbutton.classList.remove('active');

        classiccards.forEach(b => b.classList.remove('active'));
        classiccards[0].classList.add('active');
        moderncards.forEach(b => b.classList.remove('active'));

    }

    setConfig();

    buildCheck();

}


/**
 * функция нажатия на кнопку "классическая" в типах фрезеровки во 2-м шаге (для внешки)
 */
function outclassicmilled() {

    let classicblock = document.getElementById('classicmilledout-block');
    let modernblock = document.getElementById('modernmilledout-block');
    let classicbutton = document.getElementById('outclassicmilled-btn');
    let modernbutton = document.getElementById('outmodernmilled-btn');

    let classiccards = document.querySelectorAll('#classicmilledout-block .milling-item');
    let moderncards = document.querySelectorAll('#modernmilledout-block .milling-item');



    if (classicbutton.classList.contains('active')) {

    }
    else {

        $(modernblock).slideUp('slow');
        $(classicblock).slideDown('slow');

        classicbutton.classList.add('active');
        classicblock.classList.add('active');
        modernblock.classList.remove('active');
        modernbutton.classList.remove('active');

        classiccards.forEach(b => b.classList.remove('active'));
        classiccards[0].classList.add('active');
        moderncards.forEach(b => b.classList.remove('active'));

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

    let panelcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    let milledcards = document.querySelectorAll('#milled-mirror-block .milling-item');

    if (panelbutton.classList.contains('active')) {

    }
    else {

        $(milledblock).slideUp('slow');
        $(panelblock).slideDown('slow');

        panelbutton.classList.add('active');
        panelblock.classList.add('active');
        milledblock.classList.remove('active');
        milledbutton.classList.remove('active');

        milledcards.forEach(b => b.classList.remove('active'));
        panelcards[0].classList.add('active');

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

    let panelcards = document.querySelectorAll('#panel-mirror-block .milling-item');
    let milledcards = document.querySelectorAll('#milled-mirror-block .milling-item');

    if (milledbutton.classList.contains('active')) {

    }
    else {

        $(panelblock).slideUp('slow');
        $(milledblock).slideDown('slow');

        milledbutton.classList.add('active');
        milledblock.classList.add('active');
        panelblock.classList.remove('active');
        panelbutton.classList.remove('active');

        panelcards.forEach(b => b.classList.remove('active'));
        milledcards[0].classList.add('active');

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
    let cards = document.querySelectorAll('#aria-step4-closer .furniture-item');

    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
    }

    setConfig();

    buildCheck();

}

function togglerGridStep6() {

    let toggler = document.querySelector('#checkbox-6step-ventil-grate .checkbox-pseudo-input');
    let block = document.getElementById('aria-step6-ventil-grate');
    let line = document.getElementById('checkbox-6step-ventil-grate');
    let cards = document.querySelectorAll('#aria-step6-ventil-grate .furniture-item');

    if (toggler.classList.contains('checked')) {

        $(block).slideUp('slow');

        toggler.classList.remove('checked');
        block.classList.add('closing');
        line.classList.add('colored');
        line.classList.remove('active');
        cards.forEach(b => b.classList.remove('active'));
    }
    else {

        $(block).slideDown('slow');

        toggler.classList.add('checked');
        block.classList.remove('closing');
        line.classList.remove('colored');
        line.classList.add('active');
        cards[0].classList.add('active');
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

$(document).ready(function () {
    cfgDoorModel1();
    setConfig();

    buildCheck();

});
