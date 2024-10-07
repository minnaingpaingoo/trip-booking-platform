<?php if(!isset($_SESSION)) { session_start(); } ?>
<?php
if (isset($_POST['submit'])) 
{
    if (isset($_POST['signature']))
    {  
   // $name = $file = "";
    if (isset($_POST['name'])) 
    {
        $name = $_POST['name'];
    }

    $email=$_SESSION['email'];

    $folderPath = "signature/";
    $image_parts = explode(";base64,", $_POST['signature']);
    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);
    $today=date("Y-m-d");
    $file = $folderPath . $name . "_" .$today."_". uniqid() . '.' . $image_type;

    file_put_contents($file, $image_base64);
    
    $BookingId=$_SESSION['bid'];
    $con=mysqli_connect("localhost","root","","trip");
    $sql = "INSERT INTO customer_sign(Name, Email, Sign,BookingId) VALUES ('$name','$email', '$file','$BookingId')";
    $query = mysqli_query($con, $sql);
    
    $carprice=$_SESSION['carprice'];
    $_SESSION['cprice']=$carprice;
    $_SESSION['bkid']=$BookingId;
    //echo "<script>alert('Signature Uploaded Successfully');</script>";
    echo("<script>window.location.href='voucher.php?';</script>");
    }else{
        echo "<script>alert('Please sign your signature!!');</script>";   
    }
} 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Signature</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">


    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <link type="text/css" href="asset/css/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="asset/js/jquery.signature.min.js"></script>
    <link rel="stylesheet" type="text/css" href="asset/css/jquery.signature.css">

    <style>
        .kbw-signature {
            width: 300px;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }
        
        body{
            margin: 50px 0 0 450px ;
        }
    </style>

</head>
 <?php
if($_SESSION['login']=="")
{
    header("location:index.php");
}

?>
<body class="bg-light">

    <div class="container p-4">

        <div class="row">
            <div class="col-md-5 border p-3  bg-white">
                <form method="POST">
                    <h1>Your Signature</h1>
                    <div class="col-md-12">
                        <?php
                            $email=$_SESSION['email'];
                            $cn=mysqli_connect("localhost","root","","trip");
                            $sql="select * from customer where Email='".$email."'";
                            $result=mysqli_query($cn,$sql);

                            while($data=mysqli_fetch_array($result))
                            {
                                $name=$data[1];
                            }
                            mysqli_close($cn);
                        ?>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" readonly="true" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label class="" for="">Signature:</label>
                        <br />
                        <div id="sig"></div>
                        <br />

                        <textarea id="signature64" required="Please sign your signature!!" name="signature" style="display: none"></textarea>
                        <div class="col-12">
                            <button class="btn btn-sm btn-warning" id="clear">&#x232B;Clear Signature</button>
                        </div>
                    </div>
                                                       
                    <br />
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>

</body>

</html>