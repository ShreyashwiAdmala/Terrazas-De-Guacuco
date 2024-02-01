<!DOCTYPE html>
<html>
    <head>
        <title>Terrazas de Guacuco</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
       
    </head>
    <body>
        <nav class="nav-bar">
            <div class="project-title-name"><a href="/">Terrazas de Guacuco</a></div>
            <div class="nav-bar-pages">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/register">Register/Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="login-container">
            <div class="row">
                <div class="w3-half">
                    <img src="images/hotel.png" alt="image not found" class="image-login-responsive" />
                </div>
                <div class="w3-half">
                    <div class="register-page-column">
                        <div>
                            <h2 class="login-heading">
                                Create new Account
                            </h2>
                        </div>
                        <div>
                            <h5 class="login-sub-heading">
                                Already Registered? <a href="/login">Login</a>
                            </h5>
                        </div>
                        <form class="login-form" id='login-form' method="post" action="/register/storeRegister">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <div class="w-75 p-3 p-sm-4">
                                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control form-control-lg"
                                        placeholder="Enter Name" />
                                        @if ($errors->has('name'))
                                        <span class="field-error">{{ $errors->first('name') }}</span><br/>
                                        @endif
                                </div>
                            </div>
                            <div class="d-flex justify-content-center"> 
                                <div class="w-75 p-3 p-sm-4 dropdown-menu-right"> 
                                    <select class="form-control" name="role" id="role" value="{{old('role')}}"> 
                                        <option value="" name=" " id=" ">Select Role</option>
                                        <option value="Visitor">Visitor</option>
                                        <option value="Resident">Resident</option>
                                        <option value="PoolManager">Pool Manager</option>
                                        <option value="ApartmentManager">ApartmentManager</option>
                                        <option value="BuildingManager">Building Manager</option>
                                        <option value="GardenManager">Garden Manager</option>
                                        <option value="VisitorManager">Visitor Manager</option>
                                        <option value="SecurityManager">Security Manager</option>
                                        <option value="TennisManager">Tennis Manager</option>
                                        <option value="superAdmin">Super Admin</option>
                                    </select> 
                                    @if ($errors->has('role'))
                                <span class="field-error">{{ $errors->first('role') }}</span><br/>
                                @endif
                                </div> 
                                
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="w-75 p-3 p-sm-4">
                                    <input type="email" name="emailId" id="emailId1" value="{{old('emailId')}}" class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" />
                                        @if ($errors->has('emailId'))
                                <span class="field-error">{{ $errors->first('emailId') }}</span><br/>
                                @endif
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="w-75 p-3 p-sm-4">
                                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-lg"
                                        placeholder="Enter a valid password" />
                                        @if ($errors->has('password'))
                                <span class="field-error">{{ $errors->first('password') }}</span><br/>
                                @endif
                                </div>
                                
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-lg" name="submit" id="submit"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Sign Up">Sign Up</button>
                            </div>
                        </form>

                        <form id="myForm" style="display:none;">
                            <div class="field">
                            <label for="from_name">from_name</label>
                            <input type="text" name="from_name" value="Terrazas De Guacuco" id="from_name"/>
                            </div>
                            <div class="field">
                            <label for="emailId">to_name</label>
                            <input type="text" name="emailId"  id="emailId"/>
                            </div>
                            <div class="field">
                            <label for="message">message</label>
                            <input type="text" name="message" value="Account Created Successfully" id="message"/>
                            </div>
                            <div class="field">
                            <label for="reply_to">reply_to</label>
                            <input type="text" name="reply_to" value="terrazasdeguacuco24@gmail.com" id="reply_to"/>
                            </div>

                            <input type="submit" id="button" value="Send Email"/>
                        </form>


                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
                        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
                        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                        <script>
                            // var user_name = session('user_name');
                            $("#login-form").on("submit",function(e){
                                e.preventDefault();
                                document.getElementById("emailId").value = document.getElementById("emailId1").value;

                                console.log(document.getElementById("emailId").value)
                                emailjs.sendForm('service_wquxaj6', 'template_qcu1mjb', '#myForm', 'S2MqryOHc2tOUJdYj')
                                    .then((result) => {
                                        console.log(result);
                                    }, (error) => {
                                        console.log(error);
                                    });

                            })  
                           
                            
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="w3-padding w3-xxlarge w3-text-white"><i class="fa fa-instagram">&nbsp;&nbsp;</i><i
                class="fa fa-facebook">&nbsp;&nbsp;</i><i class="fa fa-twitter"></i></p>
                <ul>
                    <li><a href="/">HOME &nbsp; | &nbsp;</a></li>
                    <li><a href="/about">ABOUT &nbsp; | &nbsp;</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">BLOG &nbsp; | &nbsp;</a></li>
                    <li><a href="/contactus">CONTACT &nbsp; | &nbsp;</a></li>
                    <li><a href="/maps">LOCATIONS</a></li>
                </ul>
            <p> Terrazas de Guacuco @ 2023. All rights reserved</p>
        </div>
    </body>
</html>