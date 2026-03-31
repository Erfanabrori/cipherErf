@extends('layout.dashboard')

@section('content')
@include('components.topbar')

<script src="https://cdn.tailwindcss.com"></script>

<style>

.card {
background: #111316;
border: 1px solid #262b33;
border-radius: 20px;
box-shadow: 0 20px 40px -15px rgba(0,0,0,0.8);
}

.input-field{
background:#1a1e24;
border:1.5px solid #2a313a;
color:#e5e9f0;
border-radius:14px;
}

.btn-process{
background:#242a33;
border:1px solid #37414b;
color:#cdd6e6;
border-radius:14px;
}

.result-area{
background:#151a20;
border:1px solid #2a313a;
border-radius:16px;
}

.tag{
background:#1f262e;
border:1px solid #313c48;
color:#8f9eb5;
font-size:0.7rem;
padding:4px 10px;
border-radius:30px;
}

</style>

<div class="flex justify-center">

<div class="card w-full max-w-4xl p-7 mx-auto">

<div class="flex items-center justify-between mb-7">

<div>
<h1 class="text-2xl text-white">cipher webKripto</h1>

<div class="flex gap-2 mt-2">
<span class="tag">caesar</span>
<span class="tag">shift 1-25</span>
</div>

</div>

</div>

<div class="space-y-4">

<textarea 
id="inputText"
rows="4"
class="input-field w-full px-4 py-3"
placeholder="tulis pesan..."></textarea>

<div class="grid grid-cols-2 gap-3">

<div>
<label class="text-xs text-gray-400">Shift</label>

<input 
type="number"
id="shift"
value="3"
min="1"
max="25"
class="input-field w-full px-4 py-3">
</div>

<div>
<label class="text-xs text-gray-400">Mode</label>

<select id="action" class="input-field w-full px-4 py-3">

<option value="encrypt">enkripsi</option>
<option value="decrypt">dekripsi</option>

</select>

</div>

</div>

<button 
id="processBtn"
class="btn-process w-full py-3 mt-2">

proses

</button>

<div id="resultCard" class="hidden result-area p-5">

<p id="resultText" class="text-white"></p>

</div>

</div>

</div>

</div>

<script>

const processBtn = document.getElementById('processBtn');
const inputText = document.getElementById('inputText');
const shift = document.getElementById('shift');
const action = document.getElementById('action');
const resultCard = document.getElementById('resultCard');
const resultText = document.getElementById('resultText');

function geserTeks(text, shiftValue, mode){

let result = '';
const geser = mode === 'encrypt' ? shiftValue : -shiftValue;

for(let i=0;i<text.length;i++){

let code = text.charCodeAt(i);

if(code >=65 && code<=90){
result += String.fromCharCode(((code-65+geser+26)%26)+65);
}

else if(code >=97 && code<=122){
result += String.fromCharCode(((code-97+geser+26)%26)+97);
}

else{
result += text[i];
}

}

return result;

}

processBtn.addEventListener('click',function(){

const text = inputText.value;
const shiftValue = parseInt(shift.value) || 3;
const mode = action.value;

const hasil = geserTeks(text,shiftValue,mode);

resultText.textContent = hasil;

resultCard.classList.remove('hidden');

});

</script>

@endsection