

function holdingBtn() {
    document.querySelectorAll('.holding__btn').forEach(el => el.addEventListener('click', function () {
        document.querySelectorAll('.holding__btn').forEach(b => b.classList.remove('active'))
        el.classList.add('active');

        let btns = document.querySelector('.holding__btns');
        let background = document.querySelector('.holding__back');
        let backgroundimg = document.querySelector('.holding__back-img');
        let overlay = document.querySelector('.holding__overlay');
        let overlayimg = document.querySelector('.holding__overlay-img');

        let title = document.querySelector('.holding__title');
        let subtitle = document.querySelector('.holding__subtitle');
        let descr = document.querySelector('.holding__descr');
        let link = document.querySelector('.holding__link');

        if (el.classList.contains('link-portamia')) {
            console.log('portamia');
            title.textContent = 'Portamia'
            subtitle.textContent = '(ООО “Завод МетПром”)'
            subtitleBig.textContent = 'Изготовление кухонь, шкафов и др. мебели из МДФ'
            descr.textContent = '"Portamia" - это гарантия безопасности и стиля в вашем доме. Наше предприятие специализируется на производстве высококачественных металлических входных и межкомнатных дверей, которые сочетают в себе элегантный дизайн и надежную защиту.'
            link.setAttribute('href', 'https://portamia.ru/');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-portamia.webp');
            overlay.classList.add('active');
            btns.classList.add('load');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-portamia.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
        if (el.classList.contains('link-leyenda')) {
            console.log('leyenda');
            title.textContent = 'Leyenda'
            subtitle.textContent = '(ООО “Фабрика мебели “Легенда”)'
            subtitleBig.textContent = 'Изготовление кухонь, шкафов и др. мебели из МДФ'
            descr.textContent = 'На фабрике "Легенда" создается не просто мебель, а настоящие произведения искусства, воплощающие в себе красоту, комфорт и функциональность. Каждый предмет мебели, произведенный на этой фабрике, несет в себе долю мастерства и страсти к дизайну.'
            link.setAttribute('href', 'https://leyenda.ru/');
            btns.classList.add('load');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-leyenda.webp');
            overlay.classList.add('active');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-leyenda.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
        if (el.classList.contains('link-zmp')) {
            console.log('zmp');
            title.textContent = 'Завод МетПром'
            subtitle.textContent = '(ООО “Завод МетПром”)'
            subtitleBig.textContent = 'Изготовление кухонь, шкафов и др. мебели из МДФ'
            descr.textContent = '"Завод МетПром" - это надежный партнер для юридических лиц, специализирующийся на производстве высококачественных металлических дверей и металлоизделий. Наше производство обеспечивает компаниям прочные и стильные решения, сочетающие в себе безопасность и эстетику.'
            link.setAttribute('href', 'https://z-mp.ru/');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-zmp.webp');
            overlay.classList.add('active');
            btns.classList.add('load');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-zmp.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
        if (el.classList.contains('link-mercato')) {
            console.log('mercato');
            title.textContent = 'Mercato'
            subtitle.textContent = '(ООО “Завод МетПром”)'
            subtitleBig.textContent = 'Изготовление кухонь, шкафов и др. мебели из МДФ'
            descr.textContent = '"Mercato" - это место, где стиль и комфорт соединяются, чтобы создать уникальную лофт-мебель для каждого. Наша фабрика специализируется на производстве мебели в стиле лофт, который отличается своей смелостью и нестандартностью, привнося в интерьер ощущение свободы и современности.'
            link.setAttribute('href', 'https://fabricamercato.ru/');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-mercato.webp');
            overlay.classList.add('active');
            btns.classList.add('load');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/holding/cover-mercato.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
    }));
}
holdingBtn();