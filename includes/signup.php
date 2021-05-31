<?php 
    $title = "signup";
    require_once 'header.php';
?>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(219, 226, 226);
        }
        .row{
            background-color: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: white;
            border: 1px solid;
            color: black;
        }
    .font-weight-bold {
        color: black;
        padding-top: 1px;
        margin-left: 25px;
        padding-bottom: 4px;
  
    }
    </style>
  </head>
  <body>

    <section class="Form my-5 mx-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 px-0">
                    <img src="https://img.freepik.com/free-photo/beautiful-asian-woman-carrying-colorful-bags-shopping-online-with-mobile-phone_8087-3877.jpg?size=626&ext=jpg"  height="500" width="500" alt="" >
                </div>
                <div class="col-lg-7 px-5 pt-5 ">
                    <h1 class="font-weight-bold  ">Signup</h1>
                    <form action="">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="name" placeholder="Name" class="form-control my-2 p-2 mx-4" >
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="email" placeholder="Email" class="form-control my-2 p-2 mx-4">
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="phone" placeholder="Phone-number" class="form-control my-2 p-2 mx-4">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-7">
                                            <input type="city" placeholder="City" class="form-control my-2 p-2 mx-4">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-7">
                                                <input type="address" placeholder="Address" class="form-control my-2 p-2 mx-4">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-7">
                                                    <input type="password" placeholder="*********" class="form-control my-2 p-2 mx-4">
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-7 mx-4 my-3">
                                                      <button type="button" class="btn1">Signup</button>
                                                    </div>                    
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>

    </section>
    <?php require_once 'footer.php'; ?>

  </body>
</html>