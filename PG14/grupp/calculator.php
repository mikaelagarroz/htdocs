<html>
<head>
    <script src="createBudg.js"></script>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="main">
    <form name="form">
        <input class="value" name="textview">
    </form>
    <table>
         <tr>
           <td colspan=2><input class="button" style="width:106" type="button" value="C" onclick="regrett()"></td>
           <td><input class="button" type="button" value="x" onclick="insert('*')"></td>
           <td><input class="button" type="button" value="/" onclick="insert('/')"></td>
         </tr>
         <tr>
           <td><input class="button" type="button" value="1" onclick="insert(1)"></td>
           <td><input class="button" type="button" value="2" onclick="insert(2)"></td>
           <td><input class="button" type="button" value="3" onclick="insert(3)"></td>
           <td><input class="button" type="button" value="+" onclick="insert('+')"></td>
         </tr>
         <tr>
           <td><input class="button" type="button" value="4" onclick="insert(4)"></td>
           <td><input class="button" type="button" value="5" onclick="insert(5)"></td>
           <td><input class="button" type="button" value="6" onclick="insert(6)"></td>
           <td><input class="button" type="button" value="-" onclick="insert('-')"></td>
         </tr>
         <tr>
           <td><input class="button" type="button" value="7" onclick="insert(7)"></td>
           <td><input class="button" type="button" value="8" onclick="insert(8)"></td>
           <td><input class="button" type="button" value="9" onclick="insert(9)"></td>
           <td rowspan=2><input class="button" style="height:106" type="button" value="=" onclick="equal()"></td>
         </tr>
         <tr>
           <td colspan=3><input class="button" style="width:160" type="button" value="0" onclick="insert(0)"></td>
        </tr>
    </table>
    </div>
</body>
</html>
