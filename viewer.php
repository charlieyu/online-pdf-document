<!DOCTYPE html>
<?php
$filePath = "http://".$_SERVER['HTTP_HOST']."/";
$fileName = $_GET["file_name"];
?>
<html>
    <head>
        <script type="text/javascript" src="pdfobject.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            <?php echo "PDFObject.embed('".$filePath.$fileName."', document.body);"; ?>
        </script>
    </body>
</html>
