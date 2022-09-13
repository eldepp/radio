

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="formstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="container w-50">
        <form action="handleRadiology.php" method="post">
           
            <br> <center>  <h2>Add Radiology Details</h2> </center> <hr>
    
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">we'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="text" name="number" class="form-control" id="exampleInputNumber" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputUnit" class="form-label">Unit name</label>
                <input list="units" name="unit" class="form-control" id="exampleInputUnit" aria-describedby="emailHelp" required>
                <datalist id="units">
                    <option value="MRI">
                    <option value="CT">
                    <option value="Mammography">
                    <option value="KHz">
                    <option value="Teslas">
                </datalist>
            </div>
            <div class="mb-3">
                <label for="exampleInputCategory" class="form-label">Radiology Category</label>
                <input list="Categories" name="category" class="form-control" id="exampleInputCategory" aria-describedby="emailHelp" required>
                <datalist id="Categories">
                    <option value="X-RAY CHEST PA VIEW">
                    <option value="ULTRASOUND WHOLE ABDOMEN">
                    <option value="MRI CARDIAC WITH CONTRAST">
                    <option value="CT 3D STUDY">
                    <option value="CT CHEST PLAIN">
                </datalist>
            </div>
            <div class="mb-3">
                <label for="exampleInputTest" class="form-label">Test type</label>
                <input type="text" name="test" class="form-control" id="exampleInputTest" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputCharge" class="form-label">Charge Name</label>
                <input type="text" name="charge" class="form-control" id="exampleInputCharge" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="submit" class="btn btn-danger sbutton">Add</button>
        </form>
    </div>
</body>

</html>