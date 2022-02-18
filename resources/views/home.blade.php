<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1> Treni in partenza in data odierna </h1>
        <ul>
            @foreach ($trains as $train)
                <li> 
                    La compagnia con cui viaggerai: {{ $train->company }} <br>
                    Informazioni per la partenza: {{ $train->departure_station }} | {{ $train->departure_date }} | {{ $train->departure_at }} <br>
                    Informazioni per l'arrivo: {{ $train->arrival_station }} | {{ $train->arrival_date }} | {{ $train->arrival_at }} <br>
                    Il codice del treno e': {{ $train->train_code }} <br>
                    Il numero delle carrozze su questo treno e': {{ $train->carriages }} <br>


                    {{-- Se il treno e' in ritardo notificalo altrimenti annuncia l'evento prima di cambiare idea --}}
                    @if ($train->on_time === 1)
                        Il treno e' in orario <br>                       
                    @else
                        Il treno e' in ritardo <br>
                    @endif

                    {{-- Se il treno e' stato cancellato notificalo altrimenti non mostrare l'informazione --}}
                    @if ($train->canceled === 1)
                        Il treno e' stato cancellato <br>
                    @else
                        
                    @endif
                    
                </li>
            @endforeach
        </ul>
    </body>
</html>