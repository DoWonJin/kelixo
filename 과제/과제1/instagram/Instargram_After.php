<?php
$dbh = new PDO('mysql:host=localhost:3307;dbname=instagram', 'root', 'eh1105', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="instagram.css">
</head>
<body>

  <header>
    <div class="out">
      <div class="home"></div>
      <div class="search">
        <input type="text" name="" value="" placeholder="search" size="27.3">
      </div>
      <div class="personal">
        <?php
        $link = array(
          'direc'=>"https://www.instagram.com/explore/",
          'heart_grp'=>"https://www.instagram.com/",
          'account'=>"https://www.instagram.com/wonjind/"
         );
        foreach ($link as $key => $value) {
          echo "<a class={$key} href={$value}></a>";
        }
         ?>
      </div>
    </div>
  </header>

  <article>
      <?php
      for($num=0;$num<count($data);$num++){     ?>
        <div class="news_<?php echo $num ?>">
          <section class="cotents">
            <div class="info">
              <div class="photo_small">
                <a href="#" style="width: 30px;height:30px;">
                  <img src=
                  <?php
                    //$sql="SELECT id,photosmall FROM USER WHERE id=".($num+1);

                    $sql="SELECT upload.id,upload.photoupload,user.name,user.location, user.photosmall FROM upload LEFT JOIN user ON upload.name=user.id WHERE upload.id=".($num+1);
                    $stmt = $dbh->prepare($sql);
                    $stmt->execute();
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    echo $row["photosmall"];
                   ?>


                   width="32px" height="32px"></a>
              </div>
              <div class="person">
                <div class="id">
                  <a href="#"><?= $row["name"];
                   ?></a>
                </div>
                <div class="location">
                  <a href="#"><?= $row["location"] ?></a>
                </div>
              </div>

            </div>
            <div class="photo_upload">
              <img src=<?= $row["photoupload"] ?> alt="" width="100%">
            </div>
            <div style="padding-left:10px;">
              <div class="middle">
                  <div class="heart_<?= ($num+1) ?>">
                    <a href="#"></a>
                  </div>
                  <div class="talk">
                    <a href="#"></a>
                  </div>
                  <div class="save">
                    <a href="#"></a>
                  </div>
              </div>
              <div class="like">
                <b>157likes</b>
              </div>
              <div class="story">
                <ul class="lx">
                  <?php
                  $sql="SELECT story.id,story.section,user.name,story.description FROM story LEFT JOIN user ON story.writer=user.id WHERE story.section=".($num+1);
                  //var_dump($sql);
                  $stmt = $dbh->prepare($sql);
                  $stmt->execute();
                  while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                  {
                    echo '<li><a href="">'.$row['name'].'</a><a href="">'.$row['description'].'</a></li>';
                  }
                  //echo $row["photosmall"];

                   ?>


                </ul>
              </div>
            </div>
            <div class="comment">
              <textarea name="name" rows="1" cols="80"></textarea>
              <button type="button" name="button">..</button>
            </div>
          </section>
        </div>
<?php } ?>

  </article>

  <section class="navi">
    <div class="tx">
      <div class="mine">
        <div class="photo_small">
          <a href="#" style="width: 35px;height:35px;">
            <img src="img/instar_mobile.jpg" width="40px" height="40px">
          </a>
        </div>
        <div class="person_navi">
          <div class="NickName">
            <a href="#"><b>NickName</b></a>
          </div>
          <div class="Name">
            <a href="#">Name</a>
          </div>
        </div>
      </div>
    </div>
    <div class="story">
      <p>Stories</p>
      <small>Stories from people you follow will show up here.</small>
    </div>
    <footer>
      <ul>
      <?php
        $li=array('About us','Support','Blog','Press','API','Jobs','Privacy','Terms','Directory','Language');
        for($n=0;$n<count($li);$n++){
          echo '<li>'.$li[$n].'</li>';
        }
       ?>
     </ul>
      <p>@2017 INSTAGRAM</p>
    </footer>
  </section>

  <div class="download">
    <div class="tc">
      <div class="pic2"></div>
      <div class="explain">
        <p>Experiencce the best version of<br> Instagram by getting the app.</p>
      </div>
      <div class="logo">
        <?php
          $logo = array('micro','google','apple');
          for($i=0;$i<count($logo);$i++)
          {
            echo '<div class='.$logo[$i].'></div>';
          }
         ?>
      </div>
    </div>

  </div>




</body>
</html>
