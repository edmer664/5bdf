<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Mail</title>
</head>
<body>
  <h3>
    A message from {{ $request['name'] }}
  </h3>
  <p>
    {{ $request['message'] }}
  </p>
  <hr>
  <small>
    Get back to {{ $request['email'] }}
  </small>

</body>
</html>