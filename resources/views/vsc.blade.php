<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors Counter</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<style>
    body{
    margin: 0;
    height: 100vh;
    align-items: center;
    text-align: center;
    display: flex;
    justify-content: center;
    background-image: url('/64ddbcab320e53e4e2dc9529_\ -\ 4.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: "Plus Jakarta Sans", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
}
.d1{
    box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    width: 1000px;
    height: 400px;
    padding: 50px;
    border-radius: 50px;
    background-color: #fdf2f5;

    
}
h2{
font-size: 4rem;
background: linear-gradient(to right, #8A2BE2, #e2a1e5);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
color: transparent;


}
p{
    font-size: 2rem;
    color: #8c8c8c;

}


</style>
<body>
    <div class="d1">
        <h2>Welcome to visitors counter !</h2>
        <p>Visitors Count :{{$vCount}} </p>
    </div>
</body>
</html>