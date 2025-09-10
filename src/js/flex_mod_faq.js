{
    let faq_item = document.querySelectorAll(".faq-item-heading");

    if(faq_item.length) {
 
        for(let i = 0; i < faq_item.length; i++) {
            faq_item[i].addEventListener("click", function(e){

                e.target.parentElement.classList.toggle("faq-is-open");

            }, false);
        }
    }
}