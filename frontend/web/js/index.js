window.onload = function(){
  var oWhyNd = document.getElementsByClassName('why_nd')[0];
  var oTabContain = oWhyNd.getElementsByClassName('tabs_contain')[0];
  var oTabsNav = oTabContain.getElementsByClassName('tab_nav')[0];
  var oTabWhat = oTabsNav.getElementsByTagName('a');

  oTabWhat[0].onclick = function(){
    oTabContain.className = "tabs_contain what_get--on contain";
  }

  oTabWhat[1].onclick = function(){
    oTabContain.className = "tabs_contain what_is--on contain";
  }
}