function validate()
{
    //fname
    document.getElementById("fname_error").textContent=fname();
    document.getElementById("lname_error").textContent=lname();
    document.getElementById("mobile_error").textContent=mobile();
    document.getElementById("email_error").textContent=email();
    
}

function fname()
{
    fname=document.getElementById("fname").value;
    cond=false;
    for(i=0;i<fname.length;i++)
    {
        if(isNaN(fname[i])==false)
        {
            cond=true;
            break;
        }
    }
    
    
    if(cond==true)
    {
        return "* First name cannot contain a number";
    }
    else
    {
        return "";
    }   
}

function lname()
{
    lname=document.getElementById("lname").value;
    cond=false;
    for(i=0;i<lname.length;i++)
    {
        if(isNaN(lname[i])==false)
        {
            cond=true;
            break;
        }
    }
   if(cond==true)
    {
        return "* Last name cannot contain a number";
    }
    else
    {
        return "";
    }   
}

function mobile()
{
    mobile=document.getElementById("mobile").value;
   
    if(mobile.substring(0,3)=="+91")
    {
        if(mobile.length==14 || mobile.length==13)
        {
            return "";
        }

        else
        {
            return "* Invalid Mobile Number";
        }
    }
    else
    {
        return "* Mobile Number should start with +91";
    }
    
    
    
}

function email()
{
    email=document.getElementById("email").value;
    var pos_at=email.indexOf('@');
    var pos_dot=email.lastIndexOf(".");
    k=0;

    if((pos_at>0) && (pos_dot>pos_at+1) && (e.length>pos_dot+2))
    {
        k=1;
    }
    if(k==0)
    {
        return "* Invalid Email";
    }
}
function uname()
{
    uname=document.getElementById("uname").value;
    length=false;num=false;lower=false;space=false;
    if(uname.length>=6) //length
    {
        length=true;
        break;
    }
    if(uname.indexOf(" ")!=-1)
    {
        space=true;
    }
    for(i=0;i<uname.length;i++) //numeric
    {
        if(isNaN(uname[i])==false)
        {
            num=true;
            break;
        }
    }
    for(i=0;i<uname.length;i++) //lower
    {
        if(uname[i]>=97 && uname[i]<=122)
        {
            lower=true;
            break;
        }
    }
    for(i=0;i<uname.length;i++) //upper
    {
        if(uname[i]>=65 && uname[i]<=90)
        {
            upper=true;
            break;
        }
    }
    

    if(length==true && num==true && lower==true && upper==true && space==false)
    {
        return "";
    }
    else
    {
        return "* Invalid username";
    }
}
