function currencyConverter(){
    var http = new XMLHttpRequest();
    const url = 'http://www.apilayer.net/api/live?access_key=014c3d98bde5376b650a95da157b1019&format=1';
    http.open("GET", url);
    http.send();
    http.onreadystatechange = (e) => {
		var response = http.responseText;
        var responseJSON = JSON.parse(response); 
        console.log(response);
        console.log(responseJSON);

        var country = responseJSON.results[0].components.country;
        document.getElementById('pos').innerHTML = country;
    }