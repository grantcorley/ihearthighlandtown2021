/*scripts.js*/

console.log('Child theme JS loaded!');

let menu = document.querySelector('nav#site-navigation.primary-navigation.custom');
let hamburger_menu = document.querySelector('button.hamburger');

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