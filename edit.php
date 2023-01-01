<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BERANDA</title>
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
        <div class="posisiedit">
        <br>
        <h3 class="kataedit">Edit Data</h3>
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM genshin WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form action="update.php" method="post">
            <table style="color:rgb(167, 226, 248)">
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td><input type="number" name="id" value="<?php echo $d['id'] ?>"></td>
                </tr>
                <tr>
                    <td>FeedBack</td>
                    <td>:</td>
                    <td><input type="text" name="FeedBack" value="<?php echo $d['FeedBack'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="UBAH"></td>
                </tr>
            </table>
        </form>
        <?php 
    }
    ?>
            <a href="comment.php" class="kembali">Kembali</a>
    </div>
        <footer>
            <p>RIKY TEGUH WIJAYA</p>
        </footer>
        <!--
        <audio autoplay loop>
            <source src="Load Screen Genshin Impact.mp3" type="audio/mpeg">
        </audio>
        -->
        <script src="slider.js"></script>
        <script src="jsslider.js"></script>
        <script src="scroll.js"></script>
    </body>
</html>