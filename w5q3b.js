var top1="a1";
function toTop(newTop)
{
domTop = document.getElementById(top1).style;
domNew = document.getElementById(newTop).style;
domTop.zIndex="0";
domNew.zIndex="10";
top1=newTop;
}
function orignal()
{
dom1 = document.getElementById('a1').style;
dom2 = document.getElementById('a2').style;
dom3 = document.getElementById('a3').style;
dom1.zIndex="0";
dom2.zIndex="1";
dom3.zIndex="2";
}