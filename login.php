
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Responsive Bootstrap Logistic Html Template" />
    <meta name="keywords"
        content="Trans, Aero, Bootstrap, Html, Template, Logistic, Blog, Transport, Corporate, Cargo, Truck" />
    <meta name="author" content="Vadzim Liashkevich" />

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- jQuery (necessary for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- SITE TITLE -->
    <title>PAX FREIGHT | Login</title>

    <!-- =========================
      FAV AND TOUCH ICONS  
============================== -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- =========================
     STYLESHEETS   
============================== -->

    <!-- STYLES FILE -->
    <link href="css/master.css" rel="stylesheet" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            background-color: transparent;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

      
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-container {
            text-align: center;
        }

        /* .my-btn {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 16px;
            width: 100%;
        }

        .my-btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        } */

        .error {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;

        }
    </style>
</head>

<body>

    <?php include 'headConfig.php'; ?>

    <main>
        <div class="def-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="login-form">
                            <h2>Login</h2>
                            <form id="loginForm" onsubmit="login(event, this)">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Enter Username"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Enter Password"
                                        required />
                                </div>
                                <div class="form-group btn-container">
                        <div class="my-btn my-btn-primary">
                            <div class="my-btn-bg-top"></div>
                            <div class="my-btn-bg-bottom"></div>
                            <button class="my-btn-text">Login</button>
                        </div>
                    </div>
                                <div class="error" id="error-message"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        function login(event, form) {
            event.preventDefault(); // Prevent the default form submission

            const username = form.username.value;
            const password = form.password.value;

            if (username && password) {
                fetch('http://localhost:3000/auth/signin', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ username, password })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Handle successful login (e.g., redirect to home page)
                        window.location.href = 'index.php'; // Change this to your home page
                    } else {
                        // Display error message
                        document.getElementById('error-message').textContent = data.message || 'Login failed.';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('error-message').textContent = 'An error occurred. Please try again.';
                });
            }

            return false; // Prevent further action
        }
    </script>

</body>

</html>