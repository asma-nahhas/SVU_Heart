
  @section("content")

    <!--::Consultation_part start::-->
    <section class="section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                       
                    	<form  method="post" action="{{route('myCaptchaPost')}}">
                    		<div class="form-group">
                    			<input type="text" name="text">
                    		</div>
                    		<div class="captcha">
                    			<span>{!! captcha_img()!!}</span>
                    			<button type="button" class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></button>


                    		</div>
                    		<input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" />
                    		@if($errors->has('captcha'))
                    			<span  class="اhelp-block">
                    				<strong>{{$errors->first('captcha')}}</strong>
                    			</span>
                    		@endif
                    		<input type="submit" name="submit" class="form-control">
                    	</form>


                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::Consultation_part end::-->


        @endsection

        @extends("Footer")