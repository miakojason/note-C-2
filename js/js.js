// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function good(id,type,user)
{
	$.post("back.php?do=good&type="+type,{"id":id,"user":user},function()
	{
		if(type=="1")
		{
			$("#vie"+id).text($("#vie"+id).text()*1+1)
			$("#good"+id).text("收回讚").attr("onclick","good('"+id+"','2','"+user+"')")
		}
		else
		{
			$("#vie"+id).text($("#vie"+id).text()*1-1)
			$("#good"+id).text("讚").attr("onclick","good('"+id+"','1','"+user+"')")
		}
	})
}
function clean() {
	$("input[type='text'],input[type='password'],input[type='number'],input[type='radio']").val("");
}
function reg(){
	let user={
		acc:$("#acc").val(),
		pw:$("#pw").val(),
		pw2:$("#pw2").val(),
		email:$("#email").val()
	}
	if(user.acc !='' && user.pw !='' && user.pw2 !='' && user.email !=''){
		if(user.pw==user.pw2){
			$.post("./api/check_acc.php",{acc:user.acc},(res)=>{
				if(parseInt(res)==1){
					alert("帳號重覆")
				}else{
					$.post("./api/reg.php",user,(res)=>{
						alert('註冊完成')
					})
				}
			})
		}else{
			alert("密碼錯誤")
		}
	}else{
		alert("不可空白")
	}
}