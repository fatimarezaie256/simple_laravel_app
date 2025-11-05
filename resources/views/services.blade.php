<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is services page</h1>
     @if($name==="cooking")
       <h1>you are hired to do cooking</h1>
       @elseif($name === "cleaning")
       <h1>you are hired to do cleaning</h1>
        @elseif($name === "washing the dishes")
       <h1>you are hired to wash the dishes</h1>
        @elseif($name === "doing the laundry")
       <h1>you are hired to do the laundry</h1>
       @else
       <h1>you are not able to do any of this works!</h1>
     @endif
</body>
</html>
