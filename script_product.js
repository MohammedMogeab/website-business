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
// comments codes
function toggleReplies(button) {
    const replies = button.parentElement.querySelectorAll('.unique-reply');
    replies.forEach(reply => {
        reply.style.display = reply.style.display === 'none' ? 'block' : 'none';
    });
    button.textContent = button.textContent === 'عرض المزيد' ? 'عرض أقل' : 'عرض المزيد';
}

function toggleReplyInput(button) {
    const replyInput = button.parentElement.parentElement.querySelector('.unique-reply-input');
    replyInput.style.display = replyInput.style.display === 'none' ? 'flex' : 'none';
}

function submitComment() {
    // هنا يمكنك إضافة منطق إرسال التعليق
    alert("تم إرسال التعليق!");
}

function submitReply(button) {
    // هنا يمكنك إضافة منطق إرسال الرد
    alert("تم إرسال الرد!");
}
// end comments codes
// developers show
function toggleExpand(event, card) {
    event.stopPropagation(); // منع النقر من الانتقال إلى الوثيقة
    const expandedCards = document.querySelectorAll('.unique-user-card.expanded');
    expandedCards.forEach(expandedCard => {
        if (expandedCard !== card) {
            expandedCard.classList.remove('expanded'); // إغلاق القوالب الأخرى
        }
    });
    card.classList.toggle('expanded'); // توسيع أو تقليص القالب المحدد
}

document.addEventListener('click', function() {
    const expandedCards = document.querySelectorAll('.unique-user-card.expanded');
    expandedCards.forEach(card => {
        card.classList.remove('expanded'); // إغلاق القوالب عند النقر في أي مكان آخر
    });
});
//developer show end
