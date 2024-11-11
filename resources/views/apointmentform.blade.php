<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare Hospital</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <h2 class="text-center mb-4" style="color: #55112e;">Book an Appointment</h2>

        <form>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            
            <div class="form-group">
                <label for="date">Appointment Date</label>
                <input type="date" class="form-control" id="date" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3" placeholder="Additional notes or concerns"></textarea>
            </div>
            <div class="text-center">
    <a href="/" style="background-color: #55112e; color: #FFFFFF; border: 2px solid #55112e; padding: 10px 20px; text-decoration: none; display: inline-block; border-radius: 5px;">
        Book Appointment
    </a>
</div>
        </form>
    </div>
</body>
</html>
