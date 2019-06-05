class Project{
    constructor(){
        this.btn = document.getElementById("btn");
        this.title = document.getElementById("title");
        this.content = document.getElementById("content");
        this.message = document.getElementById("message");
        this.tbody = document.querySelector("tbody");
        // 添加按钮
        this.insertBtn = document.getElementById("insert");

        // 添加信息的url
        this.insertUrl = "http://localhost/1903/ajax-project/ctrl/insert.php";
        this.updateUrl = "http://localhost/1903/ajax-project/ctrl/update.php";
        this.selectUrl = "http://localhost/1903/ajax-project/ctrl/select.php";

        // U1.假设初始提交状态为：添加0；还可以改成：修改1
        this.type = 0;

        // I1.绑定提交事件
        this.addEvent()

        // S1.开启select的ajax
        this.selectAjax();
    }
    addEvent(){
        var that = this;
        this.btn.onclick = function(){
            // I2.U5.获取输入框的数据
            that.t = that.title.value;
            that.c = that.content.value;
            that.m = that.message.value;

            // 提交之后，清空输入框
            that.title.value = "";
            that.content.value = "";
            that.message.value = "";

            // U4.表单提交按钮判断当前的状态，根据状态决定要做的事情
            if(that.type == 0){
                // console.log("insert")
                // I3.开启insert的ajax
                that.insertAjax();
            }else{
                // console.log("update")
                // U6.开启update的ajax
                that.updateAjax();
            }
        }

        // U2.绑定添加按钮的点击事件，点击时修改状态为0表示添加
        this.insertBtn.onclick = function(){
            that.type = 0;
        }

        // U3.绑定修改按钮的点击事件，点击时修改状态为1表示修改，同时设置表单内容和获取id
        this.tbody.addEventListener("click",function(eve){
            var e = eve || window.event;
            var target = e.target || e.srcElement;
            if(target.id == "update"){
                that.type = 1;
                that.title.value = target.parentNode.parentNode.children[1].innerHTML;
                that.content.value = target.parentNode.parentNode.children[2].innerHTML;
                that.message.value = target.parentNode.parentNode.children[3].innerHTML;
                that.id = target.parentNode.parentNode.children[0].innerHTML;
            }
        })


    }
    insertAjax(){
        var that = this;
        ajax({
            url:this.insertUrl,
            data:{
                aa:this.t,
                bb:this.c,
                cc:this.m
            },
            success:function(res){
                // I4.读取数据，判断数据，解析数据
                switch(res){
                    case "0":
                        break;
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    default:
                        that.res = JSON.parse(res)
                        // I5.渲染页面
                        that.display()
                }
            }
        })
    }
    display(){
        // console.log(this.res)
        // 开始渲染页面
        var str = "";
        for(var i=0;i<this.res.length;i++){
            str += `<tr>
                        <td>${this.res[i].id}</td>
                        <td>${this.res[i].bt}</td>
                        <td>${this.res[i].cont}</td>
                        <td>${this.res[i].msg}</td>
                        <td><span class="btn btn-secondary" id="delete">删除</span></td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" id="update">修改</button></td>
                    </tr>`
        }
        this.tbody.innerHTML = str;
    }
    updateAjax(){
        // 开启update的ajax
        var that = this;
        ajax({
            url:this.updateUrl,
            data:{
                aa:this.t,
                bb:this.c,
                cc:this.m,
                id:this.id
            },
            success:function(res){
                // U7.读取数据，判断数据，解析数据
                // console.log(res)
                switch(res){
                    case "0":
                        break;
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    case "6":
                        // U8.更新成功，根据id判断当前修改的是哪个tr，然后通过本地数据更新页面，而不重新请求mysql，节省性能
                        for(var i=0;i<that.tbody.children.length;i++){
                            if(that.tbody.children[i].children[0].innerHTML == that.id){
                                that.tbody.children[i].children[1].innerHTML = that.t
                                that.tbody.children[i].children[2].innerHTML = that.c
                                that.tbody.children[i].children[3].innerHTML = that.m
                            }
                        }
                }
            }
        })
    }
    selectAjax(){
        // 开启select的ajax
        var that = this;
        ajax({
            url:this.selectUrl,
            success:function(res){
                // S2.读取数据，判断数据，解析数据
                // console.log(res)
                switch(res){
                    case "0":
                        break;
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    default:
                        that.res = JSON.parse(res)
                        // S3.渲染页面
                        that.display()
                }
            }
        })
    }
}

new Project;