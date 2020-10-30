@component('mail::message')
# Greetings,


    Thank you for joining  {{ session('wear')->eventname}} which will happen in 
    {{ session('wear')->date}} at  {{ session('wear')->time}}. The dresscode for the event is  {{ session('wear')->wear}}. Lastly,
    Kkndly bring the following: {{session('wear')->bring}}. Thank You and Godbless!!
    


See Yah! 


@endcomponent
