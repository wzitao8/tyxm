<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" contect="http://www.webqin.net">
    <title>三级分销</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/response.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond./js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <div class="maincont">

     <div class="head-top">
      <img src="/images/9947.jpg" />
      <dl>
       <dt><a href="/Index/user"><img src="/images/1232ww.jpg" /></a></dt>
       <dd>
        <h1 class="username">梓韬的项目管理</h1>
        <ul>
         <li><a href="/Goods/prolist"><strong>34</strong><p>全部商品</p></a></li>
         <li><a href="javascript:;"><span class="glyphicon glyphicon-star-empty"></span><p>收藏本店</p></a></li>
         <li style="background:none;"><a href="javascript:;"><span class="glyphicon glyphicon-picture"></span><p>二维码</p></a></li>
         <div class="clearfix"></div>
        </ul>
       </dd>
       <div class="clearfix"></div>
      </dl>
     </div><!--head-top/-->
     
     <form action="#" method="get" class="search">
      
      <input type="text" class="seaText fl" name="goods_name" />
      <input type="submit" value="搜索" class="seaSub fr" />
     </form><!--search/-->
     <ul class="reg-login-click">
      <li><a href="/Register/login">登录</a></li>
      <li><a href="/Register/register" class="rlbg">注册</a></li>
      <div class="clearfix"></div>
     </ul><!--reg-login-click/-->
     <div id="sliderA" class="slider">
      <img src="/images/image1.jpg" />
      <img src="/images/image2.jpg" />
      <img src="/images/image3.jpg" />
      <img src="/images/image4.jpg" />
      <img src="/images/image5.jpg" />
     </div><!--sliderA/-->
     <ul class="pronav">
      <li><a href="/Goods/prolist">晋恩干红</a></li>
      <li><a href="/Goods/prolist">万能手链</a></li>
      <li><a href="/Goods/prolist">高级手镯</a></li>
      <li><a href="/Goods/prolist">特异戒指</a></li>
      <div class="clearfix"></div>
     </ul><!--pronav/-->
     <div class="index-pro1">

      @foreach ($res as $v)
      <div class="index-pro1-list">
       <dl>
        <dt><a href="/Goods/proinfo/?goods_id={{$v->goods_id}}"><img src="/uploads/goodsimg/{{$v->goods_img}}" /></a></dt>
        <dd class="ip-text" goods_id="{{$v->goods_id}}"><a href="/Goods/proinfo">{{$v->goods_name}}</a><span></span></dd>
        <dd class="ip-price"><strong>{{$v->goods_price}}</strong><span>{{$v->goods_price}}</span></dd>
       </dl>
      </div>
      @endforeach
      <div class="clearfix"></div>
     </div><!--index-pro1/-->
     <div class="prolist">
      <dl>
       <dt><a href="/Goods/proinfo"><img src="/images/prolist1.jpg" width="100" height="100" /></a></dt>
       <dd>
        <h3><a href="/Goods/proinfo">四叶草</a></h3>
        <div class="prolist-price"><strong>¥299</strong> <span>¥599</span></div>
        <div class="prolist-yishou"><span>5.0折</span> <em>已售：35</em></div>
       </dd>
       <div class="clearfix"></div>
      </dl>
      <dl>
       <dt><a href="/Goods/proinfo"><img src="/images/prolist1.jpg" width="100" height="100" /></a></dt>
       <dd>
        <h3><a href="/Goods/proinfo">四叶草</a></h3>
        <div class="prolist-price"><strong>¥299</strong> <span>¥599</span></div>
        <div class="prolist-yishou"><span>5.0折</span> <em>已售：35</em></div>
       </dd>
       <div class="clearfix"></div>
      </dl>
      <dl>
       <dt><a href="/Goods/proinfo"><img src="/images/prolist1.jpg" width="100" height="100" /></a></dt>
       <dd>
        <h3><a href="/Goods/proinfo">四叶草</a></h3>
        <div class="prolist-price"><strong>¥299</strong> <span>¥599</span></div>
        <div class="prolist-yishou"><span>5.0折</span> <em>已售：35</em></div>
       </dd>
       <div class="clearfix"></div>
      </dl>
     </div><!--prolist/-->
     <div class="joins"><a href="/Register/fenxiao"><img src="/images/jrwm.jpg" /></a></div>
     <div class="copyright">Copyright &copy; <span class="blue">这是就是三级分销底部信息</span></div>
     
     <div class="height1"></div>
     <div class="footNav">
      <dl>
       <a href="/Index/index">
        <dt><span class="glyphicon glyphicon-home"></span></dt>
        <dd>微店</dd>
       </a>
      </dl>
      <dl>
       <a href="/Goods/prolist">
        <dt><span class="glyphicon glyphicon-th"></span></dt>
        <dd>所有商品</dd>
       </a>
      </dl>
      <dl>
       <a href="/Goods/car">
        <dt><span class="glyphicon glyphicon-shopping-cart"></span></dt>
        <dd>购物车 </dd>
       </a>
      </dl>
      <dl>
       <a href="/Index/user">
        <dt><span class="glyphicon glyphicon-user"></span></dt>
        <dd>我的</dd>
       </a>
      </dl>
      <div class="clearfix"></div>
     </div><!--footNav/-->
    </div><!--maincont-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/style.js"></script>
    <!--焦点轮换-->
    <script src="/js/jquery.excoloSlider.js"></script>
    <script>
		$(function () {
		 $("#sliderA").excoloSlider();

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
     // $(document).on('click','.ip-text',function(){
     //    // alert('1230');
     //    var _this=$(this);
     //    var goods_id=_this.attr('goods_id');
     //    // console.log(goods_id);
     //    $.post(
     //      "/Index/create",
     //      {goods_id:goods_id},
     //        function(res){
     //          console.log(res);
     //        }
     //      )
     // })
		});
	</script>
  </body>
</html>