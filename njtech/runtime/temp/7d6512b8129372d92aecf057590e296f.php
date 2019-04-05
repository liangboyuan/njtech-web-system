<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/Applications/MAMP/htdocs/njtech/public/../application/index/view/index/xiaoli.html";i:1545296276;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>南京工业大学校历</title>
    <script type="text/javascript" src="__INDEX__/js/pdfobject.min.js"></script>
</head>
<style>
    html,body{
        height: 100%;
    }
    .pdfobject-container {
        height: 100%;  }
    .pdfobject { border: 1px solid #666; }
</style>
<body style="height: 100%;padding: 0;margin: 0;width: 100%;">
<div id="example1"></div>
<script type="text/javascript">
    PDFObject.embed("<?php echo $xiaoli['thumb']; ?>", "#example1");
</script>
</body>
</html>