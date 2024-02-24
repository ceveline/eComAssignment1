<div class="container">
    <h1 class="">Contact us - messages sent</h1>
    <?php
    foreach ($data as $index => $msg) {
        echo "<div class='message-box border border-secondary rounded p-3 mb-3'>
                    <p><strong>Email:</strong> $msg->email</p>
                    <p><strong>Message:</strong> $msg->message</p>
                    <p><strong>IP:</strong> $msg->IP</p>
                </div>";
    }
    ?>
</div>