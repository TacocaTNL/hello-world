var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = false;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    var response = JSON.parse(this.responseText);
    //Get information here.
  }
});

xhr.open("GET", "HTTPS://YOURURLHERE.COM/");
xhr.setRequestHeader("header1", "value1");
xhr.setRequestHeader("header2", "value2");

xhr.send(data);
