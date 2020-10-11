<?php


?>

<div class="container-fluid px-0">
    <div class="grid-2">
        <div class="grid-box text-center"><strong>First Name</strong>
            <p>
                <?php
                echo $pageData['dbData'][0]['first_name'] ?? '';
                ?>
            </p>
        </div>
        <div class="grid-box text-center"><strong>Last Name</strong>
            <p>
                <?php
                echo $pageData['dbData'][0]['last_name'] ?? '';
                ?>
            </p>
        </div>
        <div class="grid-box text-center"><strong>Email</strong>
            <p>
                <?php
                echo $pageData['dbData'][0]['email'] ?? '';
                ?>
            </p>
        </div>
        <div class="grid-box text-center"><strong>Sent Date</strong>
            <p>
                <?php
                echo $pageData['dbData'][0]['sent_date'] ?? '';
                ?>
            </p>
        </div>
    </div>
    <div class="grid-box text-center"><strong>Message</strong>
        <p>
            <?php
            echo $pageData['dbData'][0]['message'] ?? '';
            ?>
        </p>
    </div>
    <a href="/admin">Go back</a>
</div>
