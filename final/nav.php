
<nav>
    <a class= "<?php
    if ($pathParts['filename'] == "index"){
        print 'activePage';
}
    ?>" href="index.php">About Me</a>

    <a class= "<?php
    if ($pathParts['filename'] == "array"){
        print 'activePage';
}
    ?>" href="array.php">India</a>

    <a class= "<?php
    if ($pathParts['filename'] == "detail"){
        print 'activePage';
}
    ?>" href="detail.php">Portugal</a>

    <a class= "<?php
    if ($pathParts['filename'] == "form"){
        print 'activePage';
}
    ?>" href="form.php">Form</a>

</nav>