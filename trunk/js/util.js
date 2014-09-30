//document.domain="taohuopu.com";
var weburlht="http://tj.taohuopu.com";
var urlsear=window.location.search;
if(urlsear.length>1){
    urlsear=urlsear.substr(1);
    var seararr=urlsear.split('&');
    for(var i=0;i<seararr.length;i++){
        var searsp=seararr[i].split('=');
        if(searsp[0]=="u"){
            document.cookie="urlsourcestr="+searsp[1]+";path=/;domain=taohuopu.com";
            break;
        }
    }
}
function logbyall(wid,cid,paid,poid,pid,mycid,mycid2,dpf){

var qsData = {'wid':wid,'cid':cid,'paid':paid,'poid':poid,'pid':pid,'mycid':mycid,'mycid2':mycid2,'dpf':dpf};

$.ajax(
    {
        async:false,
        url: weburlht+'/tj.php',
        type: "GET",
        dataType: 'jsonp',
        jsonp: 'jsoncallback',
        data: qsData,
        timeout: 5000,
        beforeSend: function(){
        },
        success: function (json) {
            if(json.actionErrors.length!=0){
                
            }
        },
        complete: function(XMLHttpRequest, textStatus){
                
        },
        error: function(xhr){
            
        }
    }       
); 



}
function logbywebid(wid){logbyall(wid,0,0,0,0,0,0,0);}
function logbychannleid(wid,cid){logbyall(wid,cid,0,0,0,0,0,0);}
function logbypageid(wid,cid,paid){logbyall(wid,cid,paid,0,0,0,0,0);}
function logbypageidacid(wid,cid,paid,mycid,mycid2){logbyall(wid,cid,paid,0,0,mycid,mycid2,0);}
function logbyposiid(wid,cid,paid,poid){logbyall(wid,cid,paid,poid,0,0,0,0);}
function logbyposandde(wid,cid,paid,poid,pid,pdf){logbyall(wid,cid,paid,poid,pid,0,0,pdf);}
function logbypid(wid,cid,paid,pid,pdf){logbyall(wid,cid,paid,0,pid,0,0,pdf);}
function logbypidandcid(wid,cid,paid,pid,pdf,mycid,mycid2){logbyall(wid,cid,paid,0,pid,mycid,mycid2,pdf);}

