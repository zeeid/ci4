<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CKEditor 5 - Classic editor</title>
    <script src="<?=base_url('Njerone/js/')?>/jquery-2.2.4.min.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script> -->
</head>

<body>
    <!-- <div id="editor">
        <p>This is the editor content.</p>
    </div> -->
    <form action="<?=base_url('coba/simpan')?>" method="post">
        <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
        <button type="submit">SIMPAN</button>
    </form>
    <script src="<?=base_url('Njerone/gonku/')?>/ck5/ckeditor.js"></script>
    <script src="<?=base_url('Njerone/gonku/')?>/myuploader.js"></script>
    <!-- <script src="/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script> -->
    <!-- <script src="/@ckeditor/ckeditor5-build-classic/build/myuploader.js"></script> -->
    <script>
    function MyCustomUploadAdapterPlugin(editor) {
        editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
            return new MyUploadAdapter(loader);
        };
    }
    // ClassicEditor
    //     .create(document.querySelector('#editor'), {
    //         extraPlugins: [MyCustomUploadAdapterPlugin],
    //     })
    //     .then(editor => {
    //         window.editor = editor;
    //     })
    //     .catch(err => {
    //         console.error(err.stack);
    //     });
    // editor.ui.view.height = '200px';
    </script>
</body>

</html>