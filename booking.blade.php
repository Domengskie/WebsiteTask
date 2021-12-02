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

        .container{
         
            background-color: white;
            border: white solid .5rem;
            padding: auto;
            margin: auto;
            width: 40%;
            box-shadow: #999 1px 1px 5px;
        }

        .head h1{
            color: #4fac9c;
        }

  
        .appointment-section #appointment-date{
            color: #4fac9c;
        }
        .appointment-section input{
            cursor: pointer;
        }

        input[type="radio"]{
            visibility: hidden;
        }

        input[type="radio"]:checked{
            background-color: #4fac9c;
            color: #4fac9c;
        }

        #sched{
            font-size: 15px;
            background-color: #fff;
        }

        #sched:active{
            background-color: #4fac9c;
            border-color: #4fac9c;
            /* width: 40%; */
            color:#fff
        }

        .option{
            height: 35px;
            width: 100%;
            border-color: #d3d3d3;
        }
        select{
            border-radius: 0.25rem;
            padding-left: 10px;
        }

        button.btn{
            background-color: #4fac9c;
            border-color: #4fac9c;
            width: 40%;
        }
        button.btn:hover{
            box-shadow: 3px 5px 10px gray;
        }
        button a{
            text-decoration: none;
            color: white;
        }
        button a:hover{
            text-decoration: none;
            color: white;
        }
    </style>

    <title>Laravel</title>
</head>
<body>
    <br/><br/><br/>
<div class="container">
        
    <div class="head">
        <h1>BOOKING DETAILS</h1>
        <h6><b>Fill up the need information to continue</b></h6>
    </div>
        <br/><br/>

    <!-- APPOINTMENT -->
    <div class="appointment-section">

        <h6 id="appointment-date"><b>Appointment Date</b></h6>
        <input type="text" class="form-control" placeholder="Select Date" onfocus="(this.type='date')" onblur="(this.type='text')">


        <br/>
        <h6><b>Morning</b></h6>

        <!-- start container -->
          <div class="card shadow">
              <!-- start row -->
               <div class="row">
 <!-- start -->
            <div class="btn-group">


            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 8:30 AM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 9:00 AM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 9:30 AM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 10:00 NN
            </label>

            
            </div>
            <!-- end -->
          
            <!-- start -->
            
            <div class="btn-group">

            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 10:30 AM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 11:00 AM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 11:30 AM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 12:00 NN
            </label>
            </div>
            <!-- end -->
               </div>
                <!-- end row -->
            </div>
          <!-- end container -->

            <br/><br/>
        <h6><b>Evening</b></h6>


            <div class="card shadow">
            <!-- start -->
            <div class="btn-group">

            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 12:30 NN
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 01:00 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 01:30 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 02:00 PM
            </label>
            
            </div>
            <!-- end -->

            <!-- start -->
            
            <div class="btn-group">

            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 02:30 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 03:00 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 03:30 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 04:00 PM
            </label>
            </div>
            <!-- end -->
            <!-- start -->

            <div class="btn-group">

            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 04:30 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 05:00 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 05:30 PM
            </label>
            <label class="btn col-sm-3 mt-2" id="sched">
                <input type="radio"> <span class="fas fa-clock" aria-hidden="true"></span> 06:00 PM
            </label>
            </div>
            <!-- end -->

            </div>


        <br><br>
        <h6><b>Service Type</b></h6>
            <br>
            <!-- start -->
        <h6 id="appointment-date"><b>Service Type</b></h6>
        <select class="option">
            <option>Choose Here</option>
            <option>In-Lounge</option>
            <option>Home Service</option>
        </select>

        <!-- end -->
        <br>

        <!-- start -->
        <p><h6 id="appointment-date"><b>Service Category</b></h6></p>
        <select class="option">
            <option>Choose Here</option>
            <option>LASH</option>
            <option>WAX</option>
            <option>NAIL</option>
            <option>FOOT SPA</option>
            <option>PARAFFIN</option>
            <option>KIDDIE</option>
        </select>

        <!-- end -->
        <p><h6 id="appointment-date"><b>Specific Service</b></h6></p>
        <select class="option">
            <option>Choose Here</option>
        </select>

    </div>
    
</div>
    <div class="text-center">
        <button type="button" class="btn"><a href="#">Next</a></button>
    </div>
    <br/><br/>
</body>
</html>