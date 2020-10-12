<?php

$message = [];
$first_name = [];
$last_name = [];
$sent_date = [];
$email = [];
$id = [];


if (!empty($pageData['dbData'])){
    foreach ($pageData['dbData'] as $row){
        array_push($message,$row['message']);
        array_push($first_name,$row['first_name']);
        array_push($last_name,$row['last_name']);
        array_push($sent_date,$row['sent_date']);
        array_push($email,$row['email']);
        array_push($id,$row['id']);
    }
}


?>

<body>

<div class="container-fluid p-0">

    <div class="grid">
        <div class="grid-box text-center"><strong>First Name</strong>
            <?php
            if (!empty($first_name)) {
                foreach ($first_name as $item){
                    echo "<p>$item</p>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>Last Name</strong>
            <?php
            if (!empty($last_name)) {
                foreach ($last_name as $item){
                    echo "<p>$item</p>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>Email</strong>
            <?php
            if (!empty($email)) {
                foreach ($email as $item){
                    echo "<p>$item</p>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>Message</strong>
            <?php
            if (!empty($message)) {
                foreach ($message as $item){
                    echo "<p>$item</p>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>Sent Date</strong>
            <?php
            if (!empty($sent_date)) {
                foreach ($sent_date as $item){
                    echo "<p>$item</p>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>ID</strong>
            <?php
            if (!empty($id)) {
                foreach ($id as $item){
                    echo "<p>$item</p>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>Details</strong>
            <?php
            if (!empty($id)) {
                foreach ($id as $item){
                    echo "<a href='/admin/post?id=$item' class='d-block py-3 details'>Details</a>";
                }
            }
            ?>
        </div>
        <div class="grid-box text-center"><strong>Delete</strong>
            <?php
            if (!empty($id)) {
                foreach ($id as $item){
                    echo "<a href='/admin/deletePost?id=$item' class='d-block py-3 details'><i class='fas fa-trash-alt'></i></a>";
                }
            }
            ?>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/2a5762761f.js" crossorigin="anonymous"></script>

</body>
