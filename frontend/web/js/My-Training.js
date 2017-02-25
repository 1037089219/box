window.onload = function (){

  // 点击li切换头部header的内容
  // var oNav = document.getElementsByClassName('nav')[0];
  // var oNavLi = oNav.getElementsByClassName('list');
  // var oNavSpan = oNav.getElementsByTagName('span');
  // var oHeader = document.getElementsByClassName('header')[0];
  // var oHeaderP = oHeader.getElementsByTagName('p')[0];

  // // var oMyClassDiv = document.getElementsByClassName('index--content--2nV81')[0];
  // // var oWholeClassDiv = document.getElementsByClassName('_main--body--4C2lk')[0];
  // // var oSetRenewDiv = document.getElementsByClassName('set-renew')[0];

 

  //   for(var i = 0; i < oNavLi.length; i++){

  //     oNavLi[i].index = i;
  //     oNavLi[i].onclick = function(){

  //       // oMyClassDiv.style.display = 'none';
  //       // oWholeClassDiv.style.display = 'none';
  //       // oSetRenewDiv.style.display = 'none';

  //       // if(this.index == 0){
  //       //   oMyClassDiv.style.display = 'block';
  //       // }

  //       // if(this.index == 1){
  //       //   oWholeClassDiv.style.display = 'block';
  //       // }

  //       // if(this.index == 3){
  //       //   oSetRenewDiv.style.display = 'block';
  //       // }

  //       for(var j = 0; j < oNavSpan.length; j++){
  //         oNavSpan[j].id = '';
  //       }


  //       oNavSpan[this.index].id = 'nav-in-default';


  //       var text = oNavSpan[this.index].innerHTML;
  //       oHeaderP.innerHTML = text;
  //     }
  //   }

  //设置续费界面div的隐藏和显示
  var oSet = document.getElementsByClassName('set-renew')[0];
  var oSetLeft = oSet.getElementsByClassName('set-left')[0];
  var oSetLeftLi = oSetLeft.getElementsByTagName('li');
  var oSetRight = oSet.getElementsByClassName('set-right')[0];
  var oSetRightSon = oSetRight.getElementsByClassName('son-div');

  for(var i = 0; i < oSetLeftLi.length; i++){

    oSetLeftLi[i].index = i;
    oSetLeftLi[i].onclick = function(){

      for(var j = 0; j < oSetLeftLi.length; j++){
        oSetLeftLi[j].id = '';
        oSetRightSon[j].style.display = 'none';
      }

      this.id = 'set-list-default';
      oSetRightSon[this.index].style.display = 'block';
    }

  }

  //续费界面的查看所有课程

}
