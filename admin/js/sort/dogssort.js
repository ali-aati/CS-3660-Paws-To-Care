//Sort
function sortTable(f, n) {
    var rows = $('#mytable tbody  tr').get();
    rows.sort(function (a, b) {

        var A = getVal(a);
        var B = getVal(b);
        if (A < B) {
            return -1 * f;
        }
        if (A > B) {
            return 1 * f;
        }
        return 0;
    });

    function getVal(elm) {
        var v = $(elm).children('td').eq(n).text().toUpperCase();
        if ($.isNumeric(v)) {
            v = parseInt(v, 10);
        }
        return v;
    }
    $.each(rows, function (index, row) {
        $('#mytable').children('tbody').append(row);
    });
}
var sort_Name = 1;
var Sort_Breed = 1;
var Sort_Sex = 1;
var Sort_Shots = 1;
var Sort_licensed = 1;
var Sort_neutered = 1;
var Sort_Age = 1;
var Sort_weight = 1;
$("#Name").click(function () {
    sort_Name *= -1;
    var n = $(this).prevAll().length;
    sortTable(sort_Name, n);
});
$("#Breed").click(function () {
    Sort_Breed *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_Breed, n);
});
$("#Sex").click(function () {
    Sort_Sex *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_Sex, n);
});
$("#Shots").click(function () {
    Sort_Shots *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_Shots, n);
});
$("#licensed").click(function () {
    Sort_licensed *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_licensed, n);
});
$("#neutered").click(function () {
    Sort_neutered *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_neutered, n);
});

$("#Age").click(function () {
    Sort_Age *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_Age, n);
});
$("#weight").click(function () {
    Sort_weight *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_weight, n);
});
