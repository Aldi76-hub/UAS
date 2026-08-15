<?php
session_start();
if(!isset($_SESSION['nama']) || $_SESSION['nama'] !== '@admin'){
  header('location: ../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include('../../koneksi/config.php');
    $id = $_GET['id'];
    $konten = mysqli_query($connection,'SELECT * FROM konten WHERE id_konten = '.$id.'');
    $data = $konten->fetch_assoc();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Konten</title>

</head>

<body>
    <form action="update.php" method="POST">
        <h2>Edit Konten</h2>
        <input type="hidden" name="id_konten" value="<?= $id ?>">
        <textarea name="kontent" id="kontent"><?= $data['isi_konten'] ?></textarea>
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
</body>
<script src="https://cdn.tiny.cloud/1/n7m54szhpxwa7fetgrsbyt74ccknp5y8724r34zqc875y61k/tinymce/8/tinymce.min.js"
    referrerpolicy="origin" crossorigin="anonymous"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
            // Core editing features
            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
            // Premium features
            'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'tinymceai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
        ],
        toolbar: 'undo redo | tinymceai-chat tinymceai-quickactions tinymceai-review | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        tinymceai_token_provider: async () => {
            await fetch(`https://demo.api.tiny.cloud/1/n7m54szhpxwa7fetgrsbyt74ccknp5y8724r34zqc875y61k/auth/random`, { method: "POST", credentials: "include" });
            return { token: await fetch(`https://demo.api.tiny.cloud/1/n7m54szhpxwa7fetgrsbyt74ccknp5y8724r34zqc875y61k/jwt/tinymceai`, { credentials: "include" }).then(r => r.text()) };
        },
        uploadcare_public_key: 'aeea40898d9ef925e0d2',
    });
</script>

</html>