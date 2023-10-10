if (document.querySelector(".colors__block-items")) {
    var swiperColors = new Swiper(".colors__block-items", {
        slidesPerView: "4",
        keyboard: {
            enabled: true,
            onlyInViewport: false
        },
        loop: false,
        spaceBetween: 20,
        freemode: true,
    });

};



if (document.querySelector('.colors__section')) {
    let linkColor = '';

    document.querySelectorAll('.colors__block-items.main .colors__block-item')
        .forEach(el => el.addEventListener('click', function () {
            if (this.classList.contains('active')) {

            } else {
                document.querySelectorAll('.colors__block-items.main .colors__block-item').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                let link1 = this.dataset.color;
                console.log(link1);

                let link2 = '';
                document.querySelectorAll('.colors__block-items.accent .colors__block-item')
                    .forEach(b => {
                        if (b.classList.contains('active')) {
                            link2 = b.dataset.color;
                            console.log(link2);
                        }
                    });

                linkColorOutdoor = `https://portamia.ru/wp-content/themes/mercato/assets/img/door/outdoor/${link1}/${link2}/door.png`
                linkColorIndoor = `https://portamia.ru/wp-content/themes/mercato/assets/img/door/indoor/${link1}/${link2}/door.png`

                document.querySelector('.colors__left .colors__img.first').setAttribute('src', linkColorOutdoor)
                document.querySelector('.colors__left .colors__img.second').setAttribute('src', linkColorIndoor)

            }


        }))
}