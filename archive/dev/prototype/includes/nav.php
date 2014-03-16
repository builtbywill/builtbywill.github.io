<?php include("../assets/php/constants.php"); ?>
<!-- @start nav -->
    <ul id="nav">
        <li><a href="<?php echo $siteRoot; ?>" title="Home" >Home</a></li>
        <li class="main"><a href="<?php echo $siteRoot; ?>research-group/" title="Research Group">Research Group</a>
            <?php include("nav-group.php"); ?>
        </li>
        <li class="main"><a href="<?php echo $siteRoot; ?>software-projects/" title="Software Projects">Software Projects</a>
            <?php include("nav-projects.php"); ?>
        </li>                
        <li class="main"><a href="<?php echo $siteRoot; ?>science-applications/" title="Science Applications">Science Applications</a>
            <?php include("nav-apps.php"); ?>
        </li>                
        <li class="main"><a href="<?php echo $siteRoot; ?>publications/" title="Publications">Publications</a>
            <?php include("nav-publications.php"); ?>
        </li>               
        <li><a href="<?php echo $siteRoot; ?>news" title="News">News</a></li>               
        <li><a href="<?php echo $siteRoot; ?>contact" title="Contact">Contact</a></li>                               
    </ul>
<!-- @end nav -->