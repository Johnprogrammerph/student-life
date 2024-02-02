<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hover Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    background-color: #ffffff;
    color: #000000;
}

.container {
    display: flex;
    align-items: center;
}

.hover-image {
    width: 500px;
    height: 500px;
    margin-right: 50px;
    margin-top: 100px;
}

.hover-image:hover + .content {
    opacity: 1;
}

.content {
    opacity: 0;
    transition: opacity 0.5s;
    
}
h1 p{
    font-size: 20px;
}
</style>
<body>
    <div class="container">
        <img class="hover-image" src="kenny-eliason-z3kBG5xIhjo-unsplash-removebg-preview.png" alt="Image" >
        <div class="content">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit, lectus non facilisis bibendum, eros tortor convallis neque, et tincidunt ipsum sem sed turpis. Fusce viverra nisi dolor, et consectetur felis cursus in.</p>
        </div>
    </div>
</body>
</html>