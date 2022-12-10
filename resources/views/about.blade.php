@extends('layouts.app')

@section('content')
<div class="container marketing">
    <!-- Three columns of text below the carousel -->



    <!-- START THE FEATURETTES -->

    {{-- <hr class="featurette-divider"> --}}

    <div class="row featurette mt-4">
    <div class="col-md-7">
        {{-- <h2 class="featurette-heading fw-normal lh-1">Welcome to our Mac Kaon Foodhub <span class="text-muted">It’ll blow your mind.</span></h2> --}}
        <h2 class="featurette-heading fw-normal lh-1">Mac Kaon Foodhub</h2>
        <p class="lead">Mac Kaon FoodHub is owned by Mr. Mark James Lofranco Estose, which is located at Poblacion, Danao, Bohol</p>
    </div>
    <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{asset('/dist/img/mackaon.jpg')}}" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" style="height: 300px;width:900px"/>

    </div>
    </div>

    {{-- <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
    </div>
    <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
    </div> --}}

    {{-- <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

    </div>
    </div> --}}

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    <div class="container">
        <div class="col-md-8">
            <h2>Developers</h2>
        </div>
        <div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-10">
            <img class="bd-placeholder-img rounded-circle mt-2" width="140" height="140" src="{{asset('/dist/img/developers/eddie.jpg')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

            <h5 class="fw-normal">Eddie Gingco</h5>
            <p>Mater Dei College</p>
            <p><a class="btn btn-primary" href="https://web.facebook.com/eddiegingco.3">Facebook &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-md-2 col-10">
            <img class="bd-placeholder-img rounded-circle mt-2" width="140" height="140" src="{{asset('/dist/img/developers/julius.jpg')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

            <h5 class="fw-normal">Julius Jess Estose</h5>
            <p>Mater Dei College</p>
            <p><a class="btn btn-primary" href="https://web.facebook.com/yoozzs2c">Facebook &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2 col-10">
            <img class="bd-placeholder-img rounded-circle mt-2" width="140" height="140" src="{{asset('/dist/img/developers/cary.jpg')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

            <h5 class="fw-normal">Cary Huit</h5>
            <p>Mater Dei College</p>
            <p><a class="btn btn-primary" href="https://web.facebook.com/cary.huit">Facebook &raquo;</a></p>
            {{-- <p><a class="btn btn-primary" href="https://web.facebook.com/yanyan.loresca.5">Facebook &raquo;</a></p> --}}
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2 col-10">
            <img class="bd-placeholder-img rounded-circle mt-2" width="140" height="140" src="{{asset('/dist/img/developers/edwin.jpg')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

            <h5 class="fw-normal">Edwin Buscabus</h5>
            <p>Mater Dei College</p>
            <p><a class="btn btn-primary" href="https://web.facebook.com/edwinbuscabus.amoy">Facebook &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2 col-10">
            <img class="bd-placeholder-img rounded-circle mt-2" width="140" height="140" src="{{asset('/dist/img/developers/adrian.jpg')}}" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>

            <h5 class="fw-normal">Adrian Loresca</h5>
            <p>Mater Dei College</p>
                <p><a class="btn btn-primary" href="https://web.facebook.com/yanyan.loresca.5">Facebook &raquo;</a></p>
        {{-- <p><a class="btn btn-primary" href="https://web.facebook.com/cary.huit">Facebook &raquo;</a></p> --}}
        </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div>
</div>

</div><!-- /.container -->
@endsection
