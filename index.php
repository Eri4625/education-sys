<?php require_once( dirname( __FILE__ ) . '/../../../wp-load.php' ); if ---
<!-- Because of the personal names, these two lines will be kept private. -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>教育システムデザイン　最終レポート</title>
    <link href="https://?????/desgin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
  </head>
  <body>
    <!--背景-->
    <div class="back bback"></div>
    <div class="title">
      <svg viewBox="0 0 3387 1270">
        <path id="planePath" class="planePath" d="M-226 626c439,4 636,-213 934,-225 755,-31 602,769 1334,658 562,-86 668,-698 266,-908 -401,-210 -893,189 -632,630 260,441 747,121 1051,91 360,-36 889,179 889,179" />
        <g id="plane">
          <polygon class="fil1" points="-141,-10 199,0 -198,-72 -188,-61 -171,-57 -184,-57 " />
          <polygon class="fil2" points="199,0 -141,-10 -163,63 -123,9 " />
          <polygon class="fil3" points="-95,39 -113,32 -123,9 -163,63 -105,53 -108,45 -87,48 -90,45 -103,41 -94,41 " />
          <path class="fil4" d="M-87 48l-21 -3 3 8 19 -4 -1 -1zm-26 -16l18 7 -2 -1 32 -7 -29 1 11 -4 -24 -1 -16 -18 10 23zm10 9l13 4 -4 -4 -9 0z" />
          <polygon class="fil1" points="-83,28 -94,32 -65,31 -97,38 -86,49 -67,70 199,0 -123,9 -107,27 " />
        </g>
        <!-- Define the motion path animation -->
        <animateMotion xlink:href="#plane" dur="5s" repeatCount="indefinite" rotate="auto">
          <mpath xlink:href="#planePath" />
        </animateMotion>
      </svg>
      
      <!--題名-->
      <div>
        <h1>みえるみえる電荷の動き</h1><br>

        <p class="number">
          Eri
        </p>
      </div>

    </div>

    <!--chapter1 (補助説明)-->
    <h3 class="sh3">荷電粒子</h3>

    <p>
      荷電粒子とは、その名の通り電荷を帯びた小さな物体のことを指します。<br>
      荷電粒子は(陽子、電子、イオン等々)様々ありますが、高校物理において主に、知っておくべき荷電粒子は「陽子」「電子」の2つでしょう。<br>
      それぞれの詳細については、参考文献<cite>JAEA</cite>を参照してください。

    <table class="table">
      <thead>

        <th>名称</th>
        <th>質量</th>
        <th>電荷量</th>

      </thead>
      <tbody>

        <tr>
          <td>陽子</td>
          <td>\(1.6725 \times 10^{-27} \mathrm{kg}\)</td>
          <td>\(1.6021 \times 10^{-19} \mathrm{C}\)</td>
        </tr>

        <tr>
          <td>電子</td>
          <td>\(9.2918 \times 10^{-31} \mathrm{kg}\)</td>
          <td>\(-1.6022 \times 10^{-19} \mathrm{C}\)</td>
        </tr>

      </tbody>
    </table>

    </p><br>

    <!--chapter2 (方程式)-->
    <h3>荷電粒子の運動方程式</h3>

    <div class="card mb-3">
      <div class="row g-0">

        <div class="col-md-8">
          <div class="card-body">

            <h5 class="card-title" style="font-weight: bold;">公式で求める解(解析解)</h5>

            <p class="card-text">
              本来は3次元で考える必要があるが簡単のため、2次元での荷電粒子の運動を考えることにする。<br>
              磁束密度\(B\)[T]の一様な磁場、荷電粒子の質量\(m\)[kg]、電気量\(q\)[C]、速度\(v\)[m/s]、軌道円周半径\(r\)[m]。<br>
              荷電粒子にかかるローレンツ力\(f\)[N]、向心力\(F\)[N]として場合、以下の式で定義される。
              \[f = qvB\]
              \[F = m\frac{v^{2}}{r}\]
              フレミングの左手の法則により、磁場の方向と荷電粒子の速度により力の方向が決まり、<br>それが荷電粒子の運動方向に影響を与える。つまり、荷電粒子は円運動することが知られている。<br>
              よって、上記の2式(ローレンツ力と向心力)は一致するため以下の等式を得ることができる。
              \[m\frac{v^{2}}{r} = qvB\]
              上記の式を変形することにより、解軌道の半径\(r\)、周期\(T\)[s]を求めることができる。
              \[r = \frac{mv}{qB}\]
              \[T = \frac{2\pi r}{v} = \frac{2\pi m}{qB}\]
            </p>

          </div>
        </div>

        <div class="col-md-4">
          <img src="https://esd.kano.ac/editor/files/4620015/graph_2.png" alt="2次元の荷電粒子の運動の図" width="450" height="300">
          <img src="https://esd.kano.ac/editor/files/4620015/Fleming.png" alt="フレミングの左ての法則の図" width="450" height="300">
        </div>

      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">

        <div class="col-md-8">
          <div class="card-body">

            <h5 class="card-title" style="font-weight: bold;">本シミュレーションの解(数値解)</h5>

            <p class="card-text">
              3次元における荷電粒子の位置を\(p = (x, y, z)^\mathrm{T}\)、速度を\(v = (v_x, v_y, v_z)^\mathrm{T}\)とし、<br>磁束密度は\(z\)方向のみ存在するので\(B = (0, 0, b)^T\)(\(b\)は磁束密度の大きさを示す)。<br>
              以下が荷電粒子の運動を支配する方程式である。なお、\(E\)は電場ベクトルである。
              \[d^2p/dt = q(E + v\times B)/m\]
              ここで、\(E = 0\)、\(d^2p/dt = v\)とすると以下のように微分方程式を分解することができる。
              \[
              \left\{
              \begin{array}{l}
              \;\; dp/dt = v\\
              \;\; dv/dt = q(v\times B)/m
              \end{array}
              \right.
              \]
              ここで、\(dv/dt\)の指揮に関して\(x, y, z\)方向に分けて考えると、上記の式は以下ののようになる。
              \[
              \left\{
              \begin{array}{l}
              \;\; dv_x/dt = qv_yB/m\\
              \;\; dv_y/dt = -qv_xB/m\\
              \;\; dv_z/dt = 0
              \end{array}
              \right.
              \]
              この式からも円軌道をすることが理解でき、また\(z\)方向の速度は等速になることがわかる。<br>
              今回は、3次元ではなく、2次元でのシミュレーションを作成したので、\(z\)方向の速度なしとして考えている。
            </p>

          </div>
        </div>

        <div class="col-md-4">
          <img src="https://esd.kano.ac/editor/files/4620015/graph_3.png" alt="3次元の荷電粒子の運動の図" width="450" height="300">
        </div>

      </div>
    </div><br>

    <!--chapter3 (メイン)-->
    <h3>荷電粒子の運動で遊ぼう</h3>

    <div id="info" style="margin-left: 30px" data-title="経過時間" data-step="8" data-intro="経過時間が表示されます。">経過時間: 0.00 s</div>

    <div>
      <!--シミュレーション結果-->
      <canvas style="float: left; margin-left: 30px" id="myCanvas" width="600" height="400" data-title="キャンバス" data-step="9" data-intro="シミュレーション結果が表示されます。<br>シミュレーション中はこの画面を押すとスロー再生されます。<br>シミュレーション中でなければ、荷電粒子の位置や速度をマウスドラッグで変更できます。"></canvas>

      <!--オプション-->
      <table class="table table-bordered" data-title="初期値変更領域" data-step="7" data-intro="荷電粒子の各種設定を変更できます。<br>(初期位置以外は、シミュレーション中変更可)">
        <thead>

          <tr>
            <th>可変パラメータ名</th>
            <th>入力</th>
            <th>単位</th>
          </tr>

        </thead>
        <tbody>

          <tr>
            <td>初期座標(\(x\))</td>
            <td>
              <input type="range" id="rangeX" value="150" min="0" max="600" oninput="changeRangeX()">
              <input type="number" id="numberX" value="150" min="0" max="600" oninput="changeNumberX()">
            </td>
            <td>\[\mathrm{m}\]</td>
          </tr>

          <tr>
            <td>初期座標(\(y\))</td>
            <td>
              <input type="range" id="rangeY" value="250" min="0" max="400" oninput="changeRangeY()">
              <input type="number" id="numberY" value="250" min="0" max="400" oninput="changeNumberY()">
            </td>
            <td>\[\mathrm{m}\]</td>
          </tr>

          <tr>
            <td>質量</td>
            <td>
              <input type="range" id="rangeM" value="0.5" min="0.4" max="2" step="0.01" oninput="changeRangeM()">
              <input type="number" id="numberM" value="1.67" min="0.4" max="2" step="0.01" oninput="changeNumberM()">
            </td>
            <td>\[10^{-27} \mathrm{kg}\]</td>
          </tr>

          <tr>
            <td>電荷</td>
            <td>
              <input type="range" id="rangeQ" value="1.6" min="-4.8" max="4.8" step="1.6" oninput="changeRangeQ()">
              <input type="number" id="numberQ" value="1.6" min="-4.8" max="4.8" step="1.6" oninput="changeNumberQ()">
            </td>
            <td>\[10^{-19} \mathrm{C}\]</td>
          </tr>

          <tr>
            <td>磁場の大きさ</td>
            <td>
              <input type="range" id="rangeB" value="0.2" min="0.01" max="1.5" step="0.01" oninput="changeRangeB()">
              <input type="number" id="numberB" value="0.2" min="0.01" max="1.5" step="0.01" oninput="changeNumberB()">
            </td>
            <td>\[10^{-7} \mathrm{T}\]</td>
          </tr>

        </tbody>

      </table>
    </div>

    <!--オプション-->
    <div style="display: flex; flex-wrap: wrap; margin-left: 30px">

      <input type="button" class="btn btn-outline-primary btn-sm" id="btnAnime" value="アニメーション開始" onclick="startAnime()" data-title="開始ボタン" data-step="1" data-intro="シミュレーションが開始します。">

      <input type="button" class="btn btn-outline-danger btn-sm" id="btnReset" value="リセット" onclick="reset()" data-title="リセットボタン" data-step="2" data-intro="初期状態にリセットされます。">

      <input type="button" class="btn btn-outline-success btn-sm" id="btnproton" value="陽子" onclick="changeME_proton()" data-title="陽子ボタン" data-step="3" data-intro="荷電粒子の質量・電気量が陽子の設定になります。<br>(シミュレーション中変更可)">

      <input type="button" class="btn btn-outline-success btn-sm" id="btnelectron" value="電子" onclick="changeME_electron()" data-title="電子ボタン" data-step="4" data-intro="荷電粒子の質量・電気量が電子の設定になります。<br>(シミュレーション中変更可)">

      <input type="button" class="btn btn-outline-success btn-sm" id="btnelectron" value="磁場反転" onclick="change_mag()" data-title="磁場反転ボタン" data-step="5" data-intro="磁場方向が反転します。<br>(シミュレーション中変更可)">

      <input type="button" class="btn btn-outline-info btn-sm" value="チュートリアル" onclick="introJs().start();">

      <div class="card" style="height: 55px;" data-step="6" data-intro="荷電粒子の色を変えることができます。<br>(シミュレーション中変更可)">
        ボールの色
        <div style="text-align: center;">
          <input type="color" id="ballcolor" value="#000000" oninput="change_ballcolor()" data-title="ボールの色変更">
        </div>
      </div>
      <!--<div class="card" style="height: 55px;">-->
      <!--  解析解の色-->
      <!--  <div style="text-align: center;">-->
      <!--    <input type="color" id="orbitcolor" value="#00eeff">-->
      <!--  </div>-->
      <!--</div>-->
    </div><br><br>

    <!--chapter4 (システム設計)-->
    <h3>シミュレーションの誤差</h3>

    <div class="card">
      <div class="card-body">

        <h5 class="card-title" style="font-weight: bold;">シンプレティック数値積分法</h5>

        <p class="card-text">
          私が今回のシミュレーションにおいて、誤差をなるべく少なくするために用いた方法が「シンプレティック数値積分法」である。<br>
          本プログラムはまず、オイラー法を取り入れた。そのため、必要になる1つ前の荷電粒子の位置と速度を保存しておく必要性がある。それぞれ、一つ前の位置を\(prex, prey\)、速度を\(prevx, prevy\)とし、更新ステップ数(\(dt = \Delta t\))を\(STEP\)とすると以下のように書くことによって、実現することが可能である。
          \[
          \left\{
          \begin{array}{l}
          \;\; // 位置の更新\\
          \;\; x = prex + STEP * prevx;\\
          \;\; x = prey + STEP * prevy;\\
          \;\; // 速度の更新\\
          \;\; vx = prevx + STEP * (q * B / m) * prevy;\\
          \;\; vy = prevy - STEP * (q * B / m) * prevx;\\
          \end{array}
          \right.
          \]
          上記の式にシンプレティック数値積分法を適応させると以下の式になる。
          \[
          \left\{
          \begin{array}{l}
          \;\; // 位置の更新\\
          \;\; x = prex + STEP * prevx;\\
          \;\; x = prey + STEP * prevy;\\
          \;\; // 速度の更新\\
          \;\; vx = prevx + STEP * (q * B / m) * vy;\\
          \;\; vy = prevy - STEP * (q * B / m) * vx;\\
          \end{array}
          \right.
          \]
        </p>

      </div>
    </div><br><br>

    <!--chapter5 (その他)-->
    <h3 class="sh3">その他</h3>
    <div class="row">

      <div class="col-sm-6">
        <div class="card">

          <img src="https://esd.kano.ac/editor/files/4620015/graph_2.png" alt="2次元の荷電粒子の運動の図" width="450" height="300">

          <div class="card-body">

            <div class="accordion accordion-flush" id="code1">
              <div class="accordion-item">

                <h5 class="accordion-header" id="code1_head">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#code1_collapse" aria-expanded="false" aria-controls="code1_collapse">
                    \(\LaTeX\)コード
                  </button>
                </h5>

                <div id="code1_collapse" class="accordion-collapse collapse" aria-labelledby="code1_head" data-bs-parent="#code1">
                  <div class="accordion-body">
                    \usepackage{pgfplots}<br>
                    \ begin{tikzpicture}<br>
                    % 軸<br>
                    \draw[-stealth](-2, 0) -- (2, 0) node[right]{x};<br>
                    \draw[-stealth](0, -2) -- (0, 2) node[right]{y};<br><br>
                    % 電場方向<br>
                    \draw(-1.6, 1.8) circle [radius = 0.2] node[left] {$B$~~};<br>
                    \fill(-1.6, 1.8) circle (2pt);<br><br>
                    % 荷電粒子の軌道<br>
                    \draw(0, 0) circle [radius = 1.5];<br>
                    \draw[-latex, line width = 0.6pt](0.75, 1.3) -- (0.95, 1.16);<br>
                    \draw[-latex, line width = 0.6pt](-0.75, -1.3) -- (-0.95, -1.16);<br><br>
                    % 荷電粒子<br>
                    \fill [green] (1.5, 0) circle (2pt);<br><br>
                    % 各変数<br>
                    \draw[line width = 2pt, orange](0, 0) -- (-0.75, 0) node[below]{$\mathrm{r}$};<br>
                    \draw[line width = 2pt, orange](-0.75, 0) -- (-1.5, 0);<br>
                    \draw[-latex, line width = 1pt, cyan](1.5, 0)--(1.5, -0.8) node [right] {$v$};<br>
                    \draw[-latex, line width = 1pt, red](1.5, 0) -- (0.9, 0) node [above] {$F$};<br>
                    \end{tikzpicture}
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">

          <img src="https://esd.kano.ac/editor/files/4620015/graph_3.png" alt="3次元の荷電粒子の運動の図" width="450" height="300">

          <div class="card-body">

            <div class="accordion accordion-flush" id="code2">
              <div class="accordion-item">

                <h5 class="accordion-header" id="code2_head">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#code2_collapse" aria-expanded="false" aria-controls="code2_collapse">
                    \(\LaTeX\)コード
                  </button>
                </h5>

                <div id="code2_collapse" class="accordion-collapse collapse" aria-labelledby="code2_head" data-bs-parent="#code2">
                  <div class="accordion-body">
                    \usepackage{pgfplots}<br>
                    \ begin{tikzpicture}<br>
                    % 軸<br>
                    \draw[-stealth](-2.5, 0, 0) -- (2.5, 0, 0) node[right]{x};<br>
                    \draw[-stealth](0, 0, -3) -- (0, 0, 3) node[below]{y};<br>
                    \draw[-stealth](0, -1, 0) -- (0, 2, 0) node[above]{z};<br><br>
                    % 荷電粒子の軌道<br>
                    \draw(0, 0, 0) ellipse (2 and 0.57);<br>
                    \draw[-latex, line width = 1pt](0.8, 0.54, 0) -- (1, 0.49, 0);<br>
                    \draw[-latex, line width = 1pt](-0.8, -0.54, 0) -- (-1, -0.49, 0);<br>
                    \draw[dotted](0, 1, 0) ellipse (2 and 0.57);<br>
                    \draw[dotted](0, 1.4, 0) ellipse (2 and 0.57);<br>
                    \draw[dotted](0, 1.8, 0) ellipse (2 and 0.57);<br>
                    \draw[dotted](0, -0.4, 0) ellipse (2 and 0.57);<br>
                    \draw[dotted](0, -0.8, 0) ellipse (2 and 0.57);<br>
                    \draw[dotted](2, 2, 0) -- (2, -1, 0);<br>
                    \draw[dotted](-2, 2, 0) -- (-2, -1, 0);<br><br>
                    % 荷電粒子<br>
                    \fill [green] (2, 0, 0) circle (2pt);<br><br>
                    % 各変数<br>
                    \draw[-latex, line width = 2pt](-2, 0, -1.5) -- (-2, 1.8, -1.5) node[left]{$\mathrm{B}$};<br>
                    \draw[-latex, line width = 1pt, cyan](2, 0, 0) -- (2, 0, 0.8) node [right] {$v$};<br>
                    \draw[-latex, line width = 1pt, red](2, 0, 0) -- (1.4, 0, 0) node [above] {$F$};<br>
                    \end{tikzpicture}
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>

    </div>

    <!--参考文献-->
    <div>

      <h5 style="margin-top: 60px; font-weight: bold;">参考文献</h5>

      <ul>
        <li>Bootstrap, v5.0.2, (最終閲覧日:2022年7月10日) &lt;<a href="https://getbootstrap.jp/" target="_blank" rel="noopener noreferrer">https://getbootstrap.jp/</a>&gt;</li>
        <li>DMM WEBCAMP MEDIA, 2022-02-17, (最終閲覧日:2022年7月9日) &lt;<a href="https://web-camp.io/magazine/archives/102456" target="_blank" rel="noopener noreferrer">https://web-camp.io/magazine/archives/102456</a>&gt;</li>
        <li>JAEA, (最終閲覧日:2022年7月9日) &lt;<a href="https://www.jaea.go.jp/" target="_blank" rel="noopener noreferrer">https://www.jaea.go.jp/</a>&gt;</li>
        <li>宮川 雅有, (最終閲覧日:2022年7月9日) &lt;<a href="http://www.st.nanzan-u.ac.jp/info/ma-thesis/2013/KOTO/m12mm019.pdf" target="_blank" rel="noopener noreferrer">http://www.st.nanzan-u.ac.jp/info/ma-thesis/2013/KOTO/m12mm019.pdf</a>&gt;</li>
        <li>みふねたかし, 2017-01-02, (最終閲覧日:2022年7月9日) &lt;<a href="https://www.irasutoya.com/2017/01/blog-post_2.html" target="_blank" rel="noopener noreferrer">https://www.irasutoya.com/2017/01/blog-post_2.html</a>&gt;</li>
        <li>125naroom, 2020-11-01, (最終閲覧日:2022年7月9日) &lt;<a href="https://125naroom.com/web/3737" target="_blank" rel="noopener noreferrer">https://125naroom.com/web/3737</a>&gt;</li>
        <li>ピクト(ピクトの思考録), 2022-04-26, (最終閲覧日:2022年7月10日) &lt;<a href="https://pictblog.com/aboutblog" target="_blank" rel="noopener noreferrer">https://pictblog.com/aboutblog</a>&gt;</li>
        <li>デシノン, 2020-01-17, (最終閲覧日:2022年7月10日) &lt;<a href="https://deshinon.com/2019/03/06/koseiteki-haikei-css/" target="_blank" rel="noopener noreferrer">https://deshinon.com/2019/03/06/koseiteki-haikei-css/</a>&gt;</li>
      </ul>

    </div>

    <script>
      const info = document.getElementById('info');
      const canvas = document.getElementById('myCanvas');
      const ctx = canvas.getContext('2d');

      // 配列
      let p; // 位置ベクトル
      let v; // 速度ベクトル
      let arrow; // 描画ベクトル

      // 変数
      let x_0; // x方向の位置 m
      let y_0; // y方向の位置 m
      let vx = 10; // x方向の速度 cm/s
      let vy = 20; // y方向の速度 cm/s
      let m = 1.67; // 荷電の重さ 10^(-27) kg
      let q = 1.6; // 荷電粒子の量  10^(-19) C
      let B = 0.2; // 磁場の大きさ 10^(-7) kg/(A・s^2)
      let time = 0; // 経過時間 s
      let STEP = 0.1; // ステップ数
      let startX; // ドラッグ開始位置(x)
      let startY; // ドラッグ開始位置(y)

      // フラグ
      let ballcolor = false; // ボールの色
      let orbitcolor = false; // 軌道の色
      let anime = false; // アニメーション
      let onetime = true; // 初期描画ベクトル
      let drag = false; // マウスイベント
      let over = false; // 物体の上にマウスがあるか
      let on = false; // 物体を移動させたか

      // 連想配列宣言
      arrow = {
        vrx: 0,
        vry: 0,
        vlx: 0,
        vly: 0
      };

      // 座標系の設定
      ctx.translate(0, canvas.height);
      ctx.scale(1, -1);

      function init() {
        // 各種変数の初期化
        anime = false;
        time = 0;

        // 初期化 & パラメータ取得
        x_0 = Number(document.getElementById('numberX').value);
        y_0 = Number(document.getElementById('numberY').value);

        p = {
          prex: x_0,
          x: x_0,
          prey: y_0,
          y: y_0
        };

        v = {
          prex: vx,
          x: vx,
          prey: vy,
          y: vy
        };

        if (!on) {
          // 初期速度ベクトル
          arrow.vrx = v.x * Math.cos(-3 * Math.PI / 4) / 3 - v.y * Math.sin(-3 * Math.PI / 4) / 3 + p.x + v.x;
          arrow.vry = v.x * Math.sin(-3 * Math.PI / 4) / 3 + v.y * Math.cos(-3 * Math.PI / 4) / 3 + p.y + v.y;
          arrow.vlx = v.x * Math.cos(3 * Math.PI / 4) / 3 - v.y * Math.sin(3 * Math.PI / 4) / 3 + p.x + v.x;
          arrow.vly = v.x * Math.sin(3 * Math.PI / 4) / 3 + v.y * Math.cos(3 * Math.PI / 4) / 3 + p.y + v.y;

        }

        document.getElementById('btnAnime').value = 'アニメーション開始';

        draw();
      }

      function draw() {
        // 色の初期化
        ctx.strokeStyle = 'black';
        ctx.fillStyle = 'black';

        // キャンバスのリセット & 枠線の描画
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.strokeRect(0, 0, canvas.width, canvas.height);

        // 経過時間の表示
        info.innerHTML = '経過時間: ' + time.toFixed(2) + ' s';

        // 磁場方向の設定
        direct_magnet();

        // 物体の描画
        move_object();

        // 描画の更新
        if (anime) {
          // 速度・座標の計算
          p.x = p.prex + STEP * v.prex;
          p.y = p.prey + STEP * v.prey;

          // シンプレクティック数値積分法
          v.x = v.prex + STEP * (q * B / m) * v.y;
          v.y = v.prey - STEP * (q * B / m) * v.x;

          // 値を更新
          p.prex = p.x;
          p.prey = p.y;
          v.prex = v.x;
          v.prey = v.y;

          // 経過時間の計算
          time += STEP;

          requestAnimationFrame(draw);
        }
      }

      function startAnime() {
        // アニメーション開始時に矢印削除
        onetime = false;

        if (anime) {
          // アニメーション停止
          anime = false;
          document.getElementById('btnAnime').value = 'アニメーション再開';

        } else {
          // アニメーション開始・再開
          anime = true;
          on = false;
          document.getElementById('btnAnime').value = 'アニメーション停止';
          draw();

        }
      }

      function reset() {
        // 各種変数初期化
        onetime = true;
        on = false;

        document.getElementById('numberX').value = 150;
        document.getElementById('numberY').value = 250;
        changeNumberX();
        changeNumberY();
        vx = 10;
        vy = 20;
        m = 1.67;
        q = 1.6;
        B = 0.2;

        document.getElementById('numberM').value = m;
        document.getElementById('numberQ').value = q;
        document.getElementById('numberB').value = B;
        changeNumberM();
        changeNumberQ();
        changeNumberB();

        init();
      }

      function move_object() {

        if (on) {
          // マウスイベントによる描画ベクトルの更新
          ctx.beginPath();
          ctx.moveTo(startX, startY);
          ctx.lineTo(p.x, p.y);
          ctx.stroke();
          ctx.beginPath();
          ctx.moveTo(startX, startY);
          ctx.lineTo(arrow.vrx, arrow.vry);
          ctx.stroke();
          ctx.beginPath();
          ctx.moveTo(startX, startY);
          ctx.lineTo(arrow.vlx, arrow.vly);
          ctx.stroke();

        } else if (onetime) {
          // 初期描画ベクトル
          ctx.beginPath();
          ctx.moveTo(p.x + v.x, p.y + v.y);
          ctx.lineTo(p.x, p.y);
          ctx.stroke();
          ctx.beginPath();
          ctx.moveTo(p.x + vx, p.y + vy);
          ctx.lineTo(arrow.vrx, arrow.vry);
          ctx.stroke();
          ctx.beginPath();
          ctx.moveTo(p.x + vx, p.y + vy);
          ctx.lineTo(arrow.vlx, arrow.vly);
          ctx.stroke();

        } else {
          // 物体移動時の描画ベクトル
          ctx.beginPath();
          ctx.moveTo(p.x + v.x, p.y + v.y);
          ctx.lineTo(p.x, p.y);
          ctx.stroke();

        }

        // 色設定
        if (ballcolor) {

          ctx.strokeStyle = document.getElementById('ballcolor').value;
          ctx.fillStyle = document.getElementById('ballcolor').value;

        }

        // 荷電粒子の描画
        ctx.beginPath();
        ctx.arc(p.x, p.y, 10, 0, 2 * Math.PI);
        ctx.fill();
      }

      function direct_magnet() {
        // 文字の描画
        ctx.font = 'bold 20px sans-serif';
        ctx.fillText('B', 30, 393);

        if (B > 0) {
          // 磁場が正の場合の描画
          ctx.beginPath();
          ctx.arc(15, 385, 2, 0, 2 * Math.PI);
          ctx.fill();
          ctx.beginPath();
          ctx.arc(15, 385, 10, 0, 2 * Math.PI);
          ctx.stroke();

        } else {
          // 磁場が負の場合の描画
          ctx.beginPath();
          ctx.moveTo(10, 392);
          ctx.lineTo(20, 378);
          ctx.stroke();
          ctx.moveTo(20, 392);
          ctx.lineTo(10, 378);
          ctx.stroke();
          ctx.beginPath();
          ctx.arc(15, 385, 10, 0, 2 * Math.PI);
          ctx.stroke();

        }
      }

      // 位置xの変更
      function changeRangeX() {
        // 数値フィールドとの対応付け
        if (!anime) {

          document.getElementById('numberX').value = document.getElementById('rangeX').value;

          init();

        }

      }

      function changeNumberX() {
        // 入力バーとの対応付け
        if (!anime) {

          document.getElementById('rangeX').value = document.getElementById('numberX').value;

          init();

        }

      }

      // 位置yの変更
      function changeRangeY() {
        // 数値フィールドとの対応付け
        if (!anime) {

          document.getElementById('numberY').value = document.getElementById('rangeY').value;

          init();

        }
      }

      function changeNumberY() {
        // 入力バーとの対応付け
        if (!anime) {

          document.getElementById('rangeY').value = document.getElementById('numberY').value;

          init();

        }
      }

      // 電荷粒子の重さの変更
      function changeRangeM() {
        // 数値フィールドとの対応付
        m = document.getElementById('rangeM').value;
        document.getElementById('numberM').value = m;

      }

      function changeNumberM() {
        // 入力バーとの対応付け
        m = document.getElementById('numberM').value;
        document.getElementById('rangeM').value = m;

      }

      // 荷電粒子の電気量の変更
      function changeRangeQ() {
        // 数値フィールドとの対応付
        q = document.getElementById('rangeQ').value;
        document.getElementById('numberQ').value = q;

      }

      function changeNumberQ() {
        // 入力バーとの対応付け
        q = document.getElementById('numberQ').value;
        document.getElementById('rangeQ').value = q;

      }

      // 磁場の大きさの変更
      function changeRangeB() {
        // 数値フィールドとの対応付
        B = document.getElementById('rangeB').value;
        document.getElementById('numberB').value = B;

      }

      function changeNumberB() {
        // 入力バーとの対応付け
        B = document.getElementById('numberB').value;
        document.getElementById('rangeB').value = B;

      }

      function change_ballcolor() {
        // ボールカラーの変更
        ballcolor = true;
        if (!anime) draw();

      }

      function change_orbitcolor() {
        // ボールの軌道カラーの変更
        orbitcolor = true;
        if (!anime) draw();

      }

      function changeME_proton() {
        // 陽子の設定
        m = 1.673;
        q = 1.602;
        document.getElementById('numberM').value = 1.6;
        document.getElementById('numberQ').value = 1.6;
        changeNumberM();
        changeNumberQ();

      }

      function changeME_electron() {
        // 電子の設定 *10^2している 正確ではない
        m = 0.09109;
        q = -1.602;
        document.getElementById('numberM').value = 0.09;
        document.getElementById('numberQ').value = -1.6;
        changeNumberM();
        changeNumberQ();

      }

      function change_mag() {
        // 磁場方向の変更
        B = -B;
        if (!anime) draw();

      }

      canvas.addEventListener('mousedown', function(e) {
        let rect = e.target.getBoundingClientRect();

        if (!anime && over) {
          // 物体の位置の変更
          drag = true;
          on = true;
          startX = Math.round(e.clientX - rect.left);
          startY = canvas.height - Math.round(e.clientY - rect.top);

        } else {
          // スローモーション
          STEP = 0.01;

        }
      });

      canvas.addEventListener('mousemove', function(e) {
        let rect = e.target.getBoundingClientRect();
        let x = Math.round(e.clientX - rect.left);
        let y = canvas.height - Math.round(e.clientY - rect.top);

        if (drag) {
          // 物体の位置・速度の変更
          document.getElementById('numberX').value = x;
          document.getElementById('numberY').value = y;
          changeNumberX();
          changeNumberY();

          vx = (startX - x);
          vy = (startY - y);

          // 速度ベクトルの更新
          arrow.vrx = (x - startX) * Math.cos(Math.PI / 4) / 3 - (y - startY) * Math.sin(Math.PI / 4) / 3 + startX;
          arrow.vry = (x - startX) * Math.sin(Math.PI / 4) / 3 + (y - startY) * Math.cos(Math.PI / 4) / 3 + startY;
          arrow.vlx = (x - startX) * Math.cos(-Math.PI / 4) / 3 - (y - startY) * Math.sin(-Math.PI / 4) / 3 + startX;
          arrow.vly = (x - startX) * Math.sin(-Math.PI / 4) / 3 + (y - startY) * Math.cos(-Math.PI / 4) / 3 + startY;

          init();

        } else {

          if (!anime) {

            if (Math.hypot(p.x - x, p.y - y) <= 10) {
              // カーソルが物体上にある場合
              over = true;
              canvas.style.cursor = 'pointer';

              draw();

            } else {
              // カーソルが物体上にない場合
              over = false;
              canvas.style.cursor = 'default';

              draw();

            }
          }

        }
      });

      canvas.addEventListener('mouseup', function(e) {

        if (!anime) {
          // フラグを下ろす
          drag = false;
          draw();

        } else {
          // スローモーション解除
          STEP = 0.1;

        }

      });

      init();
    </script>
  </body>
</html>
<!-- アップロード日時： 2022/06/27 15:16:05 -->
