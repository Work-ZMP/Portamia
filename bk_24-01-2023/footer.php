<footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">

                    <div class="footer__cards-top">
                        <div class="footer__card info-card">
                            <a href="<?php echo get_permalink(7); ?>" class="footer__head">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_img.png" alt="">
                                <div class="footer__head-name">
                                    Завод МетПром
                                </div>
                            </a>
                            <div class="footer__list">
                                <div class="footer__list-title">Меню</div>
                                <div class="footer__list-items">
                                    <ul>
                                        <li><a href="<?php echo get_permalink(7); ?>">Главная</a></li>
                                        <li><a href="#">Каталог</a></li>
                                        <li><a href="<?php echo get_permalink(10); ?>">Конфигуратор</a></li>
                                        <li><a href="#">О нас</a></li>
                                        <li><a href="#">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer__card products-card">
                            <div class="footer__list-title">Изделия</div>
                            <div class="footer__list-items">
                                <ul>
                                    <li><a href="#">Двери и люки</a></li>
                                    <li><a href="#">Ограждения</a></li>
                                    <li><a href="#">Шкафы и стеллажи</a></li>
                                    <li><a href="#">Модульные здания</a></li>
                                    <li><a href="#">Рециркуляторы бактерицидные</a></li>
                                    <li><a href="#">Ворота</a></li>
                                    <li><a href="#">ПВХ конструкции</a></li>
                                    <li><a href="#">Лифтовые обрамления</a></li>
                                    <li><a href="#">Аллюминиевые конструкции</a></li>
                                    <li><a href="#">Изделия на заказ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer__card contacts-card">
                            <div class="footer__list-title">Контакты</div>
                            <div class="footer__list-items cards-bottom-list">
                                <ul>
                                    <li><a class="adress__icon for-copy" id="adress__icon" onclick="copyText('adress__icon')">г. Оренбург, пер.
                                            Тупой, д.55, оф. 22</a></li>
                                    <li><a class="work__icon for-copy" id="work__icon" onclick="copyText('work__icon')">Режим работы:
                                            <span>с 9:00 до 18:00, обед с 13:00 до 14:00</span></a></li>
                                    <li><a class="number1__icon for-copy" id="number1__icon" onclick="copyText('number1__icon')">+7 (3532) 97-24-24 <span>(отдел
                                                продаж)</span></a></li>
                                    <li><a class="number2__icon for-copy" id="number2__icon" onclick="copyText('number2__icon')">+7 (961) 949-48-48 <span>(по вопросам
                                                сотрудничества)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__copy">2022 © ООО “Завод МетПром”. Все права защищены</div>
            </div>
        </div>

    </footer>


    <div id="popup__get-call" style="display: none">
        <div class="popup__call-inner">
            <div class="popup__call-title">
                Перезвоним в удобное Вам время
            </div>
            <div class="popup__call-blocks">
                <div class="popup__call-time">

                    <div class="popup__call-time-top">
                        <div class="popup__call-time-title">Звонок</div>
                        <div class="popup__call-time-btns">
                            <button class="later-btn popup__time-btn popup-btn-numbers active" onclick='popupGetNumbers()'>
                                <div class="popup__time-btn-title ">позвонить нам</div>
                            </button>
                            <button class="later-btn popup__time-btn popup-btn-call" onclick='popupGetCall()'>
                                <div class="popup__time-btn-title ">выбрать время</div>
                            </button>
                        </div>
                    </div>
                    <div class="popup__call-time-descr">
                        Если вы не попали в рабочее время, мы обязательно перезвоним на следующий день. Наша служба
                        поддержки работает для вас с 8:00 до 21:00 в будни и с 10:00 до 19:00 в выходные (в г.
                        Оренбург).* — все поля обязательные.
                    </div>
                </div>
                <div class="popup__call-form">
                    <div class="popup__call-form-inner" style="display: none">
                        <div class="popup__call-form-title">
                            Контактная форма
                        </div>
                        <div class="popup__call-form-subtitle">
                            Наш менеджер перезвонит вам в выбранное время, поможет выбрать дверь и ответит на любые вопросы.
                        </div>
                        <div class="popup__call-form-inputs">
                            <form id="callback-form">
                                <div class="popup__call-form-top">
                                    <div>
                                        <label for="popup__name">Дата</label>
                                        <select name="callback_date" id="popup__name">
                                            <option value="today">сегодня</option>
                                            <option value="tomorrow">завтра</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="popup__time">Время</label>
                                        <select name="callback_time" id="popup__time">
                                            <option value="1">11:00 - 11:30</option>
                                            <option value="2">11:30 - 12:00</option>
                                            <option value="3">12:00 - 12:30</option>
                                            <option value="4">12:30 - 13:00</option>
                                            <option value="5">13:00 - 13:30</option>
                                            <option value="6">13:30 - 14:00</option>
                                            <option value="7">14:00 - 14:30</option>
                                            <option value="8">14:30 - 15:00</option>
                                            <option value="9">15:00 - 15:30</option>
                                            <option value="10">15:30 - 16:00</option>
                                            <option value="11">16:00 - 16:30</option>
                                            <option value="12">16:30 - 17:00</option>
                                            <option value="13">17:00 - 17:30</option>
                                            <option value="14">17:30 - 18:00</option>
                                            <option value="15">18:00 - 18:30</option>
                                            <option value="16">18:30 - 19:00</option>
                                            <option value="17">19:00 - 19:30</option>
                                            <option value="18">19:30 - 20:00</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" name="callback_name" placeholder="Имя">
                                <input type="text" name="callback_phone" placeholder="Телефон">
                                <label for="popup__checkbox" class="popup__checkbox"><input type="checkbox" name="callback_privacy" value="agree" id="popup__checkbox">Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом</label>
                                <input type="submit" name="callback_submit" value="заказать звонок" class="popup__call-form-submit popup__submit">
                            </form>
                        </div>
                    </div>
                    <div class="popup__call-form-inner-numbers">
                        <div class="popup__call-form-title">
                            Свяжитесь с нами
                        </div>
                        <div class="vol-contacs contacts-num">
                            <a href="tel:+7 (3532) 97-24-24">
                                <span>+7 (3532) 97-24-24</span>
                            </a>
                            <div class="contacs-num-descr">(отдел продаж)</div>
                        </div>
                        <div class="vol-contacs contacts-num">
                            <a href="tel:+7 (965) 690-88-91">
                                <span>+7 (965) 690-88-91</span>
                            </a>
                            <div class="contacs-num-descr">(отдел снабжения)</div>
                        </div>
                        <div class="vol-contacs contacts-num">
                            <a href="tel:+7 (961) 949-48-48">
                                <span>+7 (961) 949-48-48 </span>
                            </a>
                            <div class="contacs-num-descr">(директор)</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){
          
            $('#callback-form').on('submit', function(e) {

                e.preventDefault();

                /* var name = $('#question-form input[name="name"]').val();
                var email = $('#question-form input[name="email"]').val();
                var phone = $('#question-form input[name="phone"]').val();
                var privacy = $('#question-form input[name="privacy"]').val(); */

                /* var formData = new FormData();
                
                formData.append('name', $('#question-form input[name="name"]').val());
                formData.append('email', $('#question-form input[name="email"]').val());
                formData.append('phone', $('#question-form input[name="phone"]').val());
                formData.append('privacy', $('#question-form input[name="privacy"]').val());
                //formData.append('document', $('#question-form input[name="document"]')[0].files[0]);
                formData.append('g_recaptcha_response', $('#question-form textarea[name="g-recaptcha-response"]').val()); */

                $.ajax({
                    type: 'POST',
                    data: $('#callback-form').serialize(),
                    cache: false,
                    url: '/constructor-sendmail.php',
                    success: function(response) {

                        //alert(response);

                        let data = JSON.parse(response);

                        if (data.status == 1) {

                            alert(data.message);

                            $('#callback-form input[name="callback_name"]').val('');
                            $('#callback-form input[name="callback_phone"]').val('');

                        }
                        else {

                            alert(data.message);

                        }

                    },
                    error: function() {
                    
                        alert('Error!');

                    }

                });

            }); 

        });

    </script>

    <div id="popup__contacts" style="display: none">
        <div class="popup__contacts-inner">
            <div class="popup__contact-title">
                Связаться с нами
            </div>
            <div class="popup__contacts-items">
                <div class="popup__contacts-item">
                    <div class="popup__contacts-phone">
                        <a id="popup__contacts-phone">+7 (353) 297-24-24</a>
                    </div>
                    <div class="popup__contacts-descr">
                        отдел продаж
                    </div>
                    <button class="popup__contacts-button default-btn for-copy-popup dontwork" id="popup__contacts-button" onclick="copyTextWithButton('popup__contacts-phone', 'popup__contacts-button')">копировать</button>
                </div>
                <div class="popup__contacts-item">
                    <div class="popup__contacts-phone">
                        <a href="#">+7 (965) 690-88-91</a>
                    </div>
                    <div class="popup__contacts-descr">
                        отдел снабжения
                    </div>
                    <button class="popup__contacts-button default-btn dontwork">копировать</button>
                </div>
                <div class="popup__contacts-item">
                    <div class="popup__contacts-phone">
                        <a href="#">+7 (961) 949-48-48</a>
                    </div>
                    <div class="popup__contacts-descr">
                        директор
                    </div>
                    <button class="popup__contacts-button default-btn dontwork">копировать</button>
                </div>
            </div>
        </div>
    </div>


    <div id="popup__fullsize" style="display: none">
        <div class="cfg-preview-wrapper">
            <div class="cfg-preview-content">
                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                        class="container-door-preview-img"
                                        style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                        class="container-door-preview-img loaded"
                                        style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup__share" style="display: none">
        <div class="popup__share-inner">
            <div class="popup__share-left">
                <div class="popup__share-title">
                    Termo
                </div>
                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                        class="container-door-preview-img"
                                        style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                        class="container-door-preview-img loaded"
                                        style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__share-cost-old">96300 ₽</div>
                <div class="popup__share-cost-current">89900 ₽</div>
            </div>
            <div class="popup__share-right">
                <div class="popup__share-title">Поделиться дверью</div>
                <div class="popup__share-btns">
                    <a href="#" class="popup__share-btn">Вконтакте</a>
                    <a href="#" class="popup__share-btn">WhatsApp</a>
                    <a href="#" class="popup__share-btn">Одноклассники</a>
                    <input type="text" placeholder="Ссылка на скачивание">
                    <div class="popup__share-btn-copy default-btn">Скопировать ссылку</div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup__toemail" style="display: none">
        <div class="popup__share-inner">
            <div class="popup__share-left">
                <div class="popup__share-title">
                    Termo
                </div>
                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                        class="container-door-preview-img"
                                        style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                        class="container-door-preview-img loaded"
                                        style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__share-cost-old">96300 ₽</div>
                <div class="popup__share-cost-current">89900 ₽</div>
            </div>
            <div class="popup__share-right">
                <div class="popup__share-title">Скачать чек двери</div>
                <div class="popup__share-btns">
                    <div class="popup__share-descr">Мы отправим вам на e-mail полную спецификацию двери.</div>
                    <input type="text" placeholder="Электронная почта">
                    <label for="popup__toemail-checkbox" class="popup__share-checkbox"><input type="checkbox" id="popup__toemail-checkbox">Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом</label>
                    <div class="popup__share-btn-copy default-btn">Получить PDF</div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup__get-order" style="display: none">
        <div class="popup__call-inner">
            <div class="popup__call-title">
                Оформить заказ
            </div>
            <div class="popup__call-blocks">
                <div class="popup__call-time">

                    <div class="popup__call-time-top">
                        <div class="popup__call-time-title">Звонок</div>
                        <div class="popup__call-time-btns">
                            <button class="later-btn popup__time-btn popup-btn-numbers active" onclick='popupGetNumbersOrder()'>
                                <div class="popup__time-btn-title ">позвонить нам</div>
                            </button>
                            <button class="later-btn popup__time-btn popup-btn-call" onclick='popupGetCallOrder()'>
                                <div class="popup__time-btn-title ">выбрать время</div>
                            </button>
                        </div>
                    </div>
                    <div class="popup__share-left">
                        <div class="popup__share-title">
                            Termo
                        </div>
                        <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                                    <div class="container-door-preview">
                                        <div class="container-door-preview-placeholder">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                                class="container-door-preview-img"
                                                style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                                    <div class="container-door-preview">
                                        <div class="container-door-preview-placeholder">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                                class="container-door-preview-img loaded"
                                                style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__share-cost-old">96300 ₽</div>
                        <div class="popup__share-cost-current">89900 ₽</div>
                    </div>
                    
                </div>
                <div class="popup__call-form">
                    <div class="popup__call-form-inner" style="display: none">
                        <div class="popup__call-form-title">
                            Контактная форма
                        </div>
                        <div class="popup__call-form-subtitle">
                            Наш менеджер перезвонит вам в выбранное время, поможет выбрать дверь и ответит на любые вопросы.
                        </div>
                        <div class="popup__call-form-inputs">
                            <form>
                                <div class="popup__call-form-top">
                                    <div>
                                        <label for="popup__name">Дата</label>
                                        <select name="" id="popup__name">
                                            <option value="today">сегодня</option>
                                            <option value="tomorrow">завтра</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="popup__time">Время</label>
                                        <select name="" id="popup__time">
                                            <option value="1100">11:00 - 11:30</option>
                                            <option value="1130">11:30 - 12:00</option>
                                            <option value="1200">12:00 - 12:30</option>
                                            <option value="1130">12:30 - 13:00</option>
                                            <option value="1130">13:00 - 13:30</option>
                                            <option value="1130">13:30 - 14:00</option>
                                            <option value="1130">14:00 - 14:30</option>
                                            <option value="1130">14:30 - 15:00</option>
                                            <option value="1130">15:00 - 15:30</option>
                                            <option value="1130">15:30 - 16:00</option>
                                            <option value="1130">16:00 - 16:30</option>
                                            <option value="1130">16:30 - 17:00</option>
                                            <option value="1130">17:00 - 17:30</option>
                                            <option value="1130">17:30 - 18:00</option>
                                            <option value="1130">18:00 - 18:30</option>
                                            <option value="1130">18:30 - 19:00</option>
                                            <option value="1130">19:00 - 19:30</option>
                                            <option value="1130">19:30 - 20:00</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" placeholder="Имя">
                                <input type="number" placeholder="Телефон">
                                <label for="popup__checkbox" class="popup__checkbox"><input type="checkbox" id="popup__checkbox">Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом</label>
                                <input type="submit" value="заказать звонок" class="popup__call-form-submit popup__submit">
                            </form>
                        </div>
                    </div>
                    <div class="popup__call-form-inner-numbers">
                        <div class="popup__call-form-title">
                            Свяжитесь с нами
                        </div>
                        <div class="vol-contacs contacts-num">
                            <a href="tel:+7 (3532) 97-24-24">
                                <span>+7 (3532) 97-24-24</span>
                            </a>
                            <div class="contacs-num-descr">(отдел продаж)</div>
                        </div>
                        <div class="vol-contacs contacts-num">
                            <a href="tel:+7 (965) 690-88-91">
                                <span>+7 (965) 690-88-91</span>
                            </a>
                            <div class="contacs-num-descr">(отдел снабжения)</div>
                        </div>
                        <div class="vol-contacs contacts-num">
                            <a href="tel:+7 (961) 949-48-48">
                                <span>+7 (961) 949-48-48 </span>
                            </a>
                            <div class="contacs-num-descr">(директор)</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup__cheque" style="display: none">
        <div class="popup__share-title">Чек двери</div>
        <div class="accordion-content">
            <div>
                <div class="cfg-option-changer-wrapper">
                    <div class="cfg-option-changer-title"> Основная конструкция двери</div>
                </div>
                <div class="cfg-optionsline first">
                    <ul>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">База</div>
                                    <div class="options-item-l-description">Termo Light
                                    </div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">59&nbsp;000 ₽</div>
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
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип</div> 
                                    <div class="options-item-l-description">Тип II</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу</div>
                                </div>
                            </div> 
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция</div> 
                                    <div class="options-item-l-description">Остекление: Прозрачное</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">54&nbsp;800 ₽</div>
                                </div>
                            </div> 
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Дополнительная секция</div> 
                                    <div class="options-item-l-description">Декоративная решетка: Asia</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">23&nbsp;600 ₽</div>
                                </div>
                            </div> 
                            <ul></ul>
                        </li>
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
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Отделка</div>
                                    <div class="options-item-l-description">Металл без
                                        отделки
                                    </div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Крепление панели</div>
                                    <div class="options-item-l-description">Стандартное
                                    </div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет металла</div>
                                    <div class="options-item-l-description">Bronze</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
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
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет металла</div>
                                    <div class="options-item-l-description">Bronze</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included"> Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
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
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Цвет</div>
                                    <div class="options-item-l-description">Хром</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Ручка</div>
                                    <div class="options-item-l-description">Venera</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">5400 ₽</div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Производитель петель
                                    </div>
                                    <div class="options-item-l-description">Combi Arialdo,
                                        Италия</div>
                                </div>
                                <div class="options-item-r">
                                    <div></div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Декор петель</div>
                                    <div class="options-item-l-description">Без декора</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Защитная пластина</div> 
                                    <div class="options-item-l-description">Золото</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">25&nbsp;300 ₽</div> 
                                </div>
                            </div> 
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Усиление порога</div> 
                                    <div class="options-item-l-description">Vizantia (Золото)</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">12&nbsp;800 ₽</div> 
                                </div>
                            </div> 
                            <ul></ul>
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
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Производитель замка
                                    </div>
                                    <div class="options-item-l-description">Турция</div>
                                </div>
                                <div class="options-item-r">
                                    <div></div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Замок</div>
                                    <div class="options-item-l-description">Kale</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">8300 ₽</div>
                                </div>
                            </div>
                            <ul></ul>
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
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Тип доводчика</div> 
                                    <div class="options-item-l-description">Коричневый</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">5400 ₽</div> 
                                    <div class="options-item-r-remove"></div>
                                </div>
                            </div> 
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Вентиляционная решетка</div> 
                                    <div class="options-item-l-description">Да</div>
                                </div> 
                                <div class="options-item-r">
                                    <div class="options-item-r-cost">10&nbsp;500 ₽</div> 
                                    <div class="options-item-r-remove"></div>
                                </div>
                            </div> 
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Направление открывания
                                    </div>
                                    <div class="options-item-l-description">Внешнее</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Сторона открывания
                                    </div>
                                    <div class="options-item-l-description">Левое</div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Размер двери</div>
                                    <div class="options-item-l-description">880 x 2050 мм
                                    </div>
                                </div>
                                <div class="options-item-r">
                                    <div></div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Металл двери</div>
                                    <div class="options-item-l-description">Холоднокатаная
                                        сталь
                                    </div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                        <li>
                            <div class="options-item">
                                <div class="options-item-l">
                                    <div class="options-item-l-title">Размер конструкции
                                    </div>
                                    <div class="options-item-l-description">---- x ---- мм
                                    </div>
                                </div>
                                <div class="options-item-r">
                                    <div class="options-item-r-included">Включено в базу
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

    <div class="call_back icon-phone-call" data-fancybox data-src="#popup__contacts">
        <div class="pulse"></div>
    </div>
    <?php wp_footer(  ); ?>

</html>