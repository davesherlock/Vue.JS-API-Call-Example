<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Responsive + Encoding Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Title -->
    <title>Vue.JS API Call</title>
</head>
<body>
<div id="main" class="p-5 text-center">
    <h1> Vue.JS API Call Example</h1>
    <br/>
    <button type="button"
            class="btn btn-outline-primary"
            @click="fetchAPIData">Get a Joke!!
    </button>
    <br/> <br/>
    <div v-if="responseAvailable == true">
        <hr>
        <h4>{{setup}}</h4>
        <h5>{{punchline}}</h5>
        <hr>
    </div>
    <div class="alert alert-danger w-50 mx-auto" role="alert" v-if="error == true">
        {{errormessage}}
    </div>
</div>
</body>
<!-- Vue and Custom JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script src="scripts.js"></script>
</html>