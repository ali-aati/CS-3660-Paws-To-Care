<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Exotics Notes Fake JS</title>
</head>
<body onload="myFunction()">
    <script>
    //http://marak.github.io/faker.js/

    Date.prototype.toYMD = Date_toYMD;
    function Date_toYMD() {
    var year, month, day;
    year = String(this.getFullYear());
    month = String(this.getMonth() + 1);
    if (month.length == 1) {
        month = "0" + month;
    }
    day = String(this.getDate());
    if (day.length == 1) {
        day = "0" + day;
    }
    return year + "-" + month + "-" + day;
    }

    function myFunction() {
        let today = new Date();
                document.getElementById("showdata").innerHTML += "INSERT INTO exoticnotes (exoticsFk,vetName,date,note)";
               
                document.getElementById("showdata").innerHTML += "<br>VALUES";

           for (let i = 1; i < 1000; i++)
			{
				document.getElementById("showdata").innerHTML += "<br>(" + faker.random.number({min:1, max:1000}) + ",'" + faker.random.arrayElement(["Ali Aati","Chad Basinge","Hussain Khaldi"]) + "','" + faker.date.past(10, today.getFullYear()).toYMD() + " 00:00:00','" + faker.lorem.paragraph() + "'),";
			}
                document.getElementById("showdata").innerHTML += "<br>(" + faker.random.number({min:1, max:1000}) + ",'" + faker.random.arrayElement(["Ali Aati","Chad Basinge","Hussain Khaldi"]) + "','" + faker.date.past(10, today.getFullYear()).toYMD() + " 00:00:00','" + faker.lorem.paragraph() + "')";
            }

    </script>

<div class="container">
    <div class="row">
        <div class="col-12">
<div id="showdata"></div>
    </div>
    </div>
    </div>


</body>
</html>