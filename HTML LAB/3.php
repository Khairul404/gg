<?php
include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            color: white;
        }
        

        body {
            background-color: #e7dbdb;

        }

        h1 {
            text-align: center;
            margin-top: 10px;
        }

        form {
            width: 500px;
            margin: auto;
            background-color: gray;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px #999999;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bolder;
            font-size: 18px;
        }

        .form-control>input {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #999999;
            margin-bottom: 20px;
            box-sizing: border-box;
            background-color: #999999;
        }

        .gender>input,
        .gender>label {
            display: inline;
        }

        .form-control>.submit {
            background-color: #4CAF50;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
        }

        .form-control>.submit:hover {
            cursor: pointer;
            background-color:red;
        }
        #cl  /* Id call use #  */
        {
            color: red;
        }
    </style>
</head>
<body>
    <form action="3index.php" method="POST">
        <h1>Personal Details</h1>
        <div class="form-control">
            <label for="name">Name:</label>
            <input type="text" id="cl" name="name">
        </div>
        <div class="form-control">
            <label for="email">E-mail:</label>
            <input type="email" id="cl" name="email">
        </div>
        <div class="form-control">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="cl" name="phone">
        </div>
        <div class="form-control">
            <label for="password">Password:</label>
            <input type="password" id="cl" name="password">
        </div>
        <div class="gender">
            <label for="gender">Gender:</label>
            <span style="margin-left: 20px;">
                <input type="radio" value="Male" name="gender" checked> Male
                <input type="radio" value="Female" name="gender"> Female
            </span>
        </div>
        <br><br>
        <div class="form-control">
            <input type="submit" class="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>