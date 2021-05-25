/*scripts.js*/

//iife
(function () {
    
    //console.log('Child theme JS loaded!, iife fired');

    let menu = document.querySelector('nav#site-navigation.primary-navigation.custom');
    const hamburger_menu = document.querySelector('button.hamburger');
    const nav_search = document.querySelector('nav input[type="search"]');
    const nav_form = document.querySelector('nav form');
    const google_translate = document.querySelector('.google-translate');
    const site_logo = document.querySelector('img.site-logo');

    const laptop_mediaQuery = window.matchMedia('(min-width: 1266px)')



    hamburger_menu.addEventListener("click", function() {
        
        //if the hamburger menu is currently ACTIVE (=)
        if(hamburger_menu.classList.contains("is-active")){
            hamburger_menu.classList.remove("is-active");
            menu.classList.remove('visible');
        }

        //if the hamburger menu is currently CLOSED (x)    
        else{
            hamburger_menu.classList.add("is-active");
            menu.classList.add('visible');
        }

    });

      
    nav_search.setAttribute("value", "Search");
    
    nav_search.addEventListener('focus', (event) => {
        event.target.setAttribute("value", "");
      });
    


    document.addEventListener('scroll', function(e) {
     
        if(window.scrollY > 300){
            google_translate.classList.add('hidden');
        }
        else{
            google_translate.classList.remove('hidden');
        }

    }); 


   
    // run some JS if we have a laptop (min) layout
// if (laptop_mediaQuery.matches) {
//     // Then trigger an alert
//     console.log('Media Query Matched!')

//     site_logo.src = "/wp-content/themes/ihearthighlandtown2021/images/logo-main-fullscreen.svg";

//   }
    


  })();



