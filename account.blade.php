<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap ext -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <style type="text/css">
        body{
            font-family: Segoe UI Historic;
        }

        .form-control{
            border: #4fac9c solid .2px;
            border-radius: 0.25rem;
        }
        .form-control::placeholder{
            color: #4fac9c;
            font-weight: bold;
        }

        .fas{
            color: #4fac9c;
        }
        .input-group-text{
            background-color: white;
        }
        #btn{
            background-color: #4fac9c;
            border-color: #4fac9c;
            color: black;
        }
        #btn:hover{
            box-shadow: 0 8px 19px 0;
        }
    </style>

    <title>Laravel</title>
</head>
<body>
    <div class="global-container">
        <br>
        <br>
        <br>
        <div class="container">
            <!-- row 1 title -->
           <div class="row">
           <h1>ACCOUNT INFORMATION</h1>
            <h6>Fill up the need information to continue</h6>
            </div>
            <!-- end of row 1 title -->

            <!-- start of row1 -->
           <div class="row">
               <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
              
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Surname" name="surname" id="input">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Firstname" name="Firstname">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Middle Initial" name="MiddleIni">
                    </div>
                </div>
                <!-- end -->
           </div>
           <!-- end of row 1 -->

            <br>

             <!-- start of row2 -->
             <div class="row">
               <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        <input type="text" class="form-control" placeholder="Birthday" name="birthday" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="number" min="18" max="99" class="form-control" placeholder="Age" name="age">
                    </div>
                </div>
                <!-- end -->

           </div>
           <!-- end of row 2 -->

            <br>           
            <!-- start of row 2 title-->
             <div class="row">
               <h6><strong>Address</strong></h6>
           </div>
           <!-- end of row 2 title-->

           <br>
            <!-- start of row 3 -->
            <div class="row">
               <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        <input type="text" class="form-control" placeholder="Street" name="street">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        <input type="text" class="form-control" placeholder="City" name="city">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                        <input type="text" class="form-control" placeholder="Postal" name="Middle Initial">
                    </div>
                </div>
                <!-- end -->
           </div>
           <!-- end of row 3 -->
           <br>

           <!-- start of row 3 title-->
           <div class="row">
               <h6><strong>Contacts</strong></h6>
           </div>
           <!-- end of row 3 title-->

           <br>
            <!-- start of row 3 -->
            <div class="row">
               <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                        <input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="Email" name="Email">
                    </div>
                </div>
                <!-- end -->
           </div>
           <!-- end of row 3 -->
           <br>

           <!-- start of row 2 title-->
           <div class="row">
               <h6><strong>In Case of Emergency Please Contact the following:</strong></h6>
           </div>
           <!-- end of row 2 title-->

           <br>
            <!-- start of row 3 -->
            <div class="row">
               <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Fullname" name="fullname">
                    </div>
                </div>
                <!-- end -->

               <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                        <input type="text" class="form-control" placeholder="Mobile Number" name="mobileNo">
                    </div>
                </div>
                <!-- end -->

                 <!-- start -->
               <div class="col-sm-12 col-md-6 col-lg-4">
               
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Relationship" name="Relationship">
                    </div>
                </div>
                <!-- end -->
           </div>
           <!-- end of row 3 -->
           <br>

           <br>
           <!-- start of row  button-->
           <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary" type='button' id="btn">Next</button>
           </div>
           <!-- end of row button-->

        </div>
    </div>
    <br/><br/>
</body>
</html>