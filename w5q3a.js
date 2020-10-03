var top1="a1";
function toTop(newTop)
{
domTop = document.getElementById(top1).style;
domNew = document.getElementById(newTop).style;
domTop.zIndex="0";
domNew.zIndex="10";
top1=newTop;
}
