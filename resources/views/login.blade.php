<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<style>
:root{--bg:#eef2f7;--card:#ffffff;--text:#1f2937;--muted:#64748b;--border:#dbe2ea;--primary:#0f67ff;--accent:#00a65a;}
*{box-sizing:border-box;}
body{margin:0;min-height:100vh;font-family:'Inter',sans-serif;background:linear-gradient(135deg,#1f2937 0%,#4f46e5 100%);display:flex;justify-content:center;align-items:center;}
.login-shell{width:min(520px,100%);margin:24px;}
.login-card{background:rgba(255,255,255,0.98);border-radius:28px;box-shadow:0 35px 80px rgba(15,23,42,.18);overflow:hidden;}
.login-hero{padding:40px 40px 32px;border-bottom:1px solid rgba(15,23,42,.06);background:#ffffff;}
.login-hero h1{margin:0;font-size:32px;letter-spacing:-.02em;}
.login-hero p{margin:12px 0 0;color:var(--muted);line-height:1.7;}
.login-body{padding:32px 40px;}
.form-group{margin-bottom:20px;}
.form-group label{display:block;font-size:14px;color:var(--text);margin-bottom:10px;}
.form-group input{width:100%;padding:14px 16px;border:1px solid var(--border);border-radius:16px;font-size:15px;outline:none;}
.options{display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;font-size:14px;color:var(--muted);}
.options input{margin-right:8px;}
.submit-btn{width:100%;padding:16px;border:none;border-radius:16px;background:var(--primary);color:white;font-size:16px;font-weight:600;cursor:pointer;}
.social-row{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:22px;}
.social-btn{display:flex;align-items:center;justify-content:center;gap:10px;padding:14px;border:1px solid var(--border);border-radius:16px;background:white;color:var(--text);cursor:pointer;font-weight:600;}
.divider{display:flex;align-items:center;text-align:center;color:var(--muted);margin-bottom:22px;}
.divider::before,.divider::after{content:'';flex:1;height:1px;background:var(--border);}
.divider:not(:empty)::before{margin-right:.75em;}
.divider:not(:empty)::after{margin-left:.75em;}
.signup{font-size:14px;color:var(--muted);text-align:center;padding-bottom:24px;}
.sign-up-link{color:var(--primary);text-decoration:none;font-weight:600;}
</style>
</head>
<body>
<div class="login-shell">
  <div class="login-card">
    <div class="login-hero">
      <h1>Sign In</h1>
      <p>Welcome back! Sign in to access your dashboard.</p>
    </div>
    <div class="login-body">
      <form method="POST" action="/login">
        @csrf
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" placeholder="your@email.com" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="••••••••" required>
        </div>
        <div class="options">
          <label><input type="checkbox" name="remember"> Remember me</label>
          <a href="#" style="color:var(--primary);text-decoration:none;">Forgot password?</a>
        </div>
        <button type="submit" class="submit-btn">Sign In</button>
      </form>
      <div class="divider">Or continue with</div>
      <div class="social-row">
        <button class="social-btn"><i class="fa-brands fa-google"></i>Google</button>
        <button class="social-btn"><i class="fa-brands fa-github"></i>GitHub</button>
      </div>
      <div class="signup">Don't have an account? <a href="#" class="sign-up-link">Sign up</a></div>
    </div>
  </div>
</div>
</body>
</html>