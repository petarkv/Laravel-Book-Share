<!doctype html>
<html lang="en">
<head>
    <title>Upload Book</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />

    <!-- Menu Bar -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>

    <!-- Upload Books -->
    <!--   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

    <!-- ---------------------------------------------------------------------------------------------------------- -->
    <!--   <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- ---------------------------------------------------------------------------------------------------------- -->

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

</head>
<body>

<!-- Begin Header -->
<header>
    <div><h1>Book Share Online Community</h1></div>
</header>
<!-- End Header -->

<!-- Begin Wrapper -->
<div id="wrapper">

    <!-- Begin Navigation -->
    <div id="navigation">

        <div id='cssmenu'>
            <ul>
                <li><a href='/contact'>Contact</a></li>
                <li><a href='/about'>About Us</a></li>
                <li><a href='/books'>Books</a></li>
                <li class='active'><a href='/'>Home</a></li>
            </ul>
        </div>

    </div>
    <!-- End Navigation -->


    <!-- Begin Left Column -->
    <div id="registration">

        <div class="container">

            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif

            <form class="form-horizontal" role="form" action="{{route('uploadbooks')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <h2>Upload Book</h2>
                <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Book Title*</label>
                    <div class="col-sm-9">
                        <input type="text" id="title" name="title" value="{{old('title')}}" placeholder="Book Title" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="author" class="col-sm-3 control-label">Author</label>
                    <div class="col-sm-9">
                        <input type="text" id="author" name="author" value="{{old('author')}}" placeholder="Author" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="publisher" class="col-sm-3 control-label">Publisher</label>
                    <div class="col-sm-9">
                        <input type="text" id="publisher" name="publisher" value="{{old('publisher')}}" placeholder="Publisher" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="genre" class="col-sm-3 control-label">Genre</label>
                    <div class="col-sm-9">
                        <select id="cmbGenre" name="genre">
                            <option value=""></option>
                            <option value="">Drama</option>
                            <option value="">SF</option>
                            <option value="">History</option>
                            <option value="">Music</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="about_book" class="col-sm-3 control-label">About Book</label>
                    <div class="col-sm-9">
                        <textarea name="about_book" rows="4" cols="58" placeholder="Write Something About Book.."></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bookcover" class="col-sm-3 control-label">Book Cover</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" name= "bookcover">
                    </div>
                </div>

                <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Upload Book</button>
            </form> <!-- /form -->

        </div> <!-- ./container -->

        <script src="{{asset('js/app.js')}}"></script>
        <!--         <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

    </div>
    <!-- End Left Column -->



</div>
<!-- End Wrapper -->

<!-- Begin Footer -->
<footer>
    <div> Book Share Online Community, Copyright &copy; 2020 </div>
</footer>
<!-- End Footer -->

</body>
</html>



<style>

#registration{
    min-height: 700px;
}

#cmbGenre{
    width: 400px;
    height: 40px;
    border-radius: 0.3em;
}

</style>