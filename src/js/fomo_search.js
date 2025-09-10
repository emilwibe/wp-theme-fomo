{
  let d_fomo_search = document.getElementById("fomo-search-input");
  let d_fomo_results = document.querySelector(".fomo-search-results");

  let d_fomo_search_form_mobile = document.querySelector(
    ".fomo-mobile-search-form"
  );
  let d_fomo_search_mobile = document.getElementById(
    "fomo-mobile-search-input"
  );
  let d_fomo_search_close_search_mobile =
    document.getElementById("close-search");
  let d_fomo_search_results_mobile = document.querySelector(
    ".fomo-search-results-mobile"
  );

  let search_endpoint = wp_site_url + "/wp-json/wp/v2/search/?search=";

  let fomo_results = [];

  // GET DATA
  async function getData(search_param, result_view = "desktop") {
    const url = search_endpoint + search_param;
    try {
      const response = await fetch(url);
      if (!response.ok) {
        throw new Error(`Response status: ${response.status}`);
      }

      const json = await response.json();

      fomo_results = [];
      if (json.length) {
        console.warn("Print: json");
        console.log(json);
        for (let i = 0; i < json.length; i++) {
          let cat_view = "";

          if (json[i].subtype == "post") {
            cat_view = "Om FOMO > Gode råd";
          } else if (json[i].url.includes("/forsikringer/")) {
            cat_view = "Forsikringer > " + json[i].title;
          } else {
            cat_view = "Side > ";
          }
          let result_item_lower = json[i].title.toLowerCase();

          if (result_item_lower.includes(search_param.toLowerCase())) {
            fomo_results.push({
              title: json[i].title,
              url: json[i].url,
              post_id: json[i].id,
              cat_view: cat_view,
            });
          }
        }
        console.warn("Print results");
        console.log(fomo_results);

        // PRINT RESULTS
        d_fomo_results.innerHTML = "";
        d_fomo_search_results_mobile.innerHTML = "";

        d_fomo_search.classList.add("hide-results");

        d_fomo_search.classList.remove("hide-results");

        document.body.classList.add("search-results-visible");
        document.body.classList.remove("mobile-nav-open");

        if (fomo_results.length) {
          for (let i = 0; i < fomo_results.length; i++) {
            //console.log(fomo_results[i].title);
            if (fomo_results[i].title) {
              let result_item = document.createElement("a");
              result_item.setAttribute("href", fomo_results[i].url);
              result_item.classList.add("result-item-link");

              let result_item_title = document.createElement("p");
              result_item_title.classList.add("result-item-title");
              result_item_title.innerHTML = fomo_results[i].title;

              let result_item_cat = document.createElement("p");
              result_item_cat.classList.add("result-item-cat");
              result_item_cat.innerHTML = fomo_results[i].cat_view;

              result_item.appendChild(result_item_title);
              result_item.appendChild(result_item_cat);

              //console.log(result_item)

              if (result_view == "desktop") {
                d_fomo_results.appendChild(result_item);
              } else if (result_view == "mobile") {
                d_fomo_search_results_mobile.appendChild(result_item);
              }
            }
          }
        }
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  if (d_fomo_search) {
    d_fomo_search.addEventListener(
      "keyup",
      function (e) {
        if (e.target.value) {
          getData(e.target.value);
        }
      },
      false
    );

    window.addEventListener(
      "click",
      function (e) {
        if (e.target.getAttribute("id") == "fomo-search-input") {
          e.target.classList.add("in-focus");
          e.target.classList.remove("not-in-focus");
        } else {
          d_fomo_search.classList.remove("in-focus");
          d_fomo_search.classList.add("not-in-focus");
        }
      },
      false
    );
  }

  d_fomo_search_form_mobile.addEventListener(
    "submit",
    function (e) {
      e.preventDefault();

      // console.log(d_fomo_search_mobile.value);

      if (d_fomo_search_mobile.value) {
        getData(d_fomo_search_mobile.value, "mobile");
      }
    },
    false
  );

  d_fomo_search_close_search_mobile.addEventListener(
    "click",
    function () {
      document.body.classList.add("mobile-nav-open");
      document.body.classList.remove("search-results-visible");
    },
    false
  );
}
