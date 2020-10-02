<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="./css/styles.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
     <title>TEAM-14</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="images/logo.png" height="60" width="50"></a>
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-info fa-lg"></span>Rules</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"></span>T&C</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>

            </ul>
            <span class="navbar-text">
                <a id="login">
                    <span class="fa fa-sign-in"></span>
                    Logout
                </a>
            </span>
            </div>
        </div>
    </nav>

    <div id="reservemodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload a file</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Student mail id</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Category select</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>Ctegory 1</option>
                            <option>Ctegory 2</option>
                            <option>Ctegory 3</option>
                            <option>Ctegory 4</option>
                            <option>Ctegory 5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect2">Request type</label>
                          <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <form>
                            <div class="custom-file">
                                <label for="fileselect">Request type</label>
                              <input type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </form>
                          
                          <script>
                          $(".custom-file-input").on("change", function() {
                            var fileName = $(this).val().split("\\").pop();
                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                          });
                          </script>

                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description ( optional )</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </form>
                      <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div id="loginModal" class="modal fade" role="dialsog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Logout</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        Are you sure you want to log out?
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Sign Out</button>        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <header class="jumbotron">
        <div class="container">
                <button class="col-12 align-self-center btn btn-block btn-sm btn-warning" id="reserveButton">

                        <strong>Upload file </strong>
                </button>
                </div>
            </div>
        </div>
    </header>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $("#reserveButton").click(function(){
                $("#reservemodal").modal();
            });

        $("#login").click(function(){
            $("#loginModal").modal();
        });
    </script>

    </body>
    </html>
