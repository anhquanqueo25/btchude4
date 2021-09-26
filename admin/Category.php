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
    <title>Manage Category</title>
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
        <h3>Manage Category</h3>
    </div>
    <div class="btadd">
        <button type="button" class="btn btn-primary">Add Category</button>
    </div>
    <div class="bang">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="col-md-1">S.N.</th>
                    <th scope="col" class="col-md-2">Title</th>
                    <th scope="col" class="col-md-3">Image</th>
                    <th scope="col" class="col-md-1">Featured</th>
                    <th scope="col" class="col-md-1">Active</th>
                    <th scope="col" class="col-md">Actions</th>
                </tr>
            </thead>
            <tbody class="table_hang1">

                <tr>
                    <div class="table_img1">
                        <th scope="row"><p style="margin-top:60px">1</p></th>
                        <td><p style="margin-top:60px">Piza</p></td>
                        <td><img style="width:40%" src="../images/piza.jpg"></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <div class="bttt" >
                        <td>
                            <button style="margin-top:50px" type="button" class="btn btn-success">Update Category</button>
                            <button style="margin-top:50px" type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="table_img1">
                        <th scope="row"><p style="margin-top:60px">2</p></th>
                        <td><p style="margin-top:60px">Piza</p></td>
                        <td><img style="width:40%" src="../images/burger.jpg"></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <div class="bttt" >
                        <td>
                            <button style="margin-top:50px" type="button" class="btn btn-success">Update Category</button>
                            <button style="margin-top:50px" type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="table_img1">
                        <th scope="row"><p style="margin-top:60px">3</p></th>
                        <td><p style="margin-top:60px">Piza</p></td>
                        <td><img style="width:40%" src="../images/momo.jpg"></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <div class="bttt" >
                        <td>
                            <button style="margin-top:50px" type="button" class="btn btn-success">Update Category</button>
                            <button style="margin-top:50px" type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="table_img1">
                        <th scope="row"><p style="margin-top:60px">4</p></th>
                        <td><p style="margin-top:60px">Piza</p></td>
                        <td><img style="width:40%" src="../images/piza.jpg"></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <td><p style="margin-top:60px">Yes</p></td>
                        <div class="bttt" >
                        <td>
                            <button style="margin-top:50px" type="button" class="btn btn-success">Update Category</button>
                            <button style="margin-top:50px" type="button" class="btn btn-danger">Delete Category</button>
                        </td>
                        </div>
                    </div>
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