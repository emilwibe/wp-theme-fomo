{
  let personReadMore = document.getElementById("person-read-more");
  let d_team_members = document.querySelectorAll(".flex-mod-team-member");
  let team_members_length = d_team_members.length;
  let team_members_ceil = Math.ceil(team_members_length / 8);
  let team_counter = 1;
  let d_board_container = document.getElementById("board-container");

  console.log(team_members_ceil);

  if (personReadMore) {
    personReadMore.addEventListener("click", function (e) {
      e.preventDefault();

      if (team_counter != team_members_ceil) {
        e.target.parentElement.previousElementSibling.dataset.personsVisible++;

        team_counter++;
      } else {
        personReadMore.style.display = "none";

        d_board_container.style.display = "block";
      }
    });
  }
}
{
  let dismissNotificationBtn = document.getElementById("dismiss-notification");

  if (dismissNotificationBtn) {
    dismissNotificationBtn.addEventListener(
      "click",
      function () {
        document.documentElement.classList.add("notification-closed");

        sessionStorage.setItem("notification-bar", "dismissed");
      },
      false
    );
  }
}
