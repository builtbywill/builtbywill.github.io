<?php include("../assets/php/constants.php"); ?>
<!-- @start upperNav -->
            <ul id="upperNav">
                <?php if(!empty($_SESSION["userID"])){ ?><li><a href="<?php echo $siteRoot; ?>manage" title="User Menu">User Menu</a></li><?php } ?>
                <?php if(!empty($_SESSION["userID"])){ ?><li><a href="<?php echo $siteRoot; ?>manage/logout" title="Logout">Logout</a></li><?php } ?>
                <?php if(empty($_SESSION["userID"])){ ?><li><a href="<?php echo $siteRoot; ?>manage" title="Login" >Login</a></li><?php } ?>
            </ul>
<!-- @end upperNav -->
