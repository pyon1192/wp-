
    <?php get_header(); ?>
    <main>
<div class="hero-image-container" id = "Top">
    <div class="hero-image">
        <div class="hero-text">
            <h1>夢からデジタルへ</h1>
            <p>プロジェクトに対する真摯な情熱で<br>
                夢を現実に昇華させ、新たな価値を生み出す。<br>
                そんなお手伝いができればと思います。</p>  
            </div>
    </div>
</div>
<div class="profile-container" id="aboutme">
    <h1>About Me</h1>
    <hr class="thick-line">
    <p>神奈川県出身の駆け出しエンジニア
        高校からなんとなくPCを触っていたが、 理系大学に入ってから本格的にプログラミングに取り組む。
     某通信キャリアにてソフトウェアエンジニアとして半年間インターンシップに参加後、内定を頂く。
     残りの学生生活で何か変わった体験をしたいと考え、
     フリーランスエンジニアとして活動し、人を満足させられるソフトウェア開発を目指す。
     ウェブ開発、ツール開発をメインに行なっている。
    </p>
</div>
<div class="works-container" id="works">
        <h1>My Works</h1>
        <hr class="thick-line">
        <p>
            趣味での開発から、大学の研究内での開発、依頼を受けた会社HPの開発など。
        </p>
  <div class="overlay" id="overlay"></div>
    <div class="works">
      <div class="button-grid">
          <?php if (have_posts() ): ?>
          <?php while ( have_posts() ) : the_post();?>
          <div class="button-item">
            <?php if ( has_post_thumbnail()): ?>
              <a class="modal-button" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumbnails');?>
              </a>
            <?php else: ?>
              <a class="modal-button" href="<?php the_permalink(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/lab1.jpeg" alt="投稿がありません">
              </a>
          </div>
              <?php endif; ?>
                  <p class="button-label"><?php the_title(); ?></p>      
              <?php endwhile; else: ?>
                  <p>投稿がありません</p>
              <?php endif; ?>
          
      </div>  
    </div>
</div>   
<!-- 全体のコンテナ -->
<div class="skill-text" id="skills">    
    
<h1>My Skills</h1>
<hr class="thick-line">
<p>
    長期インターンや趣味での開発で得た技術、資格
</p>
</div> 
<div class="skill-container" >
    
<!-- スキルセクション -->
<div id="skill" class=" card-section">
  <h2>My Skills</h2>
  <div class="card-container">
    <div class="card skill-card">
      <i class="fab fa-python"></i>
      <h3>Python</h3>
      <p class="detail">flaskを用いたサーバサイドのやり取り<br>グラフ理論の計算処理<br>エクセルファイルの差分検出ツール開発<br>OpenAPIを用いた相談チャット開発</p>
    </div>
    <div class="card skill-card">
        <i class="fab fa-php"></i>
        <h3>PHP</h3>
        <p class="detail">WordPressを用いた際に、投稿をfor文で表示、<br>htmlファイルのHPをワードプレス化する際に<br>ヘッダー、フッターで使用<br></p>
      </div>
    <div class="card skill-card">
      <i class="fab fa-html5"></i>
      <h3>HTML/CSS</h3>
      <p class="detail">レスポンシブ対応<br>WordPressを用いたサイト制作経験有り<br>ツール開発のフロントエンド</p>
    </div>
    <div class="card skill-card">
      <i class="fab fa-js"></i>
      <h3>JavaScript</h3>
      <p class="detail">動的なサイト開発<br>jQuery<br>モーダルウィンドウなどに利用</p>
    </div>
    <div class="card skill-card">
        <i class="fab fa-github"></i>
        <h3>Git hub</h3>
        <p class="detail">友人との共同開発、長期インターンでの開発に使用<br>リポジトリのクローン、マージ、プル<br>などは大まかに理解し復習中</p>
    </div>
    <div class="card skill-card">
        <i class="fab fa-aws"></i>
        <h3>AWS</h3>
        <p class="detail">主に長期インターンシップで利用<br>サーバーレスのlambdaや<br>S3などの使用経験有り<br>特定のバケットにファイル格納↓<br>ファイル同士の差分検出後<br>ファイルを特定のバケットに出力する等</p>
    </div>
  </div>
</div>
<!-- 資格セクション -->
<div id="qualifications" class="card-section">
  <h2>My Qualifications</h2>
  <div class="card-container">
    <div class="card qualification-card">
      <h3>基本情報技術者</h3>
    </div>
    <div class="card qualification-card">
        <h3>ITパスポート</h3>
    </div>
    <div class="card qualification-card">
      <h3>アジャイルソフトウェア<br>開発技術者lv.1</h3>
    </div>
    <div class="card qualification-card">
        <h3>Python3エンジニア<br>実践認定試験</h3>
    </div>
    <div class="card qualification-card">
        <h3>Python3エンジニア<br>基礎認定試験</h3>
    </div>
      
    <!-- ... その他の資格 -->
  </div>
</div>

</div>
</main>

  <?php get_footer(); ?>
  
  