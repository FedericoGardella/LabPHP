<?= view('template/head')?>

<body>
    <?= view('template/header')?>

    <div class="flex flex-col items-center justify-center min-h-screen gap-y-2">

            <?php echo $this->renderSection('slot') ?>

            <?php echo $this->renderSection('slot') ?>

            <?php echo $this->renderSection('slot') ?>

    </div>

    <?= view('template/footer')?>

</body>


</html>