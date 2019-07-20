export default {
  init() {
    // JavaScript to be fired on all pages

    // Used to swap out images used as backgrounds
    class ResponsiveBackgroundImage {
      constructor(element) {
        this.element = element;
        this.img = element.querySelector('img');
        this.src = '';

        this.img.addEventListener('load', () => {
          this.update();
        });

        if (this.img.complete) {
          this.update();
        }
      }

      update() {
        let src = typeof this.img.currentSrc !== 'undefined' ? this.img.currentSrc : this.img.src;
        if (this.src !== src) {
          this.src = src;
          this.element.style.backgroundImage = 'url("' + this.src + '")';

        }
      }
    }
    let elements = document.querySelectorAll('[data-responsive-background-image]');
    for (let i=0; i<elements.length; i++) {
      new ResponsiveBackgroundImage(elements[i]);
    }

    // Remove the show class from the primary navigation
    const navClose = document.getElementById('nav-close');
    const navBar = document.getElementById('navbarSupportedContent');
    navClose.onclick = () =>{
      navBar.classList.remove('show');
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
