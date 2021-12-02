<!DOCTYPE HTML>
<html>
<head>
    <title> PDO - Create a Record - PHP CRUUD Tutorial</title>

    <!--Latest compiler and minified Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrao/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<!--container-->
<div class="container">
    <div class="page-header">
        <h1>Create Product</h1>
    </div>
    <!--HTML from to create product will be here-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class="table table-hover table-responsive table-bordered">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" class="form-control"/></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="description" class="form-control"> </textarea> </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" class="form-control"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save" class="btn btn-primary"/>
                    <a href="index.php" class="btn btn-danger"> Back to read products</a>
                </td>
            </tr>
        </table>
    </form>

</div><!--end class container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.main-js"></script>

<!--Latest compiled and minified Bootstrap JavaScrip-->
<script src="Https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
if ($_POST)
    //include database connection
    include "config/database.php";
try {
    $query="INSERT INTO products set name=:name,description=:description,price=:price,created=:created";
    $stmt

}
?>

<!-- html form here were the product information will be entered-->
</body>
</html>