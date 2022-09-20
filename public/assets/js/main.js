listTitlePage.map((element) => {
  let getBannerDefault = document.querySelector(".banner");
  let getTitlePage = getBannerDefault.querySelector("h2");
  let getDesPage = getBannerDefault.querySelector(".des");
  if (window.location.href === element.link) {
    getTitlePage.innerHTML = element.titlePage;
    if (element.des !== "") {
      getDesPage.innerHTML = element.description;
    }
  }
});
