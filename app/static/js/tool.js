/**
 * Created by qiaochangwei on 16/5/10.
 */

function getRequest() {
    var url = location.search; // 获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        var strs = str.split("&");
        for (var i = 0; i < strs.length; i++) {
            var decodeParam = decodeURIComponent(strs[i]);
            var param = decodeParam.split("=");
            theRequest[param[0]] = param[1];
        }

    }
    return theRequest;
}


function getQueryStringArgs(){
    // 取得查询字符串并去掉开头的问号
    var qs = (location.search.length > 0 ? location.search.substring(1) : ""),
    // 保存数据对象
    args  = {},
    //取得每一项
    items = qs.length ? qs.split("&") : [],
    item = null,
    name = null,
    value = null,
    //for循环中使用
    i = 0,
    len = items.length;
    //逐个将每一项添加到args对象中
    for (i=0; i < len; i++){
        item = items[i].split("=");
        name = decodeURIComponent(item[0]);
        value = decodeURIComponent(item[1]);
        if (name.length) {
            args[name] = value;
        }
    }
    return args;

}


//传时间戳
function getDateStyle(postdate) {
    var t = new Date().getTime() - postdate;
    var showtime = "";
    if (t < 1000 * 10) {
        showtime = '刚刚';
    }
    else if (t < 1000 * 60) {
        showtime = Math.round(t / 1000) + "秒前";
    } else if (t < 1000 * 60 * 60) {
        showtime = Math.round(t / (1000 * 60)) + "分钟前";
    } else if (t < 1000 * 60 * 60 * 24) {
        showtime = parseInt(t / (1000 * 60 * 60)) + "小时前";
    } else if (t < 1000 * 60 * 60 * 24 * 2) {
        showtime = '昨天' + new Date(postdate * 1000).format('hh:mm');
    } else if (t < 1000 * 60 * 60 * 24 * 3) {
        showtime = '前天' + new Date(postdate * 1000).format('hh:mm');
    } else if (t < 1000 * 60 * 60 * 24 * 4) {
        showtime = "3天前";
    } else {
        showtime = new Date(postdate).format('yyyy-MM-dd');
    }
    return showtime;

}

//计算字符串长度,支持unicode,gbk
function byteLen(str, encode) {
    var encode_len = 3;
    if (encode && encode.substr(0, 2).toLowerCase() === 'gb')
        encode_len = 2;
    var byte_len = 0;
    var chars = str.split('');
    for (var i = 0; i < chars.length; i++) {
        var urichar = encodeURI(chars[i]);
        byte_len += urichar.length == 1 ? 1 : urichar.length / 9 * encode_len;
    }
    return byte_len;
}


//百分号转小数
function per2num(per) {

    return per.replace(/([0-9.]+)%/, function (a, b) {return +b / 100;})

}

["2%", "25%", "2.01%", "25.00%"].forEach(function (test)

{
    document.body.innerHTML += test + ": " + per2num(test) + "<br>";
});
