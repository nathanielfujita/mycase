<!DOCTYPE html>
<html lang="ja">
    <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="css/select.css">
      <!-- Bootstrap CSS-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- ビューポートの設定 -->
	     <meta name="viewport" content="width=device-width,initial-scale=1">
	     
      <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
     
      </script>
      
      <script type="text/javascript">
      $(document).ready(function () {
        $('#hawai').click(function() {
        
          
          $('#hotel-hawai').toggle();
          $('#hotel-hawai2').toggle();
          $('#hotel-hawai3').toggle();
          $('#hotel-hawai4').toggle();
          $('#hotel-hawai5').toggle();
        });
      });
      </script>
      
      <script type="text/javascript">
      $(document).ready(function () {
        $('#taiwan').click(function() {
        
          $('#hotel-taiwan').toggle();
          $('#hotel-taiwan2').toggle();
          $('#hotel-taiwan3').toggle();
          $('#hotel-taiwan4').toggle();
          $('#hotel-taiwan5').toggle();
        });
      });
      
      </script>
      
      <script type="text/javascript">
      $(document).ready(function () {
        $('#korea').click(function() {
        
          $('#hotel-korea').toggle();
          $('#hotel-korea2').toggle();
          $('#hotel-korea3').toggle();
          $('#hotel-korea4').toggle();
          $('#hotel-korea5').toggle();
        });
      });
      
      </script>
      
      
    </head>
    <body><center>
      <div class="title">=宿泊予定のホテルを選択してください=</div>
      
      <br>
        <br>
        
      <div class="container pt20">
        <div class="row">
          <div class="col-xs-12">
          
            <div class="form-group checkbox-wrap text-center">
              <label class="label-checkbox">
                <input type="checkbox" id="hawai" />
                  <span class="lever">ハワイ</span>
              </label>
              <label class="label-checkbox">
                <input type="checkbox" id="taiwan" />
                  <span class="lever">台湾</span>
              </label>
              <label class="label-checkbox">
                <input type="checkbox" id="korea" />
                  <span class="lever">韓国</span>
              </label>
            </div>
          </div>
        </div>
      </div> 
      
<form method = 'post' action = '/contact'> 
{{ csrf_field() }}

      <div class="row pt20">
    　<div class="col-xs-12">
        <div class="form-group radio-wrap text-center">
          
          <label class="label-radio" id="hotel-hawai" style="display:none">
            <input type="radio" name="hotel" value="ホテルレイア" />
            <span class="lever">ホテルレイア</span>
          </label>
          <label class="label-radio" id="hotel-hawai2" style="display:none">
            <input type="radio" name="hotel" value="ホテルルル"/>
            <span class="lever">ホテルルル</span>
          </label>
          <label class="label-radio" id="hotel-hawai3" style="display:none">
            <input type="radio" name="hotel" value="ホテルヒワヒワ"/>
            <span class="lever">ホテルヒワヒワ</span>
          </label>
           <label class="label-radio" id="hotel-hawai4" style="display:none">
            <input type="radio" name="hotel" value="ホテルレイア"/>
            <span class="lever">ホテルポニ</span>
          </label>
           <label class="label-radio" id="hotel-hawai5" style="display:none">
            <input type="radio" name="hotel" value="ホテルナイア"/>
            <span class="lever">ホテルナイア</span>
          </label>
          
           <label class="label-radio" id="hotel-taiwan" style="display:none">
            <input type="radio" name="hotel" value="彩虹飯屋"/>
            <span class="lever">彩虹飯店</span>
          </label>
          <label class="label-radio" id="hotel-taiwan2" style="display:none">
            <input type="radio" name="hotel" value="天使飯屋"/>
            <span class="lever">天使飯店</span>
          </label>
          <label class="label-radio" id="hotel-taiwan3" style="display:none">
            <input type="radio" name="hotel" value="秘密飯屋"/>
            <span class="lever">秘密飯店</span>
          </label>
           <label class="label-radio" id="hotel-taiwan4" style="display:none">
            <input type="radio" name="hotel" value="小公主飯屋"/>
            <span class="lever">小公主飯店</span>
          </label>
           <label class="label-radio" id="hotel-taiwan5" style="display:none">
            <input type="radio" name="hotel" value="娘娘飯屋"/>
            <span class="lever">娘娘飯店</span>
          </label>
          
           <label class="label-radio" id="hotel-korea" style="display:none">
            <input type="radio" name="hotel" value="チャンチャホテル"/>
            <span class="lever">チャンチャホテル</span>
          </label>
          <label class="label-radio" id="hotel-korea2" style="display:none">
            <input type="radio" name="hotel" value="パッビンスウホテル"/>
            <span class="lever">パッビンスウホテル</span>
          </label>
          <label class="label-radio" id="hotel-korea3" style="display:none">
            <input type="radio" name="hotel" value="アンニョンホテル"/>
            <span class="lever">アンニョンホテル</span>
          </label>
           <label class="label-radio" id="hotel-korea4" style="display:none">
            <input type="radio" name="hotel" value="チョンチョホテル"/>
            <span class="lever">チョンチョヒホテル</span>
          </label>
           <label class="label-radio" id="hotel-korea5" style="display:none">
            <input type="radio" name="hotel" value="チョゴホテル"/>
            <span class="lever">チェゴホテル</span>
          </label>
      　  </div>
    　  </div>　
    </body>
      　  
 <input type="hidden" name="plan"value= "<?=$plan?>"> 
<center><input type="submit" value="決定" name="btn" class="square_btn input-lg"></center>
</form>
<br>
    <div class= "bottomspace"> 
    <br>{!! link_to_route('selectplan.index', 'プラン選択へ戻る', null, ['class' => 'btn btn-sm btn-danger']) !!}
    </div>
  
</center></body>
