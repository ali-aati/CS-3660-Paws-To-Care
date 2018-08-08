<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Cats Relationships Fake JS</title>
</head>
<body onload="myFunction()">
    <script>
    //http://marak.github.io/faker.js/

    function myFunction() {
                document.getElementById("showdata").innerHTML += "INSERT INTO catsOwners (catsFk,ownersFk)";
               
                document.getElementById("showdata").innerHTML += "<br>VALUES";

            for (let i = 1; i < 1000; i++)
			{
				document.getElementById("showdata").innerHTML += "<br>(" + i + "," + faker.random.number({min:1, max:1000}) +"),";
			}
                document.getElementById("showdata").innerHTML += "<br>(" + 1000 + "," + faker.random.number({min:1, max:1000}) +")";
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