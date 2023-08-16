@if(Auth::check())
<p>Olá, {{ Auth::user()->nome }}!</p>
@else
<p>Olá, visitante!</p>
@endif
