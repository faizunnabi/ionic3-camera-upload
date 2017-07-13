<?php

if ($_FILES["file"]["error"] > 0){
echo "Error Code: " . $_FILES["file"]["error"] . "<br />";
}
else
{
echo "Uploaded file: " . $_FILES["file"]["name"] . "<br />";
echo "Type: " . $_FILES["file"]["type"] . "<br />";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kilobytes<br />";

if (file_exists("/files/".$_FILES["file"]["name"]))
  {
  echo $_FILES["file"]["name"];
  }
else
  {
  move_uploaded_file($_FILES["file"]["tmp_name"],"PATH_TO_UPLOAD_DIRECTORY/".$_FILES["file"]["name"]);
  echo "Done";
  }
}
?>