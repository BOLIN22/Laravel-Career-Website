function adjustBackgroundHeight() {
    var windowHeight = window.innerHeight;
    var contentHeight = document.documentElement.scrollHeight;

    if (contentHeight < windowHeight) {
        document.querySelector('.main__bg').style.height = windowHeight + 'px';
    } else {
        document.querySelector('.main__bg').style.height = 'auto';
    }
}

window.addEventListener('resize', adjustBackgroundHeight);
document.addEventListener('DOMContentLoaded', adjustBackgroundHeight);


var slideIndex = 1;
        showSlides(slideIndex);

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        document.getElementById('interviews-link').addEventListener('click', function (event) {
            event.preventDefault();
            var dropdown = document.getElementById('interviews-dropdown');
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            } else {
                dropdown.style.display = 'block';
            }
        });

        // Close dropdown if clicked outside
        window.onclick = function (event) {
            if (!event.target.matches('#interviews-link')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }