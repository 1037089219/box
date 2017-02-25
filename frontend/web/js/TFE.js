window.onload = function(){

    //nav导航栏的切换
    var oIndexNav = document.getElementsByClassName('index-nav')[0];
    var oNavA = oIndexNav.getElementsByTagName('a');
    var oUser = document.getElementsByClassName('user')[0];
    var oCurriculum = document.getElementsByClassName('curriculum')[0];
    var oContentBox = document.getElementsByClassName('content-box')[0];
    var oProblem = document.getElementsByClassName('problem')[0];

    oNavA[0].onclick = function(){
      hidde();
      oContentBox.style.display = 'block';
      this.id = "nav-default";
    }

    oNavA[1].onclick = function(){
      hidde();
      oCurriculum.style.display = 'block';
      this.id = "nav-default";
    }

    oNavA[2].onclick = function(){
      hidde();
      oUser.style.display = 'block';
      this.id = "nav-default";
    }

    oNavA[3].onclick = function(){
      hidde();
      oProblem.style.display = 'block';
      this.id = "nav-default";
    }


    function hidde(){
      for(var i = 0; i < oNavA.length;i++){
        oNavA[i].id = '';
      }
      oUser.style.display = 'none';
      oCurriculum.style.display = 'none';
      oContentBox.style.display = 'none';
      oProblem.style.display = 'none';
    }

    // 用户评价的切换
    var oStudent = document.getElementsByClassName('student')[0];
    var oStunentLunb = oStudent.getElementsByClassName('lunb-parent')[0];
    var oStudentBtn = oStudent.getElementsByTagName('a');
    var oStudentLi = oStudent.getElementsByTagName('li');
    var timer = null;

    for(var i = 0; i < oStudentLi.length; i++){
      oStudentLi[i].index = i;
      oStudentLi[i].onclick = function(){

        for(var j = 0; j < oStudentLi.length; j++){
          oStudentLi[j].id = '';
        }

        if(this.index == 0){
          oStunentLunb.style.left = 0;
        }

        if(this.index == 1){
          oStunentLunb.style.left = -100+"%";
        }

        if(this.index == 2){
          oStunentLunb.style.left = -200+"%";
        }

        this.id = "student-list-default";
      }
    }



    oStudentBtn[0].onclick = function(){
      var  l = oStunentLunb.offsetLeft;

      if(l == 0){
        return;
      }

        judge(l,'left');

        oStunentLunb.style.left = l+1200+"px";

    }

    oStudentBtn[1].onclick = function(){

      var  l = oStunentLunb.offsetLeft;

      if(l == -2400){
        return;
      }
        judge(l,'right');

        oStunentLunb.style.left = l-1200+"px";

   }


    function judgea(){

    }

    // 电脑版
    function judge(l,direct){
      for(var i = 0; i < oStudentLi.length; i++){
          oStudentLi[i].id = '';                       
        }

      if(l > 0 || l < -2400){
        return;
      }

      if(l == 0 && direct == 'right'){
        oStudentLi[1].id = "student-list-default";
      }

      if(l == 0 && direct == 'left'){
        oStudentLi[0].id = "student-list-default";
      }

      if(l == -1200 && direct == 'right'){
        oStudentLi[2].id = "student-list-default";
      }

      if(l == -1200 && direct == 'left'){
        oStudentLi[0].id = "student-list-default";
      }

      if(l == -2400 && direct == 'right'){
        oStudentLi[2].id = "student-list-default";
      }

      if(l == -2400 && direct == 'left'){
        oStudentLi[1].id = "student-list-default";
      }
    }
    // banner轮播图的js代码
    
    var aBanner = document.getElementsByClassName('index-banner')[0];
    var oLunbDiv = aBanner.getElementsByClassName('lunb-img')[0];
    var oLunbLi = aBanner.getElementsByTagName('li');
    var s = 0;

    oLunbLi[0].onclick = function(){
      clear(this);
      oLunbDiv.style.left = 0;
    }

    oLunbLi[1].onclick = function(){
      clear(this);
      oLunbDiv.style.left = -100+"%";
    }

    oLunbLi[2].onclick = function(){
      clear(this);
      oLunbDiv.style.left = -200+"%";
    }

    function clear(that){
      for(var i = 0; i < oLunbLi.length;i ++){
        oLunbLi[i].id = '';
      }

      that.id = 'lunb-list-default';
    }


    //滑动切换的div
   var oIndexCon = document.getElementsByClassName('index-content')[0];
    var oScrollDiv = oIndexCon.getElementsByClassName('scroll-content')[0];
    var oScrollA = oIndexCon.getElementsByTagName('a');
    var s = true,timer = null;

    oScrollDiv.onmouseover = function(){

      this.onmousemove = function(ev){
        if(ev.clientX < 400){
          oScrollDiv.style.left = 100+"px";
        }else if(ev.clientX > 900){
          oScrollDiv.style.left = -740+"px";
        }
      }

    }   
} 