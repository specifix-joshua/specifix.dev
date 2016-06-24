@extends('layouts.master')

@section('title')
    About Us
@stop

@section('top-links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
@stop

@section('content')
    <div class="container aboutus">
    <div class="page-header">
    <h1>About Us <small>Specifix Founders</small></h1>
    </div>

    <div class="col-lg-4 col-md-4 col-xs-12">
        <div id="thumbnail">
            <div class = "caption profile-card">
                <div class="image-pic">
                    <img src="https://s3.amazonaws.com/alumni.codeup.com/andrew.jpg" alt="Andrew">
                </div>
                <h1>Andrew</h1>
                <h3>Full-Stack Developer</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                <p>
                <i class="fa fa-github-alt fa-2x" aria-hidden="true" id="githubIcon"></i>
                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true" id="linkedinIcon"></i>
                </p>
            </div>
        </div>
    </div>

<div class="col-lg-4 col-md-4 col-xs-12">
        <div id="thumbnail">
            <div class = "caption profile-card">
                <div class="image-pic">
                    <img src="https://s3.amazonaws.com/alumni.codeup.com/alex.jpg" alt="Alex">
                </div>
                <h1>Alex</h1>
                <h3>Full-Stack Developer</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                <p>
                <i class="fa fa-github-alt fa-2x" aria-hidden="true" id="githubIcon"></i>
                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true" id="linkedinIcon"></i>
                </p>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-xs-12">
        <div id="thumbnail">
            <div class = "caption profile-card">
                <div class="image-pic">
                    <img src="https://s3.amazonaws.com/alumni.codeup.com/kari.jpg" alt="Kari">
                </div>
                <h1>Kari</h1>
                <h3>Full-stack Developer</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                </p>
                <p>
                <i class="fa fa-github-alt fa-2x" aria-hidden="true" id="githubIcon"></i>
                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true" id="linkedinIcon"></i>
                </p>
            </div>
        </div>
    </div>      
</div>
@stop