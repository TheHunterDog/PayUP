let position = 0;
let nav = document.getElementById('nav');
let hamburgerdivs = document.getElementById('hamburgerdivs');

function hamburger() {
    if (position === 0) {
        document.getElementById('hamburgerdivs').className = 'hamburgerdivs-unfold';
        document.getElementById('nav').className = 'hamburger-visible';
        position = 1;
    } else {
        console.log('testao');
        document.getElementById('hamburgerdivs').className = 'hamburgerdivs';
        document.getElementById('nav').className = 'hamburger';

        position = 0;

    }


    //     position = false;

    // } else {
    //     console.log('now here');
    //     document.getElementById('hamburgerdivs').className = 'hamburgerdivs';
    //     document.getElementById('nav').className = 'hamburger';
    //     position = true;

    // }

}