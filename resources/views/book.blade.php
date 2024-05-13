<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://static.talentedge.com/css/style1.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <style>
        @media print {
            html,
            body {
                height: 100%;
                min-height: 100%;
            }

            *,
            body {
                margin: 0;
                padding: 0;
                list-style: none;
                font-family: 'Poppins', sans-serif;
            }

            :root {
                --primary-color: #0a366f;
                --secondary-color: #F3821F;
                --white: #fff;
                --black: #000;
            }

            /* width */
            ::-webkit-scrollbar {
                height: 4px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #dfdfdf;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: rgb(199, 199, 199);
            }

            .custom-scroll::-webkit-scrollbar {
                height: 1px;
                width: 1px;
            }

            /* Track */
            .custom-scroll::-webkit-scrollbar-track {
                background: #fff;
            }

            /* Handle */
            .custom-scroll::-webkit-scrollbar-thumb {
                background: rgb(199, 199, 199);
            }

            ::placeholder {
                /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #000 !important;
                opacity: 1;
                /* Firefox */
            }

            :-ms-input-placeholder {
                /* Internet Explorer 10-11 */
                color: #000 !important;
            }

            ::-ms-input-placeholder {
                /* Microsoft Edge */
                color: #000 !important;
            }

            button:focus,
            input:focus,
            .form-control:focus {
                box-shadow: none !important;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            .text-center {
                text-align: center;
            }

            .bg {
                background-color: #f4f4f4;
            }

            .heading {
                color: #044cae;
                font-size: 30px;
                margin-bottom: 5px;
                font-weight: 600;
            }

            .heading-bg {
                background-color: #004aad;
                color: #fff;
                padding: 10px;
                font-weight: 600;
                font-size: 18px;
                border-radius: 5px;
                margin-bottom: 0px;
            }

            .sub-heading {
                color: #000;
                font-weight: 600;
            }

            p {
                color: #414041;
                font-size: 17px;
                font-weight: 400;
            }

            p span {
                font-weight: 700;
                color: #000;
            }

            .h6, h6 {
                font-size: 29px !important;
                font-weight: 700 !important;
            }

            .h6 span, h6 span {
                font-weight: bold;
            }

            .logo {
                display: flex;
                justify-content: end;
            }

            .box {
                border: 1px solid #000;
                text-align: left;
                padding: 40px 45px 20px;
                height: 300px;
            }

            .box p {
                color: #000;
                font-size: 18px;
            }

            .box p span {
                font-size: 18px;
                font-weight: 600;
                display: block;
                line-height: 14px;
            }

            .content-box {
                padding: 40px 40px;
            }

            .intro-img {
                height: 830px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .intro-img img {
                max-width: 570px;
            }

            .intro-text p {
                font-size: 20px;
                margin-bottom: 5px;
            }

            .path-img {
                width: 75px;
                margin-bottom: 10px;
            }

            table {
                width: 100%;
                border: 1px solid #000;
                text-align: center;
            }

            table thead {
                background-color: #004aad;
                color: #fff;
                font-weight: 400;
            }

            table th, table td {
                font-size: 18px;
                padding: 20px 10px;
                font-weight: 400;
                border: 1px solid #000;
            }

            .container {
                margin-top: -10px;
                padding: 0px 0px;
            }

            .chart-wrapper {
                font-weight: 600;
            }

            .legend-wrap .clr-1 {
                background: #d0ff93;
            }

            .legend-wrap .clr-2 {
                background: #ffe991;
            }

            .legend-wrap .clr-3 {
                background: #ffa4a4;
            }

            .legend-wrap span.legend-badge {
                border: 1px solid #000;
                border-radius: 30px;
                padding: 6px 25px;
                font-size: 18px;
                font-weight: 600;
                width: 128px;
                text-align: center;
            }

            .legend-wrap span.legend-title {
                position: relative;
                border: 1px solid #000;
                border-right: none;
                background: #fff;
                font-weight: 700;
                font-size: 14px;
                height: 45px;
                padding: 10px 5px 10px 20px;
                width: 164px;
            }

            .legend-wrap span.legend-title:after {
                content: '';
                position: absolute;
                right: -50px;
                border: 23px solid transparent;
                border-top: 0;
                top: -7px;
                border-bottom: 58px solid #000;
                transform: rotate(90deg);
            }

            .legend-wrap span.legend-title::before {
                content: '';
                position: absolute;
                right: -48px;
                border: 22px solid transparent;
                border-top: 0;
                top: -5px;
                border-bottom: 54px solid #fff;
                transform: rotate(90deg);
                z-index: 9;
            }

            .legend-wrap span.line {
                position: absolute;
                height: 100%;
                width: 2px;
                right: 0;
                top: 0;
                background: #fff;
                z-index: 9;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="bg p-4">
        <div class="intro-img" style="text-align:center; padding-top:120px;">
            <img src="https://static.talentedge.com/images/intro_img.png" alt="Intro Img"/>
        </div>
        <div class="intro-text d-flex justify-content-center align-items-center flex-column" style="text-align:center;">
            <p>{{$user->name}}</p>
            <p>Report Date:24/08/2023</p>
        </div>
    </div>
</div>

<div style="page-break-after:always;">
    <div class="container">
        <div class="bg p-4">
            <div class="logo" style="text-align:right; margin-bottom:15px; border:0;">
                <img src="https://static.talentedge.com/images/upGrad_logo.jpg" style="width:120px; border:0;"  alt="Upgrad Logo"/>
            </div>
         </div>

        <div class="" style="text-align: justify;">

            <h3 class="heading-bg text-center" style="width:100%;float:left;background:#611e9b;color: #fff;">Additional Recommendations</h3>
            <div class="p-3">

                <p> For someone who is about to begin their career, one of the most important aspects you should seek in your career is clarity. It is natural to get confused between two more career paths at this stage. Its extremely important for you to seek clarity and select the best fit career path for you </p>

                <p>Clarity gives purpose to your life and helps you define SMART goals. SMART goals build
                    your internal motivation to take necessary actions. Clear career goals help you recognize
                    the resources and seize the right opportunity to multiply your chances of success.</p>

                <p>You need to ensure that you are investing sufficient time in getting necessary clarity
                    before taking the next big step in your career. We recommend you talk to coaches,
                    to understand your strengths, weaknesses, interest areas,industry trends, and future of work.</p>
                <p>After gaining the necessary career clarity, we recommend you define your SMART goals along with a concrete action plan which will help you to channelize your efforts in the right direction to have a rewarding career.</p>
            </div>
        </div>

</div>
<div class="container">
    <div class="bg p-4">
        <div class="intro-img" style="text-align:center; padding-top:120px;">
            <img src="https://static.talentedge.com/images/intro_img.png" alt="Intro Img"/>
        </div>
        <div class="intro-text d-flex justify-content-center align-items-center flex-column" style="text-align:center;">
            <p>{{$user->name}}</p>
            <p>Report Date:24/08/2023</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>