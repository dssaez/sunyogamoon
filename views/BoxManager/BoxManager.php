<div id="BoxManager" class="BoxManager">

        <?php include_once VIEWS.'/BoxManager/contact.php'; ?>

        <?php

                foreach ($Box_Manager as $key => $valor){

                        if ($key == "Email_Sent")
                                include_once VIEWS.'/BoxManager/EmailSent.php';

                        if ($key == "notfound")
                                include_once VIEWS.'/BoxManager/404.php';
                                
                }

        ?>

</div>
