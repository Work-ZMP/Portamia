
$(window).on('load', function () {


document.querySelectorAll('.collection__item')
.forEach(el => el.addEventListener('mouseover', function (e) {
    $(this.querySelector(".collection__item-hide-list")).slideDown('slow');
}));

document.querySelectorAll('.collection__item')
.forEach(el => el.addEventListener('mouseleave', function (e) {
    $(this.querySelector(".collection__item-hide-list")).slideUp('slow');
}));

});

if(document.querySelector('.collection__item-cover')) {
    if (document.querySelectorAll('.collection__item-cover').forEach(b => b.textContent == '')) {
        this.style.display = 'none'
    }
}