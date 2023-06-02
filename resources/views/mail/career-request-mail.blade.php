<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100;200;300;400;500;600;700;800;900&family=Dosis:wght@200;300;400;500;600;700;800&family=Electrolize&family=Fira+Sans:wght@900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        h1{
            
            font-family: 'Fira Sans', sans-serif;
            
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row text-center">
            <div class="col-12 my-5">
                <div class="text-center my-5">
                    <i class="fa-brands fa-envira icona" style="color: #027032"></i><span><h1><span style="color: rgb(162, 158, 158)">Healthy</span><span style="color: #027032">Earth</span></h1></span>
                </div>
                <h3 class="mt-5">Ciao {{Auth::user()->name}},</h3>
                <h3>abbiamo ricevuto il tuo messaggio:</h3>

                <h4 class="my-5">Richiesta per il ruolo di {{$info['role']}},</h4>
                
                

            
                <i><h5 class="font-italic">Messaggio:</h5>
                <p>"{{$info['message']}}"</p>

                <p>Ricevuta da {{$info['email']}} </p></i>
                
                <h2 class="my-5">Sarai ricontattato appena possibile!</h2>
            </div>
        </div>
    </div>
    

</body>
</html>