const ajaxService = function(success) {
    $.ajax({
        url: 'https://api.covid19api.com/world/total',
        method: "get",
    }).done(success).fail(function() {
        console.log('API : ' + url + "failed.");
    });
}
const displayData = function(result) {
    console.log(result);
    // result = JSON.parse(result);
    $('.totalConfirmed').html(result.TotalConfirmed);
    $('.totalDeaths').html(result.TotalDeaths);
    $('.totalRecovered').html(result.TotalRecovered);

};
const ajaxData = function(success) {
    $.ajax({
        url: 'https://api.covid19api.com/summary',
        method: "get",
    }).done(success).fail(function() {
        console.log('API : ' + url + "failed.");
    });
}
const displayData1 = function(result) {
    console.log(result.Countries);
    //result = JSON.parse(result);
    var country_data = '';
    var sno = 1;
    $.each(result.Countries, function(key, value) {
        country_data += '<tr>';
        country_data += '<td>' + sno + '</td>';
        country_data += '<td>' + value.Country + '</td>';
        country_data += '<td>' + value.TotalConfirmed + '</td>';
        country_data += '<td>' + value.TotalDeaths + '</td>';
        country_data += '<td>' + value.TotalRecovered + '</td>';
        country_data += '<tr>';
        sno++;

    });
    $('#datatable').append(country_data);

};
const ajaxcountry = function(success) {
    $.ajax({
        url: 'https://api.covid19api.com/live/country',
        method: "get",
    }).done(success).fail(function() {
        console.log('API : ' + url + "failed.");
    });
}

$(document).ready(function() {
    ajaxService(displayData);
    ajaxData(displayData1);
});