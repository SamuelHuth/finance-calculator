// ================================================================
// SCRIPTS FOR FINANCE CALCULATOR
// ================================================================


// ================================================================
// Basic tab changing functionality
// 
    var tabButtons = document.querySelectorAll('.calculator-tabs-button');
    var tabContents = document.querySelectorAll('.calculator-content-tab');

    tabButtons.forEach( (btn) => {
        btn.addEventListener('click', changeTabs);
    });

    function changeTabs(){
        
        // Remove active class from each item
        tabButtons.forEach( (btn)=> {
            btn.classList.remove('active');
        });
        tabContents.forEach( (tab) => {
            tab.classList.remove('active');
        });

        // Add active class to new items
        this.classList.add('active');
        document.getElementById(this.id + '-tab').classList.add('active');
        
    }

// ================================================================
// Form Live Update Functionality
// 