<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>

<style>

body{
font-family: Arial, Helvetica, sans-serif;
background:#f2f3f5;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
width:420px;
background:white;
padding:40px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

h1{
text-align:center;
margin-bottom:5px;
}

.subtitle{
text-align:center;
color:#6b7280;
margin-bottom:30px;
}

label{
font-size:14px;
color:#374151;
}

.input{
width:100%;
padding:14px;
margin-top:6px;
margin-bottom:20px;
border-radius:12px;
border:1px solid #d1d5db;
font-size:14px;
}

.row{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:20px;
font-size:14px;
}

.button{
width:100%;
padding:14px;
border:none;
border-radius:14px;
background:linear-gradient(#3a3a3a,#1f1f1f);
color:white;
font-size:16px;
cursor:pointer;
margin-bottom:25px;
}

.button:hover{
opacity:0.9;
}

.divider{
display:flex;
align-items:center;
text-align:center;
margin-bottom:20px;
color:#6b7280;
}

.divider::before,
.divider::after{
content:"";
flex:1;
border-bottom:1px solid #e5e7eb;
}

.divider:not(:empty)::before{
margin-right:.75em;
}

.divider:not(:empty)::after{
margin-left:.75em;
}

.social{
display:flex;
gap:15px;
margin-bottom:20px;
}

.social button{
flex:1;
padding:12px;
border-radius:12px;
border:1px solid #d1d5db;
background:white;
cursor:pointer;
}

.signup{
text-align:center;
font-size:14px;
}

a{
text-decoration:none;
color:#2563eb;
}

</style>

</head>

<body>

<div class="container">

<h1>Sign In</h1>
<p class="subtitle">Welcome back! Please sign in to your account</p>

<form method="POST" action="/login">
@csrf

<label>Email</label>
<input class="input" type="email" name="email" placeholder="your@email.com">

<label>Password</label>
<input class="input" type="password" name="password" placeholder="••••••••">

<div class="row">

<label>
<input type="checkbox" name="remember">
 Remember me
</label>

<a href="#">Forgot password?</a>

</div>

<button class="button">Sign In</button>

</form>

<div class="divider">Or continue with</div>

<div class="social">
<button>Google</button>
<button>GitHub</button>
</div>

<div class="signup">
Don't have an account? <a href="#">Sign up</a>
</div>

</div>

</body>
</html>