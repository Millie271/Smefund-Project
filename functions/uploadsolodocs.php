<!-- 
        include_once("../database/Database.php");
        include_once("../models/Uploadsolodocs.php");

        $conn = new Database();
        $db = $conn -> connection();


// Process file uploads
$uploadsolodocs = array('document1', 'document2', 'document3', 'document4', 'document5', 'document6');

foreach ($uploadsolodocs as $document) {
    $file = $_FILES[$document];
    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];

    // Specify the folder where the files will be saved
    $uploadPath = "C:\xxampp\htdocs\SMEFund project\Smefund-Project\Uploads";

    // Generate a unique filename to avoid conflicts
    $uploadsolodocs = uniqid() . '_' . $fileName;
    $destination = $uploadPath . $uploadsolodocs;

    // // Move the uploaded file to the desired folder
    // if (move_uploaded_file($fileTmp, $destination)) {
    //     // Insert file information into the database
    //     $sql = "INSERT INTO uploadsolodocs (file_name, file_path) VALUES ('$fileName', '$destination')";
    //     mysqli_query($conn, $sql);
    // }
}

// // Close the database connection
// mysqli_close($conn);

// Redirect the user to a success page
header("Location: 07_Congrats.html");
exit;
?>

<!-- 
        $uploadsolodocs = new Uploadsolodocs($db);
        $uploadsolodocs -> ID = $_POST['document1'];
        $uploadsolodocs -> Birthcert = $_POST['document2'];
        $uploadsolodocs -> Bankstatement = $_POST['document3'];
        $uploadsolodocs -> Businessplan = $_POST['document4'];
        $uploadsolodocs -> Businesspermit = $_POST['document5'];
        $uploadsolodocs -> GuarantorID = $_POST['document6'];
        

        $save = $uploadsolodocs -> saveUploadsolodocs();

        if($save){
            // echo "<script>alert('application was successfull')</script>";
            // echo "<script>setTimeout(() => { history.go(-1) }, 1500)</script>";
            header("Location: ../06_UploadSoloDocs.html");
        }else{
            // echo "<script>alert('Oops! something went wrong, please try again.')</script>";
            // echo "<script>setTimeout(() => { history.go(-1) }, 1500)</script>";
            header("Location: ../06_UploadSoloDocs.html");
        }
    
?> --> --> -->