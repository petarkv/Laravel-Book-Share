<!-- Begin Newsletter -->

<div>


    <form method="post" action="{{url('newsletter/send')}}">
        {{csrf_field()}}
        <div class="containernewsletter">
            <h2>Subscribe to our Newsletter</h2>
            <p>Lorem ipsum text about why you should subscribe to our newsletter blabla. Lorem ipsum text about why you should subscribe to our newsletter blabla.</p>
        </div>

        <div class="containersub">

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>
            @endif

            <label for="name">Your Name:</label>
            <input id="subscribe" type="text" placeholder="Name" name="name" value="{{old('name')}}">


            <label for="email" style="margin-left: 10px;">Your E-Mail:</label>
            <input id="subscribe" type="text" placeholder="Email address" name="email">

            <input id="subscribe" type="submit" name="subscribe" value="Subscribe" class="btn btn-info">
        </div>

    </form>

</div>

<style>

    body {font-family: Arial, Helvetica, sans-serif;}

    form {
        border: 3px solid #f1f1f1;
        font-family: Arial;
    }

    .containernewsletter {
        margin-top: 15px;
        padding: 20px;
        background-color: #c0c0c0;
        border: 2px solid;
    }

    .containersub {
        margin-top: 5px;
        padding: 10px;
        background-color: white;
        display: inline-block;
    }

    #subscribe[type=text], #subscribe[type=submit] {
        width: 300px;
        padding: 12px;
        margin: 8px 0;
        margin-left: 20px;
        /*display: inline-block;*/
        border: 1px solid #ccc;
        box-sizing: border-box;
        /*display: inline;*/
    }

    #subscribe[type=checkbox] {
        margin-top: 16px;
    }

    #subscribe[type=submit] {
        background-color: #4CAF50;
        color: white;
        border: none;
        /*display: inline;*/
    }

    #subscribe[type=submit]:hover {
        opacity: 0.8;
    }

    input[type=checkbox] {
        margin-top: 16px;
        margin-left: 20px;
        display: inline;
    }

</style>

<!-- End Newsletter -->
