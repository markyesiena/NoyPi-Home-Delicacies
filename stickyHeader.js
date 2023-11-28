window.onscroll = function() {myFunction()};

        var header = document.getElementById("nav");
        var content = document.getElementById("Content");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.scrollY > sticky){
                header.classList.add("sticky");
                content.classList.add("whenSticky");
            }
            else{
                header.classList.remove("sticky");
                content.classList.remove("whenSticky");
            }
        }