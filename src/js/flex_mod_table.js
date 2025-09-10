{
  let flex_table = document.querySelectorAll(".flex-mod-table");

  if (flex_table.length) {
    let table_select_1 = document.querySelector(".flex-table-switch-btn-1");
    let table_select_2 = document.querySelector(".flex-table-switch-btn-2");
    let table_one = document.querySelector(".flex-table-one");
    let table_two = document.querySelector(".flex-table-two");

    table_select_1.addEventListener(
      "click",
      function (e) {
        e.target.classList.add("is-marked");

        if(table_select_2) {
            table_select_2.classList.remove("is-marked");
        }    
        table_one.style.display = "block";
        table_two.style.display = "none";
      },
      false
    );

    if (table_select_2) {
        table_select_2.addEventListener("click", function(e){
        e.target.classList.add("is-marked");
        table_select_1.classList.remove("is-marked");
        table_one.style.display = "none";
        table_two.style.display = "block";
    }, false);
    }
  }


}
{
  let table_triggers = document.querySelectorAll(".table-cell.trigger");

  if (table_triggers.length) {
    for (let i = 0; i < table_triggers.length; i++) {
      table_triggers[i].addEventListener(
        "click",
        function (e) {
          if (e.target.parentElement.classList.contains("is-open")) {
            e.target.parentElement.classList.remove("is-open");
          } else {
            for (let ii = 0; ii < table_triggers.length; ii++) {
              table_triggers[ii].classList.remove("is-open");
            }
            e.target.parentElement.classList.add("is-open");
          }
        },
        false
      );
    }
  }
}
{
    let table_col_variation_3 = document.querySelectorAll('.table-headings-3-col');
    let table_col_variation_4 = document.querySelectorAll('.table-headings-4-col');

    if(table_col_variation_3.length) {
        for(let i = 0; i < table_col_variation_3.length; i++) {
            let heading_2 = table_col_variation_3[i].querySelector(".table-col-heading-2");
            let heading_3 = table_col_variation_3[i].querySelector(".table-col-heading-3");

            if(heading_2.innerHTML == "") {
                table_col_variation_3[i].classList.add("table-fixed-1-col");
            } else if(heading_3.innerHTML == "") {
                table_col_variation_3[i].classList.add("table-fixed-2-col");
            }
        }
    }
    if(table_col_variation_4.length) {
        for(let i = 0; i < table_col_variation_3.length; i++) {
            let heading_2 = table_col_variation_3[i].querySelector(".table-col-heading-2");
            let heading_3 = table_col_variation_3[i].querySelector(".table-col-heading-3");
            let heading_4 = table_col_variation_4[i].querySelector(".table-col-heading-4");

            if(heading_2.innerHTML == "") {
              table_col_variation_4[i].classList.add("table-fixed-1-col")
            } else if (heading_3.innerHTML == "") {
                table_col_variation_4[i].classList.add("table-fixed-2-col")
            } else if (heading_4.innerHTML == "") {
                table_col_variation_4[i].classList.add("table-fixed-3-col");
            }
        }
    }
}