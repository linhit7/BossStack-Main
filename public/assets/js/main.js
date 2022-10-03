AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
  initClassName: "aos-init", // class applied after initialization
  // animatedClassName: "aos-animate", // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
});

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

let selectHeader = document.getElementsByTagName("header");
let selectMenuItem = selectHeader[0].querySelectorAll(".menu-item");
selectMenuItem.forEach((element, index) => {
  let selectMenuChild = element.querySelector(".menu-child");
  if (selectMenuChild) {
    let selectLink = element.querySelectorAll(".menu-link");
    selectLink.forEach((element) => {
      if (element.getAttribute("href") === "#") {
        element.setAttribute("style", "pointer-events: none;");
      }
    });
    selectMenuChild.style.visibility = "hidden";
    element.addEventListener("click", function (e) {
      // element.classList.remove("checked");
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

let header = document.querySelector("header");
window.addEventListener("scroll", function (e) {
  if (e.currentTarget.scrollY > 50) {
    header.classList.add("fixed");
  } else {
    header.classList.remove("fixed");
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
