<div id="sidebar" class="sidebar">

<div class="logo-area">
    <span class="logo-text">Kriptografi Erf</span>

    <button id="toggleSidebar" class="toggle-btn">
        <i class="fa-solid fa-bars"></i>
    </button>
</div>

<div class="menu">

<a class="{{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
<i class="fa-solid fa-chart-line icon"></i>
<span class="text">Dashboard</span>
</a>

<a class="{{ request()->routeIs('profil') ? 'active' : '' }}" href="{{ route('profil') }}">
<i class="fa-solid fa-user icon"></i>
<span class="text">Profile</span>
</a>

<a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">
<i class="fa-solid fa-users icon"></i>
<span class="text">Daftar Pengguna</span>
</a>

<a class="{{ request()->routeIs('caesar') ? 'active' : '' }}" href="{{ route('caesar') }}">
<i class="fa-solid fa-key icon"></i>
<span class="text">Caesar Cipher</span>
</a>

<a class="{{ request()->routeIs('hill') ? 'active' : '' }}" href="{{ route('hill') }}">
<i class="fa-solid fa-table-cells icon"></i>
<span class="text">Hill Cipher</span>
</a>

<a class="{{ request()->routeIs('vigenere') ? 'active' : '' }}" href="{{ route('vigenere') }}">
<i class="fa-solid fa-lock icon"></i>
<span class="text">Vigenère Cipher</span>
</a>

<a href="{{ route('logout') }}" class="menu-item"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fa-solid fa-right-from-bracket icon"></i>
    <span class="text">Logout</span>
</a>

<form id="logout-form" method="POST" action="/logout" style="display: none;">
    @csrf
</form>

</div>

</div>

<style>

.sidebar{
width:240px;
background:#111316;
color:white;
height:100vh;
padding:20px 15px;
transition:all 0.3s ease;
border-right:1px solid #262b33;
}

/* sidebar kecil */

.sidebar.collapsed{
width:70px;
}

/* logo area */

.logo-area{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;
}

.logo-text{
font-weight:600;
font-size:18px;
}

.toggle-btn{
background:#1f262e;
border:none;
color:#8fa0b8;
padding:6px 10px;
border-radius:8px;
cursor:pointer;
}

.toggle-btn:hover{
background:#2a333d;
}

/* menu */

.menu a{
display:flex;
align-items:center;
gap:12px;
padding:12px 14px;
border-radius:10px;
text-decoration:none;
color:#a8b3c7;
margin-bottom:8px;
transition:all 0.2s;
}

.menu a:hover{
background:#1f262e;
color:white;
}

.menu a.active{
background:#242a33;
color:white;
}

/* icon */

.icon{
font-size:18px;
min-width:20px;
text-align:center;
}

/* text */

.sidebar.collapsed .text{
display:none;
}

.sidebar.collapsed .logo-text{
display:none;
}

</style>

<script>

const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('toggleSidebar');

toggleBtn.addEventListener('click', function(){

sidebar.classList.toggle('collapsed');

});

</script>