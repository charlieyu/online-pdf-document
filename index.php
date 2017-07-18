<!DOCTYPE html>
<?php
if (isset($_GET["dir"])){
    $dir = $_GET["dir"];
} else {
    $dir = $_SERVER["DOCUMENT_ROOT"];
}

function list_files($dir)
{
    if(is_dir($dir))
    {
        if($handle = opendir($dir))
        {
            while(($file = readdir($handle)) !== false)
            {
                if($file != "." && $file != ".." && $file != "Thumbs.db")
                {
                    if (is_dir($file)){
                        echo '<a href="index.php?dir='.$file.'">'.$file.'</a><br>';
                    } else if (pathinfo($file, PATHINFO_EXTENSION) == "pdf"){
                        echo "<a target='_blank' href='viewer.php?file_name=".$dir."/".$file."'>".$file."</a><br/>";
                    }
                }
            }
            closedir($handle);
        }
    }
}

?>
<html>
    <head>
        <title>online-pdf-document</title>    
    <head>
    <body>
        <?php
        list_files($dir);
        ?>
    </body>
</html>
