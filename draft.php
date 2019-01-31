<!-- Taken from https://codepen.io/jonnitto/project/editor/XRPjxx -->
<?php
if(array_key_exists("sub", $_POST))
{
print_r($_POST);
$host = "localhost";
$userName = "root";
$password = "root";
$dbName = "draw_event";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$eventname=$_POST['eventname'];
$eventdate=$_POST['date'];
$number=$_POST['people'];
$budgetto=$_POST['budgetto'];
$budgetfrom=$_POST['budgetfrom'];
$other=$_POST['other'];
$username=$_POST['username'];
$city=$_POST['city'];
$contact=$_POST['number'];
$email=$_POST['email'];
$address=$_POST['address'];

$sql="INSERT INTO eventdetails(event_name, event_date, people, budget_start ,budget_end, other_spec) VALUES ('".$eventname."','".$eventdate."', '".$number."', '".$budgetto."','".$budgetform."','".$other."')";;
$sql1="INSERT INTO person_details(name, email, phone, comments) VALUES ('".$name."','".$city."', '".$contact."', '".$email."','".$address."')";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
}
?>

<!doctype html>
<html lang="en" ng-app=Simpleform>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="newpro.css">
    <link rel="stylesheet" href="event.css">

    <title>Hello, world!</title>
    <style type="text/css">


        body {
        	width: 100wh;
        	height: 90vh;
        	color: #000;
    margin: 0px auto;

        	 background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
        	background-size: 400% 400%;
        	-webkit-animation: Gradient 15s ease infinite;
        	-moz-animation: Gradient 15s ease infinite;
        	animation: Gradient 17s ease infinite;
        }
        .form-element .ng-invalid{
          color: red !important;
          border-bottom:1px red solid !important;
        }
        .form-element .ng-valid{
            color: green !important;
          border-bottom:1px green solid !important;
        }



        @keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
        }
        .Category
        {
          padding-left:0;
        }
        .Number
        {
            width: 30%
        }
        .

        .whole
        {
            margin:3% 3%;
        }
        .space
        {
            margin:2% 2%;
        }

        .two
        {
            width: 40%;
             @media(width: 798px)
             {
                width: 75%;
             }

        }

        .marg
        {
            margin-left: 20% !important;
        }
        @media(width: 798px)
        {
            .two
            {
                width: 100% !important;
            }
            .Category
            {
                width: 100% !important;
            }

             .marg
        {
            margin-left: 0% !important;
        }
        }
    </style>
</head>
<body ng-controller="RegistrationController as reg">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="angular.min.js"></script>
    <script src="app.js"></script>

<div>
    <div>
      <nav class="nav px-3 navbar-dark bg-black">
        <span class="my-auto" style="color:white" >{call} 99559595956 </span>
        <a class="nav-link active ml-auto" href="#" style="color:white" >About Us</a>
        <a class="nav-link" href="#" style="color:white" >Contact Us</a>
        <a class="nav-link" href="#" style="color:white" >Join Us</a>
      </nav>
      <nav class="navbar navbar-expand-lg  navbar-dark bg-black">
          <a class="navbar-brand" href="#" style="color:white" >Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>


    </nav>
    <div class="  navbar-expand-lg  ">

    <div class="collapse navbar-collapse bg-black" id="navbarSupportedContent" >
    <a class="nav-link active" style="color:white" href="#">Home</a>
    <a class="nav-link" href="#" style="color:white" >Draw Your Event</a>
    <a class="nav-link" href="#" style="color:white" >Featured Event</a>
    <a class="nav-link" href="#" style="color:white" >Session 'N' Plans </a>
    <a class="nav-link" href="#" style="color:white" >Testimonial</a>
    </div>
    </div>
</div>

<div class="one">
<div class="whole">

<form method=post class="form-card" action=form.php name='regForm' novalidate>
    <fieldset class="form-fieldset">
        <legend class="form-legend">DRAW MY EVENT
        </legend>
<div class="form-checkbox-legend">Event Details:</div>
        <div class="Category row d-lg-flex d-md-block pl-0">

        <div class="form-element form-select col-lg-5 col-md-5 mx-lg-0 mx-sm-3 wd-100">
            <select name="Category"  id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                <option value="Personal">Personal</option>
                <option value="Organisational">Organisational</option>
                <option value="Conference">Conference</option>
                <option value="Wedding">Wedding</option>
                <option value="Shows">Shows</option>
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Select your Category</label>
        </div>

         <div class="form-element form-select mx-lg-4 mx-sm-3 mx-lg-0 col-lg-5 col-md-5 wd-100">
            <select  name="Subcategory"  id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">

                <option value="Personal">Personal</option>
                <option value="Organisational">Organisational</option>
                <option value="Conference">Conference</option>
                <option value="Wedding">Wedding</option>
                <option value="Xyx">Xyx</option>
            </select>
            <div class="form-element-bar"></div>
            <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Select your Sub Category</label>
        </div>
    </div>
    <div class="w-100 d-lg-flex d-md-block">
           <div class="w-100  my-4 ">
         <div class="form-element form-input w-30">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='eventname' ng-model=reg.user.eventname placeholder="Event Name" type="input" ng-maxlength="10">
            <div class="form-element-bar" ng-hide="(regForm.eventname.$dirty && regForm.eventname.$viewValue!=='')" ></div>

            <span class="position-absolute" ng-if="((regForm.eventname.$error.minlength || regForm.eventname.$error.required ) && regForm.eventname.$touched)">
              eventname must be atleast 4 characters long
              </span>
              <span class="position-absolute" class="position-absolute" ng-if="(regForm.eventname.$error.maxlength && regForm.eventname.$touched)">
                eventname must not be more than 10 characters
                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Event Name</label>
        </div>
    </div>

       <div class="w-100 px-4 my-4 px-sm-0 px-lg-4">
         <div class="form-element form-input w-30">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='date' ng-model=reg.user.date  placeholder="" type="date" required minlength="4" ng-maxlength="10">
            <div class="form-element-bar" ng-hide="(regForm.date.$dirty && date.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.date.$error.minlength || regForm.date.$error.required) && regForm.date.$touched)">
              enter valid date
              </span>
              <span class="position-absolute" ng-if="(regForm.date.$error.maxlength && regForm.date.$touched)">
                enter valid date
                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Event Date</label>
        </div>
    </div>
</div>

    <div class="w-80 d-lg-flex d-md-block">
        <div class="w-100 my-4 ">
         <div class="form-element form-input w-40">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='people' ng-model=reg.user.people placeholder="Number of people" type="input" required minlength="1" ng-maxlength="2000">
            <div class="form-element-bar" ng-hide="(regForm.people.$dirty && regForm.people.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.people.$error.minlength || regForm.people.$error.required) && regForm.people.$touched)">
              Warning! Min 1 person.
              </span>
              <span class="position-absolute" ng-if="(regForm.people.$error.maxlength && regForm.people.$touched)">

                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Number of people</label>
        </div>
    </div>
        <div class="d-lg-flex  w-100 px-lg-3 px-sm-0 my-4">
        <div class="Budget w-100">
         <div class="form-element form-input w-30">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='budgetfrom' ng-model=reg.user.budgetfrom placeholder="From" type="Number" required minlength="1" ng-maxlength="10">
            <div class="form-element-bar" ng-hide="(regForm.budgetfrom.$dirty && regForm.budgetfromo.$viewValue!==='')"></div>
            <span class="position-absolute" ng-if="((regForm.budgetfrom.$error.minlength || regForm.budgetfrom.$error.required) && regForm.budgetfrom.$touched)">

              </span>
              <span class="position-absolute" ng-if="(regForm.budgetfrom.$error.maxlength && regForm.budgetfrom.$touched)">

                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Budget From:</label>
        </div>
        </div>
        <div class="Budget w-100 pl-3 px-sm-0 px-lg-2">
         <div class="form-element form-input w-30">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='budgetto' ng-model=reg.user.budgetto placeholder="to" type="Number" required minlength="" ng-maxlength="10">
            <div class="form-element-bar" ng-hide="(regForm.budgetto.$dirty && regForm.budgetto.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.budgetto.$error.minlength || regForm.budgetto.$error.required) && regForm.budgetto.$touched)">
              Please Mention Approx Budget
              </span>
              <span class="position-absolute" ng-if="(regForm.budgetto.$error.maxlength && regForm.budgetto.$touched)">

                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Budget To:</label>
        </div>
        </div>
    </div>
</div>



        <div class="services">
        <div class="form-checkbox form-checkbox-inline">
            <div class="form-checkbox-legend">Services:</div>
            <div class="space">
            <label class="form-checkbox-label">
                <input name=rap class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Light/Sound</span>
            </label>
            <label class="form-checkbox-label">
                <input name=pop class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Decoration</span>
            </label>
            <label class="form-checkbox-label">
                <input name=rock class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Food</span>
            </label>
            <label class="form-checkbox-label">
                <input name=metal class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Catering</span>
            </label>
            <label class="form-checkbox-label">
                <input name=r_b class="form-checkbox-field" type="checkbox" />
                <i class="form-checkbox-button"></i>
                <span>Photography/Videography</span>
            </label>
        </div>
        </div>
    </div>
    <div class="Specifications">
        <div class="form-element form-textarea">
            <textarea id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" name=other class="form-element-field" placeholder="Other Specifications "></textarea>
            <div class="form-element-bar"></div>

            <label class="form-element-label" for="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm">Other Specifications:</label>

        </div>
    </div>


      <div class="form-checkbox-legend">Personal Details:</div>
        <div class="first d-lg-flex d-md-block">
         <div class="form-element form-input w-100">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='username' ng-model=reg.user.username placeholder="Name" type="input" required minlength="4" ng-maxlength="10">
            <div class="form-element-bar" ng-hide="(regForm.username.$dirty && regForm.username.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.username.$error.minlength || regForm.username.$error.required) && regForm.username.$touched)">
            Warning! username must be atleast 4 characters long
              </span>
              <span class="position-absolute" ng-if="(regForm.username.$error.maxlength && regForm.username.$touched)">
              Warning ! username must not be more than 10 characters
                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Name</label>
        </div>


         <div class="form-element form-input w-100 px-lg-5 px-sm-0">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='city' ng-model=reg.user.city placeholder="Please fill your city name" type="input" required minlength="2" ng-maxlength="50">
            <div class="form-element-bar" ng-hide="(regForm.city.$dirty && regForm.city.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.city.$error.minlength || regForm.city.$error.required) && regForm.city.$touched)">
              Warning ! Min 2 characters
              </span>
              <span class="position-absolute" ng-if="(regForm.city.$error.maxlength && regForm.city.$touched)">
              Warning ! Max 50 characters
                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">city</label>
        </div>
    </div>

        <div class="first d-lg-flex d-md-block">
         <div class="form-element form-input w-100 ">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='number' ng-model=reg.user.number pattern="(\d{3})-(\d{3})-(\d{4})" placeholder="Please fill your contact number as ###-###-##### " type="input" required minlength="10" ng-maxlength="12">
            <div class="form-element-bar" ng-hide="(regForm.number.$dirty && regForm.number.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.number.$error.minlength || regForm.number.$error.required) && regForm.number.$touched)">
              Warning!Max 10 characters
              </span>
              <span class="position-absolute" ng-if="(regForm.number.$error.maxlength && regForm.number.$touched)">
                IT should be valid
                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Contact No.</label>
        </div>


         <div class="form-element form-input w-100 px-lg-5 px-sm-0">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='email' ng-model=reg.user.email placeholder="E-mail AS demo@gmail.com" type="e-mail" required minlength="9" ng-maxlength="40">
            <div class="form-element-bar" ng-hide="(regForm.email.$dirty && regForm.email.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.email.$error.minlength || regForm.email.$error.required) && regForm.email.$touched)">
              Warning! enter valid email
              </span>
              <span class="position-absolute" ng-if="(regForm.email.$error.maxlength && regForm.email.$touched)">
              Warning!  enter valid email
                </span>
            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">E-mail</label>
        </div>
       </div>



        <div class="fourth">
         <div class="form-element form-input my-5">
            <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" name='address' ng-model=reg.user.address placeholder="Personal" type="input" required minlength="40" >
            <div class="form-element-bar" ng-hide="(regForm.address.$dirty && regForm.address.$viewValue!=='')"></div>
            <span class="position-absolute" ng-if="((regForm.address.$error.minlength || regForm.address.$error.required) && regForm.address.$touched)">
              Warning! It should have minimum 40 characters.
              </span>

            <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Personal/Organisatiional Address</label>
        </div>
    </div>


    </fieldset>
    <div class="form-actions">
        <button
        ng-disabled=regForm.$invalid
        ng-click=reg.submit() class="form-btn" name=sub type="submit">Send inquiry</button>

    </div>
</form>
</div>
</div>
<footer>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.513040267638!2d75.88079981496274!3d22.74633418509372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDQ0JzQ2LjgiTiA3NcKwNTInNTguOCJF!5e0!3m2!1sen!2sin!4v1546886310594"  allowfullscreen></iframe>


  <div class="container ">
  <div class="py-2 d-md-flex d-block justify-content-between">
    <div class="footer-contact my-2 my-md-0 p-4">
    <div class="mx-auto">	<i class="material-icons align-bottom">phone</i><span class="ml-1">  +91 9998889998</span>
    </div>
    </div>
    <div class="footer-contact my-2  p-4 my-md-0 ">
    <div class="mx-auto">
      <i class="material-icons align-bottom">mail</i><span class="ml-3">  abcxyz@gmial.com</span>
    </div>
    </div>

    <div class="footer-contact p-4 my-2 my-md-0">
    <div class="mx-auto">
      <i class="material-icons align-bottom">phone</i><span class="ml-1">  +91 9998889998</span>
    </div>

    </div>
  </div>
   <hr>
  <div class="d-md-flex d-block justify-content-between w-100 py-3">

    <div class="fcontent my-4 	my-sm-0 w-sm-100">
      <span class="text-center "><i class="material-icons">favorite</i><strong class="f-min-head pb-1 ">More Links</strong></span>
      <div class="sitelinks">
        <div class="mt-2 mt-sm-0"><li>LOREM ISPSDIM</li>
        <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
        <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
        <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
        <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
    </div>
      </div>
    </div>

    <div class="fcontent my-4 my-sm-0  w-sm-100">
    <div class="sitelinks">
      <i class="material-icons">link</i>
      <strong class=f-min-head>SITE LINKS</strong>
      <div class="mt-2 mt-sm-0"><li>LOREM ISPSDIM</li>
      <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
      <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
      <li>LOREM ISPSDIM in LOREM ISPSDIM</li>
      <li>LOREM ISPSDIM in LOREM ISPSDIM</li>


  </div>
    </div>
  </div>
  <div class="fcontent my-4 my-sm-0 w-sm-100">

    <div class="sitelinks">
      <i class="material-icons">share</i>
      <strong class=f-min-head>Join Us here</strong>
      <div class="social-icons my-3 mx-auto">
        <a class="social-icon social-icon--twitter">
          <i class="fa fa-twitter"></i>
          <div class="tooltip">Twitter</div>
        </a>
        <a class="social-icon social-icon--dribbble">
          <i class="fa fa-dribbble"></i>
          <div class="tooltip">Dribbble</div>
        </a>
        <a class="social-icon social-icon--instagram">
          <i class="fa fa-instagram"></i>
          <div class="tooltip">Instagram</div>
        </a>
        <a class="social-icon social-icon--linkedin">
          <i class="fa fa-linkedin"></i>
          <div class="tooltip">LinkedIn</div>
        </a>
        <a class="social-icon social-icon--facebook">
          <i class="fa fa-facebook"></i>
          <div class="tooltip">Facebook</div>
        </a>
      </div>
    </div>
  </div>


    </div>
    <hr>
      <div class="fcredits py-3">

      <div>
          All Rights Reserved
        </div>
        <p>Designed and developed by <a href="http://wizitsolutions.in">Wiz It Solutions</a></p>
      </div>
        </div>
</footer>
</div>
<script type="text/javascript">
    // Taken from https://codepen.io/jonnitto/project/editor/XRPjxx

// Minimal Javascript (for Edge, IE and select box)
document.addEventListener("change", function(event) {
  let element = event.target;
  if (element && element.matches(".form-element-field")) {
    element.classList[element.value ? "add" : "remove"]("-hasvalue");
  }
});
</script>
</body>
</html>
