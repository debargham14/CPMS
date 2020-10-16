<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adding batch</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>

<!-- Default form register -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Create Batch</p>

    <!-- Degree Name -->
    <input type="text" id="defaultRegisterDegreeName" class="form-control" placeholder="Degree Name" aria-describedby="defaultRegisterFormDegreeNameHelpBlock">
    <small id="defaultRegisterFormDegreeNameHelpBlock" class="form-text text-muted mb-4">
        Add initials (ex- BE for Bachelor of Engineering)
    </small>

    <!-- Department -->
    <select class="browser-default custom-select mb-4">
        <option disabled selected>Department</option>
        <option value="1">Computer Science and Engineering (CSE)</option>
        <option value="2">Mechanical Engineering (ME)</option>
        <option value="3">Sociology (Socio)</option>
        <option value="4">Lawra Lesson (LL)</option>
    </select>

    <!-- Current Sem -->
    <select class="browser-default custom-select mb-4">
        <option disabled selected>Current Sem</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>

    <div class="form-row mb-4">
        <div class="col">
            <!-- Start Year -->
            <input type="text" id="defaultRegisterFormStartYear" class="form-control" placeholder="Star Year">

<!--            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">-->
<!--                <input placeholder="Select date" type="text" id="example" class="form-control">-->
<!--                <label for="example">Try me...</label>-->
<!--                <i class="fas fa-calendar input-prefix"></i>-->
<!--            </div>-->
        </div>
        <div class="col">
            <!-- End Year -->
            <input type="text" id="defaultRegisterFormEndYear" class="form-control" placeholder="End Year">

<!--            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">-->
<!--                <input placeholder="Select date" type="text" id="example" class="form-control">-->
<!--                <label for="example">Try me...</label>-->
<!--                <i class="fas fa-calendar input-prefix"></i>-->
<!--            </div>-->
        </div>
    </div>

    <!-- Submit button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Submit</button>

    <!-- Terms of service -->
    <p>By clicking
        <em>Submit</em> you will register
        <a href="" target="#">a new batch</a>

</form>
<!-- Default form register -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>

