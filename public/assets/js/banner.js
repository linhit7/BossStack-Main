window.onload = function () {
  let selectTrapeziumBanner = document.querySelector(".bg-trapezium-xl");
  let selectBannerFeature = document.querySelector(".banner.feature");
  let selectBannerContainer = selectBannerFeature.querySelector(".container");
  let selectBannerFeatureWrap = document.querySelector(".feature-wrap");

  let selectBannerImg =
    selectBannerFeatureWrap.querySelector(".bg-feature-img");
  selectBannerImg.style.maxWidth = `${
    selectTrapeziumBanner.offsetWidth * 0.8
  }px`;
  let widthBannerImg = selectBannerImg.offsetWidth;
  let heightBannerImg = selectBannerImg.offsetHeight;
  let leftBannerImg = widthBannerImg + widthBannerImg * 0.5;
  let rightBannerImg =
    (window.outerWidth - selectBannerContainer.offsetWidth) / 2;
  let heightBanner = selectBannerFeature.offsetHeight + window.outerWidth;

  if (window.outerWidth < 576) {
    selectBannerFeature.style.height = `${heightBanner}px`;
    selectTrapeziumBanner.style.borderBottomWidth = `${window.outerWidth}px`;
    selectBannerImg.style.left = `${Math.abs(
      window.outerWidth * 0.5 - widthBannerImg * 0.5 - 7.5
    )}px`;
    selectBannerImg.style.bottom = `${heightBanner / 20 - 50}px`;
  } else if (window.outerWidth >= 576 && window.outerWidth < 992) {
    selectBannerImg.style.top = `${
      selectTrapeziumBanner.offsetHeight * 0.5 - heightBannerImg * 0.5 - 50
    }px`;
    selectBannerImg.style.right = `${0 - rightBannerImg}px`;
  } else {
    selectBannerImg.style.top = `${
      selectTrapeziumBanner.offsetHeight * 0.5 - heightBannerImg * 0.5 - 100
    }px`;
    selectBannerImg.style.left = `${
      document.querySelector("body").offsetWidth - leftBannerImg
    }px`;
  }
};
