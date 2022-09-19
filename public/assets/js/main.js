listTitlePage.map((element) => {
  let getBannerDefault = document.querySelector(".banner");
  let getTitlePage = getBannerDefault.querySelector("h2");
  console.log(window.location.href === element.link);
  if (window.location.href === element.link) {
    getTitlePage.innerHTML = element.titlePage;
  }
});
