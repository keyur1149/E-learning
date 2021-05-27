
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">

    <title>u-demy</title>
    <style>
    * {
    box-sizing: border-box;
    margin:0px;
}
        /* header{
    /* background-image: url(https://t3.ftcdn.net/jpg/04/12/12/98/360_F_412129819_HaLS1MLvkJBPaBPMagPUOYm1SfAcaT7h.jpg) ; */
    /* background-size: cover;
    background-position: center center;
    background-repeat: no-repeat; */
    /* position: fixed; */
    /* height:100vh;
    width: 100%; */
    /* animation: changeBackgroundImage 25s infinite; */
    /* animation-delay: 0s; */
    /* background-color: blue; */
    /* margin: 0px; */
    /* padding: 0px; */
    /* background-color: black;
    z-index: -1; */
    /* animation: right  5s 0s 1    ; */
/* }  */
.nav-bar{
    background:rgb(0 184 255);
    color: #fff;
    padding: 20px;
    width: 100%;
    /* z-index: 100;     */
    font-family: sans-serif;
    z-index: 100;
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
}
.nav-bar img{
    width: 250px;
    height: 100px;
    float: left;
    margin-left: 20px;
}



.menu-right{
    /* text-align: right; */
    display: flex;
    align-items: center;
}
ul li{
    display: inline-block;
    padding: 20px;
    margin: 0px 20px;
    list-style: none;
    font-weight: bolder;
}
li a{
    text-decoration: none;
    color:#fba101;
}
li:hover{
    background-color:rgb(36,36,36/90%) ;
    /* border:1px solid white ; */
    border-radius: 2px;
    background-color: black;
}
li:-ms-keyboard-active{
        background-color:rgb(36,36,36/90%) ;
        border:5px solid white ;
}
li:hover a{
    color: white;
}
.menu-right span{
    margin: 25px 25px;
    /* margin-right: 25px; */
    /* margin-left: 622px ; */
    font-size: 28px;
    cursor: pointer;
    display: none;
    align-self: center;
}
.first{
    background: url(https://t3.ftcdn.net/jpg/04/12/12/98/360_F_412129819_HaLS1MLvkJBPaBPMagPUOYm1SfAcaT7h.jpg) no-repeat center center/contain;
    padding:105px;
}
.form{
    /* margin: 350px 600px; */
    border:5px solid red;
    background-color:white;
}
.form div{
    font-size:20px;
    padding: 25px;
    display: flex;
    align-items: center;
justify-content: space-around;
}
.form div input{
    height:45px;
    width:225px;
}
.form div a{
    text-decoration:none;
    border:2px solid black;
    background-color:#e4e4e4;
    height:45px;
    width:100px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    border-radius:4px;
}
.fac{
    display: flex;
    flex-direction:column;
    /* align-items:center; */
    
}
.fac h1{
    font-size:50px;
    text-align:center;
}
.slider{
    display:flex;
    overflow-x:scroll;
    
}
.teach{
    border:5px solid black;
    display: flex;
    flex-direction:column;
    align-items:center;
    margin:20px;
    border-radius:10px;
    background-color:#fffad0;
}
.teach p{
    margin:20px;
}
.teach img{
    width:250px;
    height:200px;
    margin:25px;
}
.about{
  display: flex;
  flex-direction:column;
}
.inabout{
    display: flex;
    justify-content: space-around;
    padding:70px 20px;
}
.about .inabout img{
    height:500px;
    width:700px;
}
.about .inabout div{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
</style>
</head>
<body>
    <div class="nav-bar">
        <div  class="left">
            <img src="logo.png" >
        </div>
        <div class="menu-right">
            <span onClick="myFunction()">&#9776;</span>
           <ul id="menu">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#skills">Teacher</a></li>
            <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>   
    <div class="first">
    <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autofill="off">
        <div>
            <label>User Name :- </label>
            <input type="text" name="user_name" placeholder="Enter User Name">
        </div>
        <div>
            <label>Password :-</label>
            <input type="password" name="u_password" placeholder="Enter Password">
        </div>
        <div>
            <a href="newuser.php">New User</a>
            <input style="width:100px;" type="submit" value="Log in">

        </div>
    </form>
    </div>
<section>
<div class="about">
<div class="inabout">
<img src="download.jpg">
<div>
  <h1>We Are Excellent In Education</h1>
  <p>Education is an art and we are the artists.</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vero ipsam minima!</p>
</div>
</div>
<div class="inabout">
<div>
  <h1>We Are Excellent In Education</h1>
  <p>Education is an art and we are the artists.</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vero ipsam minima!</p>
</div>
<img src="download.png">
</div>
<div class="inabout">
<img src="undraw_teacher-5069b84ffd133254dfb64125da376f8c.svg">
<div>
  <h1>We Are Excellent In Education</h1>
  <p>Education is an art and we are the artists.</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vero ipsam minima!</p>
</div>
</div>

</div>
<div class="fac">
<h1>Teacher</h1>
<div class="slider">
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:-Manav Shah</p>
   <p>Degree:-B.Tech(in CE)</p>
   <p>Experience:-5 year</p>
   </div>
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:-Jash Shah</p>
   <p>Degree:-B.Tech(in civil)</p>
   <p>Experience:-10 year</p>
   </div>
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:- Dhiren</p>
   <p>Degree:-B.com</p>
   <p>Experience:-2 year</p>
   </div>
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:-Darshak</p>
   <p>Degree:-</p>
   <p>Experience:-</p>
   </div>
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:-Smit </p>
   <p>Degree:-B.E.(in Electrical)</p>
   <p>Experience:-20 year</p>
   </div>
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:-</p>
   <p>Degree:-</p>
   <p>Experience:-</p>
   </div>
</div>
</div>
</section>
</body>
</html>