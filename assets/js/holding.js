

function holdingBtn() {
    document.querySelectorAll('.holding__btn').forEach(el => el.addEventListener('click', function () {
        document.querySelectorAll('.holding__btn').forEach(b => b.classList.remove('active'))
        el.classList.add('active');

        let title = document.querySelector('.holding__title');
        let subtitle = document.querySelector('.holding__subtitle');
        let descr = document.querySelector('.holding__descr');
        let link = document.querySelector('.holding__link');

        if (el.classList.contains('link-portamia')) {
            console.log('portamia');
            title.textContent = 'Portamia'
            subtitle.textContent = '(ООО “Завод МетПром”)'
            descr.textContent = '"Portamia" - это гарантия безопасности и стиля в вашем доме. Наше предприятие специализируется на производстве высококачественных металлических входных и межкомнатных дверей, которые сочетают в себе элегантный дизайн и надежную защиту.'
            link.setAttribute('src', 'https://portamia.ru/');
        }
        if (el.classList.contains('link-leyenda')) {
            console.log('leyenda');
            title.textContent = 'Leyenda'
            subtitle.textContent = '(ООО “Фабрика мебели “Легенда”)'
            descr.textContent = 'На фабрике "Легенда" создается не просто мебель, а настоящие произведения искусства, воплощающие в себе красоту, комфорт и функциональность. Каждый предмет мебели, произведенный на этой фабрике, несет в себе долю мастерства и страсти к дизайну.'
            link.setAttribute('src', 'https://leyenda.ru/');
        }
        if (el.classList.contains('link-zmp')) {
            console.log('zmp');
            title.textContent = 'Завод МетПром'
            subtitle.textContent = '(ООО “Завод МетПром”)'
            descr.textContent = '"Завод МетПром" - это надежный партнер для юридических лиц, специализирующийся на производстве высококачественных металлических дверей и металлоизделий. Наше производство обеспечивает компаниям прочные и стильные решения, сочетающие в себе безопасность и эстетику.'
            link.setAttribute('src', 'https://z-mp.ru/');
        }
        if (el.classList.contains('link-mercato')) {
            console.log('mercato');
            title.textContent = 'Mercato'
            subtitle.textContent = '(ООО “Завод МетПром”)'
            descr.textContent = '"Mercato" - это место, где стиль и комфорт соединяются, чтобы создать уникальную лофт-мебель для каждого. Наша фабрика специализируется на производстве мебели в стиле лофт, который отличается своей смелостью и нестандартностью, привнося в интерьер ощущение свободы и современности.'
            link.setAttribute('src', 'https://z-mp.ru/');
        }
    }));
}
holdingBtn();