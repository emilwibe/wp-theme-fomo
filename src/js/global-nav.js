{
  let globalNavBar = document.querySelector(".nav-global-wrapper");
  let insuranceNavToggle = document.querySelector("#insurance-trigger");
  let navLeft = document.querySelector(".nav-left");
  let navDist2Top;

  let d_fomo_search = document.getElementById("fomo-search-input");

  let d_global_nav_trigger = document.getElementById("global-nav-trigger");

  d_global_nav_trigger.addEventListener("click", function () {
    if (!document.body.classList.contains("mobile-nav-open")) {
      document.body.classList.remove("is-open-insurance-nav");
      document.body.classList.remove("search-results-visible");
    }
    document.body.classList.toggle("mobile-nav-open");
  });

  function stickNav2Top() {
    navDist2Top = window.pageYOffset - navLeft.getBoundingClientRect().top;
    if (navDist2Top > 30 && window.innerWidth > 1024) {
      globalNavBar.classList.add("fixed");
    } else if (navDist2Top > 60) {
      globalNavBar.classList.add("fixed");
    } else {
      globalNavBar.classList.remove("fixed");
    }
  }

  stickNav2Top();

  window.addEventListener(
    "scroll",
    function () {
      stickNav2Top();

      d_fomo_search.classList.remove("in-focus");
      d_fomo_search.classList.add("not-in-focus");
      d_fomo_search.value = "";
    },
    false
  );

  insuranceNavToggle.addEventListener(
    "click",
    function (e) {
      e.preventDefault();
      if (!document.body.classList.contains("is-open-insurance-nav")) {
        document.body.classList.remove("mobile-nav-open");
      }
      document.body.classList.toggle("is-open-insurance-nav");
    },
    false
  );

  let subNavToggle = globalNavBar.querySelectorAll(
    ".menu-item-has-children > a"
  );

  if (subNavToggle.length) {
    for (let i = 0; i < subNavToggle.length; i++) {
      let sub_trigger = document.createElement("span");
      sub_trigger.classList.add("sub_trigger");
      subNavToggle[i].appendChild(sub_trigger);

      sub_trigger.addEventListener(
        "click",
        function (e) {
          e.preventDefault();
          e.target.parentElement.parentElement.classList.toggle("sub-is-open");

          console.log(e.target);
        },
        false
      );
    }
  }
}
