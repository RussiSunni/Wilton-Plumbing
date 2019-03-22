<?php
    include "header.php";
?>

    <div class="container">
        <section class="mt-3">
            <h1>Gallery</h1>

        </section>


        <section class="mt-3">
            <div class= "row">
                <img src="../images/gallery/gallery-thumbnail-01.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-02.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-03.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-04.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
            </div>
            <div class="row">
                <img src="../images/gallery/gallery-thumbnail-05.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-06.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-07.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-08.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
            </div>
            <div class="row">
                <img src="../images/gallery/gallery-thumbnail-09.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-10.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-11.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
                <img src="../images/gallery/gallery-thumbnail-12.jpg" alt="..." class="img-thumbnail"
                    style="width:250px;height:250px;">
            </div>
        </section>

        <section>
                <div class="row">
                    <img src="../images/gallery/gallery-thumbnail-13.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                    <img src="../images/gallery/gallery-thumbnail-14.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                    <img src="../images/gallery/gallery-thumbnail-15.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                    <img src="../images/gallery/gallery-thumbnail-16.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
    
                </div>
                <div class="row">
                    <img src="../images/gallery/gallery-thumbnail-17.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                    <img src="../images/gallery/gallery-thumbnail-18.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                    <img src="../images/gallery/gallery-thumbnail-19.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                    <img src="../images/gallery/gallery-thumbnail-20.jpg" alt="..." class="img-thumbnail"
                        style="width:250px;height:250px;">
                </div>
            </section>

    </div>

    
<?php
    include "footer.php";
?>

<?php
$to = "jonathandyason@hotmail.com, jonathandyason@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>