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
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

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
            @if (Auth::user()->name=="admin")
          <li>
            <a href="{{url('Article')}}"><span class="fa fa-sticky-note-o mr-3"></span>Manage Articles</a>
          </li>
          <li>
            <a href="{{url('Appointment')}}"><span class="fa fa fa-heartbeat  mr-3"></span> Appointments</a>
          </li>
          @endif
         @if (Auth::user()->name!="admin")
           <li>
            <a href="{{url('My_Appointment')}}"><span class="fa fa fa-heartbeat  mr-3"></span>My Appointments</a>
          </li>
          @endif
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
       <h1> <center>My Appointments</center></h1>

        <br/>
        <br/>
        <br/>

            <table class="table  table-stripped" id="articleTable">
                <thead>
                    <tr>
                        <th nowrap>Name</th>
                        <th nowrap>Email address</th>
                        <th nowrap>Phone Number</th>
                        <th nowrap>Address</th>
                        <th nowrap>Gender</th>
                        <th nowrap>Age</th>
                        <th nowrap>Chest Pain Type</th>
                        <th nowrap>Rest blood pressure</th>
                        <th nowrap>Max Heart Rate</th>
                        <th nowrap>Rest Electro</th>
                        <th nowrap>Exersize Angina</th>
                        <th nowrap>Blood sugar</th>
                        <th nowrap>AppDate</th>
                        <th nowrap>Note</th>
                        <th nowrap>Response</th>
                        <th nowrap>Update</th>
                        <th nowrap>Delete</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($data->all() as $element)
                  <tr>
                  <td>{{$element->name}}</td>
                  <td>{{$element->emailAddress}}</td>
                  <td>{{$element->address}}</td>
                  <td>{{$element->phoneNumber}}</td>
                  <td>{{$element->gender}}</td>
                  <td>{{$element->age}}</td>
                  <td>{{$element->chest_pain_type}}</td>
                  <td>{{$element->rest_blood_pressure}}</td>
                  <td>{{$element->max_heart_rate}}</td>
                  <td>{{$element->rest_electro}}</td>
                  <td>{{$element->exerscice_angina}}</td>
                  <td>{{$element->blood_sugar}}</td>
                  <td>{{$element->created_at}}</td>
                  <td>{{$element->note}}</td>
                  <td>{{$element->response}}</td>
                
                  <td><button class="btn btn-success" data-toggle="modal" data-target="#editModalCenter"  onclick="updatefunc({{$element}})"><i class="fa fa-edit"></i></button></td> 
                  <td>
                  
                  <form action="{{url('Appointment',$element->id)}}" method="post">
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
Add Appointment
</button>

<!--Start Add Modal-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Start Form Modal-->

  <form  action="{{  action('AppointmentController@store') }}"  method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
          <div class="form-group">
            <input type="text" class="form-control" name="Name" aria-describedby="Name" placeholder="Enter Your Name" required>
           
          </div>
          <div class="form-group">
            <input  class="form-control" name="emailAddress" placeholder="Enter Email Address" required/>  
          </div>

            <div class="form-group">
            <input  type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" value="" /> 
          </div>

              <div class="form-group">
            <input  type="text" class="form-control" name="address" placeholder="Address" value=""/> 
          </div>
           <br/>
              <div class="form-group">
       
             <select type="text" class="form-control" id="gender" name="gender"
                                        placeholder="Gender" required>
                                         <option value="F">Female</option>
                                        <option value="M">Male</option>
             </select>
              <br/>
            
          </div>
            <br/>
              <div class="form-group">
            <input  type="text" class="form-control" name="age" placeholder="Enter Your Age" /> 
          </div>
              <div class="form-group">
           
                <select id="chest_pain_type" name="chest_pain_type" class="form-control" id="chest_pain_type" >
                                       <option value="chest_pain_type">chest pain type</option>
                                        <option value="asympt">asympt</option>
                                        <option value="atyp_angina">atyp angina</option>
                                        <option value="non_anginal">non anginal</option>
                                        <option value="typ_angina">typ angina</option>
                                    </select>
           

                                    <br/>
                                    <br/>
          </div>
          <div class="form-group">
              <input  type="text" class="form-control" name="rest_blood_pressure" placeholder="Rest Blood Pressure" value="" required="" /> 


          </div>
              <div class="form-group">
            <input  type="text" class="form-control" name="max_heart_rate" placeholder="Max Heart rate" value="" required="" /> 
          </div>

              <div class="form-group">
               <select type="text" class="form-control" id="rest_electro" name="rest_electro" required>
                            <option value="">Rest Electro</option>
                            <option value="normal">normal</option>
                             <option value="left_vent_hyper">left ven hyper</option>
                             <option value="st_t_wave_abnormality">st_t_wave_abnormality</option>

                  </select>
          <br/>
          <br/>

          </div>
              <div class="form-group">
                   <select type="text" class="form-control" id="exerscice_angina" name="exerscice_angina" required>
                                         <option value="">Exercice Angina</option>
                                         <option value="Y">Yes</option>
                                        <option value="N">No</option>
                    </select>
          <br/>
          <br/>
          </div>
           <br/>
              <div class="form-group">
               <select type="text" class="form-control" id="blood_sugar" name="blood_sugar" required>
                        <option value="">Blood Sugar</option>
                        <option value="F">Yes</option>
                        <option value="M">No</option>
               </select>
          <br/>
          <br/>
          </div>
           
              <div class="form-group">
            <textarea type="text" class="form-control" name="note" placeholder="Note"> </textarea> 
          </div>
              <div class="form-group">
            <textarea  type="text" class="form-control" name="response" placeholder="Response"> </textarea> 
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
        <h5 class="modal-title" id="editModalCenterTitle">Edit Appointment</h5>
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
            <input type="text" class="form-control" name="editResponse" id="editResponse" aria-describedby="Response" placeholder="Enter Your Response">
           
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

 

        $("#editId").val($element["id"]);
        $("#editName").val($element["title"]);
        $("#editBody").val($element["body"]);
        $("#editHiddenImage").val($element["image"]);

       $("#editForm").attr('action', '{{url("Appointment",'+$element["id"]+')}}');

        
       


      }

     function deletefunc($id){
      

              $("#deleteModalCenter").attr('action', '{{  url("Article.destroy",'+$id+') }}');


      }

  
     
    </script>
   

@endsection
