<template>
  <div class="body-wrap boxed-container">
    <Header />

    <main>
      <section class="hero">
        <div class="container">
          <div class="hero-inner">
            <div class="hero-copy">
              <h1 class="hero-title mt-0">Manage your companies</h1>
              <p class="hero-paragraph">
                Whether you are a small business owner or heading multiple
                businesses, there would always be a number of activities going
                on every time.
              </p>
              <div class="hero-cta">
                <a class="button button-primary" href="#">Buy it now</a>
                <div class="lights-toggle">
                  <input
                    id="lights-toggle"
                    type="checkbox"
                    name="lights-toggle"
                    class="switch"
                    checked="checked"
                  />
                  <label for="lights-toggle" class="text-xs"
                    ><span
                      >Turn me <span class="label-text">dark</span></span
                    ></label
                  >
                </div>
              </div>
            </div>
            <div class="hero-media">
              <div class="header-illustration">
                <img
                  class="header-illustration-image asset-light"
                  src="images/header-illustration-light.svg"
                  alt="Header illustration"
                />
                <img
                  class="header-illustration-image asset-dark"
                  src="images/header-illustration-dark.svg"
                  alt="Header illustration"
                />
              </div>
              <div class="hero-media-illustration">
                <img
                  class="hero-media-illustration-image asset-light"
                  src="images/hero-media-illustration-light.svg"
                  alt="Hero media illustration"
                />
                <img
                  class="hero-media-illustration-image asset-dark"
                  src="images/hero-media-illustration-dark.svg"
                  alt="Hero media illustration"
                />
              </div>
              <div class="hero-media-container">
                <img
                  class="hero-media-image asset-light"
                  src="images/hero-media-light.svg"
                  alt="Hero media"
                />
                <img
                  class="hero-media-image asset-dark"
                  src="images/hero-media-dark.svg"
                  alt="Hero media"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="features section">
        <div class="container">
          <div class="features-inner section-inner has-bottom-divider">
            <div class="features-header text-center">
              <div class="container-sm">
                <h2 class="section-title mt-0">The Product</h2>
                <p class="section-paragraph">
                  Lorem ipsum is common placeholder text used to demonstrate the
                  graphic elements of a document or visual presentation.
                </p>
                <div class="features-image">
                  <img
                    class="features-illustration asset-dark"
                    src="images/features-illustration-dark.svg"
                    alt="Feature illustration"
                  />
                  <img
                    class="features-box asset-dark"
                    src="images/features-box-dark.svg"
                    alt="Feature box"
                  />
                  <img
                    class="features-illustration asset-dark"
                    src="images/features-illustration-top-dark.svg"
                    alt="Feature illustration top"
                  />
                  <img
                    class="features-illustration asset-light"
                    src="images/features-illustration-light.svg"
                    alt="Feature illustration"
                  />
                  <img
                    class="features-box asset-light"
                    src="images/features-box-light.svg"
                    alt="Feature box"
                  />
                  <img
                    class="features-illustration asset-light"
                    src="images/features-illustration-top-light.svg"
                    alt="Feature illustration top"
                  />
                </div>
              </div>
            </div>
            <div class="features-wrap">
              <div class="feature is-revealing">
                <div class="feature-inner">
                  <div class="feature-icon">
                    <img
                      class="asset-light"
                      src="images/feature-01-light.svg"
                      alt="Feature 01"
                    />
                    <img
                      class="asset-dark"
                      src="images/feature-01-dark.svg"
                      alt="Feature 01"
                    />
                  </div>
                  <div class="feature-content">
                    <h3 class="feature-title mt-0">Discover</h3>
                    <p class="text-sm mb-0">
                      Lorem ipsum dolor sit amet, consecte adipiscing elit, sed
                      do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua dui.
                    </p>
                  </div>
                </div>
              </div>
              <div class="feature is-revealing">
                <div class="feature-inner">
                  <div class="feature-icon">
                    <img
                      class="asset-light"
                      src="images/feature-02-light.svg"
                      alt="Feature 02"
                    />
                    <img
                      class="asset-dark"
                      src="images/feature-02-dark.svg"
                      alt="Feature 02"
                    />
                  </div>
                  <div class="feature-content">
                    <h3 class="feature-title mt-0">Discover</h3>
                    <p class="text-sm mb-0">
                      Lorem ipsum dolor sit amet, consecte adipiscing elit, sed
                      do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua dui.
                    </p>
                  </div>
                </div>
              </div>
              <div class="feature is-revealing">
                <div class="feature-inner">
                  <div class="feature-icon">
                    <img
                      class="asset-light"
                      src="images/feature-03-light.svg"
                      alt="Feature 03"
                    />
                    <img
                      class="asset-dark"
                      src="images/feature-03-dark.svg"
                      alt="Feature 03"
                    />
                  </div>
                  <div class="feature-content">
                    <h3 class="feature-title mt-0">Discover</h3>
                    <p class="text-sm mb-0">
                      Lorem ipsum dolor sit amet, consecte adipiscing elit, sed
                      do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua dui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta section">
        <div class="container-sm">
          <div class="cta-inner section-inner">
            <div class="cta-header text-center">
              <h2 class="section-title mt-0">Get it and Switch</h2>
              <p class="section-paragraph">
                Lorem ipsum is common placeholder text used to demonstrate the
                graphic elements of a document or visual presentation.
              </p>
              <div class="cta-cta">
                <a class="button button-primary" href="#">Buy it now</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <Footer />
  </div>
</template>

<script>
import Footer from '../components/Footer.vue';
import Header from '../components/Header.vue';

export default {
  components: {
    Footer,
    Header,
  },
  mounted() {
    const doc = document;
    const rootEl = doc.documentElement;
    const body = doc.body;
    const lightSwitch = doc.getElementById('lights-toggle');
    /* global ScrollReveal */
    const sr = (window.sr = ScrollReveal());

    rootEl.classList.remove('no-js');
    rootEl.classList.add('js');

    window.addEventListener('load', function() {
      body.classList.add('is-loaded');
    });

    // Reveal animations
    function revealAnimations() {
      sr.reveal('.feature', {
        duration: 600,
        distance: '20px',
        easing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
        origin: 'right',
        viewFactor: 0.2,
      });
    }

    if (body.classList.contains('has-animations')) {
      window.addEventListener('load', revealAnimations);
    }

    // Light switcher
    if (lightSwitch) {
      window.addEventListener('load', checkLights);
      lightSwitch.addEventListener('change', checkLights);
    }

    function checkLights() {
      let labelText = lightSwitch.parentNode.querySelector('.label-text');
      if (lightSwitch.checked) {
        body.classList.remove('lights-off');
        if (labelText) {
          labelText.innerHTML = 'dark';
        }
      } else {
        body.classList.add('lights-off');
        if (labelText) {
          labelText.innerHTML = 'light';
        }
      }
    }
  },
};
</script>
