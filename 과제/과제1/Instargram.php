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
      $photo_small_url = array('dohee_small.jpg','ddongE.jpg','chorong.jpg');
      $id = array('iamdoo2','egoing','chorong');
      $location=array('Dobai','Paris','Seoul');
      $photo_large_url = array('dohee.jpg','supercar.jpg','http://dimg.donga.com/ugc/CDB/SODA/Article/57/d7/92/3b/57d7923b00c7d2738de6.jpg');

      for($num=0;$num<count($photo_small_url);$num++){
        echo '<div class="news_'.$num.'">
          <section class="cotents">
            <div class="info">
              <div class="photo_small">
                <a href="#" style="width: 30px;height:30px;">
                  <img src='.$photo_small_url[$num].' width="32px" height="32px">
                </a>
              </div>
              <div class="person">
                <div class="id">
                  <a href="#">'.$id[$num].'</a>
                </div>
                <div class="location">
                  <a href="#">'.$location[$num].'</a>
                </div>
              </div>

            </div>
            <div class="photo_upload">
              <img src='.$photo_large_url[$num].' alt="" width="100%">
            </div>
            <div style="padding-left:10px;">
              <div class="middle">
                  <div class="heart_'.($num+1).'">
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
                  <li><a href="">iamdoo2</a><a href="">푸른나라에서 크리스마스</a></li>
                  <li><a href="">iosoungm</a><a href="">이게 자유로운 삶이구나..</a></li>
                  <li><a href="">yonjee</a><a href="">유부남 고생많다</a></li>
                </ul>
              </div>
            </div>
            <div class="comment">
              <textarea name="name" rows="1" cols="80"></textarea>
              <button type="button" name="button">..</button>
            </div>
          </section>
        </div>';
      }
     ?>
  </article>

  <section class="navi">
    <div class="tx">
      <div class="mine">
        <div class="photo_small">
          <a href="#" style="width: 35px;height:35px;">
            <img src="instar_mobile.jpg" width="40px" height="40px">
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
