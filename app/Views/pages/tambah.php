<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (session()->getFlashdata('pesan')) {
    echo session()->getFlashdata('pesan');
}
?>
    <form action="<?=base_url('coba/insert')?>" method="post">
        <?= csrf_field() ?>
        <input type="text" name="nama">
        <br>
        <input type="text" name="isi">
        <br>
        <button type="submit">Simpan1</button>
    </form>
    <script>
    $.ajax({
        type: "method",
        url: "url",
        data: "data",
        beforeSend: function() {
        // setting a timeout
            $(placeholder).addClass('loading');
        },
        success: function (response) {
            
        }
    });
    </script>
</body>
</html>