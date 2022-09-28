let getBannerDefault = document.querySelector(".banner");
let getTitlePage = getBannerDefault.querySelector("h2");
let getDesPage = getBannerDefault.querySelector(".des");
let getImgBanner = getBannerDefault.querySelector(".bg-feature-img");
let getBtnBanner = getBannerDefault.getElementsByTagName("a");
listTitlePage.map((element) => {
  if (window.location.href === element.link) {
    getTitlePage.innerHTML = element.titlePage;
    if (element.description !== "") {
      getDesPage.innerHTML = element.description;
    }

    if (element.imageLink !== undefined && element.button !== undefined) {
      getImgBanner.setAttribute("src", element.imageLink);
      getBtnBanner[0].innerHTML = element.button;
    }
  }
});

// let getRecruitmentList = document.querySelector(".recruitment-list");
// let nameRecruitmentInfo = getRecruitmentList.querySelector(".name");
// console.log("nameRecruitmentInfo", nameRecruitmentInfo);
// let dealineRecruitmentInfo = getRecruitmentList.querySelector(".dealine");
// recruitmentListdb.map((item) => {

// });

let selectMenuItem = document.querySelectorAll(".menu-item");
selectMenuItem.forEach((element, index) => {
  let selectMenuChild = element.querySelector(".menu-child");

  if (selectMenuChild) {
    selectMenuChild.style.visibility = "hidden";
    element.addEventListener("click", function (e) {
      e.preventDefault();
      console.log(index);
      e.currentTarget.classList.toggle("checked");
      if (element.classList.contains("checked")) {
        selectMenuChild.style.visibility = "visible";
      } else {
        setTimeout(() => {
          selectMenuChild.style.visibility = "hidden";
        }, 1100);
      }
    });
  }
});

let filePath = document.querySelector("#cv");
let selectLabelUpload = document.querySelector(".label-icon");
let selectCvFile = document.querySelector(".cv-file");
selectCvFile.style.display = "none";
filePath.addEventListener("change", function demo() {
  let nameFile = filePath.value.slice(12);
  if (nameFile) {
    selectCvFile.style.display = "block";
    selectCvFile.innerHTML = nameFile;
  }
});
