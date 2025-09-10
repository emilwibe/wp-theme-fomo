{
    let case_mod = document.querySelectorAll(".flex-mod-case");

    if(case_mod.length) {
        for (let i = 0; i < case_mod.length; i++) {
            let num_of_cards = case_mod[i].querySelectorAll(".flex-case-img-wrapper");

            if( num_of_cards.length == 1 ) {
                case_mod[i].classList.add("case-cards-1");
            }  else if (num_of_cards.length == 2) {
                case_mod[i].classList.add("case-cards-2");
            } else if (num_of_cards.length >= 3) {
                case_mod[i].classList.add("case-cards-3");
            }
        }
    }
}
{
  let case_mod = document.querySelectorAll(".case-outer");
  if (case_mod.length) {
    for (let i = 0; i < case_mod.length; i++) {
      let case_text = case_mod[i].querySelector(".case-splide-text");
      let case_card = case_mod[i].querySelector(".case-splide-cards");

      let splide_cards = new Splide(case_card, {
        type: "fade",
        rewind: true,
        perPage: 1,
        perMove: 1,
        gap: 20,
        arrows: false,
      });

      let splide_text = new Splide(case_text, {
        type: "fade",
        rewind: true,
        perPage: 1,
        perMove: 1,
        arrows: true,
        pagination: false,
        mediaQuery: "min",
        breakpoints: {
          1024: {
            arrows: false,
          },
        },
      });

      splide_text.sync(splide_cards);
      splide_text.mount();
      splide_cards.mount();
    }
  }
}