<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>users</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
</head>
<body>
    
    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-6">
                  <div class="card">
                      <div class="card-header bg-primary text-white">Add new user</div>
                      <div class="card-body">
                          <form action="{{route('save.user')}}" method="post" enctype="multipart/form-data" id="form">
                            @csrf
                            <!-- 
                                
*   name
*   campus
*   faculty
*   controlNumber
*   email
*   picture
                            -->
                              <div class="form-group">
                                  <label for="">user name</label>
                                  <input type="text" name="name" class="form-control" placeholder="Enter user name">
                                  <span class="text-danger error-text name_error"></span>
                              </div>
                              <div class="form-group">
                                  <label for="">user campus</label>
                                  <input type="text" name="campus" class="form-control" placeholder="Enter user campus">
                                  <span class="text-danger error-text campus"></span>
                              </div>
                              <div class="form-group">
                                  <label for="">user faculty</label>
                                  <input type="text" name="faculty" class="form-control" placeholder="Enter user faculty">
                                  <span class="text-danger error-text faculty_error"></span>
                              </div>
                              <div class="form-group">
                                  <label for="">user controlNumber</label>
                                  <input type="text" name="controlNumber" class="form-control" placeholder="Enter user controlNumber">
                                  <span class="text-danger error-text controlNumber_error"></span>
                              </div>
                              <div class="form-group">
                                  <label for="">user email</label>
                                  <input type="text" name="email" class="form-control" placeholder="Enter user email">
                                  <span class="text-danger error-text email_error"></span>
                              </div>

                              <div class="form-group">
                                  <label for="">user image</label>
                                  <input type="file" name="picture" class="form-control">
                                  <span class="text-danger error-text picture_error"></span>
                              </div>
                              <div class="img-holder"></div>
                              <button type="submit" class="btn btn-primary">Save user</button>
                          </form>
                      </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">All users</div>
                    <div class="card-body" id="AllUsers">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('jquery.min.js')}}"></script>
    <script>
        $(function(){

            $('#form').on('submit', function(e){
                e.preventDefault();

                var form = this;
                $.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:new FormData(form),
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        $(form).find('span.error-text').text('');
                    },
                    success:function(data){
                        if(data.code == 0){
                            $.each(data.error, function(prefix,val){
                                $(form).find('span.'+prefix+'_error').text(val[0]);
                            });
                        }else{
                            $(form)[0].reset();
                            // alert(data.msg);
                            fetchAllUsers();
                        }
                    }
                });
            });

            //Reset input file
            $('input[type="file"][name="picture"]').val('');
            //Image preview
            $('input[type="file"][name="picture"]').on('change', function(){
                var img_path = $(this)[0].value;
                var img_holder = $('.img-holder');
                var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();

                if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
                    if(typeof(FileReader) != 'undefined'){
                        img_holder.empty();
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('<img/>',{'src':e.target.result,'class':'img-fluid','style':'max-width:100px;margin-bottom:10px;'}).appendTo(img_holder);
                        }
                        img_holder.show();
                        reader.readAsDataURL($(this)[0].files[0]);
                    }else{
                        $(img_holder).html('This browser does not support FileReader');
                    }
                }else{
                    $(img_holder).empty();
                }
            });

            //Fetch all users
            fetchAllUsers();
            function fetchAllUsers(){
                $.get('{{route("fetch.users")}}',{}, function(data){
                     $('#AllUsers').html(data.result);
                },'json');
            }
    
        })
    </script>
</body>
</html>