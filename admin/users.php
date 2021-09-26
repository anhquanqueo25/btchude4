<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap-5.1.1-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/users.css">
    <title>Manage Users</title>
</head>

<body>
    <header>
        <ul class="nav justify-content-center thanhtren">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Logout</a>
            </li>
        </ul>
    </header>
    <div class="thanhke"></div>
    <div class="tieude">
        <h3>Manage Users</h3>
    </div>
    <div class="btadd">
        <button type="button" class="btn btn-primary">Add New User</button>
    </div>
    <div class="bang">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Arsenio Leach</td>
                    <td>toduwaxobi</td>
                    <td><button type="button" class="btn btn-primary">Change Password</button>
                        <button type="button" class="btn btn-success">Update Admin</button>
                        <button type="button" class="btn btn-danger">Delete Admin</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Sasha Mendez</td>
                    <td>goxemyde</td>
                    <td><button type="button" class="btn btn-primary">Change Password</button>
                        <button type="button" class="btn btn-success">Update Admin</button>
                        <button type="button" class="btn btn-danger">Delete Admin</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Vijay Thapa</td>
                    <td>vijaythapa</td>
                    <td><button type="button" class="btn btn-primary">Change Password</button>
                        <button type="button" class="btn btn-success">Update Admin</button>
                        <button type="button" class="btn btn-danger">Delete Admin</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Administrator</td>
                    <td>admin</td>
                    <td><button type="button" class="btn btn-primary">Change Password</button>
                        <button type="button" class="btn btn-success">Update Admin</button>
                        <button type="button" class="btn btn-danger">Delete Admin</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="thanhke1">
        <div class="cttk">
            <p>2020 All right reserved, Food House. Developed By - <a href="">CSE485</a></p>
        </div>
    </div>
</body>


</html>