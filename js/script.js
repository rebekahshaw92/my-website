reveal = () => {
    const reveals = document.querySelectorAll(".reveal");
    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const elementTop =  reveals[i].getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);

openNav = () => {
    document.getElementById("mySidenav").style.width = "250px";

}

closeNav = () => {
    document.getElementById("mySidenav").style.width = "0";
}

$(document).ready(() => {
// $('.navbar-toggler-icon').click(() => {
//     $('.navbar-toggler-icon').toggleClass('active');
//     return false;
// });
    //  $('#hamburger').on('click', () => {
    //          $(this).toggleClass('close');
    //          $('#nav').toggleClass('visible');
    //      });
        
        $('a[href*=#]').on('click', (e) => {
          e.preventDefault();
          $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
});

$(function() {
  $('#hamburger').on('click', function() {
    $(this).toggleClass('close');
    $('#nav').toggleClass('visible');
  });
});


