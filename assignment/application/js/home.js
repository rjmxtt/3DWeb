$(document).ready(function(){
    $('#navbar-change').on('click', 'li a', function() {
        // Models 
        if ($(this).text().charAt(0) == 'T') {
            var model = $(this).val()
            var str="";

            var selection = $(this).text();

            var modelUrl = "../assignment/application/model/asyncModel.php?title=" + selection;
            $.getJSON(modelUrl).done(function(json) {
                var cardstr = "";
                for (var i=0; i<2; i++) {
                    cardstr += "<div class='card text-center'>";
                    cardstr += "<div class='card-body'>";
                    if (i==0) {
                        cardstr += "<h5 class='card-title'>" + json[0].title + "</h5>";
                        cardstr += "<p class='card-text'>" + json[0].description + "</p>";
                    } else if (i==1) {
                        cardstr += "<h5 class='card-title'>Controls</h5>";
                        cardstr += "<h6 class='card-title'>Motion</h6>";
                        cardstr += "<button id='butt' class='buttonCtrls' onclick='go()'>GO</button>";
                        cardstr += "<button id='butt' class='buttonCtrls' onclick='halt()'>HALT</button>";
                        cardstr += "<br>";
                        cardstr += "<h6 class='card-title'>Texture</h6>";
                        cardstr += "<button id='butt' class='buttonCtrls' onclick='tex1()'>TEXTURE 1</button>";
                        cardstr += "<br>";
                        cardstr += "<button id='butt' class='buttonCtrls' onclick='tex2()'>TEXTURE 2</button>";
                        cardstr += "<br>"
                        cardstr += "<button id='butt' class='buttonCtrls' onclick='tex3()'>TEXTURE 3</button>";
                        cardstr += "<p class='info'>Interaction controls are only available for The Ruby</p>";
                    }
                    cardstr += "</div>";
                    cardstr += "</div>";
                }
                document.getElementById("card-placeholder").innerHTML=cardstr;
            })
            .fail(function(textStatus) {
                console.warn('home.js >object< : server returned an error');
                console.warn(textStatus);
            });
        } 
        // HomePage 
        else if ($(this).text().charAt(0) == 'H') {
            var splashstr = "<div id='hero'><div id='main3dImg'><div class='centered' id='main_text'><h3>VIRTUAL | WORLDWIDE | RARE</h3><h1>OMNI</h1><h2>COLLECTION OF 2020</h2></div></div></div>"
            document.getElementById("splash-placeholder").innerHTML=splashstr;

            var cardstr = "<div class='row'> <div class='card text-center'><div class='card-body'><h4>About Onmi</h4><p>Omni Gallery is a virtual gallery that brings you photorealistic models of artifacts recovered from space exploration. Several missions scoping out habitable earth like planets retured with evidence of long lost civilisations. This museum is the online crusible of these deep space mysteries.</p></div></div></div>";
            var modelUrl = "../assignment/application/model/asyncModel.php?title=all";
            $.getJSON(modelUrl).done(function(json) {
                var n = 0;
                for (var i=0; i<2; i++) {
                    cardstr += "<div class='row'>";
                    for (var j=0; j<2; j++) {
                        cardstr += "<div class='col-sm-6'>";
                        cardstr += "<div class='card text-center'>";
                        cardstr += "<div class='card-body'>";
                        cardstr += "<h5 class='card-title'>" + json[n].title + "</h5>";
                        cardstr += "<p class='card-text'>" + json[n].description + "</p>";
                        cardstr += "</div>";
                        cardstr += "</div>";
                        cardstr += "</div>";
                        n++;
                    }
                    cardstr += "</div>"
                }
                //console.log(cardstr);
                document.getElementById("card-placeholder").innerHTML=cardstr;
            })
            .fail(function() {
                console.warn('home.js >home< : server returned an error');
            });
            
        } 
        // Gallery
        else if ($(this).text().charAt(0) == 'G') {
            var splashstr = "<div id='hero'><div id='img-placeholder'><div id='main3dImg'></div><div class='centered' id='main_text'><h3>VIRTUAL | WORLDWIDE | RARE</h3><h1>GALLERY</h1><h2>COLLECTION OF 2020</h2></div></div></div>"
            document.getElementById("splash-placeholder").innerHTML=splashstr;
            
            var cardstr = "";
            var modelUrl = "../assignment/application/model/asyncModel.php?title=all";
            $.getJSON(modelUrl).done(function(json) {
                for (var i=0; i<4; i++) {
                    cardstr += "<div class='card text-center'>";
                    cardstr += "<div class='card-body'>";
                    cardstr += "<h5 class='card-title'>" + json[i].title + '</h5>';
                    for (var j=1; j<4; j++) {
                        cardstr += "<button class='img-button' style='background: url(../assignment/application/assets/testImg/sml/" + json[i].path + "-" + j + ".png)'; onClick='javascript:imgpress(" + i + "," + j + ")'></button>" ;
                        cardstr += "<br>";
                        cardstr += "<br>"; 
                    }
                    cardstr += "</div>";
                    cardstr += "</div>";
                }
                //console.log(cardstr);
                document.getElementById("card-placeholder").innerHTML=cardstr;
            })
            .fail(function() {
                console.warn('home.js >gallery< : server returned an error');
            });

        } 
        // About
        else if ($(this).text().charAt(0) == 'A') {
            var splashstr = "<div id='hero'><div id='main3dImg'><div class='centered' id='main_text'><h3>VIRTUAL | WORLDWIDE | RARE</h3><h1>ABOUT</h1><h2>COLLECTION OF 2020</h2></div></div></div>"
            
            document.getElementById("splash-placeholder").innerHTML=splashstr;

            var cardstr = "";
            cardstr += "<div class='about'>";
            cardstr += "<h5>Statement of Originality</h5>";
            cardstr += "<p>This web application was created by Richard Matthews (182587) for the module '3D Web Applications'.</p>";
            cardstr += "<p>The projects codebase and further information can be found by following the link below.</p>";
            cardstr += "<button class='buttonCtrls' href='#'>Github</button>";
            cardstr += "</div>";
            
            document.getElementById("card-placeholder").innerHTML=cardstr;
        }
    });
});

function imgpress(x, y) {
    var gallerystr = "";
    gallerystr = "<div id='insertedImg'><img src='../assignment/application/assets/testImg/Object" + (x+1) + "-" + y + ".png' class='responsive'></div>";
    document.getElementById("img-placeholder").innerHTML=gallerystr;
}

// function swap(selected) {
//     document.getElementById('home').style.display = 'none';
//     document.getElementById('museum').style.display = 'none';
//     document.getElementById('gallery').style.display = 'none';
//     document.getElementById('about').style.display = 'none';

//     document.getElementById(selected).style.display = 'block';
// }
