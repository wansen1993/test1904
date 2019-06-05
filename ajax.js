function ajax(options){
    // console.log(options)
    // options.url
    // options.success
    // 1.处理默认参数
    let type = options.type ? options.type : "get";
    let data = options.data ? options.data : {};
    // 2.不管是get还是post都需要解析data
    let str = "";
    for(let i in data){
        str += `${i}=${data[i]}&`;
    }

    let d = new Date();

    // 3.开启ajax
    let ajax = new XMLHttpRequest();
    if(type == "get"){
        options.url = options.url+"?"+str+"_qft="+d.getTime()
        ajax.open(type,options.url,true);
        str = null;
    }else if(type == "post"){
        ajax.open(type,options.url,true)
        str = str.slice(0,str.length-1);
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    }
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            options.success(ajax.responseText)
        }
    }

    ajax.send(str)
}