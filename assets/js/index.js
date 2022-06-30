menu.addEventListener('click',function(){
    header.classList.toggle('active');
    nav.classList.toggle('active');
    console.log(header.classList[0]);
})
    nav.addEventListener('click',function(){
        header.classList.remove('active');
        nav.classList.remove('active');
    })
var swiper = new Swiper(".mySwiper", {
spaceBetween: 50,
effect: "fade",
speed: 600,
loop: true,
autoplay: {
    delay: 2500,
    disableOnInteraction: false,
},
pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
},
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},

});


let pos = {y:0, y2:0, state:''}
const elAside = document.querySelector(".top_btn a");
if(elAside){
    window.addEventListener("scroll", () => {
        // ----------aside---------------------------------
        if(0 < window.scrollY){
            elAside.classList.add("active");
        }else{
            elAside.classList.remove("active");
        }
        
        let yy =  this.scrollY;
        pos.y = window.scrollY;
        if(pos.y > pos.y2){
            pos.state = true;                
        }else{
            pos.state = false;
        }
        pos.y2 = pos.y;

        if(pos.state){
            yy = yy;
        }else{
            yy = yy;
        }
        aside_img.style.transform = `rotate(${-yy}deg)`;
        aside_img.style.transform = `rotate(${yy}deg)`;
        // ----------aside---------------------------------
    });
}

const box = document.querySelectorAll('.img_box .box');
const img = document.querySelectorAll('.img_box .img');
const img_btn1 = document.querySelector('#img_btn1'); 
const img_btn2 = document.querySelector('#img_btn2'); 
if(box&&img_btn1&&img_btn2){
    img_btn1.addEventListener('click',function(){
        for(let i=0; i < box.length; i++){
            box[i].classList.add('active');
        }
    })
    img_btn2.addEventListener('click',function(){
        for(let i=0; i < box.length; i++){
            box[i].classList.remove('active');
        }
    });
}
if(img){
    for(let a=0; a < img.length; a++){
        img[a].addEventListener('click',function(){
            box[a].classList.toggle('active');
        })
    }
}