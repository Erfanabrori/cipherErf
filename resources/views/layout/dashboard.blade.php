<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
display:flex;
background:#f3f4f6;
}

/* SIDEBAR */

.sidebar{
width:230px;
background:white;
height:100vh;
padding:20px;
border-right:1px solid #e5e7eb;
}

.logo{
font-size:20px;
font-weight:bold;
margin-bottom:30px;
}

.menu a{
display:block;
padding:12px 15px;
margin-bottom:8px;
border-radius:10px;
text-decoration:none;
color:#333;
}

.menu a.active{
background:#111;
color:white;
}

.menu a:hover{
background:#eee;
}

/* CONTENT */

.main{
flex:1;
padding:30px;
}

/* HERO */

.hero{
background:#111;
color:white;
border-radius:15px;
padding:40px;
margin-bottom:30px;
display:flex;
justify-content:space-between;
align-items:center;
}

.hero button{
background:#333;
border:none;
padding:10px 20px;
border-radius:10px;
color:white;
cursor:pointer;
}

/* CARDS */

.cards{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
}

.card{
background:white;
padding:20px;
border-radius:15px;
border:1px solid #e5e7eb;
}

.card h3{
margin-bottom:10px;
font-size:16px;
}

.small{
color:gray;
font-size:13px;
margin-bottom:15px;
}

/* chart fake */

.chart{
display:flex;
gap:6px;
align-items:flex-end;
height:60px;
margin-bottom:10px;
}

.bar{
width:12px;
background:black;
border-radius:3px;
}

.bar.blue{
background:#3b82f6;
}

.footer{
font-size:12px;
color:gray;
}

</style>

</head>

<body>

@include('components.sidebar')

<div class="main">

@yield('content')

</div>

</body>
</html>