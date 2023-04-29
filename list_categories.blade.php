<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link href="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
        }

        h2 {
            margin-top: 30px;
            margin-bottom: 30px;
            font-weight: bold;
            text-align: center;
            font-size: 2rem;
            color: #343a40;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            font-weight: bold;
            background-color: #343a40;
            color: #ffffff;
        }
        a[href="/formularioCategorias"]:hover {
        background-color: #f25a08;
        }
        
		.home-link {
           position: fixed;
           top: 15px;
           right: 1165px;
           display: flex;
           align-items: center;
           justify-content: center;
           width: 40px;
           height: 40px;
           border-radius: 50%;
           background-color: #333;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
           z-index: 999;
           }
           .home-link img {
               width: 20px;
               height: 20px;
               fill: #fff;
           }

    </style>
</head>
<body>


	<a href="/" class="home-link"><img src="https://images.emojiterra.com/twitter/v13.1/512px/1fa78.png" alt="Home"></a>

    <div class="container">
        <h2>Categories</h2>
        <a href="/formCategories" style="display: inline-block; text-decoration: none; font-size: 16px; font-weight: 600; color: #fff; background-color: #f48d59; padding: 10px 20px; border-radius: 4px; transition: background-color 0.3s ease-in-out;">Add</a>
        
        <br><br>
        <table>
            <tr>
                <th>Name</th>
            </tr>
            @foreach ($data_categories as $dat)
            <tr>
                <td>{{$dat->name_c}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>