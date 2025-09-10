let d_overlay = document.querySelector(".global-overlay");
let d_close_modal = document.querySelectorAll(".close-modal");

console.log(d_close_modal)

function global_overlay_fade_in() {
  document.body.classList.add("overlay-is-visible");
}
function global_overlay_fade_out() {
  document.body.classList.remove("overlay-is-visible");
}

if(d_close_modal.length) {
  for(let i = 0; i < d_close_modal.length; i++) {
    d_close_modal[i].addEventListener("click", function(e){

      global_overlay_fade_out();
      e.target.parentElement.parentElement.classList.remove("is-visible");

    }, false);
  }
}
{
  // INDEX HERO CARDS
  if (document.getElementById("index-hero-cards")) {
    let splide = new Splide("#index-hero-cards", {
      type: "loop",
      perPage: 1,
      perMove: 1,
      arrows: false,
      gap: 0,
      pagination: false,
      mediaQuery: "min",
      breakpoints: {
        1025: {
          destroy: true,
        },
      },
    });

    splide.mount();
  }
}
{
  if (document.querySelectorAll(".flex_insurance_grid").length) {
    let splide = new Splide(".flex_insurance_grid", {
      type: "loop",
      perPage: 1,
      perMove: 1,
      arrows: false,
      gap: 0,
      pagination: false,
      mediaQuery: "min",
      breakpoints: {
        1025: {
          destroy: true,
        },
      },
    });
    splide.mount();
  }
}
{
  // Flex tabs accordion
  let flexItem = document.querySelectorAll(".accordion-trigger");
  let flexItemLength = flexItem.length;

  if (flexItemLength) {
    for (let i = 0; i < flexItemLength; i++) {
      flexItem[i].addEventListener(
        "click",
        function (e) {
          if (!e.target.classList.contains("is-closed")) {
              e.target.classList.add("is-closed");
          } else {
            for (let ii = 0; ii < flexItemLength; ii++) {
              flexItem[ii].classList.add("is-closed");
            }
              flexItem[i].classList.remove("is-closed");
          }
        },
        false
      );
    }
  }
}
// News accordion
{
  let newsBtn = document.querySelectorAll(".btn-ghost-plus");

  if (newsBtn.length) {
    for (let i = 0; i < newsBtn.length; i++) {
      newsBtn[i].addEventListener(
        "click",
        function (e) {
          e.preventDefault();

          if (
            e.target.parentNode.parentNode.classList.contains("post-is-closed")
          ) {
            e.target.parentNode.parentNode.classList.remove("post-is-closed");
            setTimeout(function () {
              e.target.parentNode.parentNode.nextElementSibling.classList.remove(
                "post-content-hidden"
              );
            }, 100);
          } else {
            e.target.parentNode.parentNode.nextElementSibling.classList.add(
              "post-content-hidden"
            );

            setTimeout(function () {
              e.target.parentNode.parentNode.classList.add("post-is-closed");
            }, 400);
          }

          console.log();
        },
        false
      );
    }
  }
}
{
  // VIDEO MOD
  let videoPlayBtn = document.querySelectorAll(".flex-video-mod-play-btn");
  let videoPauseBtn = document.querySelectorAll(".flex-video-mod-pause-btn");

  if (videoPlayBtn.length) {
    let videoPlayBtnLength = videoPlayBtn.length;

    for (let i = 0; i < videoPlayBtnLength; i++) {
      let video = videoPlayBtn[i].parentElement.previousElementSibling;

      video.onended = function () {
        video.classList.remove("playing");
        video.classList.add("paused");
      };
      let progressBar = video.parentElement.querySelector(".video-progress");

      progressBar.addEventListener("click", function (e) {
        let newProgressPerc = Math.floor(
          (e.layerX * 100) / e.target.offsetWidth
        );
        progressBar.value = newProgressPerc;

        video.currentTime = (video.duration / 100) * newProgressPerc;
      });

      let videoTime = video.parentElement.querySelector(".video-time");
      let videoInterval;

      videoPlayBtn[i].addEventListener(
        "click",
        function (e) {
          if (video.paused) {
            video.play();
            video.classList.remove("paused");
            video.classList.add("playing");

            videoInterval = setInterval(function () {
              progressBar.value = Math.round(
                (video.currentTime / video.duration) * 100
              );

              let min = Math.floor(video.duration / 60);
              let sec = Math.floor(video.duration - min * 60);
              let currentMin = Math.floor(video.currentTime / 60);
              let currentSec = Math.floor(video.currentTime % 60);
              if (currentSec < 10) {
                currentSec = "0" + currentSec;
              }

              videoTime.innerHTML =
                currentMin + ":" + currentSec + " / " + min + ":" + sec;
            }, 300);
          }
        },
        false
      );
    }
  }

  if (videoPauseBtn.length) {
    let videoPauseBtnLength = videoPauseBtn.length;

    for (let i = 0; i < videoPauseBtnLength; i++) {
      videoPauseBtn[i].addEventListener(
        "click",
        function (e) {
          let video =
            e.target.parentElement.parentElement.previousElementSibling
              .previousElementSibling;

          if (!video.paused) {
            video.pause();
            video.classList.add("paused");
            video.classList.remove("playing");
          }
        },
        false
      );
    }
  }
}