<!DOCTYPE html>
<html lang="en">
    <head>
        <title itemprop="name">Chat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/chat.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.6.1/socket.io.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <style type="text/css">
            
                body {
                    margin-top: 20px;
                    
            background: url('../images/chatbot.webp') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            font-family: sans-serif;
        }
        .check {
                display: flex;
                flex-direction: column;
                min-height: 80vh;
            }
            </style>
    </head>
    <body>
    <div class="check">
    <nav class="nav-bar">
        <div class="project-title-name"><a href="index.html">Terrazas de Guacuco</a></div>
        <div class="nav-bar-pages">
        <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    @if(session('user_role') == '')
                    <li><a href="/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "PoolManager")
                    <li><a href="/poolManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "Visitor")
                    <li><a href="/VisitorServices/visitorServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "Resident")
                    <li><a href="/resident/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "ApartmentManager")
                    <li><a href="/apartmentManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "GardenManager")
                    <li><a href="/gardenManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "VisitorManager")
                    <li><a href="/VisitorManagerServices/visitorManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "superAdmin")
                    <li><a href="/SuperAdminServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "SecurityManager")
                    <li><a href="/SecurityManagerServices/securityManagerServices">Services</a></li>
                    @endif
                    @if(session('user_role') == "TennisManager")
                    <li><a href="/tennisManager/services">Services</a></li>
                    @endif
                    @if(session('user_role') == "BuildingManager")
                    <li><a href="/buildingManager/buildingManagerServices">Services</a></li>
                    @endif
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    @if(session('user_role') == '')
                    <li><a href="/register">Register/Login</a></li>
                    @endif
                    @if(session('user_role') != '')
                    <li><a href="/login">Logout</a></li>
                    @endif
                </ul>
        </div>
    </nav>
<br/><br/>
        <div id="snippetContent"  > 
            <main class="content" style=" height:95vh" >
                <div class="container p-0"> 
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-12 col-lg-6 col-xl-3 border-right"> 
                            @foreach($RegisteredUser as $user)
                                <a href="/chatbot/userChat?name={{$user->name}}" class="list-group-item list-group-item-action border-0">
                                    <div class="d-flex align-items-start" >
                                        <div class="flex-grow-1 ml-3">
                                        {{$user->name}}
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                <hr class="d-block d-lg-none mt-1 mb-0" />
                            </div>
                            <div class="col-12 col-lg-7 col-xl-9">
                            @if($userPresent)
                                <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                    <div class="d-flex align-items-center py-1">
                                       
                                        <div class="flex-grow-1 pl-3">
                                        <strong>{{$userPresent}}</strong>
                                           
                                        </div> 
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <div class="chat-func p-4">
                                    @if(!empty($userMessages))
                                        @foreach($userMessages as $msg)
                                        @if($msg->senderName == session('user_name'))
                                        <div class="chat-func-right pb-4">
                                            
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3" id="msg">
                                              
                                                {{$msg->message}}
                                            </div>
                                        </div>
                                        @else
                                        <div class="chat-func-left pb-4">
                                            <div>
                                                
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3" id="msg">
                                               
                                                {{$msg->message}}
                                            </div>
                                        </div>
                                        @endif 
                                        @endforeach
                                    @endif 
                                    </div>
                                </div>
                                <div class="flex-grow-0 py-3 px-4 border-top">
                                    <form id="msgForm">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="msgInputVal" placeholder="Type your message" /> 
                                            <button class="btn btn-info" type="submit">Send</button>
                                        </div>
                                    </form>
                                </div>
                                @else

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </main> 
        </div>
        <br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>
    </div>
       
        <div class="footer">
        <p class="w3-padding w3-xxlarge w3-text-white">
            <i class="fa fa-instagram">&nbsp;&nbsp;</i><i
                class="fa fa-facebook">&nbsp;&nbsp;</i><i class="fa fa-twitter"></i></p>
        <ul>
            <li><a href="index.html">HOME &nbsp; | &nbsp;</a></li>
            <li><a href="About.html">ABOUT &nbsp; | &nbsp;</a></li>
            <li><a href="#">BLOG &nbsp; | &nbsp;</a></li>
            <li><a href="contactUs.html">CONTACT &nbsp; | &nbsp;</a></li>
            <li><a href="Maps/maps.html">LOCATIONS</a></li>
        </ul>
        <p> Terrazas de Guacuco @ 2023. All rights reserved</p>
    </div>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script>
            $(function(){
                
                let user_name = {!! json_encode(session('user_name')) !!};
                let recieverName = '{{($userPresent)?$userPresent:''}}';
                let idCheck = user_name + recieverName;
                var socket = io("http://localhost:3000/",{query:{user_name:user_name}});

                $("#msgForm").on("submit",function(e){
                    e.preventDefault();
                    var msgInputVal = $("#msgInputVal").val();
                    if(msgInputVal.trim().length == 0){
                        $("#msgInputVal").focus();
                    }else{
                        var data = {
                            senderName:user_name,
                            recieverName:recieverName,
                            message:msgInputVal,
                            idCheck:idCheck.split('').sort().join('')
                        }
                        socket.emit('send_message',data);
                        $("#msgInputVal").val('');
                    }
                })
                socket.on('connectedUser', function(data){
                    console.log("connected yahoooo")
                })
                socket.on('disconnected', function(data){
                    console.log("disconnected sad")
                })
            })
            
        </script>
    </body>
</html>
