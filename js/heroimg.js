function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}


let random = getRandomInt(4) + 1;
console.log(random);
document.getElementById("Hero").style.backgroundImage = `url(img/image${random}.webp)`;