        var checkboxesTable1 = document.querySelectorAll('#content table:nth-of-type(1) input[type="checkbox"]');
        var selectAllCheckboxTable1 = document.querySelector('#content table:nth-of-type(1) th input[type="checkbox"]');
        selectAllCheckboxTable1.addEventListener('click', function () {
            
            checkboxesTable1.forEach(function (checkbox) {
                checkbox.checked = selectAllCheckboxTable1.checked;
            });
        });

        var checkboxesTable2 = document.querySelectorAll('#content table:nth-of-type(2) input[type="checkbox"]');
        var selectAllCheckboxTable2 = document.querySelector('#content table:nth-of-type(2) th input[type="checkbox"]');

        selectAllCheckboxTable2.addEventListener('click', function () {
            checkboxesTable2.forEach(function (checkbox) {
                checkbox.checked = selectAllCheckboxTable2.checked;
            });
        });