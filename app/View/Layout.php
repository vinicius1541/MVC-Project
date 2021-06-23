<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php echo $this->addHead(); ?>
</head>
<body>
    <div class="nav">
        <a href="<?= DIRPAGE ?>">Home</a>
        <a href="<?= DIRPAGE . 'contact'?>">Contact </a>
    </div>
    <?php
        # Retire esses comentários para usar os breadcrumbs!
        # $breadcrumb = new Src\Classes\ClassBreadcrumb();
        # $breadcrumb->addBreadcrumb();
    ?>

    <div class="header">
        <?php echo $this->addHeader(); ?>
    </div>
    <div class="main">
        <?php echo $this->addMain(); ?>
    </div>
    <div class="footer">
        <?php echo $this->addFooter(); ?>
    </div>
</body>
</html>
