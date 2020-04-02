<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    </head>
    <body>
        <textarea name="content" id="editor">This is some sample content.</textarea>
        <script>
                    ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor = > {
                    console.log(editor);
                    })
                    .catch(error = > {
                    console.error(error);
                    });
        </script>
    </body>
</html>