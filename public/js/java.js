// JavaScript Document 

$(document).ready(function(){

$('.turner').click(function(){
$(this.hash).fadeToggle(200);
return false;
});
$('.popup').prepend('<a href="#" class="close">✖</a>');
$('.popup').on('click','.close',function(){
$(this).parent().fadeOut(200);
return false;
});

$('.exit').click(function(){
delete_cookie('uid');
delete_cookie('role');
window.location = '/';
return false;
});

$('.insert-form').click(function(){
target=$(this.hash).find('.active-form');
postdata='form='+target.attr('id')+'&unit='+$(this).parents('.stack-unit').attr('id');
$.ajax({
type: 'POST',
url: '/scripts/insertform/',
data: postdata,
success: function(answer) {
target.html(answer);
}
});

return false;
});

$('.active-form').on('click','.go-on a',function(){
postdata='';
$(this).parents('.active-form').find('input, select, textarea').each(function(){
postdata+=$(this).attr('name')+'='+$(this).val()+'&';
});
postscript=$(this).parents('.active-form').attr('id');
$.ajax({
type: 'POST',
url: postscript,
data: postdata,
success: function(answer) {
res=JSON.parse(answer);
if (res['response']=='ok')
{
if (res['postaction']=='reload') {location.reload();}
if (res['postaction']=='redirect') {window.location = res['location']+'/';}
if (res['postaction']=='add') {$(res['selector']).prepend(res['addata']);}
if (res['postaction']=='change') {$(res['selector']+' #'+res['elem']).remove(); $(res['selector']).prepend(res['addata']);}
$('.popup').fadeOut(200);
}
if (res['response']=='sms')
{
$('.error').hide();
$('.sms-code').slideDown(300);
$('.play-button').addClass('get-low');
$('.onepay').parent().fadeOut(300);
}
if (res['response']=='error')
{
$('.error').slideDown(300);
$('.error').html(res['message']);
}
}
});
return false;
});

var showQr = function() {

	var qrContainer = $("#qrcode");
	var getQrText = function() {
		var qr;
		qr = qrContainer.children('img').attr('alt');
		console.log(qr);
		return qr;
	}

	var qrtext = getQrText();
	qrContainer.children('img').detach();
	var qrcode = new QRCode(document.getElementById("qrcode"), {
		text: qrtext,
		width: 240,
		height: 240,
		colorDark : "#000000",
		colorLight : "#ffffff",
		correctLevel : QRCode.CorrectLevel.H
	});
}

var timer;
$('.table-container').on('mouseover', '.edit', function() {
	$(this).parent().children('.delete').css('display', 'inline-block');
});
$('.table-container').on('mouseleave', '.edit', function() {
	var self = $(this);
	timer = setTimeout(function(){
		self.parent().children('.delete').css('display', 'none')
	}, 500);
});
$('.table-container').on('mouseover', '.delete', function() {
	clearTimeout(timer);
});
$('.table-container').on('mouseleave', '.delete', function() {
	$(this).parent().children('.delete').css('display', 'none')
});

showQr();
});


function delete_cookie(cookie_name)
{
  var cookie_date = new Date ( ); 
  cookie_date.setTime(cookie_date.getTime()-1);
  document.cookie=cookie_name+"=; expires="+cookie_date.toGMTString();
}
function setcookie(name, value, expires, path)
{
	document.cookie=name+"="+escape(value)+((expires)?"; expires="+(new Date((new Date).getTime()+expires*1000)):"")+((path)?"; path="+path:"");
}
