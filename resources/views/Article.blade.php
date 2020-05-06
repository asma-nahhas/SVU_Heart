@extends('layouts.app')

@section('content')



<!doctype html>
<html lang="en">
  <head>
    <title>SVU Heart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/side/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="css/jquery.dataTables.min.css" />

  </head>
  <body>
 @if(count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>

@endif

@if(\Session::has('success'))
<div  class="alert alert-success">
  <p>{{ \Session::get('success')}}</p>
</div>

@endif
        
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(img/admin_logo.jpg);"></div>
                    <h3>Admin Panel</h3>
                </div>
            </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{url('index')}}"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
            <a href="{{url('Article')}}"><span class="fa fa-sticky-note-o mr-3"></span>Manage Articles</a>
          </li>
          <li>
            <a href="{{url('Appointment')}}"><span class="fa fa fa-heartbeat  mr-3"></span> Appointments</a>
          </li>
          
          <li>
            <a href="{{url('about')}}"><span class="fa fa-info-circle mr-3"></span> About</a>
          </li>
          <li>
            <a href="{{url('contact')}}"><span class="fa fa-envelope mr-3"></span> Contact</a>
          </li>
        </ul>

        </nav>

        <!-- Page Content  -->




      <div id="content" class="p-4 p-md-5 pt-5">
       <h1> <center>Medical Article</center></h1>

        <br/>
        <br/>
        <br/>



            <table class="table  table-stripped" id="articleTable">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach(\App\Article::all() as $element)
                  <tr>
                  <td>{{$element->title}}</td>
                  <td>{{$element->body}}</td>
                  <td><img src="{{ URL::to('/') }}/img/blog/{{ $element->image }}" class="img-thumbnail" width="75" /></td> 
                  <td><button class="btn btn-success" data-toggle="modal" data-target="#editModalCenter"  onclick="updatefunc({{$element}})"><i class="fa fa-edit"></i></button></td> 
                  <td>
                  
                  <form action="{{url('Article',$element->id)}}" method="post">
                    {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                </form>

              </td>
                  </tr>   
                  @endforeach
                </tbody>
               

            </table>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
Add Article
</button>

<!--Start Add Modal-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Start Form Modal-->
  <form  action="{{  action('ArticleController@store') }}"  method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" aria-describedby="Name" placeholder="Enter Your Name">
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Article Body</label>
            <textarea  class="form-control" name="Body" placeholder="Enter Article Body"> </textarea> 
          </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Image </label>
            <input  type="file" class="form-control" name="Image" /> 
          </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

  </form>
                <!--End Form Modal-->

      </div>
    </div>
  </div>
</div>
<!--Finish Add Modal-->


<!--Start Edit Modal -->
<div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="editModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalCenterTitle">Edit Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Start Form Modal-->
  <form   id="editForm" method="post" enctype="multipart/form-data">
     {{ method_field('PUT') }}
       {{ csrf_field() }}
      <input type="hidden" class="form-control" name="editId" id="editId" >

          <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="editName" id="editName" aria-describedby="Name" placeholder="Enter Your Name">
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Article Body</label>
            <textarea  class="form-control" name="editBody" id="editBody" placeholder="Enter Article Body"> </textarea> 
          </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Image </label>
            <input  type="file" class="form-control" id="editImage" name="editImage" /> 
            <input type="hidden" id="editHiddenImage"  name="editHiddenImage"  />
          </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>

  </form>
                <!--End Form Modal-->

      </div>
    </div>
  </div>
</div>

<!--Finish Edit Modal-->



      </div>


      <!-- Page content end-->
        </div>
  </div>
</div>



 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="js/js/popper.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>




  </body>
</html>
       
  

    

    <script type="text/javascript">

      function updatefunc($element){

       /* alert($element["id"]);
        alert($element["image"]);
        alert($element["title"]);
        alert($element["body"]);*/

        $("#editId").val($element["id"]);
        $("#editName").val($element["title"]);
        $("#editBody").val($element["body"]);
        $("#editHiddenImage").val($element["image"]);

       $("#editForm").attr('action', '{{url("Article",'+$element["id"]+')}}');

        
       


      }

     function deletefunc($id){
      

              $("#deleteModalCenter").attr('action', '{{  url("Article.destroy",'+$id+') }}');

       


      }

  
        $(document).ready(function(){
       //   $('#articleTable').DataTable({});

              /*     $('#appointmentTable').DataTable({
                       processing: true,
                       serverSide: true,
                       ajax: { 
                        "type": "GET",
                       "url":"{{url('AppointmentCreate')}}"
                       ,
    error:function(jqXHR, exception){

        alert(exception);
              var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].'+ jqXHR.responseText;
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }

        console.log(msg);
    }
                    


                        },
                       columns: [
                                { data: 'name', name: 'name' },
                                { data: 'email', name: 'email' },
                                { data: 'password', name: 'password' }
                             ]
                    });

                 

*/
        });
    </script>
   

@endsection
