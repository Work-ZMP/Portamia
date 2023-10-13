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

}





