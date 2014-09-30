		
		
		function checkemail()
		
	{
        var temp = document.getElementById("email");
		
        var myreg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/;
        {	

        if(temp.value!="")
            if(!myreg.test(temp.value))
            {
                alert("请输入有效的邮箱地址");
                //document.getElementById("mail").style.color="red";
                //temp.value="";
                temp.focus();
                return false;
            }
            else{
				// document.getElementById("mail").innerHTML="email可以使用";
               // document.getElementById("mail").style.color="green";
			  //$("#mail").html(" ");
				return true;
            }
        }
    } 
	
	function uname(){
	
				var uname = document.getElementById("username");
				
				if(uname.value==" "){
					document.getElementById("bc").innerHTML="账号不能为空";
					return false;
				}else{
					return true;
				}
				
	}
	
	
		