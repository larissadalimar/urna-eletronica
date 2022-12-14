/**
 * Faz a integração para troca de dados entre front e back
 * 
 * @param url
 * @param method
 * @param callback
 * 
 */

function ajax(url, method, callback) {
  let request = new XMLHttpRequest();
  request.overrideMimeType("application/json");
  request.open(method, url, true);
  request.onreadystatechange = () => {
    if (request.readyState === 4 && request.status == "200") {
        callback(request.responseText);
    }
  };
  request.send(null);
}