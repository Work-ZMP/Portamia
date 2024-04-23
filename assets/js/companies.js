

function holdingBtn() {
    document.querySelectorAll('.holding__btn').forEach(el => el.addEventListener('mouseon', function () {
        document.querySelectorAll('.holding__btn').forEach(b => b.classList.remove('active'))
        el.classList.add('active');

        let btns = document.querySelector('.holding__btns');
        let background = document.querySelector('.holding__back');
        let backgroundimg = document.querySelector('.holding__back-img');
        let overlay = document.querySelector('.holding__overlay');
        let overlayimg = document.querySelector('.holding__overlay-img');

        let link = document.querySelector('.holding__link');

        if (el.classList.contains('link-portamia')) {
            console.log('portamia');
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