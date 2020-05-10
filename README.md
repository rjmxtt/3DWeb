# 3DWeb
Codebase for submission of Web application for '3D Web Applications' module at University of Sussex. 

The web application is a single view application, updated majoritively with AJAX and JQuery.

The update code can be found in the ‘home.js’ file, this functionality is supported by the AJAX document.change method, which listens for changes of the navbar selected element. The file checks the first letter of the navbar element and inserts HTML after retrieving JSON from ‘asyncModel.php’.

To explore a different methodology ‘home.php’, the initial file that is loaded, inserts html elements with php scripts; using a call to ‘model.php’ to load the backend data needed for the page.

The X3DOM models could not by loaded asynchronously without exposing a the application to malicious code insertion (https://x3dom.org/download/1.5.1/docs/singlehtml/). Consequently, the divs containing the separate models are swapped using Javascript, found in ‘interactions.js’.

Due to the Corona Virus outbreak and lack for access to 3DS Max (development all conducted on macOS), the models’ ‘nose’ and ‘ear’ were adapted in Cinema 4D from a blender modelled head that I built last year following the Udemy course ‘Blender Character Modeling For Beginners HD’ by Riven Phoenix. The ‘eye’ and ‘ruby’ were both modelled directly in C4D.

Due to the lack of VRLM helpers in C4D the interaction that has been applied to the ruby model was directly coded into the .x3d file.

The gallery uses Javascript found in ‘home.js’ to update the hero image based on a which image button is pressed.
