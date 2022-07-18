document.write("javascript");
var str="javascript";
function vowels(str)
{
    var i,vowels=0;;

    for(i=0;i<str.length;i++)
    {
        if(str[i]=='a'||str[i]=='e'||str[i]=='i'||str[i]=='o'||str[i]=='u')
        {
            vowels++;
        }
    }
    return vowels;
}
var vowel=vowels(str);
var con=str.length-vowel;
document.write("<br/>Vowels="+vowel+"Consonants="+con);


var arr1=[1,6,9,3,2,4,10,8,5];
document.write("<br/>Array: "+arr1);
var arr2;
var max=0,j;

arr2=arr1.sort(function(a,b){return b-a});

document.write("<br/>Second largest="+arr2[1]);

var y=2022;
if(y%4==0 && y%100==0 || y%400==0)
{
    document.write("<br/"+y+" is leap year");
}
else
{

}
