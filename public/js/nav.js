document.addEventListener('DOMContentLoaded', function() {
  var links = document.querySelectorAll('a#link'); // Select only <a> elements with id="link"
  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(event) {
      event.preventDefault();
      var link = this.getAttribute('href');
      fetch(link)
      .then(response => response.text())
      .then(html => {
          var pageElement = document.getElementById('page');
          pageElement.innerHTML = '';
          pageElement.insertAdjacentHTML('beforeend', html);
          console.log('completed');
        })
      .catch(error => {
          console.log('error');
        });
    });
  }
});