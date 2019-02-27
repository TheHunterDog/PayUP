function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}


let random = getRandomInt(4) + 1;
console.log(random);
document.getElementById("Hero").style.backgroundImage = `url(img/image${random}.webp)`;

function setdiffrentmenunav() {
    if (window.scrollY > 1) {
        document.getElementById('nav-top').classList.add('nav-top-scrolled');
        document.getElementById('nav-top').classList.remove('nav-top');
        document.getElementById('signup').classList.add('signup-scrolled');
        document.getElementById('signup').classList.remove('signup');
        document.getElementById('login').classList.add('login-scrolled');
        document.getElementById('login').classList.remove('login');
    } else {
        document.getElementById('nav-top').classList.remove('nav-top-scrolled');
        document.getElementById('nav-top').classList.add('nav-top');
        document.getElementById('signup').classList.remove('signup-scrolled');
        document.getElementById('signup').classList.add('signup');
        document.getElementById('login').classList.add('login-scrolled');
        document.getElementById('login').classList.remove('login');



    }
}