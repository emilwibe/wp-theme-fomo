{
  if (document.querySelectorAll(".splide-cta").length) {
    let splide = new Splide(".splide-cta", {
      type: "loop",
      perPage: 1,
      perMove: 1,
      gap: 20,
      arrows: false,
      pagination: false,
      mediaQuery: "min",
      breakpoints: {
        961: {
          destroy: true,
        },
      },
    });
    splide.mount();
  }
}