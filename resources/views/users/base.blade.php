<!DOCTYPE html>
<html>
<head>
    <title>User Listing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 300;
            font-size: 14px;
            height: 100vh;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }


        header {
            height: 40vh;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)) , url("https://images.pexels.com/photos/2115217/pexels-photo-2115217.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260") center center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-attachment: fixed;
            background-size: cover;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        section{
            background-color: #222;
            text-align: center;
            font-size: 35px;
            color: #fff;
        }

        .container {
            display: flex;
            background-color: #fff;
            justify-content: center;
        }

        .list{
            display: flex;
            width:70%;
            padding: 50px;
            color: #000;
        }

        .right{
            float: right;
        }

        .red{
            color:red;
        }
        .alert {
            padding: 20px;
            border-radius:5px;
            background-color: #000;
            color: white;
            font-weight:400;
            text-align:center;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 16px;
            line-height: 12px;
            cursor: pointer;
        }

        .button{
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-radius:3px;  
            background-color: #000;
            border:1px solid #000;
            padding: 10px 20px;
            color: #ffffff;
            font-weight:300px;
            font-size:12px;
            text-decoration:none;
        }

        .button:hover{
            color: #000;
            background-color: #fff;
            border:1px solid #000;
            text-decoration:none;
        }
        .button-delete{
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-radius:3px;  
            background-color: transparent;
            border-color: transparent;
            padding: 10px 20px;
            color: red;
            font-weight:300px;
            font-size:12px;
        }
        
        .button-delete:hover{
            color: #fff;
            background-color: #fff;background-color:#000;
            border:1px solid #000;
            text-decoration:none;
        }

        .button2{
            font-weight: 600;
            font-size: 14px;
            letter-spacing: 0.5px;
            border-radius:3px;  
            background-color: #fff;
            border-color: 00cef7;
            padding: 10px 20px;
            color: #000;
            font-weight:300px;
            font-size:12px;
        }
        
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            text-align: left;
            padding: 15px;
        }

        tr:nth-child(odd) {
            background-color: #ededed;
        }
        
        .warpper{
            width: 100%;
            padding-top:200px;
            background-color:#fff;
            line-height: 0.8;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        [class*="col-"] {
            float: left;
            padding: 5px;
        }

        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 18px;
            padding :0px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 1rem;
        }

        label {
            font-weight: 600;
        }
        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.2125rem + 2px);
            padding: 0.45rem 0.9rem;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #6c757d;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
        }
            
    </style>
</head>
<body>
    <header><h5>User Listing</h5></header>

    @yield('content')
   
</body>
</html>