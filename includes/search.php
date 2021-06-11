<?php require "includes/cfg.php";?>
<?php 
if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
?>

<?php echo 'sosi jopu' ?>

