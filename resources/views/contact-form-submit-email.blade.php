<!DOCTYPE html>
<html>

<head>
    <title>Echelon Consultants</title>
</head>

<body>
    Dear Echelon,<br />

    <p>You have received new message via websiet contact form.</p>

    <p>Name: {{ $data->name }}</p>
    <p>Contact number: {{ $data->contact }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Message: {{ $data->message }}</p>


    Best Regards,<br />
    Echelon Consultants.
</body>

</html>