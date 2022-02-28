<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <style>
        #main-header img {
            width: 100%;
            height: 101%;
        }

        .re-item {
            width: 25%;
            text-align:center;
            transition-duration: 0.5s;
            
        }

        .re-item:hover{
            opacity: 0.7;
            font-size:20px;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        p1{
            font-size:50px;
        }
        a.shops:link{
            color:purple;
            transition-duration: 0.5s;
            
        }
        a.shops:visited{
            color:purple;
            transition-duration: 0.5s;
            
        }
        a.shops:hover{
            font-size:25px;
            color:white;
            transition-duration: 0.5s;
        }

        a.membership:link{
            color:yellow;
            transition-duration: 0.5s;
            
        }
        a.membership:visited{
            color:yellow;
            transition-duration: 0.5s;
            
        }
        a.membership:hover{
            color:white;
            font-size:20px;
            transition-duration: 0.5s;
        }


        a.hell:link{
            
            color:pink;
            transition-duration: 0.5s;
            
        }
        a.login{
            color:blue;
            
            transition-duration: 0.5s;
            
        }
        a.login:hover{
            color:blue;
            font-size:20px;
            transition-duration: 0.5s;
            
        }
        a.login:visited{
            color:pink;
            transition-duration: 0.5s;
        }


        .logos{
            font-size:25px;
            transition-duration: 0.5s;
        }
        .logos:hover{
            font-size:50px;
            transition-duration: 0.5s;
        }
            

    </style>


</head>

<body>

    <div class="container">
        <header id="main-header">
            <div class="row no-gutters">
                <div class="col-md-4 col-lg-5">
                    <img src="MUDS.jpeg" />
                </div>

                <div class="col-md-8 col-lg-7">
                    <div class="d-flex flex-column">
                        <div class="p-5 bg-dark text-white">
                            <div class="d-flex flex-row jistify-content-between align-item-center">
                                <h1 class="display-3">MUDS</h1>&emsp;&emsp;&emsp;&emsp;&emsp;
                                <div class=logos ><a href="https://www.facebook.com/MUDS.gla/" class="text-white"><i class="fab fa-facebook"></i></a></div>&emsp;&emsp;
                                <div class=logos ><a href="https://www.instagram.com/muds.gla/" class="text-white"><i class="fab fa-instagram"></i></a></div>&emsp;&emsp;
                                <div class=logos ><a href="https://twitter.com/MUDS52107844" class="text-white"><i class="fab fa-twitter"></i></a> </div>&emsp;&emsp;
                                <div class=logos ><a href="https://github.com/MUDS-gla" class="text-white"><i class="fab fa-github"></i></a></div>&emsp;&emsp;

                            </div>
                        </div>
                    



                        <div class="p-5 text-white" style="background-color: black;">

                            <p1>
                               Shoping Complex</p1>
                               <p2>
                            &emsp; &emsp;
                            <a class=login href="select_login.php">Login</a>
                            <a class=login href="signup.php">Signup</a>
    </p2>
    
                        </div>
                        <div class="d-flex flex-row">
                            <div class="re-item p-4 bg-primary" data-toggle="collapse" data-target="#home">
                                <i class="fas fa-home fa-2x "></i><br />
                                <span>Home</span>
                            </div>

                            <div class="re-item p-4 bg-secondary" data-toggle="collapse" data-target="#resume">
                                <i class="fas fa-align-justify fa-2x "></i><br />
                                <span>About</span>
                            </div>


                            <div class="re-item p-4 bg-warning" data-toggle="collapse" data-target="#work">
                                <i class="fab fa-amazon fa-2x "></i><br />
                                <span>Shops</span>
                            </div>


                            <div class="re-item p-4 bg-danger" data-toggle="collapse" data-target="#contact">
                                <i class="fas fa-user-alt fa-2x "></i>
                                <span>Membership</span>
                            </div>

                        </div>


                    


        </header>
        <div id="home" class="collapse show">
            <div class="card card-body text-white bg-primary">
                <h1>Home</h1>
            </div>
        </div>

        <div id="resume" class="collapse show">
            <div class="card card-body text-white bg-secondary">
                <h1>About</h1>
            </div>

        </div>

        <div id="work" class="collapse show">
            <div class="card card-body text-white bg-warning">
                <h1>Shops</h1>
                
        <a class=shops href="Shops/Clothes/agegrp_gender.php">Clothes</a><br>
        <a class=shops href="Shops/Toys/agegrp_gender.php">Toys</a><br>
        <a class=shops href="#">Food</a><br>
        <a class=shops href="#">Parks</a><br>
        <a class=shops href="Shops/Theatre/moviepage.html">Theater</a><br>
        <a class=shops href="#">Bars</a><br>
        <a class=shops href="#">Clubs</a><br>
        <a class=shops href="#">Restaurants</a><br>
        <a class=shops href="#">Accessories</a><br>
        <a class=shops href="#">Pharmacies</a><br>
        <a class=shops href="#">Technologies</a><br>
        <a class=shops href="#">Services<a><br>
        <a class=shops href="Shops/sports/sports_home.php">Sports</a><br>
        <a class=shops href="gym.php">Gym</a><br>
            </div>

        </div>


        <div id="contact" class="collapse show">
            <div class="card card-body text-white bg-danger">
                <h1>Membership</h1>

                <a class=membership href='user membership/user_mem.php'>User Membership</a><br>
    <a class=membership href='Customer membership/plan.php'>Customer Membership</a>
    
            </div>
</div>



            
        


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>


    <script>
        $(".re-item").click(function () {
            $(".collapse").collapse("hide");
        })
    </script>

</body>


















