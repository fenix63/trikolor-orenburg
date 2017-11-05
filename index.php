<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Триколор ТВ Оренбург. Обменять, купить спутниковое оборудование в магазине компании Спутник, онлайн-заказ</title>
		<meta name="keywords" content="Вы можете обменять, купить спутниковое оборудование Триколор в нашем магазине" />
        <meta name="description" content="Фирменный магазин Триколор ТВ предлагает вам купить или обменять спутниковое оборудование." />
        <link rel="stylesheet" href="assets/css/uikit.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css?<?=time();?>">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/uikit.min.js"></script>
        <script src="assets/js/uikit-icons.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>
        <script src="assets/js/jquery.bxslider.js"></script>
        <script src="assets/js/prod_desc_fancy.js"></script>
        <script src="assets/js/topscroll.js"></script>


        <script>
            window.setTimeout(function() {
                $(".bxslider").each(function(indx, element) {
                                var slider = $(element).bxSlider({
                                    pagerCustom: "#bx-pager"
                                });
                                $(".trigger").eq(indx).fancybox({
                                    onComplete: function(a) {
                                        slider.reloadSlider()
                                    }
                                })
                            });
            }, 3000)

        </script>


        <script>
            
        	$(document).ready(function(){


                
                $('.top-bxslider').bxSlider({
                    auto: true
                });
            

                //Вызов модального окна для детального просмотра товара
                // $('.trigger').fancybox({


                    
                //     'onComplete': function(){
                        

                //         slider = $('.bxslider').bxSlider({
                //           pagerCustom: '#bx-pager'
                //         });
                //         //slider.reloadSlider();

                //     },
                //     'afterClose': function(){
                //         console.log('after close');
                        
                //     }
                // });
                 // $(".bxslider").each(function(indx, element) {
                 //        var slider = $(element).bxSlider({

                 //            pagerCustom: "#bx-pager"
                 //        });
                 //        $(".trigger").eq(indx).fancybox({
                 //            onComplete: function(a) {

                 //                slider.reloadSlider()
                 //            }
                 //        })
                 //    });


                
                //Мой вариант
                // $('.bxslider').each(function(indx, element) {
                //     var slider = $(element).bxSlider({
                //         //pagerCustom: "#bx-pager"
                //     });

                //     $(".trigger").eq(indx).fancybox({
                //         onComplete: function(a) {
                //             slider.reloadSlider()
                //         }
                //     });
                // });
                
                
                


                
                

                //var $number;


                // $('.trigger').on('click',function(){
                //     //slider.reloadSlider();
                // });


                // //Вызов формы обратного звонка
                $('#modal, #modal2, #modal3, #modal4, #modal5, #modal6, #modal7, #modal8').on('click','a.myButton',function(){

                    console.log('test modal');
                    $(this).fadeOut();//Окно "Подробнее" - скрываем
                    $('.fancybox-bg, .fancybox-container').css({'display':'none'});
                    $('#modal1').fadeIn();//Обратный звонок - отображаем

                });

                $('.phone-top').on('click', function(){
                    $(this).text('8(3532)30-77-20');
                    $(this).css({'background-color':'#fffb85'});
                });




        		$('form').submit(function(e){
        			var $form = $(this);

        			$.ajax({
        				type: $form.attr('method'),
        				url: $form.attr('action'),
        				data: $form.serialize()
        			}).done(function(result){
        				alert('Сообщение успешно отправлено!' + result);
        				$('#modal1').fadeOut('slow', function(){
        					
        				});

        			}).fail(function(result){
        				alert('Ошибка при отправке сообщения!' + result);
        			});

        			//отмена действия по умолчанию для кнопки submit
        			e.preventDefault();
        		});


        		//Делаем поле телефона обязательным для заполнения
        		$('input[name=phone]').on('input keyup',function(e){
        			if($(this).val()=='')
        				$('form input[type=submit]').prop('disabled',true);
        			else
        				$('form input[type=submit]').prop('disabled',false);	
        		});


                $('.buy').on('click', function(){
                    $('.cards').fadeIn();
                });

                /*$('.change').on('click', function(){
                    $('html, body').animate({
                        scrollTop: $("#exchange").offset().top - 100
                    }, 1000);
                });*/

                $('a.scrollTo').click(function(){
                    var elementClick = $(this).attr("href");
                    var destination = $(elementClick).offset().top+450;
                    $('html,body').animate({scrollTop:destination},800);
                    
                });

                $('.change .txt').on('click', function(){
                    var elementClick = $('#reciever-actions');
                    var destination = $(elementClick).offset().top+450;
                    $('html,body').animate({scrollTop:destination},800);
                });

                // $('.fancybox-close-small').on('click', function(){
                //     $('#modal1').hide();
                // });

                


                // $('.trigger').on('click',function(){
                //     $(".bxslider").each(function(indx, element) {
                //         var slider = $(element).bxSlider({
                //             pagerCustom: "#bx-pager"
                //         });
                //         $(".trigger").eq(indx).fancybox({
                //             onComplete: function(a) {
                //                 slider.reloadSlider()
                //             }
                //         })
                //     });
                // });


                
                // $("form").submit(function(e) {
                //     var $form = $(this);
                //     $.ajax({
                //         type: $form.attr("method"),
                //         url: $form.attr("action"),
                //         data: $form.serialize()
                //     }).done(function(result) {
                //         alert("Сообщение успешно отправлено!" +
                //             result);
                //         $("#modal1").fadeOut("slow", function() {})
                //     }).fail(function(result) {
                //         alert("Ошибка при отправке сообщения!" + result)
                //     });
                //     e.preventDefault()
                // });
                // $("input[name=phone]").on("input keyup", function(e) {
                //     if ($(this).val() == "") $("form input[type=submit]").prop("disabled", true);
                //     else $("form input[type=submit]").prop("disabled", false)
                // });
                // $(".buy").on("click", function() {
                //     $(".cards").fadeIn()
                // });
                // $(".change").on("click", function() {
                //     $("html, body").animate({
                //         scrollTop: $("#exchange").offset().top - 100
                //     }, 1E3)
                // })


                
        	});
        </script>

        
        <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
        </style>
</head>
    <body id="top">
    
    




      <div>
        <div class="uk-section uk-section-xxsmall uk-box-shadow-large uk-card uk-card-default  " style="z-index: 980;" uk-sticky="bottom: #offset,true">
        <div class="uk-container uk-container-lsmall">
        <nav class=" uk-margin" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#">
                <img class="uk-margin-small-right" src="images/svg/logo-new.png"> </a>
                <ul class="uk-navbar-nav uk-iconnav topmenu">
                    <li><a href="#"><span class="uk-icon uk-margin-small-right" href="#"></span>Главная</a></li>
                      <li><a href="#reciever-actions" class="scrollTo"><span class="uk-icon uk-margin-small-right" href=""></span>Акции по обмену </a></li>
                      <li><a href="#obmen"><span class="uk-icon uk-margin-small-right" href="#"></span>Пункты обмена</a></li>
                </ul>
                </div>
                <div class="uk-navbar-right">
                  <!-- <div class="uk-navbar-item phone-top"> 8(3532)30-77-20</div> -->
                  <div class="uk-navbar-item phone-top gradient" onClick="yaCounter43918984.reachGoal('phone_click'); return true;">
                      
                        8(3532)30..
                        <span class="show-phone">(показать)</span>
                      
                    
                  </div>
                  <!-- <button class="uk-button uk-button-default uk-button-hover callback-btn" uk-toggle="target:#modal1">ЗАКАЗАТЬ ЗВОНОК</button> -->
                  


                <!--Окно заказа обратного звонка-->
                  <div id="modal1" uk-modal="" class="uk-modal">
                      <div class="uk-modal-dialog uk-modal-body">
                          <button class="uk-modal-close-default" type="button" uk-close></button>
                          <div class="uk-modal-header">
                              <h2 class="uk-modal-title">Оставить заявку</h2>
                          </div>

                          <form method="post" action="send.php">
	                          <div class="uk-modal-body">
	                            
	                              <div class="uk-margin-small uk-grid-small uk-child-width-1-2 uk-grid" uk-grid>
	              					<div class="uk-card">
		                              	<div class="uk-margin">
				                            <div class="uk-inline">
				                            	<label class="uk-form-label" for="name"></label>
				                            	<span class="uk-form-icon" uk-icon="icon: user"></span>
				                            	<input id="Имя" class="uk-input" name="name" placeholder="Имя..." type="text" autofocus="">
				                            </div>
			                            </div>
    		                            <div class="uk-margin">
    			                            <div class="uk-inline">
    			                            	<label class="uk-form-label" for="phone"></label>
    			                            	<span class="uk-form-icon" uk-icon="icon: phone"></span>
    			                            	<input id="Телефон" class="uk-input" name="phone" placeholder="Телефон..." type="Phone" autofocus="" >
    			                            </div>
    		                            </div>
    		                            <div class="uk-margin">
    			                            <div class="uk-inline">
    				                            <label class="uk-form-label" for="email"></label>
    				                            <span class="uk-form-icon" uk-icon="icon: mail"></span>
    				                            <input id="email" class="uk-input" name="email" placeholder="Email..." type="text" autofocus="" >
    			                            </div>
    		                            </div>

	                              	</div>
		                            <div class="uk-card">
		                            	<div class="uk-margin">
		                                    <div class="uk-inline">
		                                        <textarea class="uk-textarea uk-form-width-large" rows="6" type="message" name="message" placeholder="Напишите..."></textarea>
		                                    </div>
		                                </div>
		              				</div>

	              					</div>
	                            


	                          </div><!--uk-modal-body-->
	                          <div class="uk-modal-footer uk-text-right">
                                  
	                              <button class="uk-button uk-button-default uk-modal-close" type="button">Закрыть</button>
                                
                                <input class="uk-button uk-button-primary" type="submit" value="Отправить" disabled>
                                <div class="g-recaptcha" data-sitekey="6LfGDSAUAAAAAMeM2b5b9G1smXpE_zF4l7CEEkBr"></div>
									
	                          </div>
                          </form>

                      </div>
                  </div><!--modal1-->





                </div>

        </nav>

  </div>
      </div>


  <div class="uk-section uk-section-default2 blue-block">

      <div class="uk-container ">
      	<h1>ФИРМЕННЫЙ САЛОН-МАГАЗИН "ТРИКОЛОР ТВ"</h1>
      </div>
  </div>

  <!--Кнопка "Наверх"-->
    <p id="back-top">
        <a href="#top"><span></span>Наверх</a>
    </p>

<!--Тут будет слайдер-->
<div class="uk-section uk-section-default">
    <div class="uk-container">
        <ul class="top-bxslider">
          <li><a href="http://trikolor-orenburg.ru" target="_blank"><img src="images/body/banner.jpg" /></a></li>
          <li><a href="http://trikolor-orenburg.ru" target="_blank"><img src="images/body/obmen.jpg" /></a></li>
          <li><a href="http://trikolor-orenburg.ru" target="_blank"><img src="images/body/199.jpg" /></a></li>
          <li><a href="http://trikolor-orenburg.ru" target="_blank"><img src="images/body/obmen.jpg" /></a></li>
        </ul>
    </div>
</div>



<div class="uk-section uk-section-default">

<div class="uk-container uk-text-center">

  <div ><h2 class="uk-text-fsm">КУПИТЬ И ОБМЕНЯТЬ "ТРИКОЛОР ТВ" В НАШЕМ ФСМ<br> ВЫГОДНО И УДОБНО</h2></div>

<div class="uk-child-width-1-4@s uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; delay: 500; repeat: true">
<div>

<div class="uk-card">
              <img class="" src="images/svg/1.png" alt="">
<h4 class="uk-text-center">ОФИЦИАЛЬНЫЙ ПРЕДСТАВИТЕЛЬ "ТРИКОЛОР ТВ" В ОРЕНБУРГЕ</h4>
</div>
    </div>

    <div>

    <div class="uk-card">
                      <img class="uk-images-center" src="images/svg/2.png" alt="">
<h4 class="uk-text-center">ОФИЦИАЛЬНЫЕ ЦЕНЫ ТРИКОЛОР</h4>
    </div>
            </div>
            <div>

            <div class="uk-card">
                              <img class="uk-images-center" src="images/svg/3.png" alt="">
<h4 class="uk-text-center">СЕРТИФИЦИРОВАННЫЕ СПЕЦИАЛИСТЫ-КОНСУЛЬТАНТЫ</h4>
            </div>
                    </div>
                    <div>

                    <div class="uk-card">
                                      <img class="uk-images-center" src="images/svg/4.png" alt="">
<h4 class="uk-text-center">ГАРАНТИЯ НА ВСЕ ОБОРУДОВАНИЕ </h4>
                    </div>
                            </div>
  </div>




</div>
</div>


<!--тут надо расположить карточки товаров-->
<div class="uk-container">
	<button class="change">
        <img src="images/body/change.png" alt=""/>
        <div class="txt">я хочу обменять старый триколор на новый</div>
	</button>

	<button class="buy"><img src="images/body/buy.png" alt=""/><div class="txt">я хочу купить триколор</div></button>
</div>

<div class="wrapper cards">
        <div class="uk-container">
        <div class="uk-child-width-expand@s uk-text-center cards-block" uk-grid>
    	    <div class="item_1">
        	        <div class="uk-card uk-card-default uk-card-body product">
        		        <div class="product-photo">
        		        	<img src="images/body/GS 591 1.png" width="216" height="163" />    		        
        		        </div>
    		        
        		        <div class="product-desc">
    	    		        <div class="desc">
    	    		        	Спутниковый ресивер-клиент Триколор ТВ GS-С5911<br/>
    	   		          	</div>
    	    		        <div class="price">
    	    		        	3 900 <span>руб</span>
    	    		        </div>
    	    		        <a href="#modal"  class="trigger read_more">подробнее</a>
                            <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                            
        		        </div>

        	        </div>
    	    </div>
    	    <div class="item_2">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo"><img src="images/body/GS-C592-2.jpg" width="216" height="163"></div>
    		        
    		        <div class="product-desc">
	    		        <div class="desc">Спутниковый ресивер-клиент Триколор ТВ GS-C592<br/> 
	    		        	
   		          	  </div>
	    		        <div class="price">3 900 <span>руб</span>
	    		        </div>
                        <a href="#modal2"  class="trigger read_more">подробнее</a>
	    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                        
    		        </div>


    	        </div>
    	    </div>
    	    <div class="item_3">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo">
    		        	<img src="images/body/dts-54.jpg" width="216" height="163" />
                    </div>
    		        
    		        <div class="product-desc">
	    		        <div class="desc">
	    		        	1) Ресивер DTS-54 <br>
	    		        	 2) Cмарт карта 7 день<br/>
   		          	  </div>
	    		        <div class="price">
	    		        	3 900 <span>руб</span>
	    		        </div>
	    		        
                        <a href="#modal3"  class="trigger read_more">подробнее</a>
	    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                        
    		        </div>



    	        </div>
    	    </div>
    	    <div class="item_4">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo">
    		        	<img src="images/body/gs_b532.jpg" width="216" height="163" />
                    </div>
    		        

    		        <div class="product-desc">
	    		        <div class="desc">1) Двухтюнерный ресивер GS B-532M<br> 
	    		          2) Cмарт карта на 7 дней<br/>
   		          	  </div>
	    		        <div class="price">
	    		        	5 900 <span>руб</span>
	    		        </div>
	    		        <div class="more">
	    		        	
                        </div>
                        <a href="#modal4"  class="trigger read_more">подробнее</a>
	    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                        
    		        </div>

    	        </div>
    	    </div>

    	</div>
    	</div>

    	<div class="uk-container">
    	<div class="uk-child-width-expand@s uk-text-center cards-block" uk-grid>
    		<div class="item_5">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo">
    		        	<img src="images/body/b531.jpg" width="216" height="163" />
                    </div>
    		        
    		        <div class="product-desc">
	    		        <div class="desc">
	    		        	Комплект в рассрочку &quot;Старт 0&quot;: уточняйте по телефону <br/>
	   		          	</div>
	    		        <div class="price">
	    		        	700 <span>руб</span>/мес
	    		        </div>
	    		        <div class="more">
	    		        	
                        </div>
                        <a href="#modal5"  class="trigger read_more">подробнее</a>
	    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                        
    		        </div>

    	        </div>
    	    </div>
    	    <div class="item_6">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo">
    		        	<img src="images/body/GS-E501-GS-C5911.jpg" width="216" height="163" />
                    </div>
    		        

    		        <div class="product-desc">
    		        <div class="desc">    		        1) Ресивер <span id="im-message-875186">GS B532M / GS C5911</span><br>
    		          2)Cкретч-карта   7 дней<br>
	              	</div>
    		        <div class="price">
    		        	9 000 <span>руб</span>
    		        </div>
    		        <div class="more">
    		        	
                    </div>
                    <a href="#modal6"  class="trigger read_more">подробнее</a>
    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                    
    		        </div>

    	        </div>
    	    </div>
    	    <div class="item_7">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo">
    		        	<img src="images/body/b-211.jpg" width="216" height="163" />
                    </div>
    		        
    		        <div class="product-desc">
    		        <div class="desc">    		          1)Ресивер <span id="im-message-875186">GS B211</span><br> 
    		          2)Cмарт карта 31 день<br>
	        	  	</div>
    		        <div class="price">
    		        	5 200 <span>руб</span>
    		        </div>
    		        <div class="more">
    		        	
                    </div>
                    <a href="#modal7"  class="trigger read_more">подробнее</a>
    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                    
    		        </div>

    	        </div>
    	    </div>
    	    <div class="item_8">
    	        <div class="uk-card uk-card-default uk-card-body product">
    		        <div class="product-photo">
    		        	<img src="images/body/CAM.jpg" width="216" height="163" />
                    </div>
    		        
    		        <div class="product-desc">
    		        <div class="desc">
    		        	CAM модуль Триколор CI+, в комплекте смарт-карта<br/>
   		          	</div>
    		        <div class="price">
    		        	5 070 <span>руб</span>
    		        </div>
    		        
                    <a href="#modal8"  class="trigger read_more">подробнее</a>
    		        <a href="#" class="myButton" uk-toggle="target:#modal1" onClick="yaCounter43918984.reachGoal('buy_product'); return true;">купить</a>
                    
    		        </div>

    	        </div>
    	    </div>

    	    
    	</div>
    	</div>		
        <div class="load">
            <a href="javascript:void(0);"></a>
        </div>

</div>



<!--карточки товаров-->


  


<div class="uk-section uk-section-default" style="" id="exchange">
    <div class="uk-container ">
      <div class="uk-grid-small uk-child-width-1-2 uk-grid" >
            <div class="uk-card uk-text-center manager">
                          <img class=" uk-border-circle" width="300px" height="300px" src="images/body/триколор-2.jpg" alt="">
            </div>
            <div class="uk-card">
              <div ><h2 class="uk-text-fsm">ПОЗВОНИТЕ НАШЕМУ КОНСУЛЬТАНТУ<br>И МЫ ПОМОЖЕМ ВАМ КУПИТЬ ИЛИ ОБМЕНЯТЬ <br> СПУТНИКОВОЕ ОБОРУДОВАНИЕ "ТРИКОЛОР ТВ"</h2>
                <!--<h2 class="uk-text-fsm2">ТАТЬЯНА СКОРОСПЕЛОВА</h2>
                <p>Старший менеджер по обмену "Триколор ТВ"</p>-->
                <h2>8 (3532) 30-77-20</h2>
              </div>

            </div>
      </div>
    </div>

</div>


  <div class="uk-container uk-container-center uk-text-center">
  <div >
    <h2 class="uk-text-fsm">ИЛИ ОТПРАВЬТЕ ЗАЯВКУ<br>
      И МЫ САМИ ВАМ ПЕРЕЗВОНИМ</h2>  </div>
  <button class="uk-button uk-button-default uk-button-large uk-button-hover callback-btn" uk-toggle="target:#modal1"
  onClick="yaCounter43918984.reachGoal('order_change'); return true;">ЗАКАЗАТЬ ОБМЕН</button>
    </div>


    <div class="uk-container uk-container-center about_shop">
        <h2 class="uk-text-fsm uk-text-center">
            о нашем магазине
        </h2>

        <div class="left-part uk-text-fsm">
            <div align="justify">В июне 2017 года крупнейший российский оператор цифрового телевидения «Триколор ТВ» ввел в коммерческую эксплуатацию пакет спортивных телеканалов «Премиум спорт». Услуга предназначена для корпоративных клиентов и включает восемь популярных телеканалов. Стоимость услуги для трансляции в публичных местах составляет 4500 руб. в месяц. «Премиум спорт»<br/> 
            — новая услуга, предназначенная для корпоративных клиентов: владельцев гостиниц, спортивных баров, ресторанов, спортивных клубов и др. В пакет вошло восемь популярных спортивных телеканалов: «Матч! Арена HD», «Матч! Игра HD», «Матч! Наш спорт», «Матч! Боец», «Матч! Футбол 1 HD», «Матч! Футбол 2 HD», «Матч! Футбол 3 HD», «Наш футбол HD». 
            В современном мире, который сложно представить без гаджетов, «Триколор ТВ» можно подключить ко всем устройствам, которыми вы привыкли пользоваться. Смотрите любимые телеканалы на одном телевизоре или же подключите их также на втором, который стоит на кухне или в спальне. Кроме того, абонентам «Триколор ТВ» доступен просмотр каналов на планшете или смартфоне, а любителям игр понравится игровая консоль, совмещающая в себе игры и функции телесмотрения! «Триколор ТВ» - больше чем обычное телевидение!</div>
        </div>
        <div class="right-part uk-text-fsm">
          <div align="justify">
            <p>Обмен устаревшего оборудования, это - в несколько раз больше телеканалов!<br>
          1. С новым приёмником вы сможете смотреть в 6 раз больше* каналов в отличном качестве!
          Более 200 каналов пакета «Единый», среди которых десятки в HD и множество радиостанций,
          в вашем полном распоряжении!<br>
          2. Используйте все возможности вашего HD-телевизора! У вас есть HD–телевизор, но приёмник поддерживает только
          SD–формат? Обменяйте оборудование и в полной мере оцените телевидение высокой чёткости! Однажды посмотрев
          любимые фильмы и телепередачи в HD, вы больше не захотите возвращаться к старому формату.<br>
          3. Подключайте дополнительные услуги! Мультфильмы, футбол или фильмы «18+»? Выберите пакеты телеканалов по интересам
          и сделайте просмотр ТВ еще разнообразнее. <br>
          4. Вы ничего не потеряете — все услуги и денежные средства будут перенесены на новое оборудование в полном объеме! 
          Подписка на основной пакет каналов «Единый» и на все дополнительные пакеты, а также имеющиеся средства будут перенесены
          на новое оборудование в полном объеме.</p>
            <p>* При обмене оборудования формата MPEG-2.</p>
          </div>
        </div>

        <h2 class="uk-text-fsm uk-text-center change-actions" id="reciever-actions">
            акции по обмену ресиверов<br/> триколор тв
        </h2>

    </div>

    <div class="uk-container uk-container-center exchange">
        <h2 class="uk-text-center" id="single-change">Обмен на один приёмник</h2>
        <div class="desc">
            В обмен на старое оборудование вы получите спутниковый двухтюнерный приёмник модели GS B521, GS B521(с USB-накопителем),  GS B533M или GS B531M.
        </div>

        <table border="1" cellspacing="0" cellpadding="0" bordercolor="#d0cdcd">
            <tr class="uk-text-fsm uk-text-center">
                <th width="78">Стоимость</th>
                <th colspan="4">Принимаемое к обмену оборудование</th>
            </tr>
            <tr>
                <td class="price">за 3999 руб</td>
                <td width="104">
                    <p>CAM-NC1</p>
                    <p>CAM-DRE (MPEG-2)</p>
                    <p>CAM-DRE (MPEG-4)*</p>
                    <p>Dongle DRE Crypt</p>
                    <p>DRE-4000</p>
                    <p>GS-8300</p>
                    <p>GS-8300M</p>
              </td>
                <td width="89">
                    <p>DRE-5000</p>
                    <p>DRS-5001</p>
                    <p>DRS-5003</p>
                    <p>DRE-7300</p>
                    <p>GS-7300</p>
                    <p>GS-8300N</p>
                    <p>GS 8302</p>
              </td>
                <td width="88">
                    <p>GS 8306</p>
                    <p>GS 8305</p>
                    <p>DRS 8305</p>
                    <p>GS 8307</p>
                    <p>GS 8308</p>
              <p>GS 8304</p>
              <p>GS-6301</p></td>
                <td width="72">
                    <p>DRS-8300</p>
                    <p>DRS 8308</p>
                    <p>HD 9303</p>
                    <p>HD 9305</p>
              </td>
            </tr>
            
        </table>

        <div class="uk-container uk-container-center uk-text-center exchange-button">
         <button class="uk-button uk-button-default uk-button-large uk-button-hover callback-btn" uk-toggle="target:#modal1"
         onClick="yaCounter43918984.reachGoal('order_change'); return true;">ЗАКАЗАТЬ ОБМЕН</button>
        </div>
    </div>


    <div class="uk-container uk-container-center exchange">
        <h2 class="uk-text-center">Обмен на комплект для просмотра на двух экранах</h2>
        <div class="desc">
            В обмен на старое оборудование вы получите спутниковый двухтюнерный приёмник модели GS B521, GS B521(с USB-накопителем),  GS B533M или GS B531M и приёмник-клиент модели GS C591 или GS C5911.
        </div>

        <table border="1" cellspacing="0" cellpadding="0" bordercolor="#d0cdcd">
            <tr class="uk-text-fsm uk-text-center">
                <th width="78">Стоимость</th>
                <th colspan="4">Принимаемое к обмену оборудование</th>
            </tr>
            <tr>
                <td class="price">за 6499 руб</td>
                <td width="101">
                    <p>CAM-NC1</p>
                    <p>CAM-DRE (MPEG-2)</p>
                    <p>CAM-DRE (MPEG-4)*</p>
                    <p>Dongle DRE Crypt</p>
                    <p>DRE-4000</p>
                    <p>GS-8300</p>
                    <p>DRS-8300</p></td>
                <td width="96">
                    <p>DRE-5000</p>
                    <p>DRS-5001</p>
                    <p>DRS-5003</p>
                    <p>DRE-7300</p>
                    <p>GS-7300</p>
                    <p>GS-8300M</p>
                    <p>GS 8302</p></td>
                <td width="80">
                    <p>GS 8306</p>
                    <p>GS 8305</p>
                    <p>DRS 8305</p>
                    <p>GS 8307</p>
                    <p>GS 8308</p>
              <p>GS-8300N</p>
              <p>GS 8304</p></td>
                <td width="76">
                    <p>DRS 8308</p>
                    <p>GS-6301</p>
                    <p>HD 9303</p>
                    <p>HD 9305</p>              </td>
            </tr>
        </table>

        <div class="uk-container uk-container-center uk-text-center exchange-button">
         <button class="uk-button uk-button-default uk-button-large uk-button-hover callback-btn" uk-toggle="target:#modal1"
         onClick="yaCounter43918984.reachGoal('order_change'); return true;">ЗАКАЗАТЬ ОБМЕН</button>
        </div>
    </div>

    <div class="uk-container uk-container-center exchange">
        <h2 class="uk-text-center">Обмен на CI+ модуль</h2>
        <div class="desc">
            В обмен на старое оборудование вы получите модуль условного доступа Conditional Access Module CI+ Delgado / Conditional Access Module CI+
        </div>

        <table border="1" cellspacing="0" cellpadding="0" bordercolor="#d0cdcd">
            <tr class="uk-text-fsm uk-text-center">
                <th width="78">Стоимость</th>
                <th colspan="4">Принимаемое к обмену оборудование</th>
            </tr>
            <tr>
                <td class="price">за 3999 руб</td>
                <td width="113">
                    <p>CAM-NC1</p>
                    <p>CAM-DRE (MPEG-2)</p>
                    <p>CAM-DRE (MPEG-4)*</p>
                    <p>Dongle DRE Crypt</p>
                    <p>DRE-4000</p>
                    <p>GS-8300</p>
                    <p>DRS-8300</p>
                    </td>
                <td width="88">
                    <p>DRE-5000</p>
                    <p>DRS-5001</p>
                    <p>DRS-5003</p>
                    <p>DRE-7300</p>
                    <p>GS-7300</p>
                    <p>GS-8300N</p>
                    <p>GS 8302</p>
                    </td>
                <td width="92">
                    <p>GS 8304</p>
                    <p>GS 8306</p>
                    <p>GS 8305</p>
                    <p>DRS 8305</p>
                    <p>GS 8307</p>
                    <p>GS 8308</p>
                <p>GS-8300M</p></td>
                <td width="66">
                    <p>DRS 8308</p>
                    <p>GS-6301</p>
                    <p>HD 9303</p>
                    <p>HD 9305</p>                </td>
            </tr>
        </table>

        <div class="uk-container uk-container-center uk-text-center exchange-button">
         <button class="uk-button uk-button-default uk-button-large uk-button-hover callback-btn" uk-toggle="target:#modal1"
         onClick="yaCounter43918984.reachGoal('order_change'); return true;">ЗАКАЗАТЬ ОБМЕН</button>
        </div>
    </div>

    <div class="uk-container uk-container-center exchange">
        <h2 class="uk-text-center">Обмен в рассрочку</h2>
        <div class="desc">Только в период со 2 октября по 31 октября 2017 года акция «Обмен. Сверхвыгодная рассрочка!»: всего 199 руб. в месяц за обмен вашего устаревшего приёмника на комплект современного оборудования с двухтюнерным приёмником вместе с абонентской платой за пакет «Единый» (в течение 25 месяцев). Настоящая рассрочка без переплат!</div>

        <table border="1" cellspacing="0" cellpadding="0" bordercolor="#d0cdcd">
            <tr class="uk-text-fsm uk-text-center">
                <th width="118">Стоимость</th>
                <th colspan="4">Принимаемое к обмену оборудование</th>
            </tr>
            <tr>
                <td class="price">от 199 руб./месяц</td>
                <td width="162">
                    <p>CAM DRE (MPEG-2)<br>
                      CAM-NC1<br>
                      Dongle<br>
                      DRE 4000<br>
                      DRE 5000/DRS-5001/DRS 5003<br>
              DRE 7300/GS-7300</p>
              </td>
                <td width="119">
                    <p>CAM DRE (MPEG-4)<br>
                      GS 8300/M/N<br>
                      DRS 8300<br>
                      GS 8302<br>
                    GS 8304 </p>
              </td>
                <td width="97">
                    <p>DRS 8305<br>
                      GS 8306<br>
                      GS 8305<br>
                      GS 8307<br>
                    GS 8308</p>
              </td>
                <td width="103">
                    <p>DRS 8308<br>
                      GS 6301<br>
                      HD 9303<br>
                    HD 9305</p>
              </td>
            </tr>
            
        </table>

        <div class="uk-container uk-container-center uk-text-center exchange-button">
         <button class="uk-button uk-button-default uk-button-large uk-button-hover callback-btn" uk-toggle="target:#modal1"
         onClick="yaCounter43918984.reachGoal('order_change'); return true;">ЗАКАЗАТЬ ОБМЕН</button>
        </div>
    </div>


    <div id="action" class="uk-section uk-section-default" style="">
    <div class="uk-container ">
      <div class="uk-grid-small uk-child-width-1-1 uk-grid" >
        <div class="uk-card uk-text-center">
  <div ><h2 class="uk-text-fsm">МОДЕЛИ, УЧАСТВУЮЩИЕ <br>В АКЦИИ ПО ОБМЕНУ</h2>  </div>
  <div>
          <ul class="uk-flex-center" uk-tab="animation: uk-animation-fade">
              <li><a href="#">ОБМЕН НА ДВУХТЮНЕРНЫЙ ПРИЕМНИК ЗА <strong>3999</strong> РУБ </a></li>
              <li><a href="#">ОБМЕН НА ДВУХТЮНЕРНЫЙ ПРИЕМНИК ЗА <strong>4799</strong> РУБ </a></li>
              <li><a href="#">ОБМЕН НА КОМПЛЕКТДЛЯ ПРОСМОТРА НА ДВУХ ЭКРАНАХ ЗА <strong>3999</strong> РУБ </a></li>
              <li><a href="#">ОБМЕН НА КОМПЛЕКТ ДЛЯ ПРОСМОТРА НА ДВУХ ЭКРАНАХ ЗА <strong>7299</strong> РУБ</a></li>
            </ul>
          <ul class="uk-switcher uk-margin" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
    <li>
Принимаемое к обмену оборудование<br>
CAM-NC1<br>
CAM-DRE (MPEG-2)<br>
CAM-DRE (MPEG-4) (за исключением приёмного<br>
оборудования со смарт-картами вида XX12XXXXXXXX)<br>
Dongle DRE Crypt<br>
DRE-4000<br>
DRE-5000<br>
DRS-5001<br>
DRS-5003<br>
DRE-7300<br>
GS-7300<br>
GS 8306<br>
GS 8305<br>
DRS 8305<br>
GS 8307<br>
GS 8308<br>
DRS 8308<br>
GS-6301<br>
HD 9303<br>
HD 9305<br>

<strong>Стоимость обмена<br>
3999 рублей</strong></li>
    <li>
Принимаемое к обмену оборудование<br>
GS-8300<br>
 DRS-8300<br>
 GS-8300M<br>
 GS-8300N<br>
 GS 8302<br>
 GS 8304<br>
 <strong>Стоимость обмена<br>
4 799 рублей</strong></li>
    <li>
	<span class="style1">ЦЕНА ПО АКЦИИ 3999 РУБ! ТОЛЬКО ДО 31 МАЯ 2017г</span><br>
Принимаемое к обмену оборудование<br>
CAM-NC1<br>
 CAM-DRE (MPEG-2)<br>
 CAM-DRE (MPEG-4)<br> (за исключением приёмного оборудования<br>
со смарт-картами вида XX12XXXXXXXX)<br>
 Dongle DRE Crypt<br>
 DRE-4000<br>
 DRE-5000<br>
 DRS-5001<br>
 DRS-5003<br>
 DRE-7300<br>
 GS-7300<br>
 GS 8306<br>
 GS 8305<br>
 DRS 8305<br>
 GS 8307<br>
 GS 8308<br>
 DRS 8308<br>
 GS-6301<br>
 HD 9303<br>
 HD 9305<br>
 <strong>Стоимость обмена<br>
3999 руб. по АКЦИИ</strong></li>
    <li>
Принимаемое к обмену оборудование<br>
GS-8300<br>
 DRS-8300<br>
 GS-8300M<br>
 GS-8300N<br>
 GS 8302<br>
 GS 8304<br>
 <strong>Стоимость обмена<br>
7 299 рублей</strong></li>
    </ul>
      </div>
</div>
</div>
<div class="uk-container uk-container-center uk-text-center">
 <button class="uk-button uk-button-default uk-button-large uk-button-hover callback-btn" uk-toggle="target:#modal1"
 onClick="yaCounter43918984.reachGoal('order_change'); return true;">ЗАКАЗАТЬ ОБМЕН</button>
</div>
</div>
</div>

<div id="obmen" class="uk-section uk-section-default" style="">
<div class="uk-container">
	<div class="address">
	  <div class="add">
			<h4>Фирменный салон магазин Триколор ТВ</h4>

			 г. Оренбург, ул. Терешковой д. 22 офис. 101, здание банка "Агросоюз"<br/>
			 Время работы<br/>
			 Пн-Пт: с 9.00 до 19.00<br/>
			 Сб-Вс с 10.00 до 16.00<br/>
			т.:+7 (3532) 30-77-20<br/>
			 
 		</div>
										<div class="add">
												<h4>Пункт продажи и обмена "Триколор ТВ"</h4>  
												 г. Оренбург, ул. Юркина 11 А, кор. 2 (территория базы "ОренГалант")<br/>
												Время работы<br/>
												 Пн-Пт: 9.00 - 18.00<br/>
												 Сб 9.00 - 16.00<br/>
												 т.: +7 (3532) 66-23-33, 45-36-77<br/>
												 
										</div>
											<div class="add">
												<h4>Пункт продажи и обмена "Триколор ТВ"</h4>
												 г. Бузулук, ул. Комсомольская д. 113Б<br/>
												 Время работы<br/>
												  Пн-Пт: 9.00 - 18.00<br/>
												  Сб 9.00 - 16.00<br/>
												  т.:+7-905-844-95-28<br/>
												 
												 
											</div>
											<!-- <div class="add">
												<h4>Компания "Спутник"</h4>

												 г.Оренбург ул. Терешковой д.22 офис.101, здание банка "Агросоюз"<br/>
												 т.+7(3532)30-77-20
												 
											</div>-->
		</div>
	  </div>
</div>



<script>

    $.get('modal_form.html', function(data){

        $(data).insertBefore('.wrapper .load');
        //$('#modal .description h2').text('Новое название товара');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form2.html', function(data){

        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form_3.html', function(data){

        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form_4.html', function(data){
        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form_5.html', function(data){
        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form_6.html', function(data){
        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form_7.html', function(data){
        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });

    $.get('modals/modal_form_8.html', function(data){
        $(data).insertBefore('.wrapper .load');
        // $('.uk-container:last .trigger').fancybox();//инициализация fancybox для вновь созданных блоков
        // $('.uk-container:last .trigger').on('click',function(){
        //     slider.reloadSlider();
        // });
    });
</script>





<!--Конец окна подробного описания товара-->

<div class="uk-container ">

  <div class="uk-grid-small uk-child-width-1-1 uk-grid" >
    <div>
      <div class="uk-card">
        <!--<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4b539b445d922e2c7acba6a3fd943f59267925851471cb7fa9e5fa396e37626d&amp;width=1088&amp;height=607&amp;lang=ru_RU&amp;scroll=true"></script>-->

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9ba6baaf26c4328c8e9ebaa9f3e4dacde8fb6f884f83c67a81bc6de02fa14f1a&amp;width=1088&amp;height=607&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>
    </div>
    <div>
    </div>
  </div>
  </div>
  </div>



</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43918984 = new Ya.Metrika({
                    id:43918984,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43918984" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->








    <!-- {literal} -->
        <script type='text/javascript'>
        window['l'+'ive'+'T'+'ex'] = true,
        window['li'+'ve'+'T'+'ex'+'ID'] = 145440,
        window['live'+'Tex_'+'obje'+'ct'] = true;
        (function() {
        var t = document['create'+'E'+'lement']('script');
        t.type ='text/javascript';
        t.async = true;
        t.src = '//cs1'+'5.liv'+'etex'+'.'+'ru/js/client.js';
        var c = document['getEl'+'eme'+'nts'+'ByTa'+'gName']('script')[0];
        if ( c ) c['par'+'ent'+'Node']['inse'+'rt'+'Before'](t, c);
        else document['doc'+'umen'+'t'+'Eleme'+'nt']['first'+'Child']['ap'+'pe'+'ndC'+'h'+'ild'](t);
        })();
        </script>
        <!-- {/literal} -->
		</body>
</html>
