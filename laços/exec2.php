<?php
    echo "<select>";
        for ($i = date("Y"); $i >= 1922; $i--) { 
            echo '<option value ="'.$i.'">' .$i. '</option>';
        }
    echo "</select>";
?>