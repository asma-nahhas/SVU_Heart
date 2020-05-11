

  @section("content")

    <!--::Consultation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>Make an Consultation</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>Prediction Method</option>
                                        <option value="2">Using Expert</option>
                                        <option value="3">Byes Algorithm</option>
                                        <option value="4">ID3 Algorithm</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="btn_2">Make an Appointment</a>
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