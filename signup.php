<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Stylish&display=swap');

</style>
<body>
    
<style>
    body{
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .box{
        overflow: hidden;
        margin-top: 80px;
        position: relative;
        width: 100%;
        height: 100vh;
        background: #1c1c1c;
        border-radius: 8px;
        overflow: hidden;
    }
    .box::before{
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg,transparent,#86c305,#86c305);
        animation: animate 6s linear  infinite;
        transform-origin: bottom right;

    }
    .box::after{
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px;
        background: linear-gradient(0deg,transparent,#86c305,#86c305);
        animation: animate 6s linear  infinite;
        transform-origin: bottom right;
        animation-delay: -3s;

    }
    .form{
        border-radius: 8px;
        position: absolute;
        inset: 2px;
        background: black;
        z-index: 10;
        padding: 50px 40px;
        display: flex;
        flex-direction: column;
    }
    @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    
    }
    .form h2{
        color: #86c305;
        font-weight: 500;
        text-align: center;
        letter-spacing: 0.1em;
    }
    .inputbox{
        position: relative;
        /* width: 300px; */
        margin-top: 35px;
    }
    .inputbox input{
        position: relative;
        width: 100%;
        padding: 20px 10px 10px;
        background: transparent;
        border: none;
        outline: none;
        color: black;
        font-size: 1em;
        letter-spacing: 0,05em;
        z-index: 10;

    }
    .inputbox span{
        position: absolute;
        left: 0;
        padding: 20px 0px 10px;
        font-size: 1em;
        color: gray;
        pointer-events: none;
        letter-spacing: 0.05em;
        transition: 0.5s;
    }
    .inputbox input:valid ~ span,
    .inputbox input:focus ~ span{
        color: #86c305;
        transform:translateX(0px) translateY(-34px);
        font-size: 0.75em;
    }
    .inputbox i{
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #86c305;
        border-radius: 4px;
        transition: 0.5s;
        pointer-events: none;
        z-index: 9;
    }
    .inputbox input:valid ~ i,
    .inputbox input:focus ~ i {
        height: 44px;
    }
    .links{
        display: flex;
        justify-content: space-between;

    }
    .links a{
        margin: 10px 0;
        font-size: 0.Q00em;
        color: gray;
        text-decoration: none;
    }
    .links a:hover
    .links a:nth-child(2){
        color: #86c305;
    }
    .button{
        border: none;
        outline: none;
        background: #86c305;
        padding: 11px 25px;
        width: 200px;
        margin-top: 10px;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        text-align: center;
    }
    .button:active{
        opacity: 0.8;
    }
    @media screen and (max-width: 600px) {
.loginpic {
    display: none;
  }
}
</style>
<div class="container">
<div class="row">
<div class="col-md-6 loginpic"><img src="img/bg-img/undraw_Unlock_re_a558.png" width="100%" alt=""></div>
<div class="col-md-6 p-0">

  
  <div class="box">
    <form action="signupaction.php" method="POST">
        <div class="form">
            <h2>Sign Up</h2>
            .<div class="container-fluid">
              <div class="row">
                <div class="col-md-6"><div class="inputbox">
                  <input type="text"  required="required" name="signupusername" id="username" onfocus="nnnn()">
                  <span> <div class="inputbox">
                    <i></i>
                  </div></span>
                  <span>Username</span>
                  <i></i>
              </div></div>
                <div class="col-md-6">    <div class="inputbox">
                <input type="email" required="required" name="signupemail" id="useremail" onfocus="nnnn()">
                <span>Email</span>
                <i></i>
              </div>
            </div>
          </div></div>
              
            
            <!-- <span id="error" style="color:red;  font-weight: bolder; "></span> -->

            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="inputbox">
                    <input type="password" required="required" name="signuppassword" id="userpassword" onfocus="nnnn()">
                    <span>Passowrd</span>
                    <i></i>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="inputbox">
                    <input type="password" required="required" name="signupconpassword" id="cpassword" onfocus="nnnn()">
                    <span>Confirmed Password</span>
                    <i></i>
                    
                  </div>
                </div>
              </div>
            </div>
        
              <span id="error1" style="color:red;  font-weight: bolder; "></span>
           
            <span id="error2" style="color:red;  font-weight: bolder; "></span>
          
        
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">   <div class="inputbox">
                  <input type="number" required="required" name="signupcontactnumber" id="cpassword" onfocus="nnnn()">
                  <span>Contact Number</span>
                  <i></i>
                  
                </div></div>
                <div class="col-md-6">   <div class="inputbox">
                  <input type="number" required="required" name="signupzipcode" id="cpassword" onfocus="nnnn()">
                  <span>Zip COde</span>
                  <i></i>
                  
                </div></div>
              </div>
            </div>
            <div class="inputbox">
              <input type="text" required="required" name="signupaddress" id="cpassword" onfocus="nnnn()">
              <span>Address</span>
              <i></i>
              
            </div>
         
         
            <span id="error3" style="color:red;  font-weight: bolder; "></span>
            <span id="error4" style="color:red;  font-weight: bolder; "></span>
            <div class="links">
              <a href="login.php">have an account</a> 
              <a href="login.php">Login</a>
            </div>
            <button class="button" name="signup">Sign UP</button>
            <!-- <div class="button"  onclick="sign()">Sign UP</div> -->

          </div>
          </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
      </div> 
      </div>
        <script src="index.js"></script>
        

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    
</body>
</html>