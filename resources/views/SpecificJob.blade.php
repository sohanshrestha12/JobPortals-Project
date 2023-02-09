@extends('layouts.app')
@section('content')
<style>
    * {
    margin: 0;
    padding: 0;
}
 .job{
    background-image: url(../img/about-banner.jpg);
    padding: 150px;
    margin: 0 0 50px 0;
}
.job-text{
    left: 0;
    right: 0;
    margin: 0 0 0 30px;
    display: flex;
    height: 100%;
    max-width: 900px;
    padding: 30px;
    top: 0;
    bottom: 0;
    flex-direction: column;
    justify-content: center;
}
.job .job-text:before {
    background-image: url("../img/man.png");
    background-repeat: no-repeat;
    background-position: center left 0;
    content: "";
    position: absolute;
    bottom: 0;
    background-size: auto 280px;
    width: 600px;
    right: 0;
    top: -80px;
}
.job-text h2{
    font-size: 3rem;
    font-weight: 700;
    line-height: 35px;
    color: #3c2064;
    
} 
.job-text ul{
    list-style: outside none none;
    display: flex;
    padding: 0px;
} 
.job-text ul li {
   font-size: 18px;
    color: #3c2064;
} 
li{
    font-size: 16px;
   color: #5d5d5d;
}
.job-text ul li a{
    text-decoration: none;
   font-size: 18px;
    color: #333;
} 
.job-text ul li:last-child::before {
    content: "|";
    margin-right: 10px;
    margin-left: 10px;
    color: #a5a5a5;
    font-weight: 500;
}
    .job_date{
        display: flex;
        justify-content: space-around;
        margin-bottom: 37px;
    }
    .company{
        margin-top: 38px;
    }
    .company_logo{
        display:flex;
        margin:20px;
    }
    .desc-sec{
        margin-left:25px;
    }
    .job_description{
        margin-top: 70px;

    }
    .job_des{
        margin:40px;
    }
    .job_Qualification{
        margin-top: 70px;

    }
    .Qualification_list{
        margin:40px;
    }
    .side_content{
        width:30%;
    }
    .Specific_job{
        width:70%;

    }
</style>
<section class="job">
		<div class="job-text">
            <h2>Contact US</h2>
			<ul>
				<li><a href="index.html">Home</a> </li>
				<li>Job </li>
            </ul>
		</div>  
</section>
<section class="body">
    <div class="container" >
        <div class="Specific_job">
         <h1 class="border-bottom">Detail Description of Job</h1>
            <div class="job_date">
                <h3>Posted Date</h3>
                <h3>Posted Date</h3>
            </div>
            <h1>Designer:-</h1>
            <div class="company">
                <div class="company_logo">
                     <div class="icon-sec">
						<img src="../img/job-icon1.png" alt="">
					 </div>
                     <div class="desc-sec">
                        <h3>Company Name</h3>
						<p><img src="../img/map-icon.png" alt=""> Location 210-27 Quadra, Market Street,
									Victoria Canada</p>
                     </div>
                </div>
                <div class="company_about">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum eum praesentium delectus distinctio, repudiandae nam.</p>
                </div>
            </div>
            <div class="job_description">
                    <H1>Job Description:- </H1>
                    <div class="job_des">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nulla facere, dolorum, porro accusamus ullam esse odit facilis reiciendis quae eligendi iste modi laborum cum assumenda asperiores labore. Nobis necessitatibus inventore atque? Quos odit at fugiat, inventore fuga autem voluptates corporis, exercitationem totam laborum temporibus.</p>
                    </div>
            </div>
            <div class="job_Qualification">
                <h1>Qualification:-</h1>
                <div class="Qualification_list">
                    <ul>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="side_content"></div>

</section>

@endsection
