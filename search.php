<?php include('config_db.php');?>
<?php
$output = '';
$error = '';
$search = '';
$name = $item_type = $cat_name = $price = '';
if(isset($_POST["query"])){
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "SELECT item.name, item.item_type, category.cat_name, item.price, item.item_url FROM item INNER JOIN category ON category.id=item.cat_id WHERE `name` LIKE '%".$search."%'";
    }
    $result = mysqli_query($conn, $query);
  
    //array
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $name = $row["name"];
            $item_type = $row["item_type"];
            $cat_name = $row["cat_name"];
            $price = $row["price"];
            $item_url = $row["item_url"];


            $output .= '
            <div class="singleItemWrapper">
                <div class="searchLeft"><img src='.$row["item_url"] .' class="itemImg"alt="itemImg"></div>
                <div class="searchRight">
                    <div class="itemname"><h3>'.$row["name"].'</h3></div>
                    <div class="itemtype"><p>Type: '.$row["item_type"].'</p></div>
                    <div class="catname"><p>Category: '.$row["cat_name"].'</p></div>
                    <div class="itemprice"><p>Price: ₹'.$row["price"].'</p></div>  
                </div>
            </div>    
            
            ';
        }
        // echo $output;
    }
    else
    {
        $error = 'Sorry! No Data Found';
    }
}
?>
<?php include("includes/components/header.php"); ?>

<style>
.searchWrapper{
    width: 70%;
    display: contents;
    margin: auto;
}
.searchContainer{
    display: flex;
    width: 100%;
    flex-direction: column;
    text-align: center;
    background-color: #f8f6f6;
}
.searchLeft{    
    width:40%;
    text-align: center;
}
.searchRight{
    width:60%;
    text-align: left;
    margin: auto;
}
.itemImg{
    width: 30%;
    border-radius: 10px;
}
.singleItemWrapper{
    display: flex;
    margin-bottom: 10rem;
}
h2{
    text-align: center;
}
form{
    text-align: center;
}
.searchBox {
    margin: auto;
    margin-top: 3rem;
    width: 35%;
    position: relative;
}
.searchWrapper{
    position: relative;
}

@media only screen and (max-width: 768px) {
    .searchIcon {
        margin: auto;
    }
    .itemImg {
    width: 70%;
}

}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>
<body>
<section>
    <form action="search.php" method="POST">
    <div class="searchWrapper">
        <div class="searchBox">
            <div class="searchIcon">
                <div class="glassIcon">
                <i class="searchSVG" color="#828282" size="18">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#828282" width="18" height="18" viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img" >
                        <title>Search</title>
                        <path d="M19.78 19.12l-3.88-3.9c1.28-1.6 2.080-3.6 2.080-5.8 0-5-3.98-9-8.98-9s-9 4-9 9c0 5 4 9 9 9 2.2 0 4.2-0.8 5.8-2.1l3.88 3.9c0.1 0.1 0.3 0.2 0.5 0.2s0.4-0.1 0.5-0.2c0.4-0.3 0.4-0.8 0.1-1.1zM1.5 9.42c0-4.1 3.4-7.5 7.5-7.5s7.48 3.4 7.48 7.5-3.38 7.5-7.48 7.5c-4.1 0-7.5-3.4-7.5-7.5z"></path>
                    </svg>
                </i>
                </div>
                <input type="text" id="query" name="query" value="<?php echo htmlspecialchars($search) ?>" placeholder="Search for cuisine or a dish" class="inputBox" onclick="enterkey(this)">
            </div>
        </div>
    </div>
    </form>
    </section>
    <!-- Search Display -->
    <section>
        <div class="wrapper searchWrapper">
        <h2 class="title">Search Result</h2>
            <div class="searchContainer">
                <?php echo $output;?>
                <?php echo  $error;?>

            </div>
        </div>
    </section>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>
<!-- Footer  -->
<?php include("includes/components/footer.php"); ?>