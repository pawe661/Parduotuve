<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/navbar.php'; ?>

<h1>Titulinis Puslapis</h1>
<?php echo $kintamasis; ?>
<form method="POST">
    <input type="text" name="hello" />
    <button type="submit">Siųsti</button>
</form>

<?php require __DIR__ . '/includes/footer.php'; ?>