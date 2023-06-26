

<!DOCTYPE HTML>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Calculate how much you are going to get paid">
        <script src="rotating-images.js" async></script>
        <title>Payroll Calculator</title>

        <script>
            function calculatePay() {
                var hours = document.getElementById("hoursWorked").value;
                var payRate = document.getElementById("payRate").value;
                var grossPay = hours * payRate;
                
                document.getElementById("grossPay").textContent = "(JS) Gross Pay = $" + grossPay.toFixed(2);
            }
        </script>

    </head>

    <body id="index">
        <header>
            <h1>Payroll Calculator</h1>
        </header>

    <main>
        <form method="post" action="">

            <p>
                <label for="hoursWorked">Enter Hours worked(ex. 20):</label>
                <input value=""
                       type="text" 
                       name="hoursWorked" 
                       id="hoursWorked" 
                       onfocus="this.select()">
            </p>

            <p>
                <label for="payRate">Enter your Pay Rate (ex. 10.34):</label>
                <input value=""
                       type="text" name="payRate" id="payRate" onfocus="this.select()">
            </p>
            
            <p>
                <input type="button" name="showPay" id="showPay" onclick="calculatePay()" value="Calculate Pay">
            </p>

        </form>

        <p id="grossPay"></p>
  
    </main>
    
</body>
</html>