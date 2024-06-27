if (document.querySelector('.catalogue__items-title')) {
    let btnclassic = document.querySelector('.catalogue__items-title.item-classic');
    let btnmodern = document.querySelector('.catalogue__items-title.item-modern');
    let itemsclassic = document.querySelector('.catalogue__items.classic');
    let itemsmodern = document.querySelector('.catalogue__items.modern');

    btnclassic.addEventListener('click', function () {
        if (btnclassic && !btnclassic.classList.contains('active')) {
            btnclassic.classList.add('active');
            btnmodern.classList.remove('active');
            $(itemsmodern).slideUp("slow");
            $(itemsclassic).slideDown("slow");

        }
    });
    btnmodern.addEventListener('click', function  ()  {
        if (btnmodern && !btnmodern.classList.contains('active')) {
            btnmodern.classList.add('active');
            btnclassic.classList.remove('active');
            $(itemsclassic).slideUp("slow");
            $(itemsmodern).slideDown("slow");
        }

    })
}