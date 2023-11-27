<?php
/*
Template Name: Контактная форма

*/

// … остальной код шаблона
?>

<?php get_header('main'); ?>

<div class="wrapper">
    <div class="form">
        <form action="#" id="form" class="form__body">
            <h1 class="form__title">Отправка данных на почту</h1>
            <div class="form__item">
                <label for="forName" class="form__label _req">Имя:*</label>
                <input id="form__name" type="text" name="name" class="form__input">
            </div>
            <div class="form__item">
                <label for="forEmail" class="form__label _req _email">E-mail:*</label>
                <input id="form__EMail" type="text" name="email" class="form__input">
            </div>
            <div class="form__item">
                <div class="form__label">Левша или правша?</div>
                <div class="options">
                    <div class="options__item">
                        <input id="formRightHanded" type="radio" value="right" name="hand" class="options__input">
                        <label for="formRightHanded" class="options__label">Правша</label>
                    </div>
                    <div class="options__item">
                        <input id="formLeftHanded" type="radio" value="left" name="hand" class="options__input">
                        <label for="formLeftHanded" class="options__label">Левша</label>
                    </div>
                </div>
            </div>
            <div class="form__item">
                <label for="formMessage" class="form__label">Сообщение:</label>
                <textarea id="formMessage" name="message" class="form__input"> </textarea>
            </div>
            <div class="form__item">
                <div class="form__label">Возраст:</div>
                <select name="age" class="select">
                    <option value="от 18 до 25" selected>Молодой</option>
                    <option value="от 18 до 25">Молодой</option>
                    <option value="от 18 до 25">Молодой</option>
                </select>
            </div>
            <div class="form__item">
               <div class="checkbox">
                    <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input">
                    <label for="formAgreement" class="checkbox__label _req"><span>Я даю своё согласие на обработку персональных данных в соответствии с <a href="">Условиями</a>*</span></label>
               </div>
            </div>
            <button type="submit" class="form__button">Отправить</button>
        </form>
    </div>
</div>



<form action="mailto:you@yourdmainhere.com" method="post" enctype="text/plain">
    FirstName:<input type="text" name="FirstName">
    Email:<input type="text" name="Email">
    <input type="submit" name="submit" value="Submit">
</form>

<?php get_footer(); ?>