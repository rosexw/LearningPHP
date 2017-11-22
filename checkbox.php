
<?php
    session_start();
    include_once('dbConfig.php');
    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checkbox'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM $tbl_automobiles WHERE id=".$automobile_id);
        }
        $_SESSION['success_msg'] = 'The cars selected have been deleted successfully.';
        header("Location:index.php");
    }
?>
