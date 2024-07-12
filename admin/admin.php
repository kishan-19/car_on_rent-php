<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin . Car On Rent</title>

    <!-- css link -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="admin_page_heading">Admin Page</h1>
        <div class="admin_nav">
            <ul class="list-group list-group-horizontal">
                <a href="#"><span><i class="fa-solid fa-user"></i></span>
                <li class="list-group-item">User</li></a>

                <a href="#"><span><i class="fa-solid fa-table-list mt-1"></i></span>
                <li class="list-group-item">Booking List</li></a>

                <a href="#"><span><i class="fa-solid fa-square-plus mt-1"></i></span>
                <li class="list-group-item">Add Car</li></a>

                <a href="#"><span><i class="fa-solid fa-car mt-1"></i></span>
                <li class="list-group-item">Car</li></a>

                <a href="http://localhost/Rent%20on%20car/"><span><i class="fa-solid fa-house"></i></span>
                <li class="list-group-item">Home</li></a>
            </ul>
        </div>
        <hr>
        <div class="user_table mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Singup Date</th>
                        <th scope="col">Delete User</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>