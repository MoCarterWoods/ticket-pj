<style>
    @import url(http://fontawesome.io/assets/font-awesome/css/font-awesome.css);
    @import url(https://fonts.googleapis.com/css?family=Raleway);

    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Raleway;
    }

    h3 {
        color: #002e6d;
        font-size: 18px;
        line-height: 28.8px;
        font-weight: 700;
        margin: 0px 0px 30px;
    }

    #title {

        font-size: 18px;
        line-height: 28.8px;
        font-weight: 700;
        margin: 0px 0px 30px;
    }

    #msform {
        width: 85%;
        margin: 50px auto;
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;
        position: absolute;
    }

    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    #msform fieldset {
        text-align: left;
    }

    #msform textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: sans-serif;
        color: #29282d;
        font-size: 17px;
        border: 1px solid #aaaaaa;
        border-left: 6px solid #42A948;
    }


    #msform textarea:placeholder-shown {
        border-left: 5px solid red;
    }

    #msform input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: sans-serif;
        color: #29282d;
        font-size: 17px;
        border: 1px solid #aaaaaa;
        border-left: 6px solid #42A948;
    }

    #msform input:placeholder-shown {
        border-left: 5px solid red;
    }

    select {

        width: 100%;
        height: 45px;
        font-size: 17px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
    }

    /*Errors for validation*/
    textarea.invalid {
        background-color: #ffdddd;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    #msform .action-button {
        width: 100px;
        background: #002e6d;
        font-weight: 400;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #002e6d;
    }

    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: 500;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 0px;
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: #D2D2D2;
        text-transform: capitalize;
        font-size: 16px;
        width: 25%;
        float: left;
        position: relative;
    }

    #progressbar li.active {
        color: #002e6d;
    }

    #progressbar li:before {
        content: '';
        /*counter(step)*/
        counter-increment: step;
        width: 50px;
        line-height: 50px;
        display: block;
        font-size: 18px;
        color: #fff;
        background: transparent;
        border-radius: 100%;
        margin: 0 auto 5px auto;
        border: 2px solid #ECECEC;
    }

    #progressbar li:nth-child(1):before {
        content: "\f129";
        font-family: 'FontAwesome';
        color: #002e6d;
    }

    #progressbar li:nth-child(2):before {
        content: "\f015";
        font-family: 'FontAwesome';
        color: #80858a;
        border: 2px solid #80858a;
    }

    #progressbar li:nth-child(3):before {
        content: "\f007";
        font-family: 'FontAwesome';
        color: #80858a;
        border: 2px solid #80858a;
    }

    #progressbar li:nth-child(4):before {
        content: "\f15c";
        font-family: 'FontAwesome';
        color: #80858a;
        border: 2px solid #80858a;
    }

    #progressbar li:after {
        content: '';
        width: 73%;
        height: 2px;
        background: #ECECEC;
        position: absolute;
        left: -35%;
        top: 25px;
        z-index: -1;
    }

    #progressbar li:first-child:after {
        content: none;
    }

    #progressbar li.active:before {
        border: 2px solid #002e6d;
        color: white;
        background-color: #002e6d;
        /* content: "\f164";*/
    }

    #progressbar li.active:after {
        background: #002e6d;
        color: white;
    }

    .form_holder {
        text-align: center;
        margin: 30px 0 0;
    }
</style>
<div class="content-wrapper">

    <div class="container">
        <div class="row">
            <div class="form_holder">
                <h2 class="fs-title" style="color: red;">MULTI STEP FORM WITH PHP, JS AND CSS</h2>
                <hr>

                <form onsubmit="formSubmit(event)" id="msform" action="app.php" method="POST">

                    <ul id="progressbar">
                        <li class="active">Step one</li>
                        <li>Step Two</li>
                        <li>Step Three</li>
                        <li>Step Four</li>
                    </ul>
                    <fieldset>
                        <h3>THIS IS IS A MULTIPLE STEP FORM</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h2 class="fs-title" id="title">Step one</h2>
                        <h3 class="fs-subtitle">Step 1 of 4</h3>

                        <h3>Q1a. Pick one of the following</h3>


                        <input type="radio" name="qualification1" value="Applicant is an individual."> This one.
                        <br>

                        <input type="radio" name="qualification1" value="Applicant is an existing business with not more than 500 employees." required="" checked=""> Or this one.
                        <br>


                        <br>
                        <br>


                        <hr>

                        <h3>Q1b. Review and Check All of the Following:</h3>
                        <p><strong>All the followingmust be checked.</strong></p>
                        <br>



                        <input type="checkbox" name="qualification2c" required="" value="Applicant is not in the business of lobbying." id="c1">&nbsp This one.
                        <br>


                        <input type="checkbox" name="qualification2d" required="" value="Is an adult of sound mind." id="c2">&nbsp And this one.
                        <br>


                        <hr>


                        <p>This NEXT button should be innactive untill on radio is check in q1. and all checkbox marked in Q2.</p>
                        <input id="1" type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h3>Step Two</h3>
                        <h3 class="fs-subtitle">Step 2 of 4</h3>
                        <p>Q2a(text type)<br>
                            <input placeholder=" " oninput="this.className = ''" type="text" name=" " required="" style="width:100%;" id="s2t1">
                        </p>

                        <p>Q2b checkbox type<br>
                            <input type="radio" name="q2b" value="Yes" required="" checked="" id="q2bY" onclick="q2bYClick()"> Yes
                            <input type="radio" name="q2bN" value="No" id="q2bN" onclick="q2bNClick()"> NO
                        </p>


                        <p>Q2c select typeOrganization structure<br>
                            <select name="q2c" required="" placeholder="Choose One" id="q2c">
                                <option value="" disabled selected> Select your option</option>
                                <option value="1">Option1</option>
                                <option value="2">Option2</option>
                                <option value="3">Option3</option>
                            </select>
                        </p>



                        <p>Detailed activity undertaken<textarea name="activity-details" required="" placeholder=" " id="s2te1"></textarea></p>


                        <p>Date<br><input id="s2d1" placeholder=" " oninput="this.className = ''" type="text" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" name="" required="" style="width:100%; "></p>



                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input id="2" type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h3>Step Three</h3>
                        <h3 class="fs-subtitle">Step 3 of 4</h3>

                        <p>Email<br><input id="s3e1" placeholder=" " oninput="this.className = ''" type="mail" name="" required="" style="width:100%;"></p>


                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input id="3" type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h3>Step Four</h3>
                        <h3 class="fs-subtitle">Step 4 of 4</h3>

                        <p> Radio button</p>
                        <input type="radio" name="q4a" value="Yes" required="" checked=""> Yes
                        <input type="radio" name="q4a" value="No"> No


                        <p><input type="checkbox" id="terms_and_conditions" value="I agree to the Terms and Conditions" name="agreement" />I agree to the Terms and Conditions</p>


                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <!--input type="submit" name="submit" class="submit action-button" value="Submit" />-->
                        <button id="4" type="submit" class="submit action-button">Submit</button>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    $(".wizard li").click(function() {
        $(this).prevAll().addClass("completed");
        $(this).nextAll().removeClass("completed");
    });
</script>