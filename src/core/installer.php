<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<title>DouPress 安装程序</title>
<style>
* {padding:0;margin:0;font-family:"Microsoft YaHei",Segoe UI,Tahoma,Arial,Verdana,sans-serif;}
html,body { height:100%; }
body { background:#f9f9f9; color:#2d2d2d; font-size:14px; }
#main { width:400px; margin: 20px auto 0; }
#mainbox { background-color: #fff; border: 1px solid #e5e5e5; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05); -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05); box-shadow: 0 1px 2px rgba(0, 0, 0, .05); padding:20px; margin-bottom:20px; }
.btn { display: inline-block;padding: 4px 12px;margin-bottom: 0;font-size: 15px;line-height: 21px;color: #434848;text-align: center;text-shadow: 0 1px 1px rgba(255,255,255,0.75);vertical-align: middle;cursor: pointer;background-color: #f8f8f8;background-image: -moz-linear-gradient(top,#fff,#eee);background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#eee));background-image: -webkit-linear-gradient(top,#fff,#eee);background-image: -o-linear-gradient(top,#fff,#eee);background-image: linear-gradient(to bottom,#fff,#eee);background-repeat: repeat-x;border: 1px solid #ccc;border-color: #eee #eee #c8c8c8;border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);border-bottom-color: #b3b3b3;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffeeeeee',GradientType=0);filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05); }
.btn-primary { color: #fff;text-shadow: 0 -1px 0 rgba(0,0,0,0.25);background-color: #0aaaf1;background-image: -moz-linear-gradient(top,#11b6ff,#09d);background-image: -webkit-gradient(linear,0 0,0 100%,from(#11b6ff),to(#09d));background-image: -webkit-linear-gradient(top,#11b6ff,#09d);background-image: -o-linear-gradient(top,#11b6ff,#09d);background-image: linear-gradient(to bottom,#11b6ff,#09d);background-repeat: repeat-x;border-color: #09d #09d #006491;border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff11b6ff',endColorstr='#ff0099dd',GradientType=0);filter: progid:DXImageTransform.Microsoft.gradient(enabled=false); }
.btn:hover, .btn:focus {color: #fff;background-color: #09d;text-decoration: none;background-position: 0 -15px;-webkit-transition: background-position .1s linear;-moz-transition: background-position .1s linear;-o-transition: background-position .1s linear;transition: background-position .1s linear; }
label { font-weight:bold; color:#333; font-size:12px; }
.textbox input { border:none; padding:0; font-size:18px; width:312px; color:#333; outline:0; }
.textbox { border:1px solid #e0e0e0; padding:6px; margin:6px 0 20px; border-radius:3px 3px 3px 3px; }
</style>
<script type="text/javascript">
// function vMiddle(inner){
//   var outer = (inner.parentNode.tagName == 'body') ?  document.documentElement : inner.parentNode;

//   var innerHeight = inner.offsetHeight,
//     innerWidth = inner.offsetWidth,
//     outerHeight = outer.offsetHeight ,
//     outerWidth = outer.offsetWidth ;

//   (outerHeight > innerHeight) ? (function(){
//     inner.style.marginTop = -innerHeight/2 + "px" ;
//     inner.style.top = "50%";
//   })()
//   : (function(){
//     inner.style.marginTop = 0;
//     inner.style.top = 0;
//   })();

//   (outerWidth > innerWidth) ?  (function(){
//     inner.style.marginLeft = -innerWidth/2 + "px" ;
//     inner.style.left = "50%";
//   })()
//   : (function(){
//     inner.style.marginLeft = 0;
//     inner.style.left = 0;
//   })();
// }

// window.onload = window.onresize = function(){
//   vMiddle(document.getElementById("main"));
// }
</script>
</head>
<body>
  <div id="main">
    <div style="font-size:32px;font-weight:bold;text-align:center;padding-top:40px;">DouPress 安装程序</div>
    <div style="font-size:13px;color:#888;text-align:center;padding:10px 0 20px;">v/*DOUPRESS_VERSION*/</div>
    <div id="mainbox">
<?php if (!isset($_POST["start_install"])) { ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php if (!is_file('data/config.php')) { ?>
      <label>网站标题</label>
      <div class="textbox"><input type="text" name="sitename" value="我的网站"/></div>
      <label>网站地址</label>
      <div class="textbox"><input type="text" name="sitelink" id="sitelink" value=""/></div>
      <script type="text/javascript">
      document.getElementById('sitelink').value = location.href.substring(0, location.href.lastIndexOf('/'));
      </script>
      <label>您的昵称</label>
      <div class="textbox"><input type="text" name="nickname" value="神秘人"/></div>
      <label>后台账号</label>
      <div class="textbox"><input type="text" name="username" value="admin"/></div>
      <label>后台密码</label>
      <div class="textbox"><input type="text" name="password" value="123456"/></div>
      <div style="text-align:center;"><input type="submit" name="start_install" value="开始安装" class="btn btn-primary"/></div>
<?php } else { ?>
      <div style="text-align:center;padding-bottom:20px;">检测到 DouPress 配置文件，将使用升级模式安装。</div>
      <div style="text-align:center;"><input type="submit" name="start_install" value="开始升级" class="btn btn-primary"/></div>
<?php } ?>
    <form>
<?php } ?>
<?php
    $install_failed=false;

    function install($file, $content) {
      global $install_failed;

      if ($install_failed) return;

      echo "解压 $file";

      $dir = dirname($file);

      if (is_dir($dir) || @mkdir($dir, 0744, true)) {
        if (!@file_put_contents($file, gzuncompress(base64_decode($content)))) {
          $install_failed = true;
          echo '[<span style="color:red;">失败</span>]';
        }
      } else {
          $install_failed = true;
          echo '[<span style="color:red;">无法创建目录</span>]';
      }
      echo '<br/>';
    }

      if (isset($_POST["start_install"])) {
      ?>
        <div style="font-size:13px;color:#666;line-height:16px;padding:20px;margin:0 auto;">
<?php
/*DOUPRESS_FILES*/

$is_upgrade=true;

if (!$install_failed) {
  if (!is_dir('data/')) {
    echo '<br/>';
    echo "创建数据目录";
    if (@mkdir('data/', 0744, true)) {
      echo '[<span style="color:green;">成功</span>]';
    } else {
      $install_failed = true;
      echo '[<span style="color:red;">失败</span>]';
    }
    echo '<br/>';
  }
  if (!is_file('data/config.php')) {
    $is_upgrade = false;
    echo '<br/>';
    echo "创建配置文件";
    if (!@file_put_contents('data/config.php',
      "<?php \$dp_config = array(".
      "'version'      => '/*DOUPRESS_VERSION*/',".
      "'site_link'    => '{$_POST['sitelink']}',".
      "'site_name'    => '{$_POST['sitename']}',".
      "'site_desc'    => '又一个 DouPress 网站',".
      "'site_keywords'    => 'DouPress',".
      "'site_theme'   => 'default',".
      "'site_route'   => 'default',".
      "'site_icpno'   => '',".
      "'user_name'    => '{$_POST['username']}',".
      "'user_pass'    => '{$_POST['password']}',".
      "'user_nick'    => '{$_POST['nickname']}',".
      "'comment_code' => '');?>"
    )) {
      $install_failed = true;
      echo '[<span style="color:red;">失败</span>]';
    }
    echo '<br/>';
  } else {
    echo '<br/>';
    echo "升级配置文件";
    require 'data/config.php';
    $dp_config['version'] = '/*DOUPRESS_VERSION*/';
    if (!@file_put_contents('data/config.php', "<?php \$dp_config = ".var_export($dp_config, true)."; ?>")) {
      $install_failed = true;
      echo '[<span style="color:red;">失败</span>]';
    }
    echo '<br/>';
  }

  if (!is_dir('data/posts/index')) {
    echo '<br/>';
    echo "创建文章索引目录";
    if (@mkdir('data/posts/index', 0744, true)) {
      echo '<br/>';
      echo "创建页面索引文件";
      if (
        !@file_put_contents('data/posts/index/delete.php', '<?php $mc_posts=array(); ?>') ||
        !@file_put_contents('data/posts/index/publish.php', '<?php $mc_posts=array(); ?>') ||
        !@file_put_contents('data/posts/index/draft.php', '<?php $mc_posts=array(); ?>')
      ) {
        $install_failed = true;
        echo '[<span style="color:red;">失败</span>]';
        rmdir('data/posts/index');
      }
      echo '<br/>';
    } else {
      $install_failed = true;
      echo '[<span style="color:red;">失败</span>]';
      echo '<br/>';
    }
  }

  if (!is_dir('data/pages/index')) {
    echo '<br/>';
    echo "创建页面索引目录";
    if (@mkdir('data/pages/index', 0744, true)) {
      echo '<br/>';
      echo "创建页面索引文件";
      if (
        !@file_put_contents('data/pages/index/delete.php', '<?php $mc_pages=array(); ?>') ||
        !@file_put_contents('data/pages/index/publish.php', '<?php $mc_pages=array(); ?>') ||
        !@file_put_contents('data/pages/index/draft.php', '<?php $mc_pages=array(); ?>')
      ) {
        $install_failed = true;
        echo '[<span style="color:red;">失败</span>]';
        rmdir('data/pages/index');
      }
      echo '<br/>';
    } else {
      $install_failed = true;
      echo '[<span style="color:red;">失败</span>]';
      echo '<br/>';
    }
  }
}
?>
    </div>
<?php if ($install_failed) { ?>
    <div style="text-align:center;"><?php if ($is_upgrade) { ?>升级<?php } else { ?>安装<?php } ?>失败</div>
<?php } else { ?>
    <div style="text-align:center;"><?php if ($is_upgrade) { ?>升级<?php } else { ?>安装<?php } ?>完毕</div>
<?php if (!unlink(__FILE__)) { ?>
     <div style=\"text-align:center;padding-top:20px;color:red;\">安装文件无法删除，请手工删除。</div>
<?php } ?>
    <div style="text-align:center;padding:20px 0 0;">
    <form method="get" action="admin/">
    <input type="submit" value="开始体验" class="btn btn-primary"/>
    </form>
    </div>
<?php } ?>
<?php } ?>
    </div>
  </div>
</body>
</html>