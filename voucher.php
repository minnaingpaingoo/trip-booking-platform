<?php if(!isset($_SESSION)) { session_start(); } ?>
<html>
 <?php    
if($_SESSION['login']=="")
{
    header("location:index.php");
}

?>
<head>
    <style type="text/css">

    body {
        font-family:  Helvetica;
    }

    .voucher {
        width:148mm;
        height:310mm;
        border: 1px solid black;
        margin: 50px 0 0 300px ;
        position:center;
    }

    .voucher-info {
        padding-left:10px;
        background-color: #eeecec;
        border-top:1px solid #b6b5b5;
    }

    .voucher-info-table {
        width:100%;
    }

    .voucher-info td {
        font-size: 10pt;
        color: #444444;
        width:33%;
    }

    .header {
        padding-top: 20px;
        text-align:center;
        font-size: 2em;
    }

    @media only print {
         body {
            visibility: hidden;
         }
         .cssInp {
            visibility: visible;
         }
    }
    
    .detail{
        border-collapse: collapse;
        color: #333;
        font-family: Arial, sans-serif;
        font-size: 14px;
        text-align: left;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        margin: auto;
        margin-top: 20px;
    }
    
    .detail table th {
        background-color: gray;
        color: #fff;
        text-align:left;
        font-weight: bold;
        padding: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #ccc;
    }
       
    .detail table tr:nth-child(even) td {
       background-color: #f2f2f2;
    }

    .detail table tr:hover td {
       background-color: #ffedcc;
    }
    
    .detail table td {
        background-color: #fff;
        padding: 5px;
        border-bottom: 1px solid #ccc;
        font-weight: bold;
    } 
    
      
    </style>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
    <div class="voucher">
    <div class="cssInp">
          <div class="voucher-info">
           <table class="voucher-info-table">
               <tr>
                   <td>
                       <div><h3>Trip Booking Platform</h3></div>
                   </td>

                   <td>
                       <div>Malar Myaing 8th Street, Ward 14, Hlaing Township,</div>
                       <div>Yangon, Myanmar</div>
                   </td>
                   <td>
                        <div>Email: naingpaingoo@gmail.com</div>
                        <div>Phone: (+95) 979-066-3667</div>
                        <div>http://www.tripbookingplatform.com</div>
                   </td>
               </tr>
           </table>
        </div>
            <?php     
                $bid=$_SESSION['bkid'];
                $cn=mysqli_connect("localhost","root","","trip");
                $sql="select * from booking where BookingId='".$bid."'"; 
                $result=mysqli_query($cn,$sql);
                while($data=mysqli_fetch_array($result))
                {
                   $bkid=$data[0];
                   $name=$data[1];
                   $email=$data[2];
                   $phone=$data[3];
                   $pname=$data[5];
                   $ddate=$data[9];
                   $rdate=$data[10];
                   $bdate=$data[11];
                   $price=$data[6];
                   $qty=$data[7];
                   $tprice=$data[8];
                }
                mysqli_close($cn);        
            ?>
        <h4 align="right" style="padding-right:5px">Date: <?php  echo $bdate; ?></h4>
        <h3 align="center">Booking Voucher</h3>
        <div class="detail">
        <table border="1" cellpadding="0" cellspacing="0" align="center" width="80%">
            <tr>
                <th>Booking Id:</th>
                <td>BK#<?php  echo $bkid; ?></td>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php  echo $name; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php  echo $email; ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>0<?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Package Name:</th>
                <td><?php  echo $pname; ?></td>
            </tr>
            <tr>
                <th>Departure Date:</th>
                <td><?php  echo $ddate; ?></td>
            </tr>
            <tr>
                <th>Arrival Date:</th>
                <td><?php echo $rdate; ?></td>
            </tr>
            <tr>
                <th>Price Per Tourist:</th>
                <td><?php  echo $price; ?> MMK</td>
            </tr>
            <tr>
                <th>No of Tourists:</th>
                <td><?php echo $qty; ?></td>
            </tr>
            <?php
                if(!empty($_SESSION['cprice'])) {
                    $carprice=$_SESSION['cprice'];
            ?>
            <tr>
                <th>Car Price:</th>
                <td><?php echo $carprice; ?> MMK</td>
            </tr>
            <?php
                }
                else{
                    
                }
            ?>
            <tr>
                <th>Total Price:</th>
                <td><?php echo $tprice; ?> MMK</td>
            </tr>
        </table>
        </div> <br/>
        <div width="200px" style="float:left; padding:5px;">
        <img src="img/qrcode.jpg" width="200px" height="220px">
        </div>
        <div style="padding:1px;">
            <h3 align="center"><b>Remark</b></h3>
                <p>-To payment, you need to scan the QR Code with KBZ Pay.</p>
                <p>-Else, you can choose other Payment Methods.</p>
                <p><b>1. Wave Pay Account: 09790663667 <br/>(U Naing Paing Oo)</b></p>
                <p><b>2. KBZ Mobile Banking: 07330107300878201</b></p>
                <p>-After transfering payment, please send your transaction (Screenshot) to <br/><b>Viber No: 09790663667 (Min Naing Paing Oo).</b></p>
                <p>-Then,our admin team will confirm your booking. If you have any problem, please contact us with email or phone.</p>
                <?php
                    $fdate=date("Y-m-d h:i:sa",strtotime($bdate."+2 hours")); 
                ?>
                <p><b>*Please finish your payment before <?php echo $fdate; ?>.</b></p>
                <p><b><center>Thanks for choosing our agency. Have a nice day.</center></b></p>
        </div>
        <?php
            $cn=mysqli_connect("localhost","root","","trip");
            $sql="select * from customer_sign where BookingId='".$bkid."'"; 
            $result=mysqli_query($cn,$sql);
            while($data=mysqli_fetch_array($result))
            {   
        ?>
        <div style="padding-left:410px; font-weight:bold; font-size:medium;">Your Sign:</div>
        <img src="<?php echo $data[3]; ?>" width="100px" height="100px" style="padding-left:410px" ">
        <?php
            }
            mysqli_close($cn);
        ?>
    </div>    
            <center><div id="cssBtnWrap"><button onclick="cssPrint()">PrintVoucher</button></div><br/><a href="index.php" onclick="alert('Your Booking is completed.');"><input type="button" value="Done"></a></center>
             <p id="cssOp"></p>
    </div>
<script>
      var cssOutEl = document.getElementById("cssOp");
      var cssBtnWrapEl = document.getElementById("cssBtnWrap");
      function cssPrint() {
         cssOutEl.innerHTML = "Printing the document...";
         cssBtnWrapEl.style.display = "none";
         print();
      }
   </script>
</body>
</html>
