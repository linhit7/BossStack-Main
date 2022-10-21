const selectShowText = document.querySelector(".show-text");
const selectInput = document.querySelectorAll("input");
const selectInputPass = document.querySelector("#password");
selectShowText.innerHTML = `<i class="fa-regular fa-eye"></i>`;

selectShowText.addEventListener("click", function (e) {
  let getTypePass = selectInputPass.getAttribute("type");
  if (getTypePass === "password") {
    selectInputPass.setAttribute("type", "string");
    selectShowText.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`;
  }else{
    selectInputPass.setAttribute("type", "password");
    selectShowText.innerHTML = `<i class="fa-regular fa-eye"></i>`;
  }
})

// selectInput.forEach((inputElm) => {
//   inputElm.addEventListener("change", function(e) {
//     console.log(e.currentTarget.getAttribute("required"));
//     if (e.currentTarget.value === "") {
      
//     }
//   })
// })

