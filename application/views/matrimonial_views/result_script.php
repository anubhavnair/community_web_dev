<!-- Include jQuery UI JS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function () {
        // function for height filter 
        $("#height-slider").slider({
            range: true,
            min: 48, // Minimum height in inches (4 ft)
            max: 84, // Maximum height in inches (7 ft)
            values: [48, 84], // Default start and end values
            step: 1,
            slide: function (event, ui) {
                // Update hidden input fields with the selected values
                $("#from_height").val(ui.values[0]);
                $("#to_height").val(ui.values[1]);

                // Update displayed values
                $("#from_height_display").text(convertToFeetInches(ui.values[0]));
                $("#to_height_display").text(convertToFeetInches(ui.values[1]));
            }
        });

        function convertToFeetInches(value) {
            var feet = Math.floor(value / 12);
            var inches = value % 12;
            return feet + "-" + inches + " ft";
        }

        // Initialize displayed values
        $("#from_height_display").text(convertToFeetInches($("#from_height").val()));
        $("#to_height_display").text(convertToFeetInches($("#to_height").val()));

        $("#age-slider").slider({
            range: true,
            min: 18, // Minimum age
            max: 65, // Maximum age
            values: [18, 30], // Default start and end values
            step: 1,
            slide: function (event, ui) {
                // Update hidden input fields with the selected values
                $("#from_age").val(ui.values[0]);
                $("#to_age").val(ui.values[1]);

                // Update displayed values
                $("#from_age_display").text(ui.values[0] + " Year");
                $("#to_age_display").text(ui.values[1] + " Year");
            }
        });

        // Initialize displayed values
        $("#from_age_display").text($("#from_age").val() + " Year");
        $("#to_age_display").text($("#to_age").val() + " Year");


        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(button => {
            button.addEventListener('click', function () {
                const icon = this.querySelector('.rotate-icon');
                icon.classList.toggle('rotate');
            });
        });
        
        
    });
    function select_all_checkbox(containerClass) {
    document.querySelectorAll(`.${containerClass} input[type=checkbox]`).forEach(checkbox => {
        checkbox.checked = true;
    });
}

function clear_refine(containerClass) {
    document.querySelectorAll(`.${containerClass} input[type=checkbox]`).forEach(checkbox => {
        checkbox.checked = false;
    });
}


    document.getElementById('searchMotherTongue').addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const boxes = document.querySelectorAll('.mothertongue_list .box');
            boxes.forEach(box => {
                const label = box.querySelector('label').textContent.toLowerCase();
                if (label.includes(filter)) {
                    box.style.display = 'block';
                } else {
                    box.style.display = 'none';
                }
            });
        });
</script>