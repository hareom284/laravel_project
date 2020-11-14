<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           body {
  margin:0;
  padding:0;
}
  
header {
background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSUlkid75bnLhWQYqdPQnq3kqZxxDeVTmCJpcS1ebCZdhd_x0lQ);
  height:100vh;
  background-position:center;
  background-size:cover;
}
.hero {
  top:50%;
  left:50%;
  position:absolute;
  transform:translate(-50%, -50%);
  color:#fff;
  text-align:center;
  font-family:'Dosis',sans-serif;
}
h1 {
  font-size:60px;
  letter-spacing:15px;
}
hr{
  width:75%;
  margin: 30px auto;
  border: 1.5px solid #fff;
}
p {
  font-size: 20px;
  margin-bottom: 30px;
}
#launch {
  font-size:40px;
  word-spacing:20px;
}

    

@import url('https://fonts.googleapis.com/css?family=Dosis');
        </style>
    </head>
    <body>
        <header>
       
            <div class="hero">
              <p>Online Attendance System</p>
              <h1>COMING SOON</h1>
                <hr>
                  <p id="launch"></p>
            </div>
          </header>
    </body>
</html>
