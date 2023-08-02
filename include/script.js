var swiper = new Swiper(".mySwiper", {
  autoplay: {
    delay: 1000,
  },
  slidesPerView: 4,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      console.log("hrlooo");
      $(".navbar").addClass("solid");
      $(".navbar").removeClass("transparent");
    } else {
      $(".navbar").addClass("transparent");
      $(".navbar").removeClass("solid");
    }
  });
});

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

// $(document).ready(function () {
//   $(window).scroll(function () {
//     var scroll = $(window).scrollTop();
//     if (scroll > 300) {
//       $(".navbar-black").css("background", "blue");
//     } else {
//       $(".navbar-black").css("background", "#333");
//     }
//   });
// });

const bgAnimation = document.getElementById("bgAnimation");

const numberOfColorBoxes = 400;

for (let i = 0; i < numberOfColorBoxes; i++) {
  const colorBox = document.createElement("div");
  colorBox.classList.add("colorBox");
  bgAnimation.append(colorBox);
}
