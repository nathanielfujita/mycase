 <head>
        <link rel="stylesheet" href="css/cart.css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">        
</head>      

<div id="a">   
    
        <div class="title">
            <font size="20">=プランを選択してください=</font>
        </div>
    <br> 
            <br>
    <div class="inside">        
    ただいまお客様のカートには <?php echo count($carts)?>  点の商品が入っています
    </div>

        <br>
            <br>
            @if(count($carts)>3)
           ２泊３日
            <br>＊３点まで ※カートの中身が３点を超えているので選択できません。
            <br>{!! link_to_route('carts.index', 'カート一覧へ戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
            @endif
            
            
            @if(count($carts)<=3)
            <form method = 'post' action = '/plan'> 
            <input type="radio" name="plan" value="２泊３日" />
            <span class="lever">２泊３日</span>
          </label>
     

        
            <input type="submit" value="決定" name="btn" class="btn btn-success btn-sm">
            <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            <br>＊３点まで 
            @endif
         
<br>
        <br>
            <br>
            @if(count($carts)>6)
           ３泊４日
            <br>＊６点まで ※カートの中身が６点を超えているので選択できません
            <br>{!! link_to_route('carts.index', 'カート一覧へ戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
            @endif            
            
            
            @if(count($carts)<=6)
            <form method = 'post' action = '/plan'> 
            <input type="radio" name="plan" value="３泊４日" />
            <span class="lever">３泊４日</span>
          </label>
     

        
            <input type="submit" value="決定" name="btn" class="btn btn-success btn-sm">
            <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            <br>＊６点まで
            @endif
            
            
<br>
    <br>
            <br>
            @if(count($carts)>9)
           ４泊５日
            <br>＊９点まで ※カートの中身が９点を超えているので選択できません
            <br>{!! link_to_route('carts.index', 'カート一覧へ戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
            @endif
            
            
            @if(count($carts)<=9)
            <form method = 'post' action = '/plan'> 
            <input type="radio" name="plan" value="４泊５日" />
            <span class="lever">４泊５日</span>
          </label>
     

        
            <input type="submit" value="決定" name="btn" class="btn btn-success btn-sm">
            <input type="hidden"  name="_token" value="{{ csrf_token() }}">            
            <br>＊９点まで
            @endif
            
            
<br>
    <br>
            <br>
            @if(count($carts)>12)
           ５泊６日
            <br>＊１２点まで ※カートの中身が１２点を超えているので選択できません
            <br>{!! link_to_route('carts.index', 'カート一覧へ戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
            @endif            
            
            @if(count($carts)<=12)
            <form method = 'post' action = '/plan'> 
            <input type="radio" name="plan" value="５泊６日" />
            <span class="lever">５泊６日</span>
          </label>
     

        
            <input type="submit" value="決定" name="btn" class="btn btn-success btn-sm">
            <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            <br>＊１２点まで
            @endif
            
            
<br>
        <br>
            <br>
            @if(count($carts)>15)
           ６泊７日
            <br>＊１５点まで ※カートの中身が１５点を超えているので選択できません
            <br>{!! link_to_route('carts.index', 'カート一覧へ戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
            @endif 
            
            
            
            @if(count($carts)<=15)            
            
            
            <form method = 'post' action = '/plan'> 
            <input type="radio" name="plan" value="６泊７日" />
            <span class="lever">6泊７日</span>
          </label>
     

        
            <input type="submit" value="決定" name="btn" class="btn btn-success btn-sm">
            <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            <br>＊１５点まで
            @endif

<br>
    <br>
        <br>
            {!! link_to_route('carts.index', 'カート一覧へ戻る', null, ['class' => 'btn btn-sm btn-danger']) !!}
    
</div>