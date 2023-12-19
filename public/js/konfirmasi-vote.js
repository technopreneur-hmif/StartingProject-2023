const viewBtn = document.querySelector("#btn-vote"),
  popup = document.querySelector(".popup"),
  close = popup.querySelector(".close"),
  field = popup.querySelector(".field"),
  input = field.querySelector("input"),
  copy = field.querySelector("button");

viewBtn.onclick = () => {
  popup.classList.toggle("show");
};
close.onclick = () => {
  viewBtn.click();
};
z