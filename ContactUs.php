<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Send Email</title>
    <style>
    body {
      background-image: url(Black.jpg);
      height: 100vh;
      background-size: cover;
      background-position: center;
      text-align: center;

    }

    h1
    {
      color: white;
    }


    h3
    {
      color: white;
    }

    *
    {
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;

    }

    .main {
      position: fixed;
      left: -250px;
      width: 250px;
      height: 100%;
      background: #042331;
      transition: all 0.5s ease;
    }
    .main header
    {
      font-size: 20px;
      font-style: normal;
      font-family: impact;
      color: white;
      text-align: center;
      line-height: 100px;
      background: #063146;
      user-select: none;
    }



    ul li a
    {
     display: block;
     height: 100%;
     width: 100%;
     line-height: 50px;
     font-size: 20px;
     color: white;
     padding-left: 10px;
     box-sizing: border-box;
     border-top: 1px solid rgba(255, 255, 255, 0.1);
     border-bottom: 1px solid black;
     transition: 0.4s;
    }
        ul li b
        {
         display: block;
         height: 100%;
         width: 100%;
         line-height: 60px;
         font-size: 20px;
         color: orange;
         padding-left: 10px;
         box-sizing: border-box;
         border-top: 1px solid rgba(0, 0, 0, 0.4);
         border-bottom: 1px solid black;
       }

      ul li:hover a
      {
        padding: 15px;

      }
      ul li:hover b
      {
        padding: 15px;
        background-color: orange;
      color: #000;
      }
     input:hover
      {
        padding: 10px;
        background-color:#063146;
      color: white;
      }
      .main ul a i
    {
      margin-right: 16px;
    }
    #check
    {
      display: none;
    }
    label #btn,label #cancel
    {
      position: absolute;
      cursor: pointer;
      background: #042331;
      border-radius: 3px;
    }
    label #btn
    {
      z-index: 1111;
      left: 1px;
      top: 0px;
      font-size: 35px;
      color: white;
      padding: 6px 12px;
      transition: all 0.5s;
    }
    label #cancel
    {
      z-index: 1111;
      left: -195px;
      top: 17px;
      font-size: 30px;
      color: #0a5275;
      padding: 4px 9px;
      transition: all 0.1s ease;
    }

    #check:checked ~ .main
    {
      left:0;
    }
    #checked:checked ~ label #btn
    {
      left: 250px;
      opacity: 0;
      pointer-events: none;
    }
    #checked:checked ~ label #cancel
    {
      left: 195px;
    }




    </style>
</head>
<body>


    <input type="checkbox" id="check">
    <label for="check">
  <i class="fas fa-bars" id="btn"></i>
  <i class="fas fa-times" id="cancel"></i>
    </label>
      <div class="main">
        <header> My App </header>
        <ul>
          <li><a href="account.php"> <i class='fas fa-user-circle'> </i>Profile</a></li>
          <li><a href="index.php"><i class='fas fa-home'></i> Home</a></li>
          <li><a href="NewApplication.php"><i class='far fa-edit'></i> New application</a></li>
          <li><a href="#"><i class='fas fa-sign-in-alt'></i> Status</a></li>
          <li><a href="ContactUs.php"><i class='far fa-envelope'></i> Contact Us </a></li>
          <li><a href="#"><i class='fas fa-wrench'></i> Settings </a></li>
          <li><a href="logout.php"> <i class='fas fa-power-off'> </i>Logout</a></li>
        </ul>
      </div>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Send Email</h5>
                    <form action="email-script.php" method="post" class="form-signin">
                        <div class="form-label-group">
                            <label for="inputEmail">From <span style="color: #FF0000">*</span></label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="thamiv8@gmail.com" readonly required autofocus>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">To <span style="color: #FF0000">*</span></label>
                            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div> <br/>
                        <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                        </div><br/>
                        <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
                        </div> <br/>
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
