{
  let postalCodes = {
    aero: {
      5960: "Marstal",
      5970: "Ærøskøbing",
      5965: "Birkholm",
      5985: "Søby Ærø",
    },
    assens: {
      5492: "Vissenbjerg",
      5560: "Aarup",
      5610: "Assens",
      5620: "Glamsbjerg",
      5631: "Ebberup",
      5683: "Haarby",
      5690: "Tommerup",
    },
    faaborg: {
      5600: "Faaborg",
      5601: "Lyø",
      5602: "Avernakø",
      5603: "Bjørnø",
      5642: "Millinge",
      5672: "Broby",
      5750: "Ringe",
      5772: "Kværndrup",
      5792: "Årslev",
      5854: "Gislev",
      5856: "Ryslinge",
    },
    kerteminde: {
      5290: "Marslev",
      5300: "Kerteminde",
      5330: "Munkebo",
      5350: "Rynkeby",
      5370: "Mesinge",
      5380: "Dalby",
      5390: "Martofte",
      5550: "Langeskov",
    },
    langeland: {
      5900: "Rudkøbing",
      5932: "Humble",
      5935: "Bagenkop",
      5943: "Strynø",
      5953: "Tranekær",
    },
    middelfart: {
      5463: "Harndrup",
      5464: "Brenderup Fyn",
      5466: "Asperup",
      5500: "Middelfart",
      5580: "Nørre Aaby",
      5591: "Gelsted",
      5592: "Ejby",
    },
    nordfyn: {
      5400: "Bogense",
      5450: "Otterup",
      5462: "Morud",
      5471: "Søndersø",
      5474: "Veflinge",
      5485: "Skamby",
    },
    nyborg: {
      5540: "Ullerslev",
      5800: "Nyborg",
      5853: "Ørbæk",
      5871: "Frørup",
    },
    odense: {
      5000: "Odense C",
      5200: "Odense V",
      5210: "Odense NV",
      5220: "Odense SØ",
      5230: "Odense M",
      5240: "Odense NØ",
      5250: "Odense SV",
      5260: "Odense S",
      5270: "Odense N",
      5320: "Agedrup",
      5491: "Blommenslyst",
    },
    svendborg: {
      5700: "Svendborg",
      5762: "Vester Skerninge",
      5771: "Stenstrup",
      5874: "Hesselager",
      5881: "Skårup Fyn",
      5882: "Vejstrup",
      5883: "Oure",
      5884: "Gudme",
      5892: "Gudbjerg Sydfyn",
    },
  };
  let flex_maps = document.querySelectorAll(".flex-mod-emp-map");

  if (flex_maps.length) {
    let flex_maps_length = flex_maps.length;

    for (let i = 0; i < flex_maps_length; i++) {
      let d_map = flex_maps[i].querySelector(".fyn-map");
      let d_map_kommuner = d_map.querySelectorAll(".kommune");
      let d_emp_input = flex_maps[i].querySelector(".emp-search-by-postal");
      let d_emps = flex_maps[i].querySelectorAll(".emp-list-item");
      let d_emp_count = flex_maps[i].querySelector(".emp-count-visible");
      let d_btn_overlay = flex_maps[i].querySelectorAll(".btn-overlay");
      let d_emp_img = flex_maps[i].querySelectorAll(".emp-img");

      if(d_emp_img.length) {
        for(let i = 0; i < d_emp_img.length; i++) {
          d_emp_img[i].addEventListener("click" ,function(e){

            if(e.target.classList.contains("btn-overlay") || e.target.tagName == "SPAN" || e.target.tagName == "IMG") {

            }
            global_overlay_fade_in();
            d_emp_img[i].parentElement.querySelector(".global-modal").classList.add("is-visible");

            //e.target.parentElement.parentElement.querySelector(".global-modal").classList.add("is-visible");


          }, false);
        }
      }
      function emp_print_shown () {
        let counter = 0;

        for ( let i = 0; i < d_emps.length; i++ ) {
          if(d_emps[i].getAttribute("style") != "display: none;"){
            counter++;
          }
          d_emp_count.innerHTML = counter;
        }
      }
      emp_print_shown ();

      // RESET MAP
      function reset_map() {
        d_map.removeAttribute("data-active-area");

        if (d_map_kommuner.length) {
          for (let i = 0; i < d_map_kommuner.length; i++) {
            d_map_kommuner[i].classList.remove("selected");
          }
          for (let i = 0; i < d_emps.length; i++) {
            d_emps[i].style.display = "flex";
          }
        }
        emp_print_shown ();
      }

      // FILTER MAP
      function filter_map($args) {
        // FILTER BY INPUT
        if (isNaN($args)) {
          reset_map();
        } else if (typeof $args == "number") {
          for (const city in postalCodes) {
            if (postalCodes[city].hasOwnProperty($args)) {
              reset_map();

              d_map.querySelector("." + city).classList.add("selected");
            }
          }

          for (let ii = 0; ii < d_emps.length; ii++) {
            if (d_emps[ii].dataset.postalcode.includes($args)) {
              d_emps[ii].style.display = "flex";
            } else {
              d_emps[ii].style.display = "none";
            }
          }
        }
      }
      let area_selected = {
        "selected": true,
        "area": ""
      };
      // MAP CLICK EVENT
      d_map.addEventListener(
        "click",
        function (e) {
          reset_map();

          let area;
          let area_postal_codes;

          console.log("area selected: " + area_selected);

          if (
            e.target.parentElement.hasAttribute("data-area") ||
            e.target.parentElement.parentElement.hasAttribute("data-area")
          ) {

              if (e.target.parentElement.hasAttribute("data-area")) {
              e.target.parentElement.setAttribute(
                "class",
                e.target.parentElement.getAttribute("class") + " selected"
              );

              area = e.target.parentElement.getAttribute("data-area");
            } else {
              e.target.parentElement.parentElement.setAttribute(
                "class",
                e.target.parentElement.parentElement.getAttribute("class") + " selected"
              );

              area = e.target.parentElement.parentElement.getAttribute("data-area");
            }

            console.log(area);

            

            if(area_selected.selected && area_selected.area == area ) {
              area_selected.selected = false;
              area_selected.area = "";

              reset_map();

              return;
            }

            
            area_selected.selected = true;
            area_selected.area = area;

            switch (area) {
              case "aero":
                area_postal_codes = postalCodes.aero;
                break;
              case "assens":
                area_postal_codes = postalCodes.assens;
                break;
              case "faaborg":
                area_postal_codes = postalCodes.faaborg;
                break;
              case "kerteminde":
                area_postal_codes = postalCodes.kerteminde;
                break;
              case "langeland":
                area_postal_codes = postalCodes.langeland;
                break;
              case "middelfart":
                area_postal_codes = postalCodes.middelfart;
                break;
              case "nordfyn":
                area_postal_codes = postalCodes.nordfyn;
                break;
              case "nyborg":
                area_postal_codes = postalCodes.nyborg;
                break;
              case "odense":
                area_postal_codes = postalCodes.odense;
                break;
              case "svendborg":
                area_postal_codes = postalCodes.svendborg;
                break;
            }

            for (let ii = 0; ii < d_emps.length; ii++) {
              let isInArea = false;

              for (const [key, value] of Object.entries(area_postal_codes)) {
                if (d_emps[ii].getAttribute("data-postalcode").includes(key)) {
                  isInArea = true;
                }
              }
              if (isInArea) {
                d_emps[ii].style.display = "flex";
              } else {
                d_emps[ii].style.display = "none";
              }
            }

            emp_print_shown();

            

          }
        },
        false
      );
      // INPUT EVENT
      d_emp_input.addEventListener(
        "keyup",
        function (e) {
          if (e.target.value.length == 4) {
            let postal_input = Number(e.target.value);

            filter_map(postal_input);
            emp_print_shown ();
          } else {
            reset_map();
          }
        },
        false
      );
    }

    
  }
}
