document.addEventListener("DOMContentLoaded", () => {
  // ============ ANIMACIÓN DE GRID PRODUCTS ============
  const sectionProducts = document.querySelector(".grid-products");
  if (sectionProducts) {
    const cards = sectionProducts.querySelectorAll(".grid-products__content--card");
    const title = sectionProducts.querySelector(".grid-products__title");

    const observerProducts = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            title?.classList.add("active");
            cards.forEach((card, index) => {
              setTimeout(() => {
                card.classList.add("active");
                card.querySelector(".grid-products__content--card--text")?.classList.add("active");
              }, index * 150);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observerProducts.observe(sectionProducts);
  }
  // =========== Page Services =============// 




  // ============ ANIMACIÓN DE COUNTERS ============
document.querySelectorAll(".servicesblock__numbers").forEach((servicesblock) => {
  let servicesblocksStarted = false;
  const servicesblocksCounters = servicesblock.querySelectorAll(".servicesblock__counter");

  const animateServicesblock = (counter) => {
    let current = 0;
    const rawTarget = counter.dataset.target.trim();
    const hasPercent = rawTarget.endsWith('%'); // detecta si termina en %
    const target = parseInt(rawTarget, 10);     // solo el número
    const increment = target / 100;

    const update = () => {
      if (current < target) {
        current += increment;
        if (hasPercent) {
          counter.textContent = `${Math.ceil(current)}%`;
        } else {
          counter.textContent = `+${Math.ceil(current)}`;
        }
        setTimeout(update, 30);
      } else {
        // cuando termina el conteo
        if (hasPercent) {
          counter.textContent = `${target}%`;
        } else {
          counter.textContent = `+${target}`;
        }
      }
    };

    update();
  };

  // Observer para activar animación al entrar en pantalla
  const observerServicesblock = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !servicesblocksStarted) {
        servicesblocksCounters.forEach((counter) => animateServicesblock(counter));
        servicesblocksStarted = true;
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  observerServicesblock.observe(servicesblock);
});


  const counters = document.querySelectorAll(".counter");
  const sectionCounters = document.getElementById("counters");
  let countersStarted = false;

  const animateCounter = (counter) => {
    let current = 0;
    const target = +counter.dataset.target;
    const increment = target / 100;

    const update = () => {
      if (current < target) {
        current += increment;
        counter.textContent = `+${Math.ceil(current)}`;
        setTimeout(update, 30);
      } else {
        counter.textContent = `+${target}`;
      }
    };
    update();
  };

  if (sectionCounters) {
    const observerCounters = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !countersStarted) {
          counters.forEach(animateCounter);
          countersStarted = true;
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    observerCounters.observe(sectionCounters);
  }
const sections = document.querySelectorAll(".service-section");

  sections.forEach((section) => {
    const observerSection = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          section.classList.add("active"); // agrega animación
          obs.unobserve(section); // se activa solo una vez
        }
      });
    }, { threshold: 0.3 }); // se activa cuando 30% del bloque está visible

    observerSection.observe(section);
  });

  
  // ============ CONTACTO Y TESTIMONIOS ============
  const contactSection = document.querySelector(".container-contact-main");
  if (contactSection) {
    const observerContact = new IntersectionObserver(
      ([entry], obs) => {
        if (entry.isIntersecting) {
          contactSection.classList.add("is-visible");
          obs.unobserve(contactSection);
        }
      },
      { threshold: 0.3 }
    );
    observerContact.observe(contactSection);
  }

  const testimonials = document.querySelectorAll(".block-c__testimonials");
  if (testimonials.length) {
    const observerTestimonials = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    testimonials.forEach((t) => observerTestimonials.observe(t));
  }

  // ============ SERVICES SECTION ============
  const servicesSection = document.querySelector(".services-section");
  if (servicesSection) {
    const observerServices = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          servicesSection.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    observerServices.observe(servicesSection);
  }

    // ============ ABOUT US PAGE ============
    const highlightSection = document.querySelector(".highlight-section");
if (highlightSection) {
  const label = highlightSection.querySelector(".highlight-section__label");
  const title = highlightSection.querySelector(".highlight-section__title");
  const desc = highlightSection.querySelector(".highlight-section__description");
  const items = highlightSection.querySelectorAll(".highlight-section__item");
  const image = highlightSection.querySelector(".highlight-section__image");

  const observerHighlight = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          label?.classList.add("active");
          title?.classList.add("active");
          desc?.classList.add("active");
          image?.classList.add("active");

          // Animación escalonada en items
          items.forEach((item, index) => {
            setTimeout(() => {
              item.classList.add("active");
            }, index * 200);
          });

          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );
  observerHighlight.observe(highlightSection);
}


    // ============ EXPERTS TEAM SECTION ============
  const expertsSection = document.querySelector(".block-c__experts-team");
if (expertsSection) {
  const topLabel = expertsSection.querySelector(".top-label");
  const title = expertsSection.querySelector(".experts-title");
  const subtitle = expertsSection.querySelector(".experts-subtitle");
  const cards = expertsSection.querySelectorAll(".expert-card");

  const observerExperts = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          topLabel?.classList.add("active");
          title?.classList.add("active");
          subtitle?.classList.add("active");

          cards.forEach((card, index) => {
            setTimeout(() => {
              card.classList.add("active");
            }, index * 200);
          });

          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );
  observerExperts.observe(expertsSection);
}


  // ============ SCROLL HEADER ============
  const headerNav = document.querySelector("header");
  const body = document.body;
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      headerNav?.classList.add("fixed-header");
      body.classList.add("ft-activo");
    } else {
      headerNav?.classList.remove("fixed-header");
      body.classList.remove("ft-activo");
    }
  });

  // ============ MENÚ RESPONSIVE ============
  document.querySelector(".header__responsive svg")?.addEventListener("click", () => {
    document.querySelector(".header__content-menu")?.classList.toggle("mostrar");
  });

  document.getElementById("header__close-btn")?.addEventListener("click", () => {
    document.querySelector(".header__content-menu")?.classList.remove("mostrar");
  });

  // ============ ANIMACIÓN EN SECCIONES ============
  const animatedSections = document.querySelectorAll(".cards-container__content, .about-section");
  if (animatedSections.length) {
    const observerSections = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animation", "is-in-viewport");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    animatedSections.forEach((s) => observerSections.observe(s));
  }
  document.addEventListener("DOMContentLoaded", () => {
  // ============ ANIMACIÓN DE GRID PRODUCTS ============
  const sectionProducts = document.querySelector(".grid-products");
  if (sectionProducts) {
    const cards = sectionProducts.querySelectorAll(".grid-products__content--card");
    const title = sectionProducts.querySelector(".grid-products__title");

    const observerProducts = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            title?.classList.add("active");
            cards.forEach((card, index) => {
              setTimeout(() => {
                card.classList.add("active");
                card.querySelector(".grid-products__content--card--text")?.classList.add("active");
              }, index * 150);
            });
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    observerProducts.observe(sectionProducts);
  }

  // ============ ANIMACIÓN DE COUNTERS ============
  const counters = document.querySelectorAll(".counter");
  const sectionCounters = document.getElementById("counters");
  let countersStarted = false;

  const animateCounter = (counter) => {
    let current = 0;
    const target = +counter.dataset.target;
    const increment = target / 100;

    const update = () => {
      if (current < target) {
        current += increment;
        counter.textContent = `+${Math.ceil(current)}`;
        setTimeout(update, 30);
      } else {
        counter.textContent = `+${target}`;
      }
    };
    update();
  };

  if (sectionCounters) {
    const observerCounters = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !countersStarted) {
          counters.forEach(animateCounter);
          countersStarted = true;
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    observerCounters.observe(sectionCounters);
  }

  // ============ CONTACTO Y TESTIMONIOS ============
  const contactSection = document.querySelector(".container-contact-main");
  if (contactSection) {
    const observerContact = new IntersectionObserver(
      ([entry], obs) => {
        if (entry.isIntersecting) {
          contactSection.classList.add("is-visible");
          obs.unobserve(contactSection);
        }
      },
      { threshold: 0.3 }
    );
    observerContact.observe(contactSection);
  }

  const testimonials = document.querySelectorAll(".block-c__testimonials");
  if (testimonials.length) {
    const observerTestimonials = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    testimonials.forEach((t) => observerTestimonials.observe(t));
  }

  // ============ SERVICES SECTION ============
  const servicesSection1 = document.querySelector(".services-section");
  if (servicesSection1) {
    const observerServices = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          servicesSection1.classList.add("is-visible");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    observerServices.observe(servicesSection1);
  }

    // ============ ABOUT US PAGE ============
    const highlightSection = document.querySelector(".highlight-section");
if (highlightSection) {
  const label = highlightSection.querySelector(".highlight-section__label");
  const title = highlightSection.querySelector(".highlight-section__title");
  const desc = highlightSection.querySelector(".highlight-section__description");
  const items = highlightSection.querySelectorAll(".highlight-section__item");
  const image = highlightSection.querySelector(".highlight-section__image");

  const observerHighlight = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          label?.classList.add("active");
          title?.classList.add("active");
          desc?.classList.add("active");
          image?.classList.add("active");

          // Animación escalonada en items
          items.forEach((item, index) => {
            setTimeout(() => {
              item.classList.add("active");
            }, index * 200);
          });

          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );
  observerHighlight.observe(highlightSection);
}


    // ============ EXPERTS TEAM SECTION ============
  const expertsSection = document.querySelector(".block-c__experts-team");
if (expertsSection) {
  const topLabel = expertsSection.querySelector(".top-label");
  const title = expertsSection.querySelector(".experts-title");
  const subtitle = expertsSection.querySelector(".experts-subtitle");
  const cards = expertsSection.querySelectorAll(".expert-card");

  const observerExperts = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          topLabel?.classList.add("active");
          title?.classList.add("active");
          subtitle?.classList.add("active");

          cards.forEach((card, index) => {
            setTimeout(() => {
              card.classList.add("active");
            }, index * 200);
          });

          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.3 }
  );
  observerExperts.observe(expertsSection);
}


  // ============ SCROLL HEADER ============
  const headerNav = document.querySelector("header");
  const body = document.body;
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      headerNav?.classList.add("fixed-header");
      body.classList.add("ft-activo");
    } else {
      headerNav?.classList.remove("fixed-header");
      body.classList.remove("ft-activo");
    }
  });

  // ============ MENÚ RESPONSIVE ============
  document.querySelector(".header__responsive svg")?.addEventListener("click", () => {
    document.querySelector(".header__content-menu")?.classList.toggle("mostrar");
  });

  document.getElementById("header__close-btn")?.addEventListener("click", () => {
    document.querySelector(".header__content-menu")?.classList.remove("mostrar");
  });

  // ============ ANIMACIÓN EN SECCIONES ============
  const animatedSections = document.querySelectorAll(".cards-container__content, .about-section");
  if (animatedSections.length) {
    const observerSections = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animation", "is-in-viewport");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    animatedSections.forEach((s) => observerSections.observe(s));
  }
  // ============ SERVICES SECTION ============
const servicesSection = document.querySelector(".service-section");
if (servicesSection) {
  const counters = servicesSection.querySelectorAll(".counter");
  let countersStarted = false;

  const animateCounter = (counter) => {
    let current = 0;
    const target = +counter.dataset.target;
    const increment = target / 100;

    const update = () => {
      if (current < target) {
        current += increment;
        counter.textContent = Math.ceil(current);
        setTimeout(update, 30);
      } else {
        // Si el valor viene de ACF number_plus -> termina con "+"
        if (counter.dataset.target.includes("+")) {
          counter.textContent = `+${target}`;
        }
        // Si el valor viene de ACF number_percentage -> termina con "%"
        else if (counter.dataset.target.includes("%")) {
          counter.textContent = `${target}%`;
        } else {
          counter.textContent = target;
        }
      }
    };
    update();
  };

  const observerServices = new IntersectionObserver((entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !countersStarted) {
        servicesSection.classList.add("is-visible");
        counters.forEach(animateCounter);
        countersStarted = true;
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  observerServices.observe(servicesSection);
}


  // ============ SPLIDE SLIDER ============
  if (document.querySelector(".splide-cards-a")) {
    const splide = new Splide(".splide-cards-a", {
      type: "fade",
      rewind: true,
      speed: 3000,
      autoplay: true,
      interval: 5000,
      pauseOnHover: false,
      breakpoints: { 640: { perPage: 1 } },
    });

    splide.mount(window.splide?.Extensions || {});
    splide.on("move", (newIndex) => {
      document.querySelectorAll(".contenido-slider").forEach((el) =>
        el.classList.remove("active-animate")
      );
      const currentSlide = splide.Components.Slides.getAt(newIndex).slide.querySelector(".contenido-slider");
      currentSlide?.classList.add("active-animate");
    });
  }

  // ============ LOGOS SLIDER ============
    document.querySelector(".logos-slider");
    const splidelogos = new Splide( '.logos-slider', {
      type   : 'loop',
      perPage: 3,
      autoplay: true,
      interval: 2000,
      pauseOnHover: false,
          classes: {
        arrows: 'splide__arrows your-class-arrows',
        arrow : 'splide__arrow your-class-arrow',
        prev  : 'splide__arrow--prev your-class-prev',
        next  : 'splide__arrow--next your-class-next',
      },
      breakpoints: {
        640: {
          perPage: 1,
        },
      
       
      },
    } );
   splidelogos.mount();
  
});


  // ============ SPLIDE SLIDER ============
  if (document.querySelector(".splide-cards-a")) {
    const splide = new Splide(".splide-cards-a", {
      type: "fade",
      rewind: true,
      speed: 3000,
      autoplay: true,
      interval: 5000,
      pauseOnHover: false,
      breakpoints: { 640: { perPage: 1 } },
    });

    splide.mount(window.splide?.Extensions || {});
    splide.on("move", (newIndex) => {
      document.querySelectorAll(".contenido-slider").forEach((el) =>
        el.classList.remove("active-animate")
      );
      const currentSlide = splide.Components.Slides.getAt(newIndex).slide.querySelector(".contenido-slider");
      currentSlide?.classList.add("active-animate");
    });
  }

  // ============ LOGOS SLIDER ============
    document.querySelector(".logos-slider");
    const splidelogos = new Splide( '.logos-slider', {
      type   : 'loop',
      perPage: 3,
      autoplay: true,
      interval: 2000,
      pauseOnHover: false,
          classes: {
        arrows: 'splide__arrows your-class-arrows',
        arrow : 'splide__arrow your-class-arrow',
        prev  : 'splide__arrow--prev your-class-prev',
        next  : 'splide__arrow--next your-class-next',
      },
      breakpoints: {
        640: {
          perPage: 1,
        },
      
       
      },
    } );
   splidelogos.mount();
  
});

//Before and after slider
window.addEventListener('load', function() {
    // Forzamos a Juxtapose a recalcular el tamaño una vez cargada la trama
    setTimeout(function() {
        window.dispatchEvent(new Event('resize'));
    }, 500);
});