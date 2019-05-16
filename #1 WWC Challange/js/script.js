const Check = document.getElementsByClassName("Check");

const AcceptCheck = function() {
    for(let i = 0; i < Check.length; i++) {
        Check[i].addEventListener("click", function() {
            if(Check[i].className === "Check red") {
                Check[i].classList.remove("red");
                Check[i].classList.add("green");
            } else if(Check[i].className === "Check green") {
                Check[i].classList.remove("green");
                Check[i].classList.add("red");
            }
        })
    }
}

AcceptCheck();

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js');
}