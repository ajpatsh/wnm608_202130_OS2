$("[name='select-color']").on("change",function(e){
	$(".value").html($(this).val())
})