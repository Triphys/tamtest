/* eslint-disable */
import { gsap } from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Parallax from 'parallax-js';
import { tns } from "tiny-slider"

gsap.registerPlugin(ScrollTrigger);

export default {
  init() {
    //Tiny slider
    const sliderHome = tns({
      container: '.hero-slider',
      items: 1,
      mode: 'gallery',
      controls: false,
      autoplay: true,
      speed: 3000,
      autoplayTimeout: 6000,
      autoplayButton: false,
      nav: false
    });
    const sliderHomeMobile = tns({
      container: '.hero-mobile-slider',
      items: 1,
      mode: 'gallery',
      controls: false,
      autoplay: true,
      speed: 3000,
      autoplayTimeout: 6000,
      autoplayButton: false,
      nav: false
    });
  },
  finalize() {
  },
};
/* eslint-enable */