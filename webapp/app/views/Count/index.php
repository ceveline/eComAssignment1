<script>
    // Define a function to send the AJAX request
    function sendAjaxRequest() {
        $.ajax({
            url: "/Count/index",
            type: "GET",
            success: function(response) {
                console.log("Request sent successfully.");
            },
            error: function(xhr, status, error) {
                console.error("Error sending request: " + error);
            }
        });
    }

    // Call the function when the document is ready
    $(document).ready(function() {
        sendAjaxRequest(); // Call the function immediately when the document is ready
    });
</script>

<div id="pageLoadCount" style="position: fixed; bottom: 0; right: 0; padding: 10px; background-color: black; color:white;">
    <?php
    $counter = new \app\models\Counter();
    echo $counter->count+1 . " page visits";
    ?>
</div>