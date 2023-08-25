<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/homepg.png");
  /* margi */
  

  /* Full height */
  height: 60%; 
  width:65%;
  padding:50px 50px;
  /* border:2px solid red; */
  margin-left:300px;

  /* Center and scale the image nicely */
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}

.fa {
  padding: 20px;
  font-size: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.active-cyan-3 input[type=text] {
  border: 1px solid #4dd0e1;
  box-shadow: 0 0 0 1px #4dd0e1;
}
.content{
    position: absolute;
    top:59rem;
    display: flex;
    flex-direction: column;
    /* border: 2px solid red; */
    width: 100%;
}
/* for why to use pgliji */
.content .why{
    /* border: 2px solid red; */
    margin: 10px 65px;
    font-size: 28px;
    padding: 11px 11px;
}
.content span{
    color: #FE8F27;
}
.content .achievements{
    /* border: 2px solid red; */
    display: flex;
    justify-content: center; 
    justify-content: space-between;
    height: fit-content;
}
.content #work1{
    /* border: 2px solid red; */
    left: 200px;
    position: relative;
    display: flex;
    flex-direction: column;
    height: 376px;
}
.content #work2{
    /* border: 2px solid red; */
    left: 17px;
    position: relative;
    display: flex;
    flex-direction: column;
    height: 376px;
    

}
.content #work3{
    /* border: 2px solid red; */
    right: 133px;
    position: relative;
    display: flex;
    flex-direction: column;
    height: 376px;
    top:30px;

}
#work1 img{
    /* border: 2px solid red; */
    width: 259px;
    height: 278px;

}
#work2 img{
    /* border: 2px solid red; */
    width: 259px;
}
#work3 img{
    /* border: 2px solid red; */
    width: 259px;
}
#work1 .work-heading{
    /* border: 2px solid red; */
    margin-top: 13px;
    font-size: large;
    font-weight: bold;

}
#work2 .work-heading{
    /* border: 2px solid red; */
    margin-top: 13px;
    font-size: large;
    font-weight: bold;
}
#work3 .work-heading{
    /* border: 2px solid red; */
    margin-top: 13px;
    font-size: large;
    font-weight: bold;
}
#work1 .work-text{
    /* border: 2px solid red; */
    margin-top: 11px;
    height: 70px;
    font-weight: 600;
}
#work2 .work-text{
    /* border: 2px solid red; */
    margin-top: 11px;
    height: 70px;
    font-weight: 600;
}
#work3 .work-text{
    /* border: 2px solid red; */
    margin-top: 11px;
    height: 70px;
    font-weight: 600;
}

/* footer styling */
footer{
    /* border: 2px solid red; */
    position: absolute;
    top: 170%;
    height: 23%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    background-color: #022539;
    
}
footer .left{
    /* border: 2px solid red; */
    display: flex;
    flex-direction: column;
    margin: 25px 43px;
}
footer .left a{
    text-decoration: none;
    color: rgb(255, 255, 255);
   
}
footer .right{
    /* border: 2px solid red; */
    display: flex;
    flex-direction: column;
    margin: 25px 43px 25px 0px;
}
footer .right a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}
</style>

<div class="bg"></div><br>
<div class="container active-cyan-4 mb-4 inline">
	<form method="POST" action="search-property.php">
  <input class="form-control" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search" style="padding: 25px;    border-color: #FEBC7D; ">
  </form>
</div>
<br><br>
<div class="content">
        <div class="why">
            <h3>Why use <span>PGliji</span> to find PG</h3>
        </div>
        <div class="achievements">
            <div class="work" id="work1">
              <img src="images/UI-10.png" alt="" width=200px" >
              <p class="work-heading">Pocket friendly </p>
              <p class="work-text">No brokrage fees,<br> No hidden charges,<br>because friend cares</p>
            </div>
            <div class="work" id="work2">
              <img src="images/UI 13-10.png" alt="" width=200px" >
              <p class="work-heading">Shortlist without visit </p>
              <p class="work-text">Large range of PGs <br> Make easy to compare <br> and choose because friend cares</p>
            </div>
            <div class="work" id="work3">
              <img src="images/UI Backupp-10.png" alt="" width=200px" >
              <p class="work-heading">PGs for all areas</p>
              <p class="work-text">Find PGs in rular<br> as well as urban areas <br> with shorting and searching</p>
            </div>
          </div>

    </div>
    <!-- for footer -->
    <footer>
        <div class="left">
            <a href="#" class="item">SignIn/login</a>
            <a href="#" class="item">My Booking</a>
            <a href="#" class="item">Complaint</a>
            <a href="#" class="item">Refer and Earn</a>
            <a href="#" class="item">Property Registration</a>
        </div>
        <div class="right">
            <a href="#" class="item">Blog</a>
            <a href="#" class="item">FAQ</a>
            <a href="#" class="item">Guest Policies</a>
            <a href="#" class="item">Terms & conditions</a>
            <a href="#" class="item">Privacy policy</a>
        </div>
    </footer>
<?php 

// include("property-list.php");

 ?>
 <br><br>