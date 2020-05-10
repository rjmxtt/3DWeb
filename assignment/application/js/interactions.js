function modelToggle(x) {
    document.getElementById('modelZero').style.display = "none";
    document.getElementById('modelOne').style.display = "none";
    document.getElementById('modelTwo').style.display = "none";
    document.getElementById('modelThree').style.display = "none";
    switch (x) {
        case 0: 
            document.getElementById('hero').style.display = "none";
            document.getElementById('modelZero').style.display = "block";
            break;
        case 1:
            document.getElementById('hero').style.display = "none";
            document.getElementById('modelOne').style.display = "block";
            break;
        case 2: 
            document.getElementById('hero').style.display = "none";
            document.getElementById('modelTwo').style.display = "block";
            break;
        case 3: 
            document.getElementById('hero').style.display = "none";
            document.getElementById('modelThree').style.display = "block";
            break;
        default:
    }
}

// var moving = true;

function go() {
    document.getElementById('model__ctrl').setAttribute('enabled', "true");
}

function halt() {
    document.getElementById('model__ctrl').setAttribute('enabled', "false");
}

function tex1() {
    document.getElementById('model__texTag').setAttribute('url', "earTex.png");
}

function tex2() {
    document.getElementById('model__texTag').setAttribute('url', "noseTex.png");
}

function tex3() {
    document.getElementById('model__texTag').setAttribute('url', "rubyTex.png");
}