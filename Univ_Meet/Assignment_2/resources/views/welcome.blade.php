<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <p>Student Enrolled : </p>
    <table>
        <thead>
            <td>No</td>
            <td>Nama</td>
            <td>Program</td>
        </thead>
        <tbody>
            @php
            $no=1;
            @endphp

            @foreach ($students as $student)
            <tr>

                <td>{{ $no++ }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->unit->unit_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>