<!DOCTYPE html>
<html lang="ja">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MyCase</title>

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" href="css/MyCaseTest.css">
        
</head>




         <!--ここからヘッダー, リンク先の名前変える-->
        <header>
            <div class="container-fluid col-sm-1">
            <div class="row">
            <div class="sidebar">
            　
            　 <div class = "logo"><img src="homeimage/MyCase-logo.jpg" alt="My Case"></div>
             　    <ul>
             　        <li>{!! link_to_route('login', 'ログイン/登録') !!}</li>
             　        <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
             　        <li><a href = "#"><span class="en">Top</span><br class="ja">トップ</br></a></li>
                      <li><a href = "#1st-line"><span class="en">About My Case</span><br class="ja">MyCaseとは</br></a></li>
                      <li><a href = "#2nd-line"><span class="en">How to use</span><br class="ja">使い方</br></a></li>
                      <li><a href = "#ryoukin"><span class="en">Plan</span><br class="ja">料金</br></a></li>
                      
                   
                   
<!--bootstrapでデザイン変える、性別選んだらアイテムページに飛べるようにする、-->
                      <li class="dropdown">
					      <a class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="en">Items</span><br class="ja">商品</br><span class="caret"></span></a>
					      <ul class="dropdown-menu" role="menu">
						      <li>{!! link_to_route('men.index', 'Men') !!}</li>
						      <li>{!! link_to_route('women.index', 'Women') !!}</li>
					      </ul>
					  </li>
                   </ul>
            </div>
            </div>
        　  </div>
        </header>
        
    </body>
</html>

     



<body> 
<div class="float_box">

<div class="carousel-wrapper">
  <span id="item-1"></span>
  <span id="item-2"></span>
  <span id="item-3"></span>
  <div class="carousel-item item-1">
    <h2><center><font face="游ゴシック Light">あなたのスーツケースになりたい</font></center></h2>
    <p></p>
    <a class="arrow arrow-prev" href="#item-3"></a>
    <a class="arrow arrow-next" href="#item-2"></a>
  </div>
  
  <div class="carousel-item item-2">
    <h2><center><font face="游ゴシック Light">人生も旅も、荷物は少ないほうがいい</font></center></h2>
    <p></p>
    <a class="arrow arrow-prev" href="#item-1"></a>
    <a class="arrow arrow-next" href="#item-3"></a>
  </div>
  
  <div class="carousel-item item-3">
    <h2></h2>
    <p></p>
    <a class="arrow arrow-prev" href="#item-2"></a>
    <a class="arrow arrow-next" href="#item-1"></a>
  </div>
</div>
</div>


   <center> 
   <div id="howto">
   <div id="1st-line">
        <div class="powerpoint">
            <img src="homeimage/WhyMyCase.jpg" alt="パワーポイント"></div>

    
        <div class="powerpoint">

            <img src="homeimage/HowtouseMyCase.PNG" alt="AboutMyCase">
        </div>
    </div>
    </center>
 
    <div id="2nd-line">
        <div class ="row">
            <div class="pictures col-sm-5 col-sm-offset-1">
                <div class>
                <img src="homeimage/hawaii.jpg" alt="海の写真">
                </div>
            </div>

            <div class="powerpoint col-sm-5">
                <div class>
                <img src="homeimage/MyCase1.PNG" alt="パワーポイント"></div>
                </div>
            </div>
        </div>
    </div>

    
    <div id="3rd-line">
        <div class = "row">
            <div class="powerpoint col-sm-5 col-sm-offset-1">
                <div class>
                <img src="homeimage/MyCase2.PNG" alt="パワーポイント">
                </div>
            </div>
    
            <div class="pictures col-sm-5">
                <div class>
                <img src="homeimage/hawaii2.jpg" alt="海の写真"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="4th-line">
        <div class ="row">
            <div class="pictures col-sm-5 col-sm-offset-1">
                <div class>
                <img src="homeimage/hawaii3.jpg" alt="海の写真">
                </div>
            </div>
        
            <div class="powerpoint col-sm-5">
                <div class>
                <img src="homeimage/MyCase3.PNG" alt="パワーポイント"></div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div id="5th-line">
        <div class = "row">
            <div class="powerpoint col-sm-5 col-sm-offset-1">
                <div class>
                <img src="homeimage/MyCase4.PNG" alt="パワーポイント">
                </div>
            </div>
        
            
            <div class="pictures col-sm-5">
                <div class>
                <img src="homeimage/beach.jpg" alt="ビーチの写真"></div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div id="6th-line">
        <div class ="row">
            <div class="pictures col-sm-5 col-sm-offset-1">
                <div class>
                <img src="homeimage/taiwan.jpg" alt="台湾の写真">
                </div>
            </div>
        
            
            <div class="powerpoint col-sm-5">
                <div class>
                <img src="homeimage/MyCase5.PNG" alt="パワーポイント"></div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div id="7th-line">
        <div class ="row">
            <div class="powerpoint col-sm-5 col-sm-offset-1">
                <div class>
                <img src="homeimage/MyCase6.PNG" alt="パワーポイント">
                </div>
            </div>
    
            <div class="pictures col-sm-5">
                <div class>
                <img src="homeimage/travel.jpg" alt="海の写真"></div>
                </div>
            </div>
        </div>
    </div>
 </div>   
</div>    
    
    <div id="ryoukin">
        <div class="powerpoint">
            <center><img src="homeimage/Plan.jpg" alt="パワーポイント"></div></center>
    
        <div class="powerpoint">
            <center><img src="homeimage/Plan1.jpg" alt="パワーポイント"></div></p></center>
    </div>    

</body>
</html>



