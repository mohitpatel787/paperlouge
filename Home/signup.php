<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link href="https://fonts.googleapis.com/css?family=Gruppo|Nixie+One" rel="stylesheet">
	<link rel="shortcut icon" href="http://laoblogger.com/images/reading-clipart-black-and-white-icon-9.jpg" type="image/x-icon" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="test.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Crushed|Montserrat|Gugi|Amatic+SC|Cinzel" rel="stylesheet">
</head>
<body class="bg1">
<div class = "container-fluid" style="font-family: 'Amatic SC', cursive;margin:0px !important; padding: 0px">
    <div class="row">
        <div class="col-md-12">
    <div class="active"><h1 style="font-size: 80px; margin-top: 0px;"><center><strong style="color: white">PaperLouge</strong></center></h1></div>
        </div>
        </div>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="margin-top: 0px;">
	<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#" style="font-family: 'Crushed', cursive;font-size: 35px"><strong>PaperLouge</strong></a>
        </div>
         <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Temp.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#thefooter">Contact</a></li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
            <li style="padding-right: 50px; ">
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
            </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
            <form style="padding-right: 60px;"class="navbar-form navbar-right" role="search">
              <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Here" name="" style="padding-right: 40px;">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-danger">
          <i class="glyphicon glyphicon-search"></i>
        </button>
            </div>
          </div>
            </form>
          </div>
        </div>
  
</nav>
<div class="container" id="signup1" style="margin-bottom: 100px;">
                       <div class="row">
                           
                           <div class="col-md-12">
                 
                      <div class="page-header" style="font-family: 'Nixie One', cursive;">
                    <h1 ><center><strong>Create Account</strong></center></h1>
                     </div>
                      
                   <div class="container" id="signup">
                       <div class="row">
                           
                           <div class="col-md-12">
                 
</div>
                  <form action="/action_page.php">
                     
                      <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" id="name" required>
  </div>
                     <div class="form-group">
<label for="email">Country:</label>
    
 <select name="country" class="form-control" id="country" required>
     <div class="select1">
	<option value="ISO 3166-2:AF">Afghanistan</option>
	<option value="ISO 3166-2:AX">Åland Islands</option>
	<option value="ISO 3166-2:AL">Albania</option>
	<option value="ISO 3166-2:DZ">Algeria</option>
	<option value="ISO 3166-2:AS">American Samoa</option>
	<option value="ISO 3166-2:AD">Andorra</option>
	<option value="ISO 3166-2:AO">Angola</option>
	<option value="ISO 3166-2:AI">Anguilla</option>
	<option value="ISO 3166-2:AQ">Antarctica</option>
	<option value="ISO 3166-2:AG">Antigua and Barbuda</option>
	<option value="ISO 3166-2:AR">Argentina</option>
	<option value="ISO 3166-2:AM">Armenia</option>
	<option value="ISO 3166-2:AW">Aruba</option>
	<option value="ISO 3166-2:AU">Australia</option>
	<option value="ISO 3166-2:AT">Austria</option>
	<option value="ISO 3166-2:AZ">Azerbaijan</option>
	<option value="ISO 3166-2:BS">Bahamas</option>
	<option value="ISO 3166-2:BH">Bahrain</option>
	<option value="ISO 3166-2:BD">Bangladesh</option>
	<option value="ISO 3166-2:BB">Barbados</option>
	<option value="ISO 3166-2:BY">Belarus</option>
	<option value="ISO 3166-2:BE">Belgium</option>
	<option value="ISO 3166-2:BZ">Belize</option>
	<option value="ISO 3166-2:BJ">Benin</option>
	<option value="ISO 3166-2:BM">Bermuda</option>
	<option value="ISO 3166-2:BT">Bhutan</option>
	<option value="ISO 3166-2:BO">Bolivia, Plurinational State of</option>
	<option value="ISO 3166-2:BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="ISO 3166-2:BA">Bosnia and Herzegovina</option>
	<option value="ISO 3166-2:BW">Botswana</option>
	<option value="ISO 3166-2:BV">Bouvet Island</option>
	<option value="ISO 3166-2:BR">Brazil</option>
	<option value="ISO 3166-2:IO">British Indian Ocean Territory</option>
	<option value="ISO 3166-2:BN">Brunei Darussalam</option>
	<option value="ISO 3166-2:BG">Bulgaria</option>
	<option value="ISO 3166-2:BF">Burkina Faso</option>
	<option value="ISO 3166-2:BI">Burundi</option>
	<option value="ISO 3166-2:KH">Cambodia</option>
	<option value="ISO 3166-2:CM">Cameroon</option>
	<option value="ISO 3166-2:CA">Canada</option>
	<option value="ISO 3166-2:CV">Cape Verde</option>
	<option value="ISO 3166-2:KY">Cayman Islands</option>
	<option value="ISO 3166-2:CF">Central African Republic</option>
	<option value="ISO 3166-2:TD">Chad</option>
	<option value="ISO 3166-2:CL">Chile</option>
	<option value="ISO 3166-2:CN">China</option>
	<option value="ISO 3166-2:CX">Christmas Island</option>
	<option value="ISO 3166-2:CC">Cocos (Keeling) Islands</option>
	<option value="ISO 3166-2:CO">Colombia</option>
	<option value="ISO 3166-2:KM">Comoros</option>
	<option value="ISO 3166-2:CG">Congo</option>
	<option value="ISO 3166-2:CD">Congo, the Democratic Republic of the</option>
	<option value="ISO 3166-2:CK">Cook Islands</option>
	<option value="ISO 3166-2:CR">Costa Rica</option>
	<option value="ISO 3166-2:CI">Côte d'Ivoire</option>
	<option value="ISO 3166-2:HR">Croatia</option>
	<option value="ISO 3166-2:CU">Cuba</option>
	<option value="ISO 3166-2:CW">Curaçao</option>
	<option value="ISO 3166-2:CY">Cyprus</option>
	<option value="ISO 3166-2:CZ">Czech Republic</option>
	<option value="ISO 3166-2:DK">Denmark</option>
	<option value="ISO 3166-2:DJ">Djibouti</option>
	<option value="ISO 3166-2:DM">Dominica</option>
	<option value="ISO 3166-2:DO">Dominican Republic</option>
	<option value="ISO 3166-2:EC">Ecuador</option>
	<option value="ISO 3166-2:EG">Egypt</option>
	<option value="ISO 3166-2:SV">El Salvador</option>
	<option value="ISO 3166-2:GQ">Equatorial Guinea</option>
	<option value="ISO 3166-2:ER">Eritrea</option>
	<option value="ISO 3166-2:EE">Estonia</option>
	<option value="ISO 3166-2:ET">Ethiopia</option>
	<option value="ISO 3166-2:FK">Falkland Islands (Malvinas)</option>
	<option value="ISO 3166-2:FO">Faroe Islands</option>
	<option value="ISO 3166-2:FJ">Fiji</option>
	<option value="ISO 3166-2:FI">Finland</option>
	<option value="ISO 3166-2:FR">France</option>
	<option value="ISO 3166-2:GF">French Guiana</option>
	<option value="ISO 3166-2:PF">French Polynesia</option>
	<option value="ISO 3166-2:TF">French Southern Territories</option>
	<option value="ISO 3166-2:GA">Gabon</option>
	<option value="ISO 3166-2:GM">Gambia</option>
	<option value="ISO 3166-2:GE">Georgia</option>
	<option value="ISO 3166-2:DE">Germany</option>
	<option value="ISO 3166-2:GH">Ghana</option>
	<option value="ISO 3166-2:GI">Gibraltar</option>
	<option value="ISO 3166-2:GR">Greece</option>
	<option value="ISO 3166-2:GL">Greenland</option>
	<option value="ISO 3166-2:GD">Grenada</option>
	<option value="ISO 3166-2:GP">Guadeloupe</option>
	<option value="ISO 3166-2:GU">Guam</option>
	<option value="ISO 3166-2:GT">Guatemala</option>
	<option value="ISO 3166-2:GG">Guernsey</option>
	<option value="ISO 3166-2:GN">Guinea</option>
	<option value="ISO 3166-2:GW">Guinea-Bissau</option>
	<option value="ISO 3166-2:GY">Guyana</option>
	<option value="ISO 3166-2:HT">Haiti</option>
	<option value="ISO 3166-2:HM">Heard Island and McDonald Islands</option>
	<option value="ISO 3166-2:VA">Holy See (Vatican City State)</option>
	<option value="ISO 3166-2:HN">Honduras</option>
	<option value="ISO 3166-2:HK">Hong Kong</option>
	<option value="ISO 3166-2:HU">Hungary</option>
	<option value="ISO 3166-2:IS">Iceland</option>
	<option value="ISO 3166-2:IN" selected>India</option>
	<option value="ISO 3166-2:ID">Indonesia</option>
	<option value="ISO 3166-2:IR">Iran, Islamic Republic of</option>
	<option value="ISO 3166-2:IQ">Iraq</option>
	<option value="ISO 3166-2:IE">Ireland</option>
	<option value="ISO 3166-2:IM">Isle of Man</option>
	<option value="ISO 3166-2:IL">Israel</option>
	<option value="ISO 3166-2:IT">Italy</option>
	<option value="ISO 3166-2:JM">Jamaica</option>
	<option value="ISO 3166-2:JP">Japan</option>
	<option value="ISO 3166-2:JE">Jersey</option>
	<option value="ISO 3166-2:JO">Jordan</option>
	<option value="ISO 3166-2:KZ">Kazakhstan</option>
	<option value="ISO 3166-2:KE">Kenya</option>
	<option value="ISO 3166-2:KI">Kiribati</option>
	<option value="ISO 3166-2:KP">Korea, Democratic People's Republic of</option>
	<option value="ISO 3166-2:KR">Korea, Republic of</option>
	<option value="ISO 3166-2:KW">Kuwait</option>
	<option value="ISO 3166-2:KG">Kyrgyzstan</option>
	<option value="ISO 3166-2:LA">Lao People's Democratic Republic</option>
	<option value="ISO 3166-2:LV">Latvia</option>
	<option value="ISO 3166-2:LB">Lebanon</option>
	<option value="ISO 3166-2:LS">Lesotho</option>
	<option value="ISO 3166-2:LR">Liberia</option>
	<option value="ISO 3166-2:LY">Libya</option>
	<option value="ISO 3166-2:LI">Liechtenstein</option>
	<option value="ISO 3166-2:LT">Lithuania</option>
	<option value="ISO 3166-2:LU">Luxembourg</option>
	<option value="ISO 3166-2:MO">Macao</option>
	<option value="ISO 3166-2:MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="ISO 3166-2:MG">Madagascar</option>
	<option value="ISO 3166-2:MW">Malawi</option>
	<option value="ISO 3166-2:MY">Malaysia</option>
	<option value="ISO 3166-2:MV">Maldives</option>
	<option value="ISO 3166-2:ML">Mali</option>
	<option value="ISO 3166-2:MT">Malta</option>
	<option value="ISO 3166-2:MH">Marshall Islands</option>
	<option value="ISO 3166-2:MQ">Martinique</option>
	<option value="ISO 3166-2:MR">Mauritania</option>
	<option value="ISO 3166-2:MU">Mauritius</option>
	<option value="ISO 3166-2:YT">Mayotte</option>
	<option value="ISO 3166-2:MX">Mexico</option>
	<option value="ISO 3166-2:FM">Micronesia, Federated States of</option>
	<option value="ISO 3166-2:MD">Moldova, Republic of</option>
	<option value="ISO 3166-2:MC">Monaco</option>
	<option value="ISO 3166-2:MN">Mongolia</option>
	<option value="ISO 3166-2:ME">Montenegro</option>
	<option value="ISO 3166-2:MS">Montserrat</option>
	<option value="ISO 3166-2:MA">Morocco</option>
	<option value="ISO 3166-2:MZ">Mozambique</option>
	<option value="ISO 3166-2:MM">Myanmar</option>
	<option value="ISO 3166-2:NA">Namibia</option>
	<option value="ISO 3166-2:NR">Nauru</option>
	<option value="ISO 3166-2:NP">Nepal</option>
	<option value="ISO 3166-2:NL">Netherlands</option>
	<option value="ISO 3166-2:NC">New Caledonia</option>
	<option value="ISO 3166-2:NZ">New Zealand</option>
	<option value="ISO 3166-2:NI">Nicaragua</option>
	<option value="ISO 3166-2:NE">Niger</option>
	<option value="ISO 3166-2:NG">Nigeria</option>
	<option value="ISO 3166-2:NU">Niue</option>
	<option value="ISO 3166-2:NF">Norfolk Island</option>
	<option value="ISO 3166-2:MP">Northern Mariana Islands</option>
	<option value="ISO 3166-2:NO">Norway</option>
	<option value="ISO 3166-2:OM">Oman</option>
	<option value="ISO 3166-2:PK">Pakistan</option>
	<option value="ISO 3166-2:PW">Palau</option>
	<option value="ISO 3166-2:PS">Palestinian Territory, Occupied</option>
	<option value="ISO 3166-2:PA">Panama</option>
	<option value="ISO 3166-2:PG">Papua New Guinea</option>
	<option value="ISO 3166-2:PY">Paraguay</option>
	<option value="ISO 3166-2:PE">Peru</option>
	<option value="ISO 3166-2:PH">Philippines</option>
	<option value="ISO 3166-2:PN">Pitcairn</option>
	<option value="ISO 3166-2:PL">Poland</option>
	<option value="ISO 3166-2:PT">Portugal</option>
	<option value="ISO 3166-2:PR">Puerto Rico</option>
	<option value="ISO 3166-2:QA">Qatar</option>
	<option value="ISO 3166-2:RE">Réunion</option>
	<option value="ISO 3166-2:RO">Romania</option>
	<option value="ISO 3166-2:RU">Russian Federation</option>
	<option value="ISO 3166-2:RW">Rwanda</option>
	<option value="ISO 3166-2:BL">Saint Barthélemy</option>
	<option value="ISO 3166-2:SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="ISO 3166-2:KN">Saint Kitts and Nevis</option>
	<option value="ISO 3166-2:LC">Saint Lucia</option>
	<option value="ISO 3166-2:MF">Saint Martin (French part)</option>
	<option value="ISO 3166-2:PM">Saint Pierre and Miquelon</option>
	<option value="ISO 3166-2:VC">Saint Vincent and the Grenadines</option>
	<option value="ISO 3166-2:WS">Samoa</option>
	<option value="ISO 3166-2:SM">San Marino</option>
	<option value="ISO 3166-2:ST">Sao Tome and Principe</option>
	<option value="ISO 3166-2:SA">Saudi Arabia</option>
	<option value="ISO 3166-2:SN">Senegal</option>
	<option value="ISO 3166-2:RS">Serbia</option>
	<option value="ISO 3166-2:SC">Seychelles</option>
	<option value="ISO 3166-2:SL">Sierra Leone</option>
	<option value="ISO 3166-2:SG">Singapore</option>
	<option value="ISO 3166-2:SX">Sint Maarten (Dutch part)</option>
	<option value="ISO 3166-2:SK">Slovakia</option>
	<option value="ISO 3166-2:SI">Slovenia</option>
	<option value="ISO 3166-2:SB">Solomon Islands</option>
	<option value="ISO 3166-2:SO">Somalia</option>
	<option value="ISO 3166-2:ZA">South Africa</option>
	<option value="ISO 3166-2:GS">South Georgia and the South Sandwich Islands</option>
	<option value="ISO 3166-2:SS">South Sudan</option>
	<option value="ISO 3166-2:ES">Spain</option>
	<option value="ISO 3166-2:LK">Sri Lanka</option>
	<option value="ISO 3166-2:SD">Sudan</option>
	<option value="ISO 3166-2:SR">Suriname</option>
	<option value="ISO 3166-2:SJ">Svalbard and Jan Mayen</option>
	<option value="ISO 3166-2:SZ">Swaziland</option>
	<option value="ISO 3166-2:SE">Sweden</option>
	<option value="ISO 3166-2:CH">Switzerland</option>
	<option value="ISO 3166-2:SY">Syrian Arab Republic</option>
	<option value="ISO 3166-2:TW">Taiwan, Province of China</option>
	<option value="ISO 3166-2:TJ">Tajikistan</option>
	<option value="ISO 3166-2:TZ">Tanzania, United Republic of</option>
	<option value="ISO 3166-2:TH">Thailand</option>
	<option value="ISO 3166-2:TL">Timor-Leste</option>
	<option value="ISO 3166-2:TG">Togo</option>
	<option value="ISO 3166-2:TK">Tokelau</option>
	<option value="ISO 3166-2:TO">Tonga</option>
	<option value="ISO 3166-2:TT">Trinidad and Tobago</option>
	<option value="ISO 3166-2:TN">Tunisia</option>
	<option value="ISO 3166-2:TR">Turkey</option>
	<option value="ISO 3166-2:TM">Turkmenistan</option>
	<option value="ISO 3166-2:TC">Turks and Caicos Islands</option>
	<option value="ISO 3166-2:TV">Tuvalu</option>
	<option value="ISO 3166-2:UG">Uganda</option>
	<option value="ISO 3166-2:UA">Ukraine</option>
	<option value="ISO 3166-2:AE">United Arab Emirates</option>
	<option value="ISO 3166-2:GB">United Kingdom</option>
	<option value="ISO 3166-2:US">United States</option>
	<option value="ISO 3166-2:UM">United States Minor Outlying Islands</option>
	<option value="ISO 3166-2:UY">Uruguay</option>
	<option value="ISO 3166-2:UZ">Uzbekistan</option>
	<option value="ISO 3166-2:VU">Vanuatu</option>
	<option value="ISO 3166-2:VE">Venezuela, Bolivarian Republic of</option>
	<option value="ISO 3166-2:VN">Viet Nam</option>
	<option value="ISO 3166-2:VG">Virgin Islands, British</option>
	<option value="ISO 3166-2:VI">Virgin Islands, U.S.</option>
	<option value="ISO 3166-2:WF">Wallis and Futuna</option>
	<option value="ISO 3166-2:EH">Western Sahara</option>
	<option value="ISO 3166-2:YE">Yemen</option>
	<option value="ISO 3166-2:ZM">Zambia</option>
	<option value="ISO 3166-2:ZW">Zimbabwe</option>
 </div></select>
                         
                      </div>
                      
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="el" required>
  </div>
                      <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
   <div class="form-group ">
    <label for="email">Confirm Password:</label>
    <input type="password" class="form-control" id="cpassword"  required >
  </div>
  <button type="submit" class="btn btn-info">Sign up</button>
                      <a href="./Temp.html"><button type="submit" class="btn btn-danger pull-right">Cancel</button></a>
                          </form></div>
                      </div>
                             </div></div>
                     </div>
                  </div>
                  </div> 
              </div>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<footer class="page-footer" id ="thefooter" style="background-color: #333333">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row-compact">
    <hr class="clearfix w-100 d-md-none pb-3" style="max-width: 97%">
           <div class="col-md-4">

               <h1 style="font-family: 'Crushed', cursive;font-size: 40px; padding-top: 70px; color: white"><strong><center>PaperLouge</center></strong></h1>
        </div>

        <!-- Grid column -->
       
        <!-- Grid column -->

     

        <!-- Grid column -->
        <div class="col-md-4">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold;" style="color: white;font-size: 20px;">CONTACTS</h5><br>
          <p style="color: white;"> <strong>Address </strong><br> xyx<br><br><strong>Email :</strong><br>paperlouge@gmail.com<br><br>
              <strong>Phone No. :</strong><br>
              7389885126
            </p>

        </div>
           <div class="col-md-4">

          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold;" style="color: white;font-size: 20px;">FIND US ON</h5><br><br>
          <a class="fb-ic" href="https://www.facebook.com/profile.php?id=100006026012728">
              <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x" style="color: white"> </i>
            </a>
               <br><br><br>
               <a class="ins-ic" href="https://www.instagram.com/mohit_554/">
              <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color: white"> </i>
            </a>
              <br><br><br>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color: white"> </i>
            </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Text -->


    
    <div class="footer-copyright text-center py-3" style="padding-bottom: 10px;color: white"><center> © 2018 <a href="#">PaperLouge</a></center>
        
    </div>
  
    <!-- Copyright -->

  </footer>    
  
    <!-- Copyright -->

  </footer>
  <div data-toggle="modal" class="modal fade" id="login">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
          <h2 class="modal-title" style="font-family: 'Nixie One', cursive; font-size: 40px;"><center><strong>Login</strong></center></h2>
      </div>
    

      <div class="modal-body">
<div class="form-group"> 
    <label for="email" style="font-family: 'Gruppo', cursive; font-size: 20px;"><strong>Email address:</strong></label>
    <input type="email" class="form-control" id="email">
  </div>
 <div class="form-group">
     <label for="pwd" style="font-family: 'Gruppo', cursive; font-size: 20px;"><strong>Password:</strong></label>
    <input type="password" class="form-control" id="pwd">
          </div>
          <div>
    <a href="#">Forgot Password?</a>
      </div>
      <div class="modal-footer">
<button type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

      </div>


    </div>
  </div>
  </div>
  </div>
</body>
</html>