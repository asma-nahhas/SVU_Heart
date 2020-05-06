
  @extends("Header")

  @section("content")

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


    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>Best Care &
                                Better Doctor</h1>
                            <p>
                            The best site for cardiac medical Appointments ... 
                            the safety of your heart is our goal</p>
                            <a href="#Appointment" class="btn_2">Make an Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
       <!--::SVU Team Members start::-->
    <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> SVU Team Members</h2>
                      </div>
                    </div>
                  </div>
                              <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/Asma.jpg" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="https://www.facebook.com/asas.asum"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Asma Nahhas</h3>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/ibrahim.jpg" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="https://www.facebook.com/ibrahim.arafeeh"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Ibrahim Arafeh</h3>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/Nour.jpg" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Nour Jaber</h3>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/team/haidar.jpg" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="https://www.facebook.com/haider.ibrahem.3229"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>Haidar Ibrahim</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

          </div>
        </section>

      <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Most Read Articles</h2>
              <a href="products.html">view all articles <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="img/blog/Heart_Blog_1.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('blog')}}"><h4>Your guide to lowering blood cholesterol</h4></a>
                <p>
                    Cholesterol is a waxy substance that accumulates on the walls of the arteries and plays an important role in the formation of hormones and vitamin D</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="img/blog/Heart_Blog_2.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('blog')}}"><h4>Healthy food for heart patients</h4></a>
                <p>
                   There may be beneficial foods for heart patients, and other foods harmful for heart patients, but a healthy diet for heart patients and heaslth day style...</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (21) </span>
               
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="img/blog/Heart_Blog_3.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('blog')}}"><h4>Methods for diagnosing heart diseases</h4></a>
                <p>
                    The heart is the most important organ of the human body, so stopping it from working leads to the cessation of the entire life from the body. Therefore, it is necessary to constantly check the heart.
            </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="img/blog/Heart_Blog_4.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('blog')}}"><h4>Food that strengthens the heart muscle</h4></a>
                <p>
                    There are some foods that strengthen the heart and improve its work due to the presence of some important nutrients for cardiovascular health. heart and brain diseases.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="img/blog/Heart_Blog_5.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('blog')}}"><h4>Tips for diabetics to prevent heart disease</h4></a>
                <p>Most people with diabetes are afraid of blindness or gangrene, which is one of the complications of diabetes, but the greatest risk of complications from diabetes is heart and brain diseases.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>

                </ul>
                <span>Reviews (16)</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="img/blog/Heart_Blog_6.jpg" alt=""></a>
              <div class="down-content">
                <a href="{{url('blog')}}"><h4>The advantages and risks of X-ray imaging</h4></a>
                <p>
                    There are many advantages to MRI diagnostics and heart imaging compared to other methods of cardiac imaging such as ultrasound or CT scan. The magnetic resonance imaging of the heart .</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>About us</h2>
                        <p>SVU Heart Heart Disease Appointments Website </p>
                        <a class="btn_2 " href="#about_us">learn more</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="img/icon/banner_1.svg" alt="">
                                <h5>Emergency</h5>
                            </div>
                            <div class="single_item">
                                <img src="img/icon/banner_2.svg" alt="">
                                <h5>consultation</h5>
                            </div>
                            <div class="single_item">
                                <img src="img/icon/banner_3.svg" alt="">
                                <h5>Qualfied</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4>Heart Functions</h4>
                            <p>Information about the heart and its functions</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4>Various heart diseases</h4>
                            <p>Various heart diseases with advises and clever appointment system</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4>Healthy Food</h4>
                            <p>Healthy nutrition for heart patients</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4>Methods of treatment</h4>
                            <p>Methods of treatment of heart diseases by leader experts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Heart Diseases</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Heart clot</h4>
                                            <p>Symptoms of cardiac arrest occur suddenly and quickly, as these symptoms include the following: vertigo, sudden fainting, no pulse, no breathing, no response, inability to speak, symptoms before cardiac arrest. Some symptoms may occur before cardiac arrest.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Pulmonary artery hypertension</h4>
                                            <p>
                                            Pulmonary artery disease is a high blood pressure that affects the lung arteries on the right side of the heart. The high pressure of the pulmonary artery leads to some symptoms, such as shortness of breath, dizziness, fainting, and swollen legs, along with some other symptoms.
                                                </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Arteriosclerosis</h4>
                                            <p>Treatment of atherosclerosis can include changing lifestyle and getting some medications or treatment interventions which are non-surgical methods or even surgeries. Go here, if you want to know first information about atherosclerosis.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Narrowing of the coronary artery</h4>
                                            <p>
                                            Coronary artery stenosis is caused by a narrowing of the inner muscles of the arteries in the heart. Due to the narrowing of the coronary artery, the blood cannot pass through the blood vessels, so the heart does not get its need of oxygenated blood. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->


    <!--::doctor_part start::-->
    <section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Experienced Doctors</h2>
                        <p>The world's leading cardiologists will answer your questions</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/doctor_1.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Adam Smith</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/doctor_4.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Jon Bush</h3>
                                <p>Medicine specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/doctor_2.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Fred Macyard</h3>
                                <p>CHeart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/doctor/doctor_3.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Justin Stuard</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

    <!--::Consultation_part start::-->
    <section id="Appointment" class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form  name="AppointmentForm"  id="AppointmentForm" action="{{  action('AppointmentController@store2') }}" onsubmit="return getResult(event)" method="POST" >
                            {{ csrf_field() }}
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Name"  required >
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="mail" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email address" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" 
                                        placeholder="Phone Number" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="address" name="address" 
                                        placeholder="Address" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="gender" name="gender" 
                                        placeholder="Gender" required>
                                         <option value="F">Female</option>
                                        <option value="M">Male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="mail" class="form-control" id="age" name="age" 
                                        placeholder="Age" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <select id="method"class="form-control" name="method" required>
                                        <option value="Expert">Expert Response</option>
                                        <option value="Byes">Byes Algorithm</option>
                                        <option value="ID3">ID3 Algorithm</option>
                                    </select>
                                </div>

                               <div class="form-group col-md-6">
                                    <select id="chest_pain_type"class="form-control" name="chest_pain_type" required>
                                       <option value="chest_pain_type">chest pain type</option>
                                        <option value="asympt">asympt</option>
                                        <option value="atyp_angina">atyp angina</option>
                                        <option value="non_anginal">non anginal</option>
                                        <option value="typ_angina">typ angina</option>
                                    </select>
                                </div>

                                <div class="form-group time_icon col-md-6">
                                    <input class="form-control" type="Number" placeholder="Rest Blood Pressure" id="rest_blood_pressure" name="rest_blood_pressure" />
                                </div>
                                
                               <div class="form-group time_icon col-md-6">
                                    <input class="form-control" type="Number" placeholder="Max heart rate" id="max_heart_rate" name="max_heart_rate" />
                                </div>
                                
                                     <input class="form-control" type="hidden"  id="response" name="response" />


                                 <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="rest_electro" name="rest_electro" 
                                         required>
                                         <option value="">Rest Electro</option>
                                         <option value="normal">normal</option>
                                        <option value="left_vent_hyper">left ven hyper</option>
                                        <option value="st_t_wave_abnormality">st_t_wave_abnormality</option>

                                    </select>
                                </div>

                                 <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="exerscice_angina" name="exerscice_angina" 
                                         required>
                                         <option value="">Exercice Angina</option>
                                         <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

  
                             <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="blood_sugar" name="blood_sugar" 
                                         required>
                                         <option value="">Blood Sugar</option>
                                         <option value="TRUE">Yes</option>
                                        <option value="FALSE">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="note" name="note" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <!-- Start captcha-->
                            <div  class="form-group col-md-4">
                                         <div class="captcha">
                                        <span>{!! captcha_img()!!}</span>
                                        <button onclick="refreshCap();" type="button" class="btn btn-info btn-refresh"><i class="fa fa-refresh"></i></button>


                                      </div>
                                      <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" />
                                      @if($errors->has('captcha'))
                                        <span  class="اhelp-block">
                                          <strong>{{$errors->first('captcha')}}</strong>
                                        </span>
                                      @endif
                                          </div>
                            <!-- End Captcha-->
                            <div class="regerv_btn">
                              <input type="submit" name="submit" class="btn_1"  id="AppBut"  value="Make an Appointment" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="img/reservation.png" alt="" class="reservation_img_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::Consultation_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="{{ url('blog')}}">
                                    <h5 class="card-title">
                                        Symptoms and diagnosis of narrow coronary arteries </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Asma Nahhas</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="{{ url('blog')}}">
                                    <h5 class="card-title">
                                                    Symptoms and diagnosis of narrow coronary arteries </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>Asma Nahhas</li>
                                    <li> <span class="ti-bookmark"></span>Clinic, doctors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->



        @endsection

        @extends("Footer")

<script type="text/javascript">
  
  function   makeAppointment(){


   $.ajax({

    type:'POST',
    url:'/my-captcha-post',
    data: {
        "_token": "{{ csrf_token() }}",
        "captcha": $("#captcha").val()
        },
    success:function(data){

      alert("success"+data);

    },
    error:function(jqXHR, exception){

              var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }

        alert(msg);
    }

   });
  
  }
 function  refreshCap(){
  
   $.ajax({

    type:'GET',
    url:'/refresh-captcha',
    success:function(data){

      $(".captcha span").html(data.captcha);

    },
    error:function(jqXHR, exception){

              var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }

        alert(msg);
    }

   });

  }


  function getResult(event){

    var age=$("#age").val();
    var method=$("#method").val();
    var chest_pain_type=$("#chest_pain_type").val();
    var rest_blood_pressure=$("#rest_blood_pressure").val();
    var blood_sugar=$("#blood_sugar").val();
    var rest_electro=$("#rest_electro").val();
    var max_heart_rate=$("#max_heart_rate").val();
    var exercice_angina=$("#exerscice_angina").val();


   if(method!='Expert'){
   event.preventDefault();


       $.ajax({

    type:'GET',
    header:{'Access-Control-Allow-Origin':'*'},
    //url:'http://127.0.0.1:5000/result',
    url:'https://dry-beach-77682.herokuapp.com/result',
    data: {
      age: age,
      method:method,
      chest_pain_type:chest_pain_type,
      rest_blood_pressure:rest_blood_pressure,
      blood_sugar:blood_sugar,
      rest_electro:rest_electro,
      max_heart_rate:max_heart_rate,
      exercice_angina:exercice_angina
    },
    success:function(data){



      if(data=='negative'){
    

                 swal("Result By Selected Algorithm", ", Your heart is good , stay at home :) ", "success");
                $("#response").val("Your heart is good , stay at home :) ");
            }
      else
      {
               swal("Result By Selected Algorithm", ", Your heart is tired, you need to consult a doctor", "warning");
              $("#response").val("Your heart is tired, you need to consult a doctor");

        }


    },
    error:function(jqXHR, exception){

              var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.'+ jqXHR.responseText;
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }

        alert(msg);
    }
  });

     }


  }

</script>