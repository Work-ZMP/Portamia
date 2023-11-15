if (document.querySelector(".colors__block-items")) {
    var swiperColors = new Swiper(".colors__block-items", {
        slidesPerView: "1.3",
        spaceBetween: 5,
        breakpoints: {
            480: {
                spaceBetween: 20,
                slidesPerView: "4",                
            }
        },    
        keyboard: {
            enabled: true,
            onlyInViewport: false
        },
        loop: false,
        
        freemode: true,
    });

};



if (document.querySelector('.colors__section')) {

    let linkTypeDoor = document.querySelector('.colors__right').dataset.doortype;

    document.querySelectorAll('.colors__block-items.main .colors__block-item')
        .forEach(el => el.addEventListener('click', function () {
            if (this.classList.contains('active')) {

            } else {
                document.querySelectorAll('.colors__block-items.main .colors__block-item').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                let linkMain1 = this.dataset.color;
                console.log(linkMain1);

                let linkMain2 = '';
                document.querySelectorAll('.colors__block-items.accent .colors__block-item')
                    .forEach(b => {
                        if (b.classList.contains('active')) {
                            linkMain2 = b.dataset.color;
                            console.log(linkMain2);
                        }
                    });

                linkMainColorOutdoor = `https://portamia.ru/wp-content/themes/mercato/assets/img/door/${linkTypeDoor}/outdoor/${linkMain1}/${linkMain2}/door.png`
                linkMainColorIndoor = `https://portamia.ru/wp-content/themes/mercato/assets/img/door/${linkTypeDoor}/indoor/${linkMain1}/${linkMain2}/door.png`

                document.querySelector('.colors__left .colors__img.first').setAttribute('src', linkMainColorOutdoor)
                document.querySelector('.colors__left .colors__img.second').setAttribute('src', linkMainColorIndoor)

            }


        }));


    document.querySelectorAll('.colors__block-items.accent .colors__block-item')
        .forEach(el => el.addEventListener('click', function () {
            if (this.classList.contains('active')) {

            } else {
                document.querySelectorAll('.colors__block-items.accent .colors__block-item').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                let linkAcc2 = this.dataset.color;
                console.log(linkAcc2);

                let linkAcc1 = '';
                document.querySelectorAll('.colors__block-items.main .colors__block-item')
                    .forEach(b => {
                        if (b.classList.contains('active')) {
                            linkAcc1 = b.dataset.color;
                            console.log(linkAcc2);
                        }
                    });

                linkAccColorOutdoor = `https://portamia.ru/wp-content/themes/mercato/assets/img/door/${linkTypeDoor}/outdoor/${linkAcc1}/${linkAcc2}/door.png`
                linkAccColorIndoor = `https://portamia.ru/wp-content/themes/mercato/assets/img/door/${linkTypeDoor}/indoor/${linkAcc1}/${linkAcc2}/door.png`

                document.querySelector('.colors__left .colors__img.first').setAttribute('src', linkAccColorOutdoor)
                document.querySelector('.colors__left .colors__img.second').setAttribute('src', linkAccColorIndoor)

            }


        }));





    function hideBlocksWithEmptyImageSrc(blocks) {
        blocks.forEach(block => {
            const image = block.querySelector('img');

            if (image.getAttribute('src').trim() == '') {
                block.style.display = 'none';
            }

        });
    }


    const blocks = document.querySelectorAll('.colors__block-item');
    hideBlocksWithEmptyImageSrc(blocks);











    function checkColors() {
        const blockItems = document.querySelectorAll('.colors__main-block .colors__block-item'); // Выбираем все элементы, которые нужно проверить
        let allHidden = true;

        // Проверяем, все ли элементы имеют display: none
        blockItems.forEach(item => {
            if (item.style.display !== 'none') {
                allHidden = false;
                console.log('не все дисплэй нон')
            }
        });

        // Если все элементы скрыты, показываем сообщение "Пока нет доп. цветов"
        if (allHidden) {
            console.log('выводим сообщение')
            const messageElement = document.createElement('div');
            messageElement.textContent = 'Пока нет доп. цветов';
            messageElement.className = 'no-colors-message'; // Добавляем класс для стилизации
            const swiperWrapper = document.querySelector('.colors__main-block .swiper-wrapper');
            swiperWrapper.appendChild(messageElement);
        }
    }

    // Вызываем функцию для проверки и отображения сообщения
    checkColors();



    function checkColorsAcc() {
        const blockItems = document.querySelectorAll('.colors__accent-block .colors__block-item'); // Выбираем все элементы, которые нужно проверить
        let allHidden = true;

        // Проверяем, все ли элементы имеют display: none
        blockItems.forEach(item => {
            if (item.style.display !== 'none') {
                allHidden = false;
                console.log('не все дисплэй нон')
            }
        });

        // Если все элементы скрыты, показываем сообщение "Пока нет доп. цветов"
        if (allHidden) {
            console.log('выводим сообщение')
            const messageElement = document.createElement('div');
            messageElement.textContent = 'Пока нет доп. цветов';
            messageElement.className = 'no-colors-message'; // Добавляем класс для стилизации
            const swiperWrapper = document.querySelector('.colors__accent-block .swiper-wrapper');
            swiperWrapper.appendChild(messageElement);
        }
    }

    // Вызываем функцию для проверки и отображения сообщения
    checkColorsAcc();

}