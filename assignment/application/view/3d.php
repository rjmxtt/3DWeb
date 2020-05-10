<DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>My first X3DOM page</title>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>
</head>
<body>
<h1>Using the Inline Node</h1>
<script>
    function redNose()
    {
        if(document.getElementById('Deer__MA_Nose').getAttribute('diffuseColor')!= '1 0 0')
            document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '1 0 0');
        else
            document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '0 0 0');
    }
</script>
<p>
    This example includes an external weed scene. You can even manipulate its content during runtime.
</p>
<x3d width='500px' height='400px'>
    <scene>
    <transform>
        <inline nameSpaceName="model" mapDEFToID="true"  url="assets/x3d/can.x3d"> </inline>
    </transform>
    </scene>
</x3d>
</body>
</html>

