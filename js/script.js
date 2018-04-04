( function() {
    /**
     * Navbar desktop on scroll
     */ 
    const navbar = document.getElementsByClassName('navbar')[0];
    document.addEventListener('scroll', toggleNavbar, false);
    function toggleNavbar() {     
        if(window.pageYOffset >= 150) {
            navbar.classList.add('navbar--shrink');
        }
        if(window.pageYOffset < 150) {
            navbar.classList.remove('navbar--shrink');
        }
    }

    /**
     * Mobile Navigation
     */
    let mobileNavIsVisible = 0;
    const mobileNavIcon = document.getElementById("navbar__icon");
    const navbarMobile = document.getElementsByClassName('navbar__side')[0];
    mobileNavIcon.addEventListener("click", function(){
        mobileNavIsVisible++;
        if (mobileNavIsVisible){
            navbarMobile.classList.remove("navbar__mobile--hidden");
            navbarMobile.classList.add("navbar__mobile--show");
            mobileNavIcon.children[0].classList.remove("fa-bars");
            mobileNavIcon.children[0].classList.add("fa-times");
            mobileNavIsVisible = 0;
        } else {
            navbarMobile.classList.add("navbar__mobile--hidden");
            navbarMobile.classList.remove("navbar__mobile--show");
            mobileNavIcon.children[0].classList.add("fa-bars");
            mobileNavIcon.children[0].classList.remove("fa-times");
            mobileNavIsVisible = 1;
        }
        mobileNavIsVisible--
    });

    
    /**
    * Contrast
    */

    const setTheme = function() {
        if (localStorage.theme === "light") document.querySelector('body').classList.add('light');
        else  document.querySelector('body').classList.remove('light');

    };

    if (localStorage.theme === "undefined") {
        localStorage.setItem("theme", "dark");
    }

    setTheme();
    const colorBtn = document.getElementById("theme-toggle");
    colorBtn.addEventListener('click', function() {
        if (localStorage.theme === "dark") {
            document.querySelector('body').classList.add('light');
            localStorage.setItem("theme", "light");
        } else {
            document.querySelector('body').classList.remove('light');
            localStorage.setItem("theme", "dark");
        }
    // document.querySelector('body').classList.toggle('light');
     //  console.log('change theme');
    }, false)


})();

