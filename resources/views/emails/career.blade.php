<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Career Inquiry</title>
</head>
<body>
  A new career inquiry has been submitted. Please check the attachment.
  <hr>
  <b>
    Name:
  </b>
  {{$request['firstName']}} {{$request['lastName']}}
  <br>
  <b>
    Email:
  </b>
  {{$request['email']}}
  <br>
  <b>
    Position:
  </b>
  {{$request['position']}}
  

</body>
</html>