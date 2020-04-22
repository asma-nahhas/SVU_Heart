  @extends("Header")

  @section("content")

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>doctors</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::doctor_part start::-->
    <section class="doctor_part single_page_doctor_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Experienced Doctors</h2>
                        <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
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
                                <h3>DR Adam Billiard</h3>
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
                                <h3>DR Adam Billiard</h3>
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
                        <form  name="AppointmentForm"  id="AppointmentForm" onsubmit="makeAppointment()">
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="NameInfo" placeholder="Name" 
                                    required >
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="mail" class="form-control" id="mailInfo"
                                        placeholder="Email address" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="phoneNumberInfo"
                                        placeholder="Phone Number" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="addressInfo"
                                        placeholder="Address" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="genderInfo"
                                        placeholder="Gender" required>
                                         <option value="F">Female</option>
                                        <option value="M">Male</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="mail" class="form-control" id="AgeInfo"
                                        placeholder="Age" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <select id="predMethodInfo"class="form-control" id="Select" required>
                                        <option value="Expert">Expert Response</option>
                                        <option value="Byes">Byes Algorithm</option>
                                        <option value="ID3">ID3 Algorithm</option>
                                    </select>
                                </div>

                               <div class="form-group col-md-6">
                                    <select id="chestPainTypeInfo"class="form-control" id="Select" required>
                                       <option value="chest_pain_type">chest pain type</option>
                                        <option value="asympt">asympt</option>
                                        <option value="atyp_angina">atyp angina</option>
                                        <option value="non_anginal">non anginal</option>
                                        <option value="typ_angina">typ angina</option>
                                    </select>
                                </div>

                                <div class="form-group time_icon col-md-6">
                                    <input class="form-control" type="Number" placeholder="Rest Blood Pressure" id="restBloodPressureInfo" />
                                </div>
                                
                               <div class="form-group time_icon col-md-6">
                                    <input class="form-control" type="Number" placeholder="Max heart rate" id="maxHeartRateInfo" />
                                </div>

                                 <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="restElectroInfo"
                                         required>
                                         <option value="">Rest Electro</option>
                                         <option value="normal">normal</option>
                                        <option value="left_vent_hyper">left ven hyper</option>
                                        <option value="st_t_wave_abnormality">st_t_wave_abnormality</option>

                                    </select>
                                </div>

                                 <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="exerciceAnginaInfo"
                                         required>
                                         <option value="">Exercice Angina</option>
                                         <option value="Y">Yes</option>
                                        <option value="N">No</option>
                                    </select>
                                </div>

  
                             <div class="form-group col-md-6">
                                    <select type="text" class="form-control" id="bloodSugarInfo"
                                         required>
                                         <option value="">Blood Sugar</option>
                                         <option value="F">Yes</option>
                                        <option value="M">No</option>
                                    </select>
                                </div>

                                <div class="form-group time_icon col-md-6">
                                    <input class="form-control" type="date" id="appDATEInfo" />
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
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
                              <input type="submit" name="submit" class="btn_1"  id="AppBut" value="Make an Appointment" />
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
        @endsection

        @extends("Footer")