<!-- This file is used to markup the public-facing widget. -->

<?php 
    if( strlen(trim($weekdays)) > 0 ) { ?>
        <p>
           <span class="widget-hours">
               Monday to Friday:
            </span>
            <?php echo $weekdays; ?>
        </p>
<?php
    }
?>

<?php 
    if( strlen(trim($saturday)) > 0 ) { ?>
        <p>
           <span class="widget-hours">
               Saturday:
            </span>
            <?php echo $saturday; ?>
        </p>
<?php
    }
?>

<?php 
    if( strlen(trim($sunday)) > 0 ) { ?>
        <p>
           <span class="widget-hours">
               Sunday:
            </span>
            <?php echo $sunday; ?>
        </p>
<?php
    }
?>