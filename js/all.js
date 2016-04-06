// JavaScript Document
/*edit visit*/
function getObj()
{
		var req;
				if(window.XMLHttpRequest)
				{
					req=new XMLHttpRequest();
				}
			else
				{
					req=new ActiveXObject("Microsoft.XMLHTTP");
				}
				return req;
}
function Edit(visitid)
{
	
           var req=getObj();
			req.onreadystatechange=function()
				{
					if(req.readyState==4 && req.status==200)
						{
						
							document.getElementById("view").innerHTML=req.responseText;
						}
				}
		//alert("visit_Edit.php?visitid="+visitid);
			req.open("GET","visit_Edit.php?visitid="+visitid,true);
			req.send();
}

//to check pwd
function CheckPwd(cpwd)
{
	pwd=document.getElementById("pwd").value;
	if(cpwd != pwd)
	{
		document.getElementById("error").innerHTML="Password and Confirm Password do not match!";
	}
	else
	{
		document.getElementById("error").innerHTML="";
	}
}

//to check email
function CheckEmail(email)
{
	  var request=getObj();
			request.onreadystatechange=function()
				{
					if(request.readyState==4 && request.status==200)
						{
						
							document.getElementById("emailerror").innerHTML=request.responseText;
						}
				}
		//alert("visit_Edit.php?visitid="+visitid);
			request.open("GET","Checkemail.php?email="+email,true);
			request.send();
}

//to search
function Search(str)
{
	document.getElementById("stext").style.display="block";
	document.getElementById("stext").placeholder="Search "+str;
	document.getElementById("stype").value=str;
}
//search data
function SearchData(sdata,st)
{
	var stype=st.value;
	var request=getObj();
			request.onreadystatechange=function()
				{
					if(request.readyState==4 && request.status==200)
						{
						
							document.getElementById("sdata").innerHTML=request.responseText;
						}
				}
		//alert("serachData.php?str="+sdata+"&stype="+stype);
			request.open("GET","serachData.php?str="+sdata+"&stype="+stype,true);
			request.send();
}