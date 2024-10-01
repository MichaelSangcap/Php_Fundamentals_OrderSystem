<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th> 
        </tr>
        <tr>
            <th>Spicy Borger ni Koya</th>
            <th>85</th>
        </tr>
        <tr>
            <th>Fries ni idol Ko</th>
            <th>50</th>
        </tr>
        <tr>
            <th>Sisig na Pangmasa</th>
            <th>150</th>
        </tr>
    </table>

    <form action = 'get.php' method = 'GET'>
        <label for = 'food'>Choose Your Order:</label>
            <select name = 'food' id = 'food'>
                <option value = 'Spicy Borger ni Koya'>Spicy Borger ni Koya</option>
                <option value = 'Fries ni idol Ko'>Fries ni idol Ko</option>
                <option value = 'Sisig na Pangmasa'>Sisig na Pangmasa</option>
            </select>
            <p>Quantity:
                <input type = 'text' name = 'Quantity' size = '20' maxlength = '30'/>  
            </p>
            <p>Cash:
                <input type = 'text' name = 'Cash' size = '20' maxlength = '30'/>  
            </p>
            <label>
                <input type = 'submit' value = 'submit' name = 'submitname'/>
            </label>
    
</body>
</html>