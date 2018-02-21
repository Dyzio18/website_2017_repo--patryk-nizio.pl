( function() {
    //Navbar
    const navbar = document.getElementsByClassName('navbar')[0];
    document.addEventListener('scroll', toggleNavbar, false);
    function toggleNavbar() {     
        if(window.pageYOffset >= 300) {
            navbar.classList.add('navbar--shrink');
        }
        if(window.pageYOffset < 300) {
            navbar.classList.remove('navbar--shrink');
        }
    }

    
})();

