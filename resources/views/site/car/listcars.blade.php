@extends('layout.sitelayout')

@section('content')
     <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">

                <h1 class="page-header">{{$company->name or ''}}   
                    <!-- <small>Subheading</small> -->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{URL::to(trim('  /  '))}}">Home</a>
                    </li>
                    <li class="active">{{$company->name or ''}}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Cars Row -->
        <div class="row">
            @foreach($specificCars as $specificCarsKey=>$specificCarsValue)
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">{{$specificCarsValue->name or ''}}</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            @endforeach
        </div>
        <!-- /.row -->
        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    {!! $specificCars->render() !!}
                </ul>
            </div>
        </div>
        <!-- /.row -->
    
@endsection