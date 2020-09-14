var tabs = document.querySelectorAll('.tabs')
for (var i = 0; i < tabs.length; i++){
	M.Tabs.init(tabs[i]);
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, []);
  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, []);
  });
