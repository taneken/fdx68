# FDX68 FILE SELECTER for JQuery

※ まだ機能が十分ではありません。

# コンセプト
* スマホやタブレットなど解像度の違う環境でもフォントが小さくならず表示するため考慮してみました。
* またJQueryのモーダルウィンドウというPOPUPみたいな機能を使ってみたく、個人的マイブームのJQueryで作ってみました。
  そのため、ajax部のphpファイルとjavascript+css+html部のhtmlファイルが別れています。

# やること
* Raspberry piにhttp(nginx)とphp環境を構築する必要があります。
  za2さんが作成されたfdx68-phpの環境ができていれば、同じディレクトリに放り込むだけで動くと思います。
* download https://code.jquery.com/jquery-3.3.1.js
* fdx68.html と cmd.php と jquery-3.3.1.jsを同じディレクトリに置きます。
* fdxファイルを格納しているディレクトリを指定するため、fdx68.htmlを修正する必要があります。
  109行目の var path = "/home/pi/fdd/"; の部分を自分の環境に合わせて修正してください。
  
# 実装していない機能
* チェンジディレクトリ
* ファイルコンバート
* fddemuの停止
* Raspberry pi の再起動

などなどまだまだ未完成です。
