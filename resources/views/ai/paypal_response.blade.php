<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
<body>

<h1></h1>
<p></p>
<form id="asdf" onsubmit="opener.location.href='/customer/signup/thank-you';">
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function ready() {
        $("#asdf").submit();
        window.close();
    }

    document.addEventListener("DOMContentLoaded", ready);
</script>
</body>
</html>