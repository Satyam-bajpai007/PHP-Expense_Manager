<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Manager</title>
</head>
<body>
    <div class="container">
        <h1>Expense Manager</h1>

        <!-- Navigation Pannel  -->
        <nav>
            <h5>Nav Pannel</h5>
            <div class="nav__box">
                <div class="nav__menu">
                    <button id="nav_salary">Salary</button>
                    <button id="nav_expenses">Expenses</button>
                </div>
            </div>
        </nav>

        <!-- Header Salary Pannel  -->
        <header>
            <h5>Salary Insertion</h5>
            <div class="header__box">
                <div class="header__menu">
                    <label for="">Enter Salary :
                        <input type="number" name="salary" id="salary_amount">
                    </label>
                    <button id="enter_salary">Submit</button>
                </div>
            </div>
        </header>

        <!-- Section Expenses Pannel  -->
        <section>
            <h5>Insert Expense</h5>
            <div class="section__box">
                <div class="section__menu">
                    <select name="expence_list" id="dropdown">
                        <option value="">-Select-</option>
                        <option value="0">Grocery</option>
                        <option value="1">Veggies</option>
                        <option value="2">Travelling</option>
                        <option value="3">Miscellaneous</option>
                    </select>
                    <input type="number" name="expense" id="expense_amount">
                    <button id="enter_expense">Submit</button>
                </div>
            </div>
        </section>

        <!-- Main Table Pannel  -->
        <main>
            <h5>Display Table</h5>
            <div class="main__box">
                <table>
                    <thead>
                        <tr>
                            <th>Expense Type</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody id="table_body">
                        <tr>
                            <td>Grocery</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Veggies</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Travelling</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Miscellaneous</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                    <tfoot id="table_foot">
                        <tr>
                            <th>Grand Total</th>
                            <td>0</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- Footer Savings Pannel  -->
        <footer>
            <h5>Display Savings</h5>
            <div class="footer__box">
                <div class="footer__table">
                    <table>
                            <thead>
                                <tr>
                                    <th>Salary</th>
                                    <th>Expenses</th>
                                    <th>Savings</th>
                                </tr>
                            </thead>
                    </table>
                </div>
                <div class="footer__menu">
                    <input type="text" name="final_salary" id="salaries" disabled><span>-</span>
                    <input type="text" name="final_expense" id="expenses" disabled><span>=</span>
                    <input type="text" name="savings" id="savings" disabled>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="./JS/script.js"></script>
</html>