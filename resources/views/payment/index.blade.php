<head>
        <link rel="stylesheet" href="css/men.css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">        
	
</head>      



<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div id="a">
    <div class="title">=お支払い番号=</div>  
    
<br>
<br>
<br>
    
<div class="fontsize"> MyCaseをご利用いただきありがとうございます！
<br>ご注文を承りました。
<br>
    <br>お客様のお支払い番号は <font size="30"> <?php echo rand(1000000000000,9999999999999)?> </font>です。
    <br>
        <br>お支払いがスムーズになるようにこちらの画面をスクリーンショットしておいてください。

<br>
    <br>
        <br>
            <br>
                お支払い方法　※セブンイレブンのみ：
            <br>１．セブンイレブン店頭レジにて「インターネット代金の支払い」と伝えてください。
            <br>２．上記の払込票番号（13桁）を店員にお伝えし、
            <br>３．店頭レジでの処理後、代金をお支払いください。
</div>
<br>
    <br>
        {!! link_to_route('carts.welcome', 'ホームに戻る', null, ['class' => 'btn btn-sm btn-danger']) !!}
        
</div>