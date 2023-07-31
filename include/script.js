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

const bgAnimation = document.getElementById("bgAnimation");

const numberOfColorBoxes = 400;

for (let i = 0; i < numberOfColorBoxes; i++) {
  const colorBox = document.createElement("div");
  colorBox.classList.add("colorBox");
  bgAnimation.append(colorBox);
}
