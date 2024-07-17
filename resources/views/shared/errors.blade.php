 {{-- se ci sono errori allora lancia alert-danger --}}
 @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             {{-- ciclo per tutti gli errori trovo errore e mostro in pagina --}}
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
