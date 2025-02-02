// const imgs = document.querySelectorAll('.img-select a');
// const imgBtns = [...imgs];
// let imgId = 1;

// imgBtns.forEach((imgItem) => {
//     imgItem.addEventListener('click', (event) => {
//         event.preventDefault();
//         imgId = imgItem.dataset.id;
//         slideImage();
//     });
// });



//change image vidio
const video = document.getElementById("mainVidio");
const image = document.getElementById("mainImage");

function selected_item(thumbnail){
    const type = thumbnail.getAttribute("data-type");
    if (type === 'video') {
        // إظهار الفيديو وإخفاء الصورة
         document.getElementById("vidiosource").src = thumbnail.getAttribute("vidsource");
        video.style.display = 'block';
        image.style.display = 'none'
        image.style.transition = '0.5 ease';
        
    } else {
        // إخفاء الفيديو وإظهار الصورة
        video.style.display = 'none';
        image.src = thumbnail.getAttribute('src');
        image.style.display = 'block';
        image.transition = '0.5 ease';
    }
}
// function slideImage(){
//     const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

//     document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
// }

// window.addEventListener('resize', slideImage);