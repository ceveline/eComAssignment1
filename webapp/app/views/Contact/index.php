<div class="container">
    <h1 class="">Contact Us</h1>
    <form id="contactForm" class="mt-3" method="POST" action="/Contact/confirm_read">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="jondoe@gmail.com" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" placeholder="Hello!" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
    </form>
</div>