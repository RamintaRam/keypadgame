<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
              integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
              crossorigin="anonymous">

        <link rel="stylesheet" href="css/game.css">
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
<body>

<!--REGISTRATION view-->
{{--<div id="gamename">Typing game</div>--}}
<div id="registration" class="hidden">
    <input id="username" placeholder="Username"><br>
    <button id="register" class="btn bnt-primary" disabled>Register</button>
</div>


<!--select LEVEL view-->

<div id="level" class="hidden">
    <input type="radio" name="gender" value="9"> Easy
    <input type="radio" name="gender" value="6"> Medium
    <input type="radio" name="gender" value="3"> Hard<br><br>
    <button id="start"> Start Game</button>
</div>


<!--select GAME view-->

<div id="game" class="hidden">
    <div id="letters"><h3></h3></div>
    <div id="score"></div>
    <div id="life"></div>
    <div id="time"></div>
    <div id=""></div>
</div>


<!--select GAME OVER view-->

<div id="gameover" class="hidden">
    {{--<div class="letters"><h3></h3></div>--}}

    <button id="playagain">Play again</button>
    <div id="time"></div>

</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="js/game.js"></script>
<script>


    var game = new FastTyping()
        game.setSaveURL("{{route('app.game.store')}}");</script> <!--uzsikrauna puslapis ir iskart pasileidzia funkcija. -->
</html>
