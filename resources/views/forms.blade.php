<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Styles
        <style>
        </style> -->
    </head>
    <body>
        
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 navbar-dark bg-primary border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal text-white">TNM Tutorias</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-white " href="#">Features</a>
            </nav>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="btn btn-light" href="#">Cerrar sesion</a>
            </nav>        
        </div>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-12 col-md-3 col-lg-2   navbar navbar-expand-md   navbar-dark bg-dark   pt-md-3 pl-md-2 pl-xl-3   d-md-block"> <!-- d-flex -->
                <a class="navbar-brand" href="#">
                    <i class="fas fa-cog"></i> Nombre User
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse mt-md-1" id="sidebar">
                    <ul class="navbar-nav d-block mr-auto">
                    <li class="nav-item w-100 btn btn-dark text-left">
                        <a class="nav-link active" href="#">
                        Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item w-100 btn btn-dark text-left">
                        <a class="nav-link" href="#">
                        Orders
                        </a>
                    </li>
                    <li class="nav-item w-100 btn btn-dark text-left">
                        <a class="nav-link" href="#">
                        Orders
                        </a>
                    </li>
                    <li class="nav-item w-100 btn btn-dark text-left">
                        <a class="nav-link" href="#">
                        Orders
                        </a>
                    </li>
                    <li class="nav-item w-100 btn btn-dark text-left">
                        <a class="nav-link" href="#">
                        Orders
                        </a>
                    </li>
                    </ul>
                </div>
                </nav>

                <main role="main" class="col-12 col-md-9 col-lg-10 px-4">
                
                    <!-- Content  form-->
                    <hr>
                    <h3>Formulario X</h3>                    
                    <br>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                            <!-- end content -->       
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <hr>
                    <br><br><br><br>
                </main>
            </div>
        </div>
    </body>
</html>
