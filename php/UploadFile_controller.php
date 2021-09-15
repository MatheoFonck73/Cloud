<?php
class UploadFile
{
    public static function Upload()
    {
        try {
            $format = array('ini',"iso","exe",'mp3', 'doc', 'docx', 'xls', 'jpeg', 'jpg', 'mp4', 'rar', 'zip', 'xlsx', 'pdf', 'png', 'gif', 'pptx', 'txt');
            $File = $_FILES['I']['name'];
            $upload = "../upload/";
            $file = ($_FILES['I']['name']);
            $tmp = ($_FILES['I']['tmp_name']);
            $save =  $upload . $file;
            $extension = pathinfo($File, PATHINFO_EXTENSION);

            if (!in_array($extension, $format)) {
                echo "It is not the correct format.";
            } else {
                move_uploaded_file($tmp,  $save);
            }
        } catch (Exception $e) {
            echo "An error has occurred: " . $e;
        }
    }
}
UploadFile::Upload();
