<?php
    // ======================
    // Calculator Plugin - Base Template
    // 

    $template = "";

    $template .= "
        <div id='finance-calculator' class='calculator-container'>
            <div class='calculator-tabs'>
                <button id='loan-calculator' class='calculator-tabs-button active' >Loan Calculator</button>
                <button id='stamp-duty-calculator' class='calculator-tabs-button' >Stamp Duty Calculator</button>
            </div>
            <div class='calculator-content'>
                <div id='loan-calculator-tab' class='calculator-content-tab active'>
                    <h4>Calculate your loan repayments</h4>
                    <form action='e.preventDefault()'>
                        <div class='form-field'>
                            <label for='property-value'>Estimated Property Value</label>
                            <input type='text' id='' name='property-value' class='' pattern='^[0-9]*$'>
                        </div>

                        <div class='form-field'>
                            <label for='starting-deposit'>Starting Deposit</label>
                            <input type='text' id='' name='starting-deposit' class='' pattern='^[0-9]*$'>
                        </div>

                        <div class='form-field'>
                            <label for='loan-term'>Loan Term (years)</label>
                            <input type='text' id='' name='loan-term' class='' pattern='^[0-9]*$'>
                        </div>

                        <div class='form-field'>
                            <label for='interest-rate'>Interest Rate</label>
                            <input type='text' id='' name='interest-rate' class='' pattern='^[0-9]*$'>
                        </div>

                        <div class='form-field'>
                            <button type='submit' id='' name='' class=''>Calculate Repayments</button>
                        </div>
                    </form>
                    <h4>Your monthly repayments are: <span id='repayment-total'>$0</span></h4>
                </div>
                <div id='stamp-duty-calculator-tab' class='calculator-content-tab'>
                    <h4>Calculate your stamp duty costs</h4>
                </div>
            </div>
        </div>
    ";
    $financialCalculatorOutput = $template;