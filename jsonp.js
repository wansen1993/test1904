function jsonp(url,callback,data){
    data = data ? data : {};
    let str = "";
    for(let i in data){
        str += `${i}=${data[i]}&`;
    }
    url = url + "?" + str.slice(0,str.length-1);

    // 1.script标签
    var script = document.createElement("script");
    script.src = url;
    document.body.appendChild(script);
    // 2.函数

    // window[data["callback"]] = function(res){
    // window["asmjdgajksd"] = function(res){
    // window.asmjdgajksd = function(res){

    window[data[data.cloumnName]] = function(res){
        callback(res)
    }
}