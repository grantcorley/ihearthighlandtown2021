/*scripts.js*/

//iife
(function () {
    
    //console.log('Child theme JS loaded!, iife fired');

    let menu = document.querySelector('nav#site-navigation.primary-navigation.custom');
    let hamburger_menu = document.querySelector('button.hamburger');
    let nav_search = document.querySelector('nav input[type="search"]');
    let nav_form = document.querySelector('nav form');

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

        //add <input value="John">
    nav_search.setAttribute("value", "Search");
    
    nav_search.addEventListener('focus', (event) => {
        event.target.setAttribute("value", "");
      });
    
    //   nav_search.addEventListener('submit', (event) => {
    //     //event.target.setAttribute("value", "");
    //     console.log("submit");
    //   });



  })();



