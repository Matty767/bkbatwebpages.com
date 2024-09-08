<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Search</title>

    <style>
     

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background: linear-gradient(to right, #a4efa3, #d19a32);
            min-height: 200px;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        form label {
            color: #fff;
            font-weight: bold;
            margin: 5px 0;
            width: 100%;
        }

        form input[type="search"],
        form input[type="date"],
        form select {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #fff;
            color: #d19a32;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #d19a32;
            color: #fff;
        }
    </style>
</head>
<body>
    <main>
        <?php include 'templates/header.php'?>





        <section>
            
       <p></p> 



        
        
       <table>
    <tr>
        <th>bikeRally121</th>
        <th>Location</th>
        <th>Date</th>
        <th>Suitability</th>
        <th>0.00</th>
        <th>0.00</th>
        <th>Event Number</th>
        <th>a</th>
    </tr>
    <tr>
        <td>bikeshow</td>
        <td>Scotland</td>
        <td>2024-07-02</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>b</td>
    </tr>
    <tr>
        <td>bikeshow2</td>
        <td>England</td>
        <td>2024-02-20</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>c</td>
    </tr>
    <tr>
        <td>bikeRally121</td>
        <td>Northern Ireland</td>
        <td>2024-02-02</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>a</td>
    </tr>
    <tr>
        <td>relentless</td>
        <td>Northern Ireland</td>
        <td>2024-02-02</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>a</td>
    </tr>
    <tr>
        <td>bikeRally121</td>
        <td>Scotland</td>
        <td>2024-02-02</td>
        <td>Adults & Children</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>c</td>
    </tr>
    <tr>
        <td>Macavalanche</td>
        <td>England</td>
        <td>2024-02-02</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>a</td>
    </tr>
    <tr>
        <td>bikeRally121</td>
        <td>Northern Ireland</td>
        <td>2024-02-02</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>b</td>
    </tr>
    <tr>
        <td>bikeRally121</td>
        <td>Northern Ireland</td>
        <td>2024-02-02</td>
        <td>Adults</td>
        <td>0.00</td>
        <td>0.00</td>
        <td>1</td>
        <td>a</td>
    </tr>
</table>

</section>

        <h1>Event Search</h1>

        <!-- Search by Event Name -->
        <form action="results.php" method="post">
            <label for="event_name">Search by Event Name:</label>
            <input type="search" name="event_name" id="event_name">
            <input type="submit" name="search_event" value="Search">
        </form>

        <!-- Search by Location -->
        <form action="results.php" method="post">
            <label for="location">Search by Location:</label>
            <input type="search" name="location" id="location">
            <input type="submit" name="search_location" value="Search">
        </form>

        <!-- Filter by Date -->
        <form action="results.php" method="post">
            <label for="date">Filter by Date:</label>
            <input type="date" name="date" id="date">
            <input type="submit" name="filter_date" value="Filter">
        </form>

        <!-- Search by Price Band -->
        <form action="results.php" method="post">
            <label for="priceBand">Search by Price Band:</label>
            <select name="priceBand" id="priceBand">
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
            </select>
            <input type="submit" name="search_price_band" value="Search">
        </form>

        <?php include 'templates/footer.php';?>

    </main>
</body>
</html>
