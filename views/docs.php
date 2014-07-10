<!DOCTYPE html>

<html class="no-touch off-canvas-ready"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>LK</title>

  <link rel="stylesheet" href="<?=base_url();?>css/tzportfolio.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>css/bootstrap-responsive.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>css/template.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>css/megamenu.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>css/megamenu-responsive.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url();?>css/off-canvas.css" type="text/css">
  
  <script src="<?=base_url();?>js/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>js/caption.js" type="text/javascript"></script>
  <script src="<?=base_url();?>js/bootstrap.js" type="text/javascript"></script>
  <script src="<?=base_url();?>js/off-canvas.js" type="text/javascript"></script>
  <script src="<?=base_url();?>js/menu.js" type="text/javascript"></script>
  <script src="<?=base_url();?>js/resizeimage.js" type="text/javascript"></script>
  <script src="<?=base_url();?>js/jquery.tinyscrollbar.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?=base_url();?>js/profile_script_resize.js"></script>



<script type="text/javascript">
var sidebar = 300;
var menu = 100;

resizefunction(sidebar, menu);

jQuery(document).ready(function () {

// Stuff in here happens on ready and resize.
    var win_width = jQuery('body').width();
    var win_height = jQuery(window).height();
    jQuery('#tz-main .tz-content-wrap').css({
        'min-height': win_height + 'px'
    });
    var sibar_left = jQuery('#sidebar-left').hasClass('left-sidebar');
    var sibar_right = jQuery('#sidebar-right').hasClass('right-sidebar');

    var sidebar_width = "300";

    var menu_width = "100";

    var left_width = parseInt(sidebar_width) + parseInt(menu_width);

    var page_width = jQuery('.tz-main-body .container-fluid').width();
    if (sibar_left == false || sibar_right == false) {
        var content_width = page_width - sidebar_width - menu_width;
    }
    if (sibar_left == true && sibar_right == true) {
        var content_width = page_width - sidebar_width - menu_width - sidebar_width;
    }
        var left_position = parseInt(sidebar_width) + parseInt(menu_width) + parseInt(content_width);
        if (sibar_right == true) {
            jQuery('#tz-main #sidebar-right').css({
                'width': sidebar_width + 'px'
            });
        }
        jQuery('#tz-content').css({
            'margin-left': left_width + 'px',
            'width': content_width + 'px'
        });
        if (sibar_left == true) {
            jQuery('#tz-main #sidebar-left').css({
                'margin-left': -left_position + 'px',
                'width': sidebar_width + 'px'
            });
        }



    jQuery('#tz_mainmenu').css({
        'top': 0,
        'margin-left': sidebar_width + 'px',
        'width': menu_width + 'px'
    });


    jQuery('.btn_open_slider').click(function () {

        jQuery('#sidebar-left').animate({
            left: -sidebar_width
        }, {
            duration: 1000,
            specialEasing: {
                left: "easeInOutQuart"
            }
        });
        if (win_width > 767 && win_width <= 1024) {
            jQuery('#tz_mainmenu').css({
                'top': 0,
                'margin-left': 0,
                'left': 0,
                'width': menu_width + 'px'
            });
        } else {
            jQuery('#tz_mainmenu').animate({
                left: -sidebar_width
            }, {
                duration: 1000,
                specialEasing: {
                    left: "easeInOutQuart"
                }
            });
        }
        jQuery('#tz-main').animate({
            width: menu_width
        }, {
            duration: 1000,
            specialEasing: {
                left: "easeInOutQuart"
            }
        });
        if (sibar_right == true) {
            jQuery('#tz-main #sidebar-right').animate({
                left: -page_width
            }, {
                duration: 1000,
                specialEasing: {
                    left: "easeInOutQuart"
                }
            });
        }

        jQuery('#tz-content').animate({
            left: -page_width
        }, {
            duration: 1000,
            specialEasing: {
                left: "easeInOutQuart"
            }
        });
        jQuery(this).hide();
        jQuery('.btn_close_slider').fadeIn();

        jQuery('body > *').css({
            '-webkit-transform': 'none',
            '-moz-transform': 'none',
            '-o-transform': 'none',
            'transform': 'none'
        });

    });
    jQuery('.btn_close_slider').click(function () {
        jQuery('#sidebar-left, #tz_mainmenu').animate({
            left: 0
        }, {
            duration: 1000,
            specialEasing: {
                left: "easeInOutQuart"
            }
        });
        if (win_width > 767 && win_width <= 1024) {
            jQuery('#tz_mainmenu').css({
                'top': 0,
                'margin-left': 0,
                'left': 0,
                'width': menu_width + 'px'
            });
        }
        jQuery('#tz-main').animate({
            width: page_width
        }, {
            duration: 800,
            specialEasing: {
                left: "easeInOutQuart"
            }
        });
        if (sibar_right == true) {
            jQuery('#tz-main #sidebar-right').animate({
                left: 0
            }, {
                duration: 1000,
                specialEasing: {
                    left: "easeInOutQuart"
                }
            });
        }
        jQuery('#tz-content').animate({
            left: 0
        }, {
            duration: 1000,
            specialEasing: {
                left: "easeInOutQuart"
            }
        });
        jQuery(this).hide();
        jQuery('.btn_open_slider').fadeIn();
    });

    jQuery('#tz_mainmenu').tinyscrollbar();

    var win_width = jQuery('body').width();
    if (win_width < 767) {
        jQuery('span.mobile-open').click(function () {

            jQuery('#sidebar-left').slideDown();
            jQuery(this).hide();
            jQuery('span.mobile-close').show();
            jQuery('.mobile-header').addClass('mobile-active');
            jQuery('#tz-main #tz_mainmenu nav.plazart-mainnav .navbar-inner .btn-navbar i').css('color', '#fff');
        });
        jQuery('span.mobile-close').click(function () {
            jQuery('#sidebar-left').slideUp();
            jQuery(this).hide();
            jQuery('span.mobile-open').show();
            jQuery('.mobile-header').removeClass('mobile-active');
            jQuery('#tz-main #tz_mainmenu nav.plazart-mainnav .navbar-inner .btn-navbar i').css('color', '#414952');
        });
    }
    if (win_width > 767 && win_width <= 1024) {
        var left_html = jQuery('#sidebar-left').html();
        jQuery('body').append('<aside class="left-sidebar  tablet-sidebar" id="sidebar-left">' +  left_html + '</div>');
        jQuery('#sidebar-left').remove();
        var menu_width = "100";
        var content_width = win_width - menu_width;
        jQuery('#tz-main #tz-content, #tz-main #sidebar-right ').css({
            'margin-left': menu_width + 'px',
            'width': content_width + 'px'
        });

        jQuery('#tz-main #tz_mainmenu').css({
            'margin-left': 0
        });

        jQuery('html').addClass('body_open');
        jQuery('.btn_open_sidebar').click(function(){


            jQuery('body > *').css({
                '-webkit-transform': 'translateX(210px)',
                '-moz-transform': 'translateX(210px)',
                '-o-transform': 'translateX(210px)',
                'transform': 'translateX(210px)'
            });

            jQuery(this).hide();
            jQuery('.btn_close_sidebar').fadeIn();
        });
        jQuery('.btn_close_sidebar').click(function(){


            jQuery('body > *').css({
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-o-transform': 'none',
                'transform': 'none'
            });
            jQuery(this).hide();
            jQuery('.btn_open_sidebar').fadeIn();
        });

    }

});
</script></head>

<body class="loaded" style=""><div class="bg-slide-overlay"> </div> 

    
	<header class="tz-header">
        <div class="container-fluid">
        <div class="tz-inner">
                        <div class="clr"></div>

        </div>
        </div>
        <div class="clr"></div>
    </header>

    <section id="tz-main">
    <div class="tz-main-body">
        <div class="container-fluid">
        <div class="tz-inner">
        
        <div class="tz-content-wrap row-fluid" style="min-height: 1013px;">


            <div id="tz-content" class="span9 offset3" style="margin-left: 400px; width: 1100px;">


                 <div id="tz-component" class="row-fluid">
					<div class="page-title">Заполнение документов on-line </div>
					<p><a target="_blank" href="<?=base_url();?>onlinedocs/dogovorvozmezdnogo">Договор возмездного оказания услуг c юридическим лицом (АГУ – исполнитель) </a></p>	
					<p><a target="_blank" href="<?=base_url();?>onlinedocs/dogovorvozmezdnogo3">Договор возмездного оказания услуг c юридическим лицом (АГУ – заказчик) </a></p>					
					<p><a target="_blank" href="<?=base_url();?>onlinedocs/dogovorvozmezdnogo2i">Договор возмездного оказания услуг c физическим лицом (АГУ – исполнитель)</a></p>
					<p><a target="_blank" href="<?=base_url();?>onlinedocs/dogovorvozmezdnogo2">Договор возмездного оказания услуг c физическим лицом (АГУ – заказчик)</a></p>
					<p><a target="_blank" href="<?=base_url();?>onlinedocs/dogovordareniya">Договор дарения</a></p>
					<p><a target="_blank" href="<?=base_url();?>onlinedocs/dogovorpostavki">Договор поставки</a></p>
						<p><a target="_blank" href="<?=base_url();?>onlinedocs/avans">Заявление о выдаче денег под отчет</a></p>
						<p><a target="_blank" href="<?=base_url();?>onlinedocs/akt">АКТ приема-передачи выполненных услуг </a></p>
                </div>
             </div>


<aside id="sidebar-left" class="span3 left-sidebar pull-left offset-12" style="margin-left: -1500px; width: 300px;">
                    <div class="sidebar-nav sidebar-level1">

                        <div class="tz-logo">
                           <a href="#" class="tz-logo"> <img src="./img/logo.jpg" ></a>
                        </div>
							 
<div class="box box_profile">
	<div class="content">
		<div class="custombox_profile">
			<h3><?=$this->session->userdata('displayname'); ?></h3>
			<p>Октавер использует мелодический open-air</p>
			<p>Огибающая образует двойной интеграл, но если бы песен было раз в пять меньше, было бы лучше для всех.</p>
		</div>
	</div>
</div>


		<div class="box "><div><div class="content"><div class="mod_address ">
			<ul class="address">
					<li><p><?=$user_info[0]['dn']; ?></p></li>
					<li><p><?=$user_info[0]['memberof'][0]; ?></p></li>
					<li><p><?=$user_info[0]['memberof'][1]; ?></p></li>
					<li><p><?=$user_info[0]['memberof'][2]; ?></p></li>
					<li><p><?=$user_info[0]['department'][0]; ?></p></li>
					<li><p><?=$user_info[0]['primarygroupid'][0]; ?></p></li>
					<li><p><?=$user_info[0]['samaccountname'][0]; ?></p></li>
					<li><p><? if (isset($user_info[0]['telephonenumber'][0])) {echo $user_info[0]['telephonenumber'][0];} else {echo "нет номера";} ?></p></li>
					<li><p><?if (isset($user_info[0]['mail'][0])) {echo $user_info[0]['mail'][0];;} else {echo "нет почты";} ?></p></li>
			</ul>
			</div>
			</div>
			</div>
		</div>
                   
				   </div>
</aside>
                        
						
<div id="tz_mainmenu" style="top: 0px; margin-left: 300px; width: 100px;">

                    <div class="scrollbar disable" style="height: 1013px;"><div class="track" style="height: 1013px;"><div class="thumb" style="top: 0px; height: 1013px;"><div class="end"></div></div></div></div>
                   
				   <div class="viewport">
                        <div class="overview" style="top: 0px;">
                            <!-- MAIN NAVIGATION -->
<nav id="plazart-mainnav" class="wrap plazart-mainnav navbar-collapse-fixed-top vertical-nav">
  <div class="navbar">
    <div class="navbar-inner">
      <button type="button" class="btn btn-navbar" data-target=".nav-collapse"></button>

  	  <div class="nav-collapse collapse always-show">
              <div class="plazart-megamenu animate zoom" >
<ul class="nav level0">
<li class="current active dropdown mega">
<a class=" dropdown-toggle" href="#"><i class="icon-user"></i>Обо мне<b class="caret"></b></a>
<div class="nav-child dropdown-menu mega-dropdown-menu" style="width:400px" ><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span12 mega-col-nav hidden-collapse"><div class="mega-inner">
<ul class="mega-nav level1">
<li class="mega mega-group" >
<a class=" mega-group-title" href="#">Второй уровень</a>
<div class="nav-child mega-group-ct" ><div class="mega-dropdown-inner">
<div class="row-fluid">
<div class="span6 mega-col-nav" ><div class="mega-inner">
<ul class="mega-nav level2">
<li >
<a class="" href="#">Создание сайтов</a>
</li>

</ul>
</div></div>
<div class="span6 mega-col-nav" data-width="6"><div class="mega-inner">
<ul class="mega-nav level2">
<li >
<a class="" href="#">Сайты под ключ</a>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>
</ul>
</div></div>
</div>
</div></div>
</li>


<li >
<a  href="#">Заполнение документов on-line </a>
</li>
<li>
<a href="#">Приложения </a>
</li>
<li >
<a href="#">Расписание</a>
</li>
<li>
<a  href="#">Лента</a>
</li>
<li>
<a  href="#">Музыка</a>
</li>
<li>
<a  href="<?=base_url()?>index.php/inter/logout">Выйти</a>
</li>
</ul>
</div>
        		</div>
    </div>
  </div>
</nav>
<!-- //MAIN NAVIGATION -->
                        </div>
                    </div>

            </div>

            <div class="mobile-header">
                                    <div class="logo-mobile"><?=$displayname; ?></div>
                                                <span class="mobile-open"> &nbsp;</span>
                <span class="mobile-close"> &nbsp;</span>
            </div>


                        <div class="clr"></div>
        </div>

        </div>
        </div>
    </div>
</section>
</body></html>