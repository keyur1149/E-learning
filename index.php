

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>u-demy</title>
    <style>
    @import url(index.css);
    @import url(lan2.css);
    @import url(contactform.css);
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
header{
    background:url(b-dhiren.jpg) no-repeat center center/cover;
    /* background-attachment: fixed; */
    /* position:sticky; */
    /* top:0px; */
    /* z-index: -1; */
    background-color: #dcdcdc;
    background-blend-mode: multiply;
}
.nav-bar{
    /* background:rgb(0 184 255); */
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
#menu li{
    display: inline-block;
    padding: 20px;
    margin: 0px 20px;
    list-style: none;
    font-weight: bolder;
}
#menu li a{
    text-decoration: none;
    color:#fba101;
}
#menu li:hover{
    background-color:rgb(36,36,36/90%) ;
    /* border:1px solid white ; */
    border-radius: 2px;
    background-color: black;
}
#menu li:-ms-keyboard-active{
        background-color:rgb(36,36,36/90%) ;
        border:5px solid white ;
}
 #menu li:hover a{
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
    /* background: url(https://t3.ftcdn.net/jpg/04/12/12/98/360_F_412129819_HaLS1MLvkJBPaBPMagPUOYm1SfAcaT7h.jpg) no-repeat center center/cover; */
    /* padding:105px; */
    width: 100%;
    height: 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    /* clip-path: circle(150% at 0 50%); */
    /* animation: keyur 2s 1    linear; */
}
/* @keyframes keyur {
    from{
        clip-path: circle(150% at 0 450%);
    } to{
        clip-path: circle(150% at 0 50%);
    }
} */
.from{
    /* margin: 350px 600px; */
    /* border:5px solid red; */
    background-color: #beffd3;
    width: 29%;
    height: 66%;
    border-radius: 51px;
    /* position:sticky;top:50px;z-index:100; */
    /* margin-top: 64px; */

    

}
.from div{
    font-size:20px;
    padding: 25px;
    display: flex;
    align-items: center;
justify-content: space-around;
}

.from div input{
    height:45px;
    width:225px;
}
.from div a,input[type="submit"]{
    
    text-decoration:none;
    border:2px solid black;
    background-color:#e4e4e4;
    height:45px;
    width:150px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    border-radius:13px;
    font-size:20px;
}
.from div a:hover,input[type="submit"]:hover{
    background:black;
    color:white;
}
.fac{
    background-color:white;

    display: flex;
    flex-direction:column;
    height: 720px;
}
.fac h1{
    font-size:50px;
    text-align:center;
    text-shadow: 8px 6px 4px #ff5722;
}
.fac .te p{
    text-align:center;
    font-size:25px;
    padding: 30px;
}
.slider{
    /* background-color:white; */
    display:flex;
    overflow-x:scroll;
    margin-top: 53px;
}
.teach{
    border:5px solid black;
    display: flex;
    flex-direction:column;
    align-items:center;
    margin:32px;
    border-radius:10px;
    background-color:#fffad0;
    box-shadow: 20px 20px 9px 3px #060606;
}
.slider::-webkit-scrollbar {
    display: none;
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
    background-color:white;
  display: flex;
  flex-direction:column;
}
.about .title{
    margin-top: 80px;
}
.about .title h1{
    font-size:50px;
    text-align:center;
    text-shadow: 8px 7px 3px #26a69a;
}
.about .title p{
    text-align:center;
    padding: 50px;
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
.inabout>div>h1{
    margin:30px 0px;
    font-size:35px;
}

.inabout>div>p{
    margin:4px 0px;
}
.fix{
    /* background: url(https://i1.wp.com/static.web-backgrounds.net/uploads/2012/08/City_Landscape_Background.jpg) no-repeat center center/cover; */
    background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqcYXihLAd7FRc5He6rWD7FovoKL1I_WZ8AQ&usqp=CAU) no-repeat center center/100% 100%       ;
    height:670px;
    background-attachment: fixed;
    background-blend-mode: multiply;
    background-color: #0080ff;
    display: flex;
    color:white;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    padding:60px;
}
.fix img{
    height:250px;
    width:250px;
    border-radius: 130px;
    margin:65px;
}
.fix h5{
    /* text-shadow: 8px 6px 4px #ff5722; */
    font-size:50px;
    margin:10px;
}
.fix p{
    font-size:20px;
    margin:15px;
}
footer{
    background-color:#767579;
    height:150px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
a{
    text-decoration:none;
    color:black;
}
</style>
</head>
<body>
    <header>
    <div class="nav-bar">
        <div  class="left">
            <img src="logo.png" >
        </div>
        <div class="menu-right">
            <span onClick="myFunction()">&#9776;</span>
           <ul id="menu">
            <li><a href="#home">HOME</a></li>
            <li><a href="#skills">ABOUT</a></li>
            <li><a href="#about">COURSES</a></li>
            <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </div>   
    <div class="first">
    <form class="from" action="login.php" method="POST">
        <div>
            <label>User Name :- </label>
            <input type="text" name="username" placeholder="Enter User Name" required>
        </div>
        <div>
            <label>Password :-</label>
            <input type="password" name="userpassword" placeholder="Enter Password" required>
        </div>
        <div>
            <a href="newuser.php">New User</a>
            <!-- <button onclick="keyur()">start</button> -->
            <input style="width:150px;" type="submit" name="submit" value="Login">
        </div>
    </form>
   
    </div>
    </header>
<section id="cource">
    <div class="corse">
    <h3>cource</h3>
        <div>
            <div>
                <img src="lan\c.png">
                <p>5 lessons/2 week</p>
                <p>C</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div>
            <div>
                <img src="lan\c++.png">
                <p>5 lessons/2 week</p>
                <p>C++</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div>
            <div>
                <img src="lan\java.png">
                <p>5 lessons/2 week</p>
                <p>java</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div>
            <div>
                <img src="lan\js.png">
                <p>5 lessons/2 week</p>
                <p>java script</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div> <div>
                <img src="lan\css.png">
                <p>5 lessons/2 week</p>
                <p>CSS</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div>
            <div>
                <img src="lan\html.png">
                <p>5 lessons/2 week</p>
                <p>HTML</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div>
            <div>
                <img src="lan\python.png">
                <p>5 lessons/2 week</p>
                <p>python</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, architecto?</p>
            </div>

        </div>
    </div>
<div class="about">
<div class="title">
<h1>Learn without limit</h1>
<p>We aim to make study SIMPLE, EASY and ACCESSIBLE in the fastest end most effective way for the career of future.</p>
</div>
<div class="inabout">
<img src="skill.svg">
<div>
  <h1>Learn job-ready career skills</h1>
  <p></p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vero ipsam minima!</p>
</div>
</div>
<div class="inabout">
<div>
  <h1>world class learing </h1>
  <p>gain expertise in the latest skills with our best facties.</p>
  <p>our facties has experience industes as well as teaching.</p>
</div>
<img src="fac.svg">
</div>
<div class="inabout">
<img src="24.svg">
<div>
  <h1>24/7 Help</h1>
  <p>you can reach out our mentors when you need them.</p>
</div>
</div>

</div>
<div class="fac">
<div class="te">
<h1>Our Teachers</h1>
<p>The best we promise the best we are !</p>
</div>
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
       <p>Name:-Nirali</p>
       <p>Degree:-B.Tech</p>
       <p>Experience:-1 year</p>
    </div>
    <div class="teach">
        <img src="teacher.jpeg">
        <p>Name:-Dharshak</p>
        <p>Degree:-B.Tech</p>
        <p>Experience:-4 month</p>
    </div>
    <div class="teach">
    <img src="teacher.jpeg">
    <p>Name:- Dhiren</p>
    <p>Degree:-B.com</p>
    <p>Experience:-2 year</p>
    </div>
   <div class="teach">
   <img src="teacher.jpeg">
   <p>Name:-Smit </p>
   <p>Degree:-B.E.(in Electrical)</p>
   <p>Experience:-20 year</p>
   </div>
   
</div>
</div>
<div class="fix">
<img src="https://cdn.pixabay.com/photo/2015/04/09/16/06/shadow-714645_960_720.jpg">
<h5>Darshan Raval</h5>
<p>??? I was struggling with my studies but it all changed when I learned about LAcademy, I'm now a senior software engineer</p><p> making a 6 figure salary per year.This website is a real game changer. ???</p>
</div>

</section>


<section id="learnwithus" style="background:white;">
<div>
  <h4>Why learn with  us</h4>
  <div class="learnwhy">
  <div class="leftwhy">
    <p>Eduonix is a pioneer in technology based knowledge industry delivering highquality content across multiple areas of expertise.</p>
     <ul>
         <li>2 million+ learners</li>
         <li>Best of global instructors</li>
         <li>20,000 hours of high-quality content promising skill gain</li>
         <li>job opportunities</li>
         <li>Over a decade of experience in professional training</li>
         <li>up-to-date curriculum</li>
         <li>30 days money back quarantee</li>
     </ul>
  </div>
       <div class="rightwhy">
           <img src="person_transparent.png">
       
  </div>
</div>
</section>


<section id="contact">
<div class="incontact">
<h4>Contact Us</h4>
<p >We are more than happy to receive your suggestions.</p>
<div class="inincontact">
    <div class="contactleft">
     <div>
         <i class="material-icons">
                location_on
              </i>
            <div>
                <p>Adddress</p>
                <p>507,super market,near new bus stand,sanada road,morbi</p>
</div>
            </div>
            <div>
            <i class="material-icons">
phone
</i>
            <div>
                <p>Phone</p>
                <p>507-475-6094</p>
</div>
            </div>
            <div>
            <i class="material-icons">
email
</i>
            <div>
                <p>Email</p>
                <p>apnishala2527@gmail.com</p>
</div>
            </div>
</div>
<div class="contactright">
<h6>Send Message</h6>
<form action="mail.php" method="post">
<div>
      <input type="text" name="full" placeholder="Full Name">
</div>
<div>
      <input type="text" name="mail" placeholder="Email">

</div>
<div>
      <textarea type="text" name="mess" placeholder="Type your Message..."></textarea>
</div>
<div>
     <button type="submit" value="send" name="send">send</button>
</div>
</div>

</div>
</div>
</section>

<footer>
<div>
<span>Desing by NDC | </span>
<span><i class="material-icons">copyright</i>Copyright | </span>
<span>Terms and Policy </span>
<div>
</footer>
</body>
</html>
