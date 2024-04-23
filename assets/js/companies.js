

function companiesBtn() {
    document.querySelectorAll('.companies__btn').forEach(el => el.addEventListener('mouseover', function () {
        document.querySelectorAll('.companies__btn').forEach(b => b.classList.remove('active'))
        el.classList.add('active');

        let btns = document.querySelector('.companies__btns');
        let background = document.querySelector('.companies__back');
        let backgroundimg = document.querySelector('.companies__back-img');
        let overlay = document.querySelector('.companies__overlay');
        let overlayimg = document.querySelector('.companies__overlay-img');

        let link = document.querySelector('.companies__link');

        if (el.classList.contains('link-portamia')) {
            console.log('portamia');
            link.setAttribute('href', 'https://portamia.ru/');

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
            link.setAttribute('href', 'https://leyenda.ru/');
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
            link.setAttribute('href', 'https://z-mp.ru/');

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
            link.setAttribute('href', 'https://fabricamercato.ru/');

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