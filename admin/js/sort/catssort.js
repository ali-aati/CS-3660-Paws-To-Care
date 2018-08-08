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
var Sort_Birthdate = 1;
var Sort_Declawed = 1;
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
$("#Birthdate").click(function () {
    Sort_Birthdate *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_Birthdate, n);
});

$("#Declawed").click(function () {
    Sort_Declawed *= -1;
    var n = $(this).prevAll().length;
    sortTable(Sort_Declawed, n);
});