<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
 body {
            font-family: Arial, sans-serif;
            background: #f975b0;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-container {
            width:  900px;
            max-width: 95%;
            height: 580px;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            overflow: hidden;
            background:linear-gradient(135deg, #c2d1ec, #e595be) ;
            position: relative;
        }

        .form-wrapper {
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
            padding: 40px 50px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* No background / no blur here anymore */
            color: white;
            position: relative;
            z-index: 2;
        }

        /* Optional: subtle dark overlay across whole image (very light) */
        .main-container::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(249, 240, 240, 0.35);   /* adjust 0.25–0.45 depending on image brightness */
            z-index: 1;
            pointer-events: none;
        }

        .logo img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255,255,255,0.4);
            margin: 0 auto 30px;
            display: block;
        }

        h2 {
            text-align: center;
            margin-bottom: 35px;
            font-weight: 700;
            color: white;
            text-shadow: 0 2px 8px rgba(0,0,0,0.6);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.47);
            border: 1px solid rgba(233, 20, 162, 0.46);
            color: #d9358f;
            border-radius: 10px;
            padding: 13px 16px;
            margin-bottom: 20px;
            font-size: 15.5px;
            backdrop-filter: blur(2px);
        }

        .form-control::placeholder {
            color:  rgba(236, 4, 124, 0.65);
        }

        .form-control:focus {
            background: rgba(255,255,255,0.28);
            border-color: #cc287d;
            box-shadow: 0 0 0 0.3rem rgba(255, 255, 255, 0.77);
            color: white;
        }

        .btn-signup {
            width: 100%;
            background: linear-gradient(135deg,  #c49ec8, #91a9e6);
            border: none;
            color: white;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 12px;
            transition: all 0.25s;
            box-shadow: 0 4px 15px rgba(120, 80, 220, 0.4);
        }

        .btn-signup:hover {
            background: linear-gradient(135deg, #8197cf, #c49ec8);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(120, 80, 220, 0.55);
        }

        .login-link {
            text-align: center;
            margin-top: 30px;
            font-size: 14.5px;
            color: rgba(255,255,255,0.9);
            text-shadow: 0 1px 4px rgba(0,0,0,0.5);
        }

        .login-link a {
            color: #df029d;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
            color: #dc6c9b;
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                height: auto;
                min-height: 90vh;
                border-radius: 0;
            }
            .form-wrapper {
                padding: 50px 25px 70px;
            }
        }
    </style>
</head>
<body>

<div class="main-container">
    <div class="form-wrapper">

        <h2>Create Account</h2>

        <form id="signupForm">
            <input class="form-control" name="username" placeholder="Enter Username" required>
            <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
            <input class="form-control" type="password" name="password" placeholder="Create Password" required>

            <button class="btn-signup" type="submit">Sign Up</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="index.php">Login</a>
        </div>

    </div>
</div>

<script>
document.getElementById("signupForm").addEventListener("submit", function(e){
    e.preventDefault();

    fetch("api/newuser.php", {
        method: "POST",
        body: new FormData(this)
    })
    .then(res => res.json())
    .then(data => {

        Swal.fire({
            title: data.status === "success" ? "Success" : "Error",
            text: data.message,
            icon: data.status === "success" ? "success" : "error",
            confirmButtonText: "OK"
        }).then(() => {

            if (data.status === "success") {
                // ✅ DIRECT DASHBOARD REDIRECT
                window.location.href = "dashboard.php";
            }

        });

        if (data.status === "success") this.reset();
    })
    .catch(() => {
        Swal.fire("Error", "Server not responding", "error");
    });
});
</script>

</body>
</html>
