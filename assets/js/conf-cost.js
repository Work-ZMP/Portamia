
// Формирование цен в конфигураторе через переменные

// Модель дверей
const costModelDoor1 = '95000'; // Guard Pro модель
const costModelDoor2 = '109000'; // Guard Pro модель

// Форма двери
const costTypeDoor1 = '0'; // Вид 1
const costTypeDoor2 = '59600'; // Вид 2
const costTypeDoor3 = '59600'; // Вид 3
const costTypeDoor4 = '119200'; // Вид 4
const costTypeDoor5 = '59600'; // Вид 5
const costTypeDoor6 = '119200'; // Вид 6
const costTypeDoor7 = '119200'; // Вид 7
const costTypeDoor8 = '178800'; // Вид 8
const costTypeDoor9 = '59600'; // Вид 9
const costTypeDoor10 = '93700'; // Вид 10 (двустворчатая)
const costTypeDoor11 = '197300'; // Вид 11 (двустворчатая)
const costTypeDoor12 = '215500'; // Вид 12 (двустворчатая)

// Цвет стекла, если есть фрамуга
const costGlassCol1_1 = '0'; // Серебро
const costGlassCol1_2 = '0'; // Серебристо-серый
const costGlassCol1_3 = '0'; // Бронза
const costGlassCol1_4 = '0'; // Голубой
const costGlassCol1_5 = '0'; // Мультифункциональное

// Вид решетки, если есть фрамуга
const costGridType1_1 = '25400'; // Тип 1
const costGridType1_2 = '25400'; // Тип 2
const costGridType1_3 = '25400'; // Тип 3
const costGridType1_4 = '25400'; // Тип 4

// Вид остекления (когда внешняя сторона - металл)
const costGlassType2_1 = '27900'; // G 001
const costGlassType2_2 = '27900'; // G 002
const costGlassType2_3 = '27900'; // G 003
const costGlassType2_4 = '27900'; // G 004
const costGlassType2_5 = '40200'; // G 005
const costGlassType2_6 = '63600'; // G 006
const costGlassType2_7 = '27900'; // G 007
const costGlassType2_8 = '65500'; // G 008
const costGlassType2_9 = '65500'; // G 009
const costGlassType2_10 = '65500'; // G 010
const costGlassType2_11 = '65500'; // G 011

// Вид остекления (когда внешняя сторона - панель)
const costGlassTypePanel2_1 = '27900'; // G 001
const costGlassTypePanel2_2 = '27900'; // G 002
const costGlassTypePanel2_3 = '27900'; // G 003
const costGlassTypePanel2_4 = '27900'; // G 004
const costGlassTypePanel2_5 = '40200'; // G 005
const costGlassTypePanel2_6 = '63600'; // G 006
const costGlassTypePanel2_7 = '27900'; // G 007
const costGlassTypePanel2_8 = '65500'; // G 008
const costGlassTypePanel2_9 = '65500'; // G 009
const costGlassTypePanel2_10 = '65500'; // G 010
const costGlassTypePanel2_11 = '65500'; // G 011

// Цвет стекла в остеклении
const costGlassCol2_1 = '0'; // Серебро
const costGlassCol2_2 = '0'; // Серебристо-серый
const costGlassCol2_3 = '0'; // Бронза
const costGlassCol2_4 = '0'; // Голубой
const costGlassCol2_5 = '0'; // Мультифункциональное

// Вид решетки в остеклении
const costGridType2_1 = '25400'; // Тип 1
const costGridType2_2 = '25400'; // Тип 2
const costGridType2_3 = '25400'; // Тип 3
const costGridType2_4 = '25400'; // Тип 4

// Тип рамки (багеты)
const costBaguette1 = '21100'; // B 001
const costBaguette2 = '25800'; // B 002
const costBaguette3 = '24100'; // B 003
const costBaguette4 = '24100'; // B 004
const costBaguette5 = '24600'; // B 005
const costBaguette6 = '10000'; // B 006
const costBaguette7 = '23100'; // B 007
const costBaguette8 = '44500'; // B 008
const costBaguette9 = '36700'; // B 009
const costBaguette10 = '44500'; // B 010

// Наличие петель
const costHinges1 = '0'; // С петлями
const costHinges2 = '28600'; //Нет петель

// Цвет металла (наружная сторона)
const costMetColOut1 = '0'; // N23119
const costMetColOut2 = '0'; // N23039
const costMetColOut3 = '0'; // N23239
const costMetColOut4 = '0'; // N43009
const costMetColOut5 = '0'; // SX3019
const costMetColOut6 = '0'; // N23129
const costMetColOut7 = '0'; // N23219
const costMetColOut8 = '0'; // R23009
const costMetColOut9 = '0'; // N23019
const costMetColOut10 = '0'; // N23049
const costMetColOut11 = '0'; // N23109
const costMetColOut12 = '0'; // N23079
const costMetColOut13 = '0'; // N23089
const costMetColOut14 = '0'; // N23099
const costMetColOut15 = '0'; // N23009
const costMetColOut16 = '0'; // N23139
const costMetColOut17 = '0'; // N23189
const costMetColOut18 = '0'; // N23149
const costMetColOut19 = '0'; // N23209
const costMetColOut20 = '0'; // N23159
const costMetColOut21 = '0'; // N23179
const costMetColOut22 = '0'; // N23059
const costMetColOut23 = '0'; // N23229
const costMetColOut24 = '0'; // N23069
const costMetColOut25 = '0'; // SA3039

// Цвет металла (внутренняя сторона)
const costMetColIn1 = '0'; // N23119
const costMetColIn2 = '0'; // N23039
const costMetColIn3 = '0'; // N23239
const costMetColIn4 = '0'; // N43009
const costMetColIn5 = '0'; // SX3019
const costMetColIn6 = '0'; // N23129
const costMetColIn7 = '0'; // N23219
const costMetColIn8 = '0'; // R23009
const costMetColIn9 = '0'; // N23019
const costMetColIn10 = '0'; // N23049
const costMetColIn11 = '0'; // N23109
const costMetColIn12 = '0'; // N23079
const costMetColIn13 = '0'; // N23089
const costMetColIn14 = '0'; // N23099
const costMetColIn15 = '0'; // N23009
const costMetColIn16 = '0'; // N23139
const costMetColIn17 = '0'; // N23189
const costMetColIn18 = '0'; // N23149
const costMetColIn19 = '0'; // N23209
const costMetColIn20 = '0'; // N23159
const costMetColIn21 = '0'; // N23179
const costMetColIn22 = '0'; // N23059
const costMetColIn23 = '0'; // N23229
const costMetColIn24 = '0'; // N23069
const costMetColIn25 = '0'; // SA3039

// Цвет и текстура панели МДФ (внутренняя сторона)
const costMdfCol1 = '0'; // Венге
const costMdfCol2 = '0'; // Белое дерево
const costMdfCol3 = '14700'; // Коньячный дуб
const costMdfCol4 = '11000'; // Ванильный дуб
const costMdfCol5 = '14700'; // Милк
const costMdfCol6 = '14700'; // Кофейное дерево
const costMdfCol7 = '19600'; // Серый матовый
const costMdfCol8 = '19600'; // Черный матовый
const costMdfCol9 = '19600'; // Графитовое дерево
const costMdfCol10 = '19600'; // Дымчатое дерево
const costMdfCol11 = '19600'; // Сатиновое дерево
const costMdfCol12 = '19600'; // Граб белый
const costMdfCol13 = '19600'; // Венге бонобо
const costMdfCol14 = '23000'; // Арктическая береза
const costMdfCol15 = '17600'; // Бетон темный
const costMdfCol16 = '17600'; // Бетон светлый
const costMdfCol17 = '23000'; // Греческий платан
const costMdfCol18 = '16600'; // Джут
const costMdfCol19 = '16600'; // Джут белый
const costMdfCol20 = '19800'; // Белый
const costMdfCol21 = '18600'; // Дуб бренди
const costMdfCol22 = '18600'; // Дуб рустик

// Виды фрезеровок на внутренней стороне
const costMillingOutdoorTypeKIn1 = '0'; // FK-MDF 001
const costMillingOutdoorTypeKIn2 = '0'; // FK-MDF 002
const costMillingOutdoorTypeKIn3 = '0'; // FK-MDF 003
const costMillingOutdoorTypeKIn4 = '0'; // FK-MDF 004
const costMillingOutdoorTypeKIn5 = '0'; // FK-MDF 005
const costMillingOutdoorTypeKIn6 = '0'; // FK-MDF 006
const costMillingOutdoorTypeKIn7 = '0'; // FK-MDF 007
const costMillingOutdoorTypeKIn8 = '0'; // FK-MDF 008
const costMillingOutdoorTypeKIn9 = '0'; // FK-MDF 009
const costMillingOutdoorTypeKIn10 = '0'; // FK-MDF 010
const costMillingOutdoorTypeKIn11 = '0'; // FK-MDF 011
const costMillingOutdoorTypeKIn12 = '0'; // FK-MDF 012
const costMillingOutdoorTypeKIn13 = '0'; // FK-MDF 013
const costMillingOutdoorTypeKIn14 = '0'; // FK-MDF 014
const costMillingOutdoorTypeKIn15 = '0'; // FK-MDF 015
const costMillingOutdoorTypeKIn16 = '0'; // FK-MDF 016
const costMillingOutdoorTypeKIn17 = '0'; // FK-MDF 017
const costMillingOutdoorTypeKIn18 = '0'; // FK-MDF 018
const costMillingOutdoorTypeKIn19 = '0'; // FK-MDF 019
const costMillingOutdoorTypeKIn20 = '0'; // FK-MDF 020
const costMillingOutdoorTypeKIn21 = '0'; // FK-MDF 021
const costMillingOutdoorTypeKIn22 = '0'; // FK-MDF 022
const costMillingOutdoorTypeKIn23 = '0'; // FK-MDF 023
const costMillingOutdoorTypeKIn24 = '0'; // FK-MDF 024
const costMillingOutdoorTypeKIn25 = '0'; // FK-MDF 025
const costMillingOutdoorTypeKIn26 = '0'; // FK-MDF 026
const costMillingOutdoorTypeKIn27 = '0'; // FK-MDF 027
const costMillingOutdoorTypeKIn28 = '0'; // FK-MDF 028
const costMillingOutdoorTypeKIn29 = '0'; // FK-MDF 029
const costMillingOutdoorTypeKIn30 = '0'; // FK-MDF 030
const costMillingOutdoorTypeKIn31 = '0'; // FK-MDF 031
const costMillingOutdoorTypeKIn32 = '0'; // FK-MDF 032
const costMillingOutdoorTypeKIn33 = '0'; // FK-MDF 033
const costMillingOutdoorTypeKIn34 = '0'; // FK-MDF 034
const costMillingOutdoorTypeKIn35 = '0'; // FK-MDF 035
const costMillingOutdoorTypeKIn36 = '0'; // FK-MDF 036
const costMillingOutdoorTypeKIn37 = '0'; // FK-MDF 037
const costMillingOutdoorTypeKIn38 = '0'; // FK-MDF 038
const costMillingOutdoorTypeKIn39 = '0'; // FK-MDF 039
const costMillingOutdoorTypeSIn1 = '45000'; // FS-MDF 001
const costMillingOutdoorTypeSIn2 = '45000'; // FS-MDF 002
const costMillingOutdoorTypeSIn3 = '45000'; // FS-MDF 003
const costMillingOutdoorTypeSIn4 = '45000'; // FS-MDF 004
const costMillingOutdoorTypeSIn5 = '45000'; // FS-MDF 005
const costMillingOutdoorTypeSIn6 = '45000'; // FS-MDF 006
const costMillingOutdoorTypeSIn7 = '45000'; // FS-MDF 007
const costMillingOutdoorTypeSIn8 = '45000'; // FS-MDF 008
const costMillingOutdoorTypeSIn9 = '45000'; // FS-MDF 009
const costMillingOutdoorTypeSIn10 = '45000'; // FS-MDF 010
const costMillingOutdoorTypeSIn11 = '45000'; // FS-MDF 011
const costMillingOutdoorTypeSIn12 = '45000'; // FS-MDF 012
const costMillingOutdoorTypeSIn13 = '45000'; // FS-MDF 013
const costMillingOutdoorTypeSIn14 = '45000'; // FS-MDF 014
const costMillingOutdoorTypeSIn15 = '45000'; // FS-MDF 015
const costMillingOutdoorTypeSIn16 = '45000'; // FS-MDF 016
const costMillingOutdoorTypeSIn17 = '45000'; // FS-MDF 017
const costMillingOutdoorTypeSIn18 = '45000'; // FS-MDF 018
const costMillingOutdoorTypeSIn19 = '45000'; // FS-MDF 019
const costMillingOutdoorTypeSIn20 = '45000'; // FS-MDF 020
const costMillingOutdoorTypeSIn21 = '45000'; // FS-MDF 021
const costMillingOutdoorTypeSIn22 = '45000'; // FS-MDF 022
const costMillingOutdoorTypeSIn23 = '45000'; // FS-MDF 023
const costMillingOutdoorTypeSIn24 = '45000'; // FS-MDF 024
const costMillingOutdoorTypeSIn25 = '45000'; // FS-MDF 025

// Виды фрезеровок на внутренней стороне
const costMillingTypeKIn1 = '0'; // FK-MDF 001
const costMillingTypeKIn2 = '0'; // FK-MDF 002
const costMillingTypeKIn3 = '0'; // FK-MDF 003
const costMillingTypeKIn4 = '0'; // FK-MDF 004
const costMillingTypeKIn5 = '0'; // FK-MDF 005
const costMillingTypeKIn6 = '0'; // FK-MDF 006
const costMillingTypeKIn7 = '0'; // FK-MDF 007
const costMillingTypeKIn8 = '0'; // FK-MDF 008
const costMillingTypeKIn9 = '0'; // FK-MDF 009
const costMillingTypeKIn10 = '0'; // FK-MDF 010
const costMillingTypeKIn11 = '0'; // FK-MDF 011
const costMillingTypeKIn12 = '0'; // FK-MDF 012
const costMillingTypeKIn13 = '0'; // FK-MDF 013
const costMillingTypeKIn14 = '0'; // FK-MDF 014
const costMillingTypeKIn15 = '0'; // FK-MDF 015
const costMillingTypeKIn16 = '0'; // FK-MDF 016
const costMillingTypeKIn17 = '0'; // FK-MDF 017
const costMillingTypeKIn18 = '0'; // FK-MDF 018
const costMillingTypeKIn19 = '0'; // FK-MDF 019
const costMillingTypeKIn20 = '0'; // FK-MDF 020
const costMillingTypeKIn21 = '0'; // FK-MDF 021
const costMillingTypeKIn22 = '0'; // FK-MDF 022
const costMillingTypeKIn23 = '0'; // FK-MDF 023
const costMillingTypeKIn24 = '0'; // FK-MDF 024
const costMillingTypeKIn25 = '0'; // FK-MDF 025
const costMillingTypeKIn26 = '0'; // FK-MDF 026
const costMillingTypeKIn27 = '0'; // FK-MDF 027
const costMillingTypeKIn28 = '0'; // FK-MDF 028
const costMillingTypeKIn29 = '0'; // FK-MDF 029
const costMillingTypeKIn30 = '0'; // FK-MDF 030
const costMillingTypeKIn31 = '0'; // FK-MDF 031
const costMillingTypeKIn32 = '0'; // FK-MDF 032
const costMillingTypeKIn33 = '0'; // FK-MDF 033
const costMillingTypeKIn34 = '0'; // FK-MDF 034
const costMillingTypeKIn35 = '0'; // FK-MDF 035
const costMillingTypeKIn36 = '0'; // FK-MDF 036
const costMillingTypeKIn37 = '0'; // FK-MDF 037
const costMillingTypeKIn38 = '0'; // FK-MDF 038
const costMillingTypeKIn39 = '0'; // FK-MDF 039
const costMillingTypeSIn1 = '45000'; // FS-MDF 001
const costMillingTypeSIn2 = '45000'; // FS-MDF 002
const costMillingTypeSIn3 = '45000'; // FS-MDF 003
const costMillingTypeSIn4 = '45000'; // FS-MDF 004
const costMillingTypeSIn5 = '45000'; // FS-MDF 005
const costMillingTypeSIn6 = '45000'; // FS-MDF 006
const costMillingTypeSIn7 = '45000'; // FS-MDF 007
const costMillingTypeSIn8 = '45000'; // FS-MDF 008
const costMillingTypeSIn9 = '45000'; // FS-MDF 009
const costMillingTypeSIn10 = '45000'; // FS-MDF 010
const costMillingTypeSIn11 = '45000'; // FS-MDF 011
const costMillingTypeSIn12 = '45000'; // FS-MDF 012
const costMillingTypeSIn13 = '45000'; // FS-MDF 013
const costMillingTypeSIn14 = '45000'; // FS-MDF 014
const costMillingTypeSIn15 = '45000'; // FS-MDF 015
const costMillingTypeSIn16 = '45000'; // FS-MDF 016
const costMillingTypeSIn17 = '45000'; // FS-MDF 017
const costMillingTypeSIn18 = '45000'; // FS-MDF 018
const costMillingTypeSIn19 = '45000'; // FS-MDF 019
const costMillingTypeSIn20 = '45000'; // FS-MDF 020
const costMillingTypeSIn21 = '45000'; // FS-MDF 021
const costMillingTypeSIn22 = '45000'; // FS-MDF 022
const costMillingTypeSIn23 = '45000'; // FS-MDF 023
const costMillingTypeSIn24 = '45000'; // FS-MDF 024
const costMillingTypeSIn25 = '45000'; // FS-MDF 025

// Виды зеркал на внутренней стороне
const costMirrorTypeFIn1 = '10500'; // ZF-MDF 001
const costMirrorTypeFIn2 = '10500'; // ZF-MDF 002
const costMirrorTypeFIn3 = '10500'; // ZF-MDF 003
const costMirrorTypeFIn4 = '10500'; // ZF-MDF 004
const costMirrorTypeFIn5 = '10500'; // ZF-MDF 005
const costMirrorTypeFIn6 = '10500'; // ZF-MDF 006
const costMirrorTypeFIn7 = '10500'; // ZF-MDF 007
const costMirrorTypeFIn8 = '10500'; // ZF-MDF 008
const costMirrorTypeZIn1 = '10500'; // ZG-MDF 001

// Цвета зеркал на внутренней стороне
const costMirrorColFIn1 = '10500'; // Стандарт
const costMirrorColFIn2 = '13300'; // Кофе
const costMirrorColFIn3 = '15500'; // Графит
const costMirrorColZIn1 = '10500'; // Стандарт (просто повторить цену)
const costMirrorColZIn2 = '13300'; // Кофе (просто повторить цену)
const costMirrorColZIn3 = '15500'; // Графит (просто повторить цену)

// Пороги
const costDoorstep1 = '0'; // Стандартный порог
const costDoorstep2 = '11000'; // Накладной порог Хром
const costDoorstep3 = '13000'; // Накладной порог Латунь
const costDoorstep4 = '18000'; // Цельнопрофильный порог Матовый Хром

// Доводчики
const costCloser1 = '6900'; // Черный
const costCloser2 = '6900'; // Коричневый
const costCloser3 = '6900'; // Белый

// Защитные пластины
const costOnlay1 = '11000'; // Матовый хром
const costOnlay2 = '27300'; // Латунь
const costOnlay3 = '16200'; // Бронза
const costOnlay4 = '16200'; // Черный

// Цвет фурнитуры
const costFurnCol1 = '0'; // Хром
const costFurnCol2 = '8700'; // Матовый хром
const costFurnCol3 = '8500'; // Латунь
const costFurnCol4 = '10200'; // Бронза
const costFurnCol5 = '12000'; // Черный

// Вид замка
const costLockType1 = '0'; // Kale сувальдный
const costLockType2 = '6900'; // Securemme сувальдный
const costLockType3 = '14800'; // Kale циллиндрический
const costLockType4 = '0'; // Securemme циллиндрический
const costLockType5 = '11500'; // Kale суввальд. + Kale суввальд.
const costLockType6 = '11200'; // Securemme сувальд. + Securemme сувальд.
const costLockType7 = '0'; // Securemme цилинд. + Securemme суввальд.
const costLockType8 = '0'; // Securemme двухсистемный замок

// Вид ручки
const costHandlerType1 = '0'; // Arena
const costHandlerType2 = '0'; // Pyramide Sircle
const costHandlerType3 = '0'; // Pyramide Quadro
const costHandlerType4 = '0'; // Vitoria
const costHandlerType5 = '0'; // Dallas
const costHandlerType6 = '0'; // Rania
const costHandlerType7 = '0'; // SKS (100см)
const costHandlerType8 = '0'; // SKS (50см)
const costHandlerType9 = '0'; // SPS (100см)
const costHandlerType10 = '0'; // SPS (50см)

// Вид ручки (дополнительная (вторая) ручка, когда выбрана двустворчатая дверь)
const costExtraHandlerType1 = '0'; // Arena
const costExtraHandlerType2 = '0'; // Pyramide Sircle
const costExtraHandlerType3 = '0'; // Pyramide Quadro
const costExtraHandlerType4 = '0'; // Vitoria
const costExtraHandlerType5 = '0'; // Dallas
const costExtraHandlerType6 = '0'; // Rania
const costExtraHandlerType7 = '0'; // SKS (100см)
const costExtraHandlerType8 = '0'; // SKS (50см)
const costExtraHandlerType9 = '0'; // SPS (100см)
const costExtraHandlerType10 = '0'; // SPS (50см)

// Размер двери
const costSize1 = '0'; // Не знаю
const costSize2 = '0'; // 960 х 2050
const costSize3 = '0'; // 860 х 2050
const costSize4 = '0'; // Свой размер

// Сторона открывания
const costSide1 = '0'; // Правая
const costSide2 = '0'; // Левая

// Металл двери
const costMaterial1 = '0'; // Холоднокатанная сталь
const costMaterial2 = '116100'; // Нержавеющая сталь





function defaultCost (el, cost) {

    document.querySelector(`#${el}`).dataset.price = `${cost}`

}

function standartCost (el, cost) {

    document.querySelector(`#${el}`).dataset.price = `${cost}`;
    document.querySelector(`#${el} .texture-price`).textContent = `${cost} ₽`;
    if (cost == 0) {
        document.querySelector(`#${el} .texture-price`).textContent = 'Базовое'
    }

}

function numberWithSpaces(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  }

function advancedCost (el, cost, selector) {
    document.querySelector(`#${el}`).dataset.price = `${cost}`;
    document.querySelector(`#${el} ${selector}`).textContent = numberWithSpaces(cost) + " ₽";
    //document.querySelector(`#${el} ${selector}`).textContent = `${cost} ₽`;
    if (cost == 0) {
        document.querySelector(`#${el} ${selector}`).textContent = 'Базовое'
    }
}


 advancedCost('cfg-secondmodel',costModelDoor1,'.cfg-model-cost');
 advancedCost('cfg-firstmodel',costModelDoor2,'.cfg-model-cost');

defaultCost('slditem1',costTypeDoor1);
defaultCost('slditem2',costTypeDoor2);
defaultCost('slditem3',costTypeDoor3);
defaultCost('slditem4',costTypeDoor4);
defaultCost('slditem5',costTypeDoor5);
defaultCost('slditem6',costTypeDoor6);
defaultCost('slditem7',costTypeDoor7);
defaultCost('slditem8',costTypeDoor8);
defaultCost('slditem8',costTypeDoor9);
defaultCost('dlditem1',costTypeDoor10);
defaultCost('dlditem2',costTypeDoor11);
defaultCost('dlditem3',costTypeDoor12);

standartCost('glass-frame-col-item1',costGlassCol1_1);
standartCost('glass-frame-col-item2',costGlassCol1_2);
standartCost('glass-frame-col-item3',costGlassCol1_3);
standartCost('glass-frame-col-item4',costGlassCol1_4);
standartCost('glass-frame-col-item5',costGlassCol1_5);

standartCost('extra-grid-step1-item1',costGridType1_1);
standartCost('extra-grid-step1-item2',costGridType1_2);
standartCost('extra-grid-step1-item3',costGridType1_3);
standartCost('extra-grid-step1-item4',costGridType1_4);


defaultCost('glass-type-item1',costGlassType2_1);
defaultCost('glass-type-item2',costGlassType2_2);
defaultCost('glass-type-item3',costGlassType2_3);
defaultCost('glass-type-item4',costGlassType2_4);
defaultCost('glass-type-item5',costGlassType2_5);
defaultCost('glass-type-item6',costGlassType2_6);
defaultCost('glass-type-item7',costGlassType2_7);
defaultCost('glass-type-item8',costGlassType2_8);
defaultCost('glass-type-item9',costGlassType2_9);
defaultCost('glass-type-item10',costGlassType2_10);
defaultCost('glass-type-item11',costGlassType2_11);

defaultCost('glass-type-panel-item1',costGlassTypePanel2_1);
defaultCost('glass-type-panel-item2',costGlassTypePanel2_2);
defaultCost('glass-type-panel-item3',costGlassTypePanel2_3);
defaultCost('glass-type-panel-item4',costGlassTypePanel2_4);
defaultCost('glass-type-panel-item5',costGlassTypePanel2_5);
defaultCost('glass-type-panel-item6',costGlassTypePanel2_6);
defaultCost('glass-type-panel-item7',costGlassTypePanel2_7);
defaultCost('glass-type-panel-item8',costGlassTypePanel2_8);
defaultCost('glass-type-panel-item9',costGlassTypePanel2_9);
defaultCost('glass-type--panelitem10',costGlassTypePanel2_10);
defaultCost('glass-type--panelitem11',costGlassTypePanel2_11);

standartCost('glass-col-item1',costGlassCol2_1);
standartCost('glass-col-item2',costGlassCol2_2);
standartCost('glass-col-item3',costGlassCol2_3);
standartCost('glass-col-item4',costGlassCol2_4);
standartCost('glass-col-item5',costGlassCol2_5);


standartCost('extra-grid-item1',costGridType2_1);
standartCost('extra-grid-item2',costGridType2_2);
standartCost('extra-grid-item3',costGridType2_3);
standartCost('extra-grid-item4',costGridType2_4);

defaultCost('baguette-item1',costBaguette1);
defaultCost('baguette-item2',costBaguette2);
defaultCost('baguette-item3',costBaguette3);
defaultCost('baguette-item4',costBaguette4);
defaultCost('baguette-item5',costBaguette5);
defaultCost('baguette-item6',costBaguette6);
defaultCost('baguette-item7',costBaguette7);
defaultCost('baguette-item8',costBaguette8);
defaultCost('baguette-item9',costBaguette9);
defaultCost('baguette-item10',costBaguette10);

advancedCost('furn-hinges-item1',costHinges1,'.furniture-item-title:last-child');
advancedCost('furn-hinges-item2',costHinges2,'.furniture-item-title:last-child');

standartCost('btncol1',costMetColOut1);
standartCost('btncol2',costMetColOut2);
standartCost('btncol3',costMetColOut3);
standartCost('btncol4',costMetColOut4);
standartCost('btncol5',costMetColOut5);
standartCost('btncol6',costMetColOut6);
standartCost('btncol7',costMetColOut7);
standartCost('btncol8',costMetColOut8);
standartCost('btncol9',costMetColOut9);
standartCost('btncol10',costMetColOut10);
standartCost('btncol11',costMetColOut11);
standartCost('btncol12',costMetColOut12);
standartCost('btncol13',costMetColOut13);
standartCost('btncol14',costMetColOut14);
standartCost('btncol15',costMetColOut15);
standartCost('btncol16',costMetColOut16);
standartCost('btncol17',costMetColOut17);
standartCost('btncol18',costMetColOut18);
standartCost('btncol19',costMetColOut19);
standartCost('btncol20',costMetColOut20);
standartCost('btncol21',costMetColOut21);
standartCost('btncol22',costMetColOut22);
standartCost('btncol23',costMetColOut23);
standartCost('btncol24',costMetColOut24);
standartCost('btncol25',costMetColOut25);

standartCost('btncolout1',costMetColIn1);
standartCost('btncolout2',costMetColIn2);
standartCost('btncolout3',costMetColIn3);
standartCost('btncolout4',costMetColIn4);
standartCost('btncolout5',costMetColIn5);
standartCost('btncolout6',costMetColIn6);
standartCost('btncolout7',costMetColIn7);
standartCost('btncolout8',costMetColIn8);
standartCost('btncolout9',costMetColIn9);
standartCost('btncolout10',costMetColIn10);
standartCost('btncolout11',costMetColIn11);
standartCost('btncolout12',costMetColIn12);
standartCost('btncolout13',costMetColIn13);
standartCost('btncolout14',costMetColIn14);
standartCost('btncolout15',costMetColIn15);
standartCost('btncolout16',costMetColIn16);
standartCost('btncolout17',costMetColIn17);
standartCost('btncolout18',costMetColIn18);
standartCost('btncolout19',costMetColIn19);
standartCost('btncolout20',costMetColIn20);
standartCost('btncolout21',costMetColIn21);
standartCost('btncolout22',costMetColIn22);
standartCost('btncolout23',costMetColIn23);
standartCost('btncolout24',costMetColIn24);
standartCost('btncolout25',costMetColIn25);

standartCost('btndoorcolout1',costMdfCol1);
standartCost('btndoorcolout2',costMdfCol2);
standartCost('btndoorcolout3',costMdfCol3);
standartCost('btndoorcolout4',costMdfCol4);
standartCost('btndoorcolout5',costMdfCol5);
standartCost('btndoorcolout6',costMdfCol6);
standartCost('btndoorcolout7',costMdfCol7);
standartCost('btndoorcolout8',costMdfCol8);
standartCost('btndoorcolout9',costMdfCol9);
standartCost('btndoorcolout10',costMdfCol10);
standartCost('btndoorcolout11',costMdfCol11);
standartCost('btndoorcolout12',costMdfCol12);
standartCost('btndoorcolout13',costMdfCol13);
standartCost('btndoorcolout14',costMdfCol14);
standartCost('btndoorcolout15',costMdfCol15);
standartCost('btndoorcolout16',costMdfCol16);
standartCost('btndoorcolout17',costMdfCol17);
standartCost('btndoorcolout18',costMdfCol18);
standartCost('btndoorcolout19',costMdfCol19);
standartCost('btndoorcolout20',costMdfCol20);
standartCost('btndoorcolout21',costMdfCol21);
standartCost('btndoorcolout22',costMdfCol22);

defaultCost('btn-milled-classic1',costMillingTypeKIn1);
defaultCost('btn-milled-classic2',costMillingTypeKIn2);
defaultCost('btn-milled-classic3',costMillingTypeKIn3);
defaultCost('btn-milled-classic4',costMillingTypeKIn4);
defaultCost('btn-milled-classic5',costMillingTypeKIn5);
defaultCost('btn-milled-classic6',costMillingTypeKIn6);
defaultCost('btn-milled-classic7',costMillingTypeKIn7);
defaultCost('btn-milled-classic8',costMillingTypeKIn8);
defaultCost('btn-milled-classic9',costMillingTypeKIn9);
defaultCost('btn-milled-classic10',costMillingTypeKIn10);
defaultCost('btn-milled-classic11',costMillingTypeKIn11);
defaultCost('btn-milled-classic12',costMillingTypeKIn12);
defaultCost('btn-milled-classic13',costMillingTypeKIn13);
defaultCost('btn-milled-classic14',costMillingTypeKIn14);
defaultCost('btn-milled-classic15',costMillingTypeKIn15);
defaultCost('btn-milled-classic16',costMillingTypeKIn16);
defaultCost('btn-milled-classic17',costMillingTypeKIn17);
defaultCost('btn-milled-classic18',costMillingTypeKIn18);
defaultCost('btn-milled-classic19',costMillingTypeKIn19);
defaultCost('btn-milled-classic20',costMillingTypeKIn20);
defaultCost('btn-milled-classic21',costMillingTypeKIn21);
defaultCost('btn-milled-classic22',costMillingTypeKIn22);
defaultCost('btn-milled-classic23',costMillingTypeKIn23);
defaultCost('btn-milled-classic24',costMillingTypeKIn24);
defaultCost('btn-milled-classic25',costMillingTypeKIn25);
defaultCost('btn-milled-classic26',costMillingTypeKIn26);
defaultCost('btn-milled-classic27',costMillingTypeKIn27);
defaultCost('btn-milled-classic28',costMillingTypeKIn28);
defaultCost('btn-milled-classic29',costMillingTypeKIn29);
defaultCost('btn-milled-classic30',costMillingTypeKIn30);
defaultCost('btn-milled-classic31',costMillingTypeKIn31);
defaultCost('btn-milled-classic32',costMillingTypeKIn32);
defaultCost('btn-milled-classic33',costMillingTypeKIn33);
defaultCost('btn-milled-classic34',costMillingTypeKIn34);
defaultCost('btn-milled-classic35',costMillingTypeKIn35);
defaultCost('btn-milled-classic36',costMillingTypeKIn36);
defaultCost('btn-milled-classic37',costMillingTypeKIn37);
defaultCost('btn-milled-classic38',costMillingTypeKIn38);
defaultCost('btn-milled-classic39',costMillingTypeKIn39);

defaultCost('btn-milled-modern1',costMillingTypeSIn1);
defaultCost('btn-milled-modern2',costMillingTypeSIn2);
defaultCost('btn-milled-modern3',costMillingTypeSIn3);
defaultCost('btn-milled-modern4',costMillingTypeSIn4);
defaultCost('btn-milled-modern5',costMillingTypeSIn5);
defaultCost('btn-milled-modern6',costMillingTypeSIn6);
defaultCost('btn-milled-modern7',costMillingTypeSIn7);
defaultCost('btn-milled-modern8',costMillingTypeSIn8);
defaultCost('btn-milled-modern9',costMillingTypeSIn9);
defaultCost('btn-milled-modern10',costMillingTypeSIn10);
defaultCost('btn-milled-modern11',costMillingTypeSIn11);
defaultCost('btn-milled-modern12',costMillingTypeSIn12);
defaultCost('btn-milled-modern13',costMillingTypeSIn13);
defaultCost('btn-milled-modern14',costMillingTypeSIn14);
defaultCost('btn-milled-modern15',costMillingTypeSIn15);
defaultCost('btn-milled-modern16',costMillingTypeSIn16);
defaultCost('btn-milled-modern17',costMillingTypeSIn17);
defaultCost('btn-milled-modern18',costMillingTypeSIn18);
defaultCost('btn-milled-modern19',costMillingTypeSIn19);
defaultCost('btn-milled-modern20',costMillingTypeSIn20);
defaultCost('btn-milled-modern21',costMillingTypeSIn21);
defaultCost('btn-milled-modern22',costMillingTypeSIn22);
defaultCost('btn-milled-modern23',costMillingTypeSIn23);
defaultCost('btn-milled-modern24',costMillingTypeSIn24);
defaultCost('btn-milled-modern25',costMillingTypeSIn25);


defaultCost('btn-milled-classic-outdoor1',costMillingOutdoorTypeKIn1);
defaultCost('btn-milled-classic-outdoor2',costMillingOutdoorTypeKIn2);
defaultCost('btn-milled-classic-outdoor3',costMillingOutdoorTypeKIn3);
defaultCost('btn-milled-classic-outdoor4',costMillingOutdoorTypeKIn4);
defaultCost('btn-milled-classic-outdoor5',costMillingOutdoorTypeKIn5);
defaultCost('btn-milled-classic-outdoor6',costMillingOutdoorTypeKIn6);
defaultCost('btn-milled-classic-outdoor7',costMillingOutdoorTypeKIn7);
defaultCost('btn-milled-classic-outdoor8',costMillingOutdoorTypeKIn8);
defaultCost('btn-milled-classic-outdoor9',costMillingOutdoorTypeKIn9);
defaultCost('btn-milled-classic-outdoor10',costMillingOutdoorTypeKIn10);
defaultCost('btn-milled-classic-outdoor11',costMillingOutdoorTypeKIn11);
defaultCost('btn-milled-classic-outdoor12',costMillingOutdoorTypeKIn12);
defaultCost('btn-milled-classic-outdoor13',costMillingOutdoorTypeKIn13);
defaultCost('btn-milled-classic-outdoor14',costMillingOutdoorTypeKIn14);
defaultCost('btn-milled-classic-outdoor15',costMillingOutdoorTypeKIn15);
defaultCost('btn-milled-classic-outdoor16',costMillingOutdoorTypeKIn16);
defaultCost('btn-milled-classic-outdoor17',costMillingOutdoorTypeKIn17);
defaultCost('btn-milled-classic-outdoor18',costMillingOutdoorTypeKIn18);
defaultCost('btn-milled-classic-outdoor19',costMillingOutdoorTypeKIn19);
defaultCost('btn-milled-classic-outdoor20',costMillingOutdoorTypeKIn20);
defaultCost('btn-milled-classic-outdoor21',costMillingOutdoorTypeKIn21);
defaultCost('btn-milled-classic-outdoor22',costMillingOutdoorTypeKIn22);
defaultCost('btn-milled-classic-outdoor23',costMillingOutdoorTypeKIn23);
defaultCost('btn-milled-classic-outdoor24',costMillingOutdoorTypeKIn24);
defaultCost('btn-milled-classic-outdoor25',costMillingOutdoorTypeKIn25);
defaultCost('btn-milled-classic-outdoor26',costMillingOutdoorTypeKIn26);
defaultCost('btn-milled-classic-outdoor27',costMillingOutdoorTypeKIn27);
defaultCost('btn-milled-classic-outdoor28',costMillingOutdoorTypeKIn28);
defaultCost('btn-milled-classic-outdoor29',costMillingOutdoorTypeKIn29);
defaultCost('btn-milled-classic-outdoor30',costMillingOutdoorTypeKIn30);
defaultCost('btn-milled-classic-outdoor31',costMillingOutdoorTypeKIn31);
defaultCost('btn-milled-classic-outdoor32',costMillingOutdoorTypeKIn32);
defaultCost('btn-milled-classic-outdoor33',costMillingOutdoorTypeKIn33);
defaultCost('btn-milled-classic-outdoor34',costMillingOutdoorTypeKIn34);
defaultCost('btn-milled-classic-outdoor35',costMillingOutdoorTypeKIn35);
defaultCost('btn-milled-classic-outdoor36',costMillingOutdoorTypeKIn36);
defaultCost('btn-milled-classic-outdoor37',costMillingOutdoorTypeKIn37);
defaultCost('btn-milled-classic-outdoor38',costMillingOutdoorTypeKIn38);
defaultCost('btn-milled-classic-outdoor39',costMillingOutdoorTypeKIn39);

defaultCost('btn-milled-modern-outdoor1',costMillingOutdoorTypeSIn1);
defaultCost('btn-milled-modern-outdoor2',costMillingOutdoorTypeSIn2);
defaultCost('btn-milled-modern-outdoor3',costMillingOutdoorTypeSIn3);
defaultCost('btn-milled-modern-outdoor4',costMillingOutdoorTypeSIn4);
defaultCost('btn-milled-modern-outdoor5',costMillingOutdoorTypeSIn5);
defaultCost('btn-milled-modern-outdoor6',costMillingOutdoorTypeSIn6);
defaultCost('btn-milled-modern-outdoor7',costMillingOutdoorTypeSIn7);
defaultCost('btn-milled-modern-outdoor8',costMillingOutdoorTypeSIn8);
defaultCost('btn-milled-modern-outdoor9',costMillingOutdoorTypeSIn9);
defaultCost('btn-milled-modern-outdoor10',costMillingOutdoorTypeSIn10);
defaultCost('btn-milled-modern-outdoor11',costMillingOutdoorTypeSIn11);
defaultCost('btn-milled-modern-outdoor12',costMillingOutdoorTypeSIn12);
defaultCost('btn-milled-modern-outdoor13',costMillingOutdoorTypeSIn13);
defaultCost('btn-milled-modern-outdoor14',costMillingOutdoorTypeSIn14);
defaultCost('btn-milled-modern-outdoor15',costMillingOutdoorTypeSIn15);
defaultCost('btn-milled-modern-outdoor16',costMillingOutdoorTypeSIn16);
defaultCost('btn-milled-modern-outdoor17',costMillingOutdoorTypeSIn17);
defaultCost('btn-milled-modern-outdoor18',costMillingOutdoorTypeSIn18);
defaultCost('btn-milled-modern-outdoor19',costMillingOutdoorTypeSIn19);
defaultCost('btn-milled-modern-outdoor20',costMillingOutdoorTypeSIn20);
defaultCost('btn-milled-modern-outdoor21',costMillingOutdoorTypeSIn21);
defaultCost('btn-milled-modern-outdoor22',costMillingOutdoorTypeSIn22);
defaultCost('btn-milled-modern-outdoor23',costMillingOutdoorTypeSIn23);
defaultCost('btn-milled-modern-outdoor24',costMillingOutdoorTypeSIn24);
defaultCost('btn-milled-modern-outdoor25',costMillingOutdoorTypeSIn25);


defaultCost('btn-mirrorin1',costMirrorTypeFIn1);
defaultCost('btn-mirrorin2',costMirrorTypeFIn2);
defaultCost('btn-mirrorin3',costMirrorTypeFIn3);
defaultCost('btn-mirrorin4',costMirrorTypeFIn4);
defaultCost('btn-mirrorin5',costMirrorTypeFIn5);
defaultCost('btn-mirrorin6',costMirrorTypeFIn6);
defaultCost('btn-mirrorin7',costMirrorTypeFIn7);
defaultCost('btn-mirrorin8',costMirrorTypeFIn8);
defaultCost('btn-mirrorin9',costMirrorTypeZIn1);

standartCost('btn-mirrorcolin1',costMirrorColFIn1);
standartCost('btn-mirrorcolin2',costMirrorColFIn2);
standartCost('btn-mirrorcolin3',costMirrorColFIn3);
standartCost('btn-mirrorcolin4',costMirrorColZIn1);
standartCost('btn-mirrorcolin5',costMirrorColZIn2);
standartCost('btn-mirrorcolin6',costMirrorColZIn3);


advancedCost('doorstep-item1',costDoorstep1,'.furniture-item-title:last-child');
advancedCost('doorstep-item2',costDoorstep2,'.furniture-item-title:last-child');
advancedCost('doorstep-item3',costDoorstep3,'.furniture-item-title:last-child');
advancedCost('doorstep-item4',costDoorstep4,'.furniture-item-title:last-child');

advancedCost('closer-item1',costCloser1,'.furniture-item-title:last-child');
advancedCost('closer-item2',costCloser2,'.furniture-item-title:last-child');
advancedCost('closer-item3',costCloser3,'.furniture-item-title:last-child');

advancedCost('furn-list-item-1',costOnlay1,'.furniture-item-title:last-child');
advancedCost('furn-list-item-2',costOnlay2,'.furniture-item-title:last-child');
advancedCost('furn-list-item-3',costOnlay3,'.furniture-item-title:last-child');

standartCost('furn-col-1',costFurnCol1);
standartCost('furn-col-2',costFurnCol2);
standartCost('furn-col-3',costFurnCol3);
standartCost('furn-col-4',costFurnCol4);
standartCost('furn-col-5',costFurnCol5);


advancedCost('cfg-lock-item1',costLockType1,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item2',costLockType2,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item3',costLockType3,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item4',costLockType4,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item5',costLockType5,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item6',costLockType6,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item7',costLockType7,'.cfg-locksystem-info-cost');
advancedCost('cfg-lock-item8',costLockType8,'.cfg-locksystem-info-cost');

advancedCost('furn-item-1',costHandlerType1,'.furniture-item-title:last-child');
advancedCost('furn-item-2',costHandlerType2,'.furniture-item-title:last-child');
advancedCost('furn-item-3',costHandlerType3,'.furniture-item-title:last-child');
advancedCost('furn-item-4',costHandlerType4,'.furniture-item-title:last-child');
advancedCost('furn-item-5',costHandlerType5,'.furniture-item-title:last-child');
advancedCost('furn-item-6',costHandlerType6,'.furniture-item-title:last-child');
advancedCost('furn-item-7',costHandlerType7,'.furniture-item-title:last-child');
advancedCost('furn-item-8',costHandlerType8,'.furniture-item-title:last-child');
advancedCost('furn-item-9',costHandlerType9,'.furniture-item-title:last-child');
advancedCost('furn-item-10',costHandlerType10,'.furniture-item-title:last-child');

advancedCost('furn-item-1',costExtraHandlerType1,'.furniture-item-title:last-child');
advancedCost('furn-item-2',costExtraHandlerType2,'.furniture-item-title:last-child');
advancedCost('furn-item-3',costExtraHandlerType3,'.furniture-item-title:last-child');
advancedCost('furn-item-4',costExtraHandlerType4,'.furniture-item-title:last-child');
advancedCost('furn-item-5',costExtraHandlerType5,'.furniture-item-title:last-child');
advancedCost('furn-item-6',costExtraHandlerType6,'.furniture-item-title:last-child');
advancedCost('furn-item-7',costExtraHandlerType7,'.furniture-item-title:last-child');
advancedCost('furn-item-8',costExtraHandlerType8,'.furniture-item-title:last-child');
advancedCost('furn-item-9',costExtraHandlerType9,'.furniture-item-title:last-child');
advancedCost('furn-item-10',costExtraHandlerType10,'.furniture-item-title:last-child');

defaultCost('size-item1',costSize1);
defaultCost('size-item2',costSize2);
defaultCost('size-item3',costSize3);
defaultCost('size-item4',costSize4);

defaultCost('side-item1',costSide1);
defaultCost('side-item2',costSide2);

defaultCost('met-item1', costMaterial1);
advancedCost('met-item2',costMaterial2,'.cfg-btn-cost');

