@extends('layouts.app')

@section('content')



<!doctype html>

        
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
        <h2 class="mb-4">About Heart</h2>
         <div class="col-md-8">
            <div class="product-item">
              <a href="#"><img src="img/Heart_Health.jpg" alt=""></a>
              <div class="down-content">
                <h4>Heart Health</h4>
                <p>
                   The heart beats about 2.5 billion times over the average lifetime, pushing millions of gallons of blood to every part of the body. This steady flow carries with it oxygen, fuel, hormones, other compounds, and a host of essential cells. It also whisks away the waste products of metabolism. When the heart stops, essential functions fail, some almost instantly.
                    </p>
                    <p>
                    Given the heart's never-ending workload, it's a wonder it performs so well, for so long, for so many people. But it can also fail, brought down by a poor diet and lack of exercise, smoking, infection, unlucky genes, and more.

                    A key problem is atherosclerosis. This is the accumulation of pockets of cholesterol-rich gunk inside the arteries. These pockets, called plaque, can limit blood flow through arteries that nourish the heart — the coronary arteries — and other arteries throughout the body. When a plaque breaks apart, it can cause a heart attack or stroke.</p>
            
              </div>
            </div>
          </div>
      </div>
        </div>
  </div>
</div>
    <script src="js/js/jquery.min.js"></script>
    <script src="js/js/popper.js"></script>
    <script src="js/js/bootstrap.min.js"></script>
    <script src="js/js/main.js"></script>
  </body>
</html>
       
  


@endsection
