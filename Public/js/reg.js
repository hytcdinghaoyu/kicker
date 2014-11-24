$(function(){

	//前端输入格式验证
	$("#regform").validate({				
			rules: {
				username:{
					required:true,
					maxlength:20
				},
	            password: {
	                required: true,
	                minlength: 5
	            },
	            confirm_password: {
	                required: true,
	                minlength: 5,
	                equalTo: "#password"
	            },
	            usermail:{
	            	required:true,
	            	email:true
	            }
        	},
        	messages: {
        		username:{
					required:"请输入用户名",
					maxlength:"用户名不能大于20位"
				},
	            password: {
	                required: "请填写密码",
	                minlength: "确认密码不能小于{0}个字符"
	            },
	            confirm_password: {
	                required: "请确认密码",
	                minlength: "确认密码不能小于{0}个字符",
	                equalTo: "两次输入密码不一致嘛"
	            },
	            usermail:{
	            	required:"请填写邮箱",
	            	email:"请输入正确的邮箱地址"
	            }
        	}
	});

	//动态验证用户名是否被占用
	$("#username").keyup(function(){

		var username = $(this).val().toString();
		if (username != "") {
			$.ajax({

			type : "POST",
			url : checkUrl,
			data : {username:username},
			success : function(res){

				if (res.status==1) {
					//alert(res.msg);
					$("#checkuser").html(res.msg);
					$("#checkuser").css({"color":"#ff0000"});
				}
				else{
					$("#checkuser").html(res.msg);
					$("#checkuser").css({"color":"#66ff00"});
				}

			}


			});
		};		
		

	});

})