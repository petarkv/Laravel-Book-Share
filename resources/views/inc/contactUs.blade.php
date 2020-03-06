<div id="leftcolumn" style="min-height: 850px">

    <div class="contact1" style="min-height: 800px">
        <div class="container-contact1" style="min-height: 800px">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="{{asset('/storage/images/contactus.png')}}" alt="IMG">
            </div>

            <form action="/contact" method="post" class="contact1-form validate-form">
				<span class="contact1-form-title">
					Get in touch
				</span>

                @if($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
                @endif

                <div class="wrap-input1 validate-input" data-validate = "Name is required">
                    <input class="input1" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email" value="{{old('email')}}">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
                    <input class="input1" type="text" name="subject" placeholder="Subject" value="{{old('subject')}}">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Message is required" >
                    <textarea class="input1" name="message" placeholder="Message">{{old('message')}}</textarea>
                    <span class="shadow-input1"></span>
                </div>

                @csrf

                <div class="container-contact1-form-btn">
                    <button type="submit" class="btn btn-primary">
						<span>
							Send Message
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!--===============================================================================================-->

    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <!--===============================================================================================-->
    <script src="{{asset('js/app.js')}}"></script>

</div>
