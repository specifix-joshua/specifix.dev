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
                <p>Andrew is a full-stack web developer with 5 years of marketing and project management experience. Prior to coding, he worked as a marketer and project manager for ticket companies Best Tickets and SeatSmart. Andrew's love for product development and project management helps him write code efficiently and with purpose.</p>
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
                <p>Contrary to popular belief Alex is not some random programmer he has a family and he has roots in Texas and maybe Mexico maybe not. Alex is a 27 year old person of moderate interest with 3 daughters and very few hobbies other than coding.</p>
                <p>
                <a href="https://github.com/garridoalex77"><i class="fa fa-github-alt fa-2x" aria-hidden="true" id="githubIcon"></i></a>
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
                <p>I am a 22 year old living in Texas who is looking to transition into the world of web development. I started my coding journey fairly recently, in March 2016. Prior to this I had been attending community college while working part time in the food service industry.
                I learned to code by attending an intense 16-week program where I learned to build websites and web applications at a rapid pace. It has been one of the most rewarding things I have done for myself. I love to code, and I will continue learning and growing.
                </p>
                <p>
                <a href="https://github.com/enyakarina"><i class="fa fa-github-alt fa-2x" aria-hidden="true" id="githubIcon"></i></a>
                <a href="https://www.linkedin.com/in/enya-palomino"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true" id="linkedinIcon"></i></a>
                </p>
            </div>
        </div>
    </div>      
</div>
@stop