
<!DOCTYPE html>
<html>
 <head>
  <title>How to Upload Image using ckeditor in PHP</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">How to Upload Image using ckeditor in PHP</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">How to Upload Image using ckeditor in PHP</h3>
    </div>
    <form action="<?=base_url('coba/simpan')?>" method="post">
        <div class="panel-body">
            <textarea name="content" id="content" class="form-control ckeditor"></textarea>
        </div>
        <button type="submit">SIMPAN</button>
    </form>
   </div>
  </div>
 </body>
</html>

<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "unggahgambar"
 });
</script>

