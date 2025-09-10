    {
        let mod_benefits = document.querySelectorAll(".flex-mod-benefits");

        if(mod_benefits.length) {
            for(let i = 0; i < mod_benefits.length; i++) {
                mod_benefits[i].addEventListener("click", function(e){

                    if(e.target.classList.contains("expand-left") || e.target.classList.contains("expand-right")) {
                        e.target.parentElement.previousElementSibling.classList.toggle("is-visible");
                    }
                }, false);
            }
        }
    }