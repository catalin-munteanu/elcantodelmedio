    document.addEventListener("DOMContentLoaded", function () {
        /* Funcion que maneja el menu */
        function navResponsive() {
          /* primero guardo en constantes los elementos HTML que necesito */
          const burgerMenuBtn = document.querySelector("#burger-menu-toggler");
      
          /* En este caso, al ser varios items y seleccionarlos todos, lo que se guarda
                en la constante menuItems es una lista de nodos*/
          const menuItems = document.querySelectorAll(".itemsNav");
      
          // Agrego o quito una clase al body para activar el menu mobile
          burgerMenuBtn.addEventListener("click", function () {
            document.body.classList.toggle("mobile-menu-active");
          });
      
          //recorro la lista de nodos menuItems
          menuItems.forEach(function (menuItem) {
            //ejecuto el método addEventListener() en cada uno
            menuItem.addEventListener("click", function () {
              //Al clickear un item del menu mobile, este se cierra
              document.body.classList.remove("mobile-menu-active");
      
              //selecciono el elemento con la clase y se la quito
              let currentItem = document.querySelector(".active");
              currentItem.classList.remove("active");
              //le pongo la clase al elemento clickeado
              this.classList.add("active");
            });
          });
        }
      
        navResponsive();
      });
      
      function lazyLoadIframes() {
        const iframes = document.querySelectorAll("iframe[data-src]");
        const observerOptions = {
          rootMargin: "0px 0px 50px 0px", // Adjust the rootMargin as needed
          threshold: 0,
        };
      
        const iframeObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const iframe = entry.target;
              const src = iframe.getAttribute("data-src");
              if (src) {
                iframe.setAttribute("src", src);
                iframe.removeAttribute("data-src");
                iframeObserver.unobserve(iframe);
              }
            }
          });
        }, observerOptions);
      
        iframes.forEach((iframe) => {
          iframeObserver.observe(iframe);
        });
      }
      
      document.addEventListener("DOMContentLoaded", lazyLoadIframes);
      