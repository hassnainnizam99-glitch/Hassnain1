<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Slider{
    width:100%;
    height:400px;
    background: url(h.jpg);
    margin: 100px auto;
    animation: slide 12s infinite ;
    margin-top:-7.5px;
}
@keyframes slide{
    25%{
    background: url(m.jpg);      
    }
    50%{
    background: url(s.jpg);      
    }
    75%{
    background: url(m.jpg);      
    }
    100%{
    background: url(h.jpg);      
    }

}
    </style>
</head>
<body>

 <div class="Slider">

    </div>
    
</body>
</html>