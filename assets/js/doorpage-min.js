if(document.querySelector(".colors__block-items"))var swiperColors=new Swiper(".colors__block-items",{slidesPerView:"4",keyboard:{enabled:!0,onlyInViewport:!1},loop:!1,spaceBetween:20,freemode:!0});if(document.querySelector(".colors__section")){document.querySelectorAll(".colors__block-items.main .colors__block-item").forEach((o=>o.addEventListener("click",(function(){if(this.classList.contains("active"));else{document.querySelectorAll(".colors__block-items.main .colors__block-item").forEach((o=>o.classList.remove("active"))),this.classList.add("active");let o=this.dataset.color;console.log(o);let e="";document.querySelectorAll(".colors__block-items.accent .colors__block-item").forEach((o=>{o.classList.contains("active")&&(e=o.dataset.color,console.log(e))})),linkColorOutdoor=`https://portamia.ru/wp-content/themes/mercato/assets/img/door/outdoor/${o}/${e}/door.png`,linkColorIndoor=`https://portamia.ru/wp-content/themes/mercato/assets/img/door/indoor/${o}/${e}/door.png`,document.querySelector(".colors__left .colors__img.first").setAttribute("src",linkColorOutdoor),document.querySelector(".colors__left .colors__img.second").setAttribute("src",linkColorIndoor)}}))))}