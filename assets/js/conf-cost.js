
// Формирование цен в конфигураторе через переменные

// Модель дверей
const costModelDoor1 = '91000'; // Guard Pro модель

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

// Вид остекления
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
