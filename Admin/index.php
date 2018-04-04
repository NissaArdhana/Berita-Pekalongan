<?php
     include 'dbo.php';
     session_start();
     if(isset($_SESSION["adminid"])){
         
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Berita Pekalongan</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/multiple-select.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">

</head>
<body>
     <div class="app app-default">
        <?php include ("left-menu.php");?> 
         
         <div class="app-container">
             <?php include ("header.php");?>
             
             <?php
                error_reporting(0);
                if($_GET["page"]=="ta"){
                    include ("tabel.php");
                }
                
                else if($_GET["page"]=="kategori"){
                    include ("tabel.php");
                }
                else if($_GET["form-kategori"]=="add"){
                    include ("form.php");
                }
                else if($_GET["form-kategori"]=="edit"){
                    include ("form.php");
                }
                
                else if($_GET["page"]=="berita"){
                    include ("tabel.php");
                }
                if($_GET["form-berita"]=="add"){
                    include ("form.php");
                }
                else if($_GET["form-berita"]=="edit"){
                    include ("form.php");
                }
                
             ?>
             
             <?php include("footer.php");?>
        </div>

     </div>
  
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>
  <script type="text/javascript" src="./assets/js/multiple-select.js"></script>
  <script>
    $(function() {
        $('#ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>
</body>
</html>
<?php
     }else{
         header("location:login.php");
     }
?>