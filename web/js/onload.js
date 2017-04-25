function addOnLoad(nuevoOnLoad) {
   var prevOnload = window.onload;
   if (typeof window.onload != 'function') {
      window.onload = nuevoOnLoad;
   }
   else {
      window.onload = function() {
          prevOnload();
          nuevoOnLoad();
      }
   }
}
