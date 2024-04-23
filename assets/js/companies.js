

function companiesBtn() {
    document.querySelectorAll('.companies__btn').forEach(el => el.addEventListener('mouseover', function () {
        document.querySelectorAll('.companies__btn').forEach(b => b.classList.remove('active'))
        el.classList.add('active');

        let btns = document.querySelector('.companies__btns');
        let background = document.querySelector('.companies__back');
        let backgroundimg = document.querySelector('.companies__back-img');
        let overlay = document.querySelector('.companies__overlay');
        let overlayimg = document.querySelector('.companies__overlay-img');

        if (el.classList.contains('link-portamia')) {
            console.log('portamia');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-portamia.webp');
            overlay.classList.add('active');
            btns.classList.add('load');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-portamia.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
        if (el.classList.contains('link-leyenda')) {
            console.log('leyenda');
            btns.classList.add('load');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-leyenda.webp');
            overlay.classList.add('active');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-leyenda.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
        if (el.classList.contains('link-zmp')) {
            console.log('zmp');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-zmp.webp');
            overlay.classList.add('active');
            btns.classList.add('load');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-zmp.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
        if (el.classList.contains('link-mercato')) {
            console.log('mercato');

            overlayimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-mercato.webp');
            overlay.classList.add('active');
            btns.classList.add('load');

            setTimeout(function () {
                backgroundimg.setAttribute('src', 'https://portamia.ru/wp-content/themes/mercato/assets/img/companies/cover-mercato.webp')
                overlay.classList.remove('active');
                btns.classList.remove('load');
            }, 1600);

        }
    }));
}
companiesBtn();