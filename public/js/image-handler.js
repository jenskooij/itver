function imageClickHandler (e) {
  e = e ? e : window.event;
  var target = e.target ? e.target : e.srcElement;
  console.log(target);
  basicLightbox.create(`<img width="1400" height="900" src="` + SUBFOLDERS + 'images/' + target.getAttribute('data-original') + `">`).show();
}

(function () {
  "use strict";
  var images = document.querySelectorAll('img[data-original]'),
    i;

  for (i = 0; i < images.length; i += 1) {
    images[i].addEventListener('click', imageClickHandler);
    images[i].style.cursor = 'pointer';
  }
})();