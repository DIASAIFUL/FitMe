
<?php 

session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>

<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Old Standard TT', serif;
}

.fit_cal_right {
    display: grid;
    justify-content: center;
    align-content: center;
    grid-template-columns: 30vw;
    grid-template-rows: repeat(3, 10vh) 5vh repeat(2, 10vh);
    grid-gap: 10px;

}

body {
    background: black;
}

h1 {
    text-align: center;
    color: white;
}

.submit-btn {
    background-color: turquoise;
}

.bmi-value {
    background-color: yellow;
    display: grid;
    grid-template-rows: 50% 50%;
}



.fit_cal_right>div {
    padding: 10px;
    font-size: 20px;
    font-weight: bold;
    color: black;
    border-radius: 10px;
}

button,
input {
    min-width: 100%;
    min-height: 100%;
    border: none;
    outline: none;
    font-size: 1.5vw;
    border-radius: 8px;
}

input {
    background: #ffdd99;
    text-indent: 0.5em;
    max-width: 100%;
    color: black;
    outline: none;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance: textfield;
}

button {
    background: tomato;
    cursor: pointer;
}

button:hover {
    background: #c70039;
    color: white;
}


.main_fit_cal.container {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, 0%);
}

.main_fit_cal.box {
    min-width: 400px;
    background: #fafafa;
    border-radius: 38px;
    text-align: center;
    position: relative;
    margin-bottom: 150px;
}

.main_fit_cal.box::before {
    content: "";
    position: absolute;
    height: 110%;
    width: 110%;
    left: -5%;
    top: -5%;
    background-color: rgba(255, 255, 255, 0.3);
    box-shadow: 0px 0px 166px -31px rgba(0, 0, 0, 0.15);
    border-radius: 60px;
    z-index: -1;
}

.main_fit_cal h1 {
    font-weight: bold;
    font-size: 36px;
    padding: 30px 0;
}

.main_fit_cal.content {
    padding: 0 40px;
}

.main_fit_cal.input {
    background: #fff;
    box-shadow: 0px 0px 95px -30px rgba(0, 0, 0, 0.15);
    border-radius: 28px;
    padding: 20px 0;
    margin-bottom: 20px;
}

.input label {
    display: block;
    font-size: 18px;
    font-weight: 600;
    color: #ffff;
    margin-bottom: 20px;
}

.main_fit_cal .input input {
    outline: none;
    border: none;
    border-bottom: 1px solid #4f7df9;
    width: 60%;
    text-align: center;
    font-size: 28px;
    font-family: "Nunito", sans-serif;
}

.main_fit_cal button#calculate {
    font-family: "Nunito", sans-serif;
    color: #fff;
    background: #4f7df9;
    font-size: 16px;
    border-radius: 12px;
    margin-top: 19px;
    padding: 12px 0;
    width: 100%;
    outline: none;
    border: none;
    transition: background 0.2s ease;
}

.main_fit_cal button#calculate:hover {
    background: #0044ff;
}

.main_fit_cal.result {
    padding: 30px 20px;
}

.main_fit_cal.result p {
    font-weight: 600;
    font-size: 22px;
    color: #000;
    margin-bottom: 15px;
}

.main_fit_cal .result #result {
    font-size: 36px;
    font-weight: 900;
    color: #4f7df9;
    background-color: #eaeaea;
    display: inline-block;
    padding: 7px 20px;
    border-radius: 55px;
    margin-bottom: 25px;
}

.main_fit_cal #comment {
    color: #4f7df9;
    font-weight: 800;
}
</style>

<body>

    <header class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><i class="fas fa-dumbbell"></i><span> FitMe</span></div>
                </div>
                <div class="col-md-9">
                <?php include 'header.php'; ?>
                </div>
            </div>
        </div>
    </header>
    <div class="main_fit_cal">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="fit_cal_left">
                        <img src="assets/images/1.webp">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">

                    <div class="container text-white">
                        <div class="box">
                            <h1>BMI Calculator</h1>
                            <div class="content">
                                <div class="input">
                                    <p>Height in CM:
                                        <input type="text" id="height"  placeholder="Enter your height in CM"><br><span id="height_error"></span>
                                    </p>

                                </div>
                                <div class="input">
                                    <p>Weight in KG:
                                        <input type="text" id="weight" placeholder="Enter your eeight in CM"><br><span id="weight_error"></span>
                                    </p>

                                </div>
                                <button id="btn">Calculate BMI</button>
                            </div>
                            <br><br>
                            <div class="result">
                                
                                <div class="bmi_status" >
                                    <label for="">Your BMI Status: <span id="output"></span></label>

                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="fitness-calculator-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="text-center">Questions </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fitness-calcutor">
                        <div class="quiz-container" id="quiz">
                            <div class="quiz-header">
                                <h2 id="question">Question text</h2>
                                <ul>
                                    <li>
                                        <input type="radio" id="a" name="answer" class="answer" />
                                        <label id="a_text" for="a">Question</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="b" name="answer" class="answer" />
                                        <label id="b_text" for="b">Question</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="c" name="answer" class="answer" />
                                        <label id="c_text" for="c">Question</label>
                                    </li>

                                </ul>
                            </div>
                            <button id="submit">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fitness-image">
                        <img  src="assets/images/555.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="videos-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="text-center">Interesting fact about BMI</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="videos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/z_3S2_41_FE"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="videos-right">
                        <div class="single-videos-box">
                            <div>

                            </div>
                            <div class="videos-contant">
                                <h4>Myth1</h4>
                                <p> Myth: A high BMI increases the risk of a heart attack.</p>
                                <p> Fact: The amount of fat is associated with heart-related problems but not higher
                                    BMI.</p>
                            </div>
                        </div>
                        <div class="single-videos-box">
                            <div>

                            </div>
                            <div class="videos-contant">
                                <h4>Myth2</h4>
                                <p>Myth: Eating healthy and exercising means you'll have a low BMI.</p>
                                <p> Fact: Despite the healthy diet and regular exercise it is very important to maintain
                                    a healthy body but it is not related to a low BMI. </p>
                            </div>
                        </div>
                        <div class="single-videos-box">

                            <div class="videos-contant">
                                <h4>Myth3</h4>
                                <p>You are healthy if your BMI is between 19 and 25.</p>
                                <p> Fact: As per the BMI scale, lower than 18.5 is underweight, between 18.5 and 24.9 is
                                    normal, 25 to 29.9 is overweight and 30 or above is obese. Sometimes there are some
                                    health issues that increase and decrease weight.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>© 2022-2023 themexpert Inc. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- java script -->
    <!--<script>
    function getbmivalue() {
        var height = document.getElementById('height').Value;
        var weight = document.getElementById('weight').Value;

        height = height * 12;
        height = height * 0.025; //height in meter
        var newbmivalue = weight / (height * height);
        //var newbmivalue = weight / (math.pow(height,2));
        newbmivalue = math.round(newbmivalue);
        document.getElementById('bmivalue').value = newbmivalue;

    }
    </script>--!>
    <!-- jQuery Js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/bmi_script.js"></script>


</body>

</html>