//drop menu apabial didalam.menu li kok ada ul lagi(berarti itu dropdonw)
//bila di klik ada yang terjadi
$(".menu li > a").click(function(e){
//yg terjadi adalah ngeslide up dan nge slide down apabila punya anak menu
	$(".menu ul ul").slideUp(),$(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
});

// bila yang membuka dari 768px
 $(window).bind("load resize",function(){
if($(this).width() <768)
{
	$(".sidebar-collapse").addClass("collapse");
}
else
{
	$(".sidebar-collapsesidebar").removeClass("collapse");
	$(".sidebar-collapse").removeAttr("style");
}


})