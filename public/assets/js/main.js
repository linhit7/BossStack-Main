let getBannerDefault = document.querySelector(".banner");
let getTitlePage = getBannerDefault.querySelector("h2");
let getDesPage = getBannerDefault.querySelector(".des");
let getImgBanner = getBannerDefault.querySelector(".bg-feature-img");
let getBtnBanner = getBannerDefault.getElementsByTagName("a");
listTitlePage.map((element) => {
  if (window.location.href === element.link) {
    getTitlePage.innerHTML = element.titlePage;
    if (element.des !== "") {
      getDesPage.innerHTML = element.description;
    }

    if (element.imageLink !== undefined && element.button !== undefined) {
      getImgBanner.setAttribute("src", element.imageLink);
      getBtnBanner[0].innerHTML = element.button;
    }
  }
});
