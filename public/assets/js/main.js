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
    if (window.outerWidth >= 1400) {
      selectMenuChild.classList.add("hidden");
    }
    element.addEventListener("click", function (e) {
      e.stopPropagation();
      e.currentTarget.classList.toggle("checked");
      if (window.outerWidth >= 992) {
        if (element.classList.contains("checked")) {
          selectMenuChild.classList.add("visible");
          selectMenuChild.classList.remove("hidden");
        } else {
          setTimeout(() => {
            selectMenuChild.classList.add("hidden");
            selectMenuChild.classList.remove("visible");
          }, 1100);
        }
      } else if (window.outerWidth < 992) {
        if (element.classList.contains("checked")) {
          selectMenuChild.style.maxHeight = selectMenuChild.scrollHeight + "px";
        } else {
          selectMenuChild.style.maxHeight = null;
        }
      }
    });
  }
});

window.addEventListener("scroll", function (e) {
  if (e.currentTarget.scrollY > 50) {
    selectHeader[0].classList.add("fixed");
  } else {
    selectHeader[0].classList.remove("fixed");
  }
});

let selectMenuMain = selectHeader[0].querySelector(".menu");
let selectNavBars = selectHeader[0].querySelector(".nav-bars");
selectNavBars.addEventListener("click", function (e) {
  e.stopPropagation();
  if (selectMenuMain.classList.contains("active")) {
    selectMenuMain.classList.remove("active");
  } else {
    selectMenuMain.classList.add("active");
  }
});

document.querySelector("body").addEventListener("click", function (e) {
  if (window.outerWidth >= 992) {
    selectMenuItem.forEach((element, index) => {
      let selectMenuChild = element.querySelector(".menu-child");
      if (element.classList.contains("checked")) {
        element.classList.remove("checked");
        setTimeout(() => {
          selectMenuChild.classList.add("hidden");
          selectMenuChild.classList.remove("visible");
        }, 1100);
      }
    });
  } else {
    if (selectMenuMain.classList.contains("active")) {
      selectMenuMain.classList.remove("active");
    }
  }
});

let selectTrapezium = document.querySelector(".bg-trapezium-xl");
if (window.location.href === "https://bossstack.com.vn/") {
  let selectAdvertiseHome = document.querySelector(".section-advertise");
  let selectAdvertiseRight =
    selectAdvertiseHome.querySelector(".advertise-right");
  let selectAdvertiseImg =
    selectAdvertiseRight.querySelector(".bg-advertise-img");
  let heightAdvertiseImg = selectAdvertiseImg.offsetHeight;
  if (window.outerWidth < 576) {
    let heightAdvertise = selectAdvertiseHome.offsetHeight + window.outerWidth;
    selectAdvertiseHome.style.height = `${heightAdvertise}px`;
    selectAdvertiseRight.style.height = `${window.outerWidth}px`;
    selectTrapezium.style.borderBottomWidth = `${window.outerWidth}px`;
  } else if (window.outerWidth >= 576) {
    selectAdvertiseImg.style.top = `${Math.abs(
      selectTrapezium.offsetHeight * 0.5 - heightAdvertiseImg * 0.5
    )}px`;
    selectAdvertiseImg.style.right = `${Math.abs(
      0.5 - heightAdvertiseImg / 3
    )}px`;
  }
}

window.addEventListener("scroll", function (e) {
  if (e.currentTarget.pageYOffset > 200) {
    document.querySelector(".backtotop").classList.add("show");
  } else {
    document.querySelector(".backtotop").classList.remove("show");
  }
});

document.querySelector(".backtotop").addEventListener("click", function (e) {
  e.preventDefault();
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});
