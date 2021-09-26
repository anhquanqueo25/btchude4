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
    <title>Manage Food</title>
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
        <h3>Manage Order</h3>
    </div>
   
    <div class="bang">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="col-md-0.5">S.N.</th>
                    <th scope="col" class="col-md-1">Food</th>
                    <th scope="col" class="col-md-1">Price</th>
                    <th scope="col" class="col-md-0.5">Qty</th>
                    <th scope="col" class="col-md-1">Total</th>
                    <th scope="col" class="col-md-1">Order Date</th>
                    <th scope="col" class="col-md-1">Status</th>
                    <th scope="col" class="col-md-1">Customer Name</th>
                    <th scope="col" class="col-md-1">Contact</th>
                    <th scope="col" class="col-md-2">Email</th>
                    <th scope="col" class="col-md-1">Address</th>
                    <th scope="col" class="col-md-1">Actions</th>
                </tr>
                <tr>
                    <th scope="row">1.</th>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td><p class="delivered">Delivered</p></td>
                    <td>Jana Bush</td>
                    <td>+1 (562) 101-2028</td>
                    <td>tydujy@mailinator.com</td>
                    <td>Minima iure ducimus</td>
                    <td><button type="button" class="btn btn-sua btn-success">Update category</button></td>
                </tr>

                <tr>
                    <th scope="row">2.</th>
                    <td>Best Burger</td>
                    <td>4.00</td>
                    <td>4</td>
                    <td>16.00</td>
                    <td>2020-11-30 03:52:43</td>
                    <td><p class="delivered">Delivered</p></td>
                    <td>Kelly Dillard</td>
                    <td>+1 (908) 914-3106</td>
                    <td>fexekihor@mailinator.com</td>
                    <td>Incidunt ipsumad d</td>
                    <td><button type="button" class="btn btn-sua btn-success">Update category</button></td>
                </tr>

                <tr>
                    <th scope="row">3.</th>
                    <td>Sadeko Momo</td>
                    <td>6.00</td>
                    <td>3</td>
                    <td>18.00</td>
                    <td>2020-11-30 03:49:48</td>
                    <td><p class="cancelled">Cancelled</p></td>
                    <td>Bradley Farrell</td>
                    <td>+1 (576) 504-4657</td>
                    <td>zuhafiq@mailinator.com</td>
                    <td>Duis aliqua Quilor</td>
                    <td><button type="button" class="btn btn-sua btn-success">Update category</button></td>
                </tr>
            </thead>
            <tbody class="table_hang1">

               
                
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