<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COMMENT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css2.css">
    </head>
    <body>
        <header>
            <img src="genshin.png" class="header">
            <img src="pngegg (1).png" class="headersamping">
            <img src="Bunga.png" class="bungaheader">
            <img src="Hu-Tao.png" class="hutaoheader">
            <img src="Keqing 2.png" class="keqingheader">
            <div class="satu">
                <div class="dua">
                    <div class="header2">
                        <img src="14.png" style="width:100%">
                    </div>
                    <div class="header2">
                        <img src="13.png" style="width:100%">
                    </div>
                    <div class="header2">
                        <img src="12.jpg" style="width:100%">
                    </div>
                    <div class="header2">
                        <img src="11.jpg" style="width:100%">
                    </div>
                    <div class="header2">
                        <img src="15.jpg" style="width:100%">
                    </div>
                    <div class="header2">
                        <img src="12.jpg" style="width:100%">
                    </div>
                </div>    
            </div>
        </header>
        <div class="nav">
            <ul>
                <li class="list">
                    <a href="beranda.html">
                        <span class="text">BERANDA</span>
                    </a>
                </li>
                <li class="list">
                    <a href="Karakter.html">
                        <span class="text">KARAKTER</span>
                    </a>
                </li>
                <li class="list">
                    <a href="comment.php">
                        <span class="text">FEEDBACK</span>
                    </a>
                </li>
                <li class="list">
                    <a href="index.html">
                        <span class="text">KEMBALI</span>
                    </a>
                </li>
            </ul>
        </div>
        <br>
        <div class="materi0">
            <img src="Wanderer 2.png">
            <img src="indra tercerahkan.png" class="katakata">
            <img src="lingkaran.png" class="lingkata">
            <img src="lingkaran.png" class="ling">
        </div>
        <div class="feedback">
        <h2>FeedBack</h2>
        <form action="input-aksi.php" method="post">
        <table class="tablefeed">
            <tr>
                <td>
                    <p>No</p>
                    <input type="number" name="id" class="namafeed">
                </td>
                <td>
                    <p>FeedBack</p>
                    <input type="text" name="FeedBack" class="feedfeed">
                </td>
                <td>
                    <p><br></p>
                    <input type="submit" value="Kirim" class="kirimfeed">
                </td>
            </tr>
        </table>
        </form>
        </div>
        <br>
        <table border="2" class="tablephp">
            <tr>
                <td>No</td>
                <td>FeedBack</td>
                <td>Edit or Delete</td>
            </tr>
        <?php
        include "koneksi.php";
        $data = mysqli_query($koneksi, 'select * from genshin');
        while($da = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td>
                    <?php echo $da['id']?>
                </td>
                <td>
                    <?php echo $da['FeedBack']?>
                </td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $da['id']?>">EDIT</a>
                    <a class="delete" href="hapus.php?id=<?php echo $da['id']?>">DELETE</a>
                </td>
            </tr>
            
        <?php }
        ?>
        </table>
        <footer>
            <p>RIKY TEGUH WIJAYA</p>
        </footer>
        <!--
        <audio autoplay loop>
            <source src="Load Screen Genshin Impact.mp3" type="audio/mpeg">
        </audio>
        -->
        <script src="jsslider.js"></script>
    </body>
</html>