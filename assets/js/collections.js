
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



function hideElementsWithEmptyTextContent(elements) {
    elements.forEach(element => {
      if (element.textContent.trim() === "") {
        element.style.display = 'none';
      }
    });
  }
  
  // Example usage:
  const elements = document.querySelectorAll('.collection__item-cover'); // Replace with your desired class or selector
  hideElementsWithEmptyTextContent(elements);