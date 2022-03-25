/* eslint-disable */
import { tns } from "tiny-slider"

export default {
  init() {
    // JavaScript to be fired on the project page
    
    //Tiny slider
    const sliderDesktop = tns({
      container: '.desktop-slider',
      items: 2,
      slideBy: 1,
      gutter: 30,
      autoplay: false,
      controlsContainer: '#customize-controls',
      prevButton: ".previous",
      nextButton: ".next",
      nav: false
    });

    const sliderMobile = tns({
      container: '.mobile-slider',
      items: 1,
      slideBy: 1,
      autoplay: true,
      mouseDrag: true,
      nav: false,
      controls: false
    });

  },
};
