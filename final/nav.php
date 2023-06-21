
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
    ?>" href="array.php">Jobs</a>

    <a class= "<?php
    if ($pathParts['filename'] == "detail"){
        print 'activePage';
}
    ?>" href="detail.php">Projects</a>

    <a class= "<?php
    if ($pathParts['filename'] == "form"){
        print 'activePage';
}
    ?>" href="form.php">Form</a>

<a class= "<?php
    if ($pathParts['filename'] == "ajax"){
        print 'activePage';
}
    ?>" href="ajax.php">Extracurriculars</a>

</nav>