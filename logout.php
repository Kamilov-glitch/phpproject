<?php

session_start();
session_destroy();

include "UI_include.php";
include INC_DIR . "header.html";

?>

<body>
    <div class="logoutsuccess">
        <div class="card read-card">
            <div class="card-body">
                <p>You have logged out successfully</p>
                    <div>
                        <?php
                            if (isset($_GET['admin'])) {
                                echo "<a href = 'admin.php'>Click here to log in again</a>";
                            } else {
                                echo "<a href = 'index.php'>Click here to log in again</a>";
                            }
                        ?>
                    </div>                
            </div>
        </div>

    </div>
</body>
</html>                            


