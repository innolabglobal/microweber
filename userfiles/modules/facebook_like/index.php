
<?php $cur_url = mw('url')->current(true); 

$cur_url = urlencode($cur_url);
?>
<iframe src="//www.facebook.com/plugins/like.php?href=<?php print $cur_url ?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=80&amp;appId=<?php print mw('option')->get('fb_app_id', 'users');?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>