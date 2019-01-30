# FDX68 FILE SELECTER for JQuery

※ まだ機能が十分ではありません。またデザインセンスのカケラもありません。

# コンセプト
* スマホやタブレットなど解像度の違う環境でもフォントが小さくならないように考慮してみました。
* またJQueryのモーダルウィンドウというPOPUPみたいな機能を使ってみたく、個人的マイブームのJQueryで作ってみました。
  そのため、ajax部のphpファイルとjavascript+css+html部のhtmlファイルが別れています。

# やること
* Raspberry piにhttp(nginx)とphp環境を構築する必要があります。
  za2さんが作成されたfdx68-php https://github.com/ztto/fdx68-php の環境ができていれば、同じディレクトリに放り込むだけで動くと思います。
* JQueryをdownloadしてください。→のバージョンで可動確認しています。 https://code.jquery.com/jquery-3.3.1.js
* fdx68.html と cmd.php と jquery-3.3.1.js を同じディレクトリに置きます。
* fdxファイルを格納しているディレクトリを指定するため、fdx68.htmlを修正する必要があります。
  109行目の var path = "/home/pi/fdd/"; の部分を自分の環境に合わせて修正してください。
* ブラウザやスマホやタブレットで http://IPアドレス/fdx68.html を開きます。どうでしょう？

# 実装していない機能(これから実装したいモノ)
* チェンジディレクトリ
* ファイルコンバート
* fddemuの停止
* Raspberry pi の再起動
* かっこいいデザイン

などなどまだまだ未完成です。

# 注意
* 環境(ブラウザ)によって正しく挙動しない場合があります。その際は原因を調べたいので連絡ください。

@taneken2000 たねけん X68000 XVI 8MB + RaSCSI + FDX68(FDS)
